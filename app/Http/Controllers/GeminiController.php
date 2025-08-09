<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // <-- Gunakan HTTP Client bawaan Laravel
use Illuminate\Http\JsonResponse;
use Exception;

class GeminiController extends Controller
{
    // Kita buat method baru agar tidak bentrok dengan yang lama
    public function askDirect(Request $request): JsonResponse
    {
        $request->validate([
            'prompt' => 'required|string|max:5000',
        ]);

        $prompt = $request->input('prompt');
        $apiKey = env('GEMINI_API_KEY'); // <-- Ambil API Key dari .env

        // Pastikan API key ada
        if (!$apiKey) {
            return response()->json(['error' => 'API Key Gemini tidak ditemukan. Pastikan sudah di set di file .env'], 500);
        }

        // URL endpoint untuk Gemini Pro
        // BARU
        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent?key={$apiKey}";

        try {
            // Kirim request ke API Gemini menggunakan Laravel HTTP Client
            $response = Http::post($url, [
                'contents' => [
                    [
                        'parts' => [
                            [
                                'text' => $prompt
                            ]
                        ]
                    ]
                ]
            ]);

            // Cek jika request gagal
            if ($response->failed()) {
                return response()->json(['error' => 'Gagal menghubungi API Gemini.'], $response->status());
            }

            // Ambil teks jawaban dari struktur JSON balasan Gemini
            // Helper '->json()' dari Laravel sangat pintar untuk mengambil data nested
            $reply = $response->json('candidates.0.content.parts.0.text');

            if ($reply) {
                return response()->json(['reply' => $reply]);
            } else {
                return response()->json(['reply' => 'Maaf, saya tidak bisa memberikan jawaban saat ini. Coba lagi.']);
            }
        } catch (Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan pada server: ' . $e->getMessage()], 500);
        }
    }
}
