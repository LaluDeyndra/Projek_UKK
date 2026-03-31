<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\SensorData;
use Illuminate\Support\Facades\Cache;

class SensorController extends Controller
{
    /**
     * Endpoint untuk menerima data dari ESP
     * POST /api/sensor/data
     * Header: X-API-Key: your-api-key
     */
    public function storeSensorData(Request $request)
    {
        // ===== VALIDASI API KEY =====
        $apiKey = trim($request->header('X-API-Key'));
        $expectedApiKey = trim(env('SENSOR_API_KEY', 'change-me-in-env'));

        if (!$apiKey || $apiKey !== $expectedApiKey) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized - Invalid or missing API Key',
            ], 401);
        }

        $validated = $request->validate([
            'temperature' => 'required|numeric',
            'humidity' => 'required|numeric',
        ]);

        $now = Carbon::now();
        $ip = $request->ip();

        $cacheData = [
            'temperature' => $validated['temperature'],
            'humidity' => $validated['humidity'],
            'timestamp' => $now->toIso8601String(),
            'ip' => $ip,
        ];

        // 1. LAPISAN RAM: Selalu simpan ke Cache untuk status Real-Time instan (Tahan 60 Menit)
        Cache::put('sensor_latest', $cacheData, $now->addMinutes(60));

        // 2. LAPISAN STORAGE: Cek Interval 30 Menit untuk Database Historis
        // Menggunakan sistem Cache Lock / Cooldown agar bebas dari bug Timezone antara PHP dan MySQL
        if (Cache::has('sensor_db_cooldown')) {
            return response()->json([
                'status' => 'success-cache',
                'message' => 'Data Real-Time diperbarui di URL /api/sensor/latest. Database diabaikan (Dalam masa tunggu 30 mnt)',
                'data' => $cacheData
            ], 200); 
        }

        // Kunci penyimpanan Database selama 30 menit ke depan
        Cache::put('sensor_db_cooldown', true, $now->copy()->addMinutes(30));

        // Simpan permanen ke Database MySQL
        SensorData::create([
            'temperature' => $validated['temperature'],
            'humidity' => $validated['humidity'],
            'ip_address' => $ip,
        ]);

        return response()->json([
            'status' => 'success-db',
            'message' => 'Data sensor 30-menitan berhasil masuk ke arsip Database permanently.',
            'data' => $cacheData,
        ], 201);
    }

    /**
     * Endpoint untuk mengambil data sensor terbaru
     * GET /api/sensor/latest
     */
    public function getLatestData()
    {
        // Prioritaskan dari Cache (Lebih cepat dan Real-Time)
        $cachedData = Cache::get('sensor_latest');
        
        if ($cachedData) {
            return response()->json([
                'status' => 'success',
                'source' => 'cache',
                'data' => $cachedData,
            ]);
        }

        // Fallback jika RAM Cache kosong (Misal server direstart / cache expired)
        $latestData = SensorData::latest('id')->first();

        if (!$latestData) {
            return response()->json([
                'status' => 'error',
                'message' => 'Belum ada data sensor',
                'data' => null,
            ], 404);
        }

        $responseData = [
            'temperature' => $latestData->temperature,
            'humidity' => $latestData->humidity,
            'timestamp' => $latestData->created_at->toIso8601String(),
            'ip' => $latestData->ip_address,
        ];

        return response()->json([
            'status' => 'success',
            'source' => 'database',
            'data' => $responseData,
        ]);
    }

    /**
     * Endpoint untuk mengambil history data sensor
     * GET /api/sensor/history?limit=24
     */
    public function getSensorHistory(Request $request)
    {
        $limit = $request->query('limit', 100);
        $historyData = SensorData::latest('id')->take($limit)->get();

        if ($historyData->isEmpty()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Belum ada data history',
                'data' => [],
            ], 404);
        }

        // Format datanya dengan urutan oldest-first agar persis dengan file JSON aslinya (agar grafik tidak terbalik)
        $formattedData = $historyData->reverse()->values()->map(function ($item) {
            return [
                'temperature' => $item->temperature,
                'humidity' => $item->humidity,
                'timestamp' => $item->created_at->toIso8601String(),
                'ip' => $item->ip_address,
            ];
        });

        return response()->json([
            'status' => 'success',
            'data' => $formattedData,
        ]);
    }
}
