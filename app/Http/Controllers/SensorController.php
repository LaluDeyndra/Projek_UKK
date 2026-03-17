<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

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

        // Simpan data ke file JSON (bisa diganti dengan database)
        $data = [
            'temperature' => $validated['temperature'],
            'humidity' => $validated['humidity'],
            'timestamp' => Carbon::now()->toIso8601String(),
            'ip' => $request->ip(),
        ];

        // Simpan data terbaru
        Storage::disk('local')->put('sensor/latest.json', json_encode($data, JSON_PRETTY_PRINT));

        // Append ke history
        $history = json_decode(Storage::disk('local')->get('sensor/history.json') ?? '[]', true);
        $history[] = $data;

        // Simpan hanya 100 data terakhir
        if (count($history) > 100) {
            $history = array_slice($history, -100);
        }

        Storage::disk('local')->put('sensor/history.json', json_encode($history, JSON_PRETTY_PRINT));

        return response()->json([
            'status' => 'success',
            'message' => 'Data sensor berhasil disimpan',
            'data' => $data,
        ], 201);
    }

    /**
     * Endpoint untuk mengambil data sensor terbaru
     * GET /api/sensor/latest
     */
    public function getLatestData()
    {
        $latestData = Storage::disk('local')->get('sensor/latest.json');

        if (!$latestData) {
            return response()->json([
                'status' => 'error',
                'message' => 'Belum ada data sensor',
                'data' => null,
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => json_decode($latestData, true),
        ]);
    }

    /**
     * Endpoint untuk mengambil history data sensor
     * GET /api/sensor/history?limit=24
     */
    public function getSensorHistory(Request $request)
    {
        $limit = $request->query('limit', 24);
        $historyData = Storage::disk('local')->get('sensor/history.json');

        if (!$historyData) {
            return response()->json([
                'status' => 'error',
                'message' => 'Belum ada data history',
                'data' => [],
            ], 404);
        }

        $history = json_decode($historyData, true);

        // Ambil data terakhir sesuai limit
        if (count($history) > $limit) {
            $history = array_slice($history, -$limit);
        }

        return response()->json([
            'status' => 'success',
            'data' => $history,
        ]);
    }
}
