<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AiController extends Controller
{
    public function chat(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:500',
            'lang'    => 'nullable|string|in:id,en'
        ]);

        $userMessage = $request->input('message');
        $apiKey = env('GEMINI_API_KEY');
        $langCode = $request->input('lang', 'id');
        $langName = $langCode === 'en' ? 'ENGLISH' : 'BAHASA INDONESIA';

        if (!$apiKey || $apiKey === 'AIzaSy...') {
            return response()->json([
                'reply' => $langCode === 'en' 
                    ? 'Sorry, the Gemini API key has not been configured on the server.'
                    : 'Maaf, kunci API Gemini belum dikonfigurasi di server.'
            ], 500);
        }

        $systemPrompt = "Kamu adalah Arctic Guide, asisten AI ramah dan cerdas dari website 'Arctic Vision'. 
Website ini adalah platform pemantauan ekologi yang memiliki sensor suhu IoT esp8266 secara realtime dan direktori Ensiklopedia tentang fauna Arktik (Beruang Kutub, Rusa Kutub, Anjing Laut) serta sejarah eksplorasinya.
Tugasmu:
1. PENTING: Pengguna saat ini menavigasi website dalam {$langName}. Jawablah dalam bahasa {$langName} murni yang seru, edukatif, dan menarik.
2. Fokus pada tema Arktik, perubahan iklim, hewan kutub, atau fitur website ini. Jika ditanya hal di luar topik, belokkan kembali ke tema Arktik secara sopan.
3. JANGAN gunakan format Markdown kompleks yang berlebihan, cukup gunakan teks biasa saja agar mudah dibaca di widget chat kecil, maksimum gunakan bintang untuk tebal (*tebal*).";

        // Gemini REST API (v1beta) Generate Content Payload
        $payload = [
            'system_instruction' => [
                'parts' => [
                    ['text' => $systemPrompt]
                ]
            ],
            'contents' => [
                [
                    'role' => 'user',
                    'parts' => [
                        ['text' => $userMessage]
                    ]
                ]
            ],
            'generationConfig' => [
                'temperature' => 0.7,
                'maxOutputTokens' => 1500,
            ]
        ];

        try {
            // Setup HTTP Request (Matikan verifikasi SSL HANYA di environment local/Laragon demi keamanan Production)
            $http = Http::timeout(15);
            if (app()->isLocal()) {
                $http = $http->withoutVerifying();
            }
            $response = $http->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key={$apiKey}", $payload);

            if ($response->successful()) {
                $data = $response->json();
                $candidate = $data['candidates'][0] ?? null;
                $reply = $candidate['content']['parts'][0]['text'] ?? "Maaf, panduannya sedang tidak bisa memahami permintaanmu.";
                
                // Cek apakah pesan kepanjangan secara sistem
                if (isset($candidate['finishReason']) && $candidate['finishReason'] === 'MAX_TOKENS') {
                    $reply .= "\n\n*[ ⚠️ Teks terputus: Anda telah mencapai batas maksimal kata per sekali kirim. Cobalah untuk bertanya lebih spesifik. ]*";
                }

                // Hapus markdown heding dan bold berlebih
                $reply = str_replace(['**', '##', '#'], '', $reply);

                return response()->json([
                    'reply' => $reply
                ]);
            }

            $status = $response->status();
            // Kalau gagal karena limit Quota API (Terlalu banyak request atau habis)
            if ($status === 429) {
                return response()->json([
                    'reply' => 'Waduh! Kuota kecerdasan AI harian kami hari ini telah habis dipakai oleh banyak orang. Tolong kunjungi kembali besok ya!'
                ], 429);
            }

            // Kalau gagal karena error mesin dari Google selain Limit
            $errorInfo = $response->json();
            return response()->json([
                'reply' => 'Google API Error: ' . ($errorInfo['error']['message'] ?? 'Tidak diketahui')
            ], $status);

        } catch (\Exception $e) {
            // Kalau gagal karena koneksi (misal cURL error 60)
            return response()->json([
                'reply' => 'Koneksi dari komputer ke Google gagal: ' . $e->getMessage()
            ], 500);
        }
    }
}
