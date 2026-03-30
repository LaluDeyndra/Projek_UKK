<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\SensorData;

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
        $apiKey = $request->header('X-API-Key');
        $expectedApiKey = env('SENSOR_API_KEY', 'change-me-in-env');

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

        // ===== CEK INTERVAL 30 MENIT CEGAT DARI DATABASE =====
        $latestRecord = SensorData::latest('id')->first();
        if ($latestRecord) {
            $diffMinutes = $latestRecord->created_at->diffInMinutes(Carbon::now());
            
            // Jika jarak dengan data terakhir kurang dari 30 menit, abaikan simpan
            if ($diffMinutes < 30) {
                return response()->json([
                    'status' => 'ignored',
                    'message' => 'Data disaring: Harus berjarak minimal 30 menit dari data sebelumnya (Baru ' . $diffMinutes . ' menit berlalu)',
                    'data' => [
                        'temperature' => $validated['temperature'],
                        'humidity' => $validated['humidity'],
                        'timestamp' => Carbon::now()->toIso8601String(),
                        'ip' => $request->ip()
                    ]
                ], 200); // Response 200 agar ESP tidak mengira error
            }
        }

        // Simpan data ke Database Asli (MySQL)
        $sensorData = SensorData::create([
            'temperature' => $validated['temperature'],
            'humidity' => $validated['humidity'],
            'ip_address' => $request->ip(),
        ]);

        $responseData = [
            'temperature' => $sensorData->temperature,
            'humidity' => $sensorData->humidity,
            'timestamp' => $sensorData->created_at->toIso8601String(),
            'ip' => $sensorData->ip_address,
        ];

        return response()->json([
            'status' => 'success',
            'message' => 'Data sensor berhasil disimpan ke Database Asli',
            'data' => $responseData,
        ], 201);
    }

    /**
     * Endpoint untuk mengambil data sensor terbaru
     * GET /api/sensor/latest
     */
    public function getLatestData()
    {
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
