<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorController;

Route::middleware('api')->group(function () {
    // Sensor endpoints
    Route::prefix('sensor')->group(function () {
        // POST: Menerima data dari ESP (tidak perlu auth)
        Route::post('/data', [SensorController::class, 'storeSensorData']);

        // GET: Ambil data terbaru
        Route::get('/latest', [SensorController::class, 'getLatestData']);

        // GET: Ambil history data
        Route::get('/history', [SensorController::class, 'getSensorHistory']);
    });
});
