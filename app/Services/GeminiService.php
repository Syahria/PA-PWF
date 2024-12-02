<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GeminiService
{
    protected $apiUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->apiUrl = config('services.gemini.url');
        $this->apiKey = config('services.gemini.key');
    }

    public function sendMessage($message)
    {
        try {
            // Kirim request POST menggunakan Laravel HTTP client
            $response = Http::withHeaders([
                'Content-Type' => 'application/json', // Header untuk JSON
            ])->post("{$this->apiUrl}?key={$this->apiKey}", [
                'contents' => [
                    [
                        'parts' => [
                            [
                                'text' => $message, // Teks permintaan
                            ]
                        ]
                    ]
                ]
            ]);

            // Cek jika respons sukses
            if ($response->successful()) {
                // Ambil data dari respons JSON
                $data = $response->json();
                $answer = $data['candidates'][0]['content']['parts'][0]['text'] ?? null;

                if ($answer) {
                    return $answer; // Kembalikan jawaban
                } else {
                    return 'Tidak ada jawaban.';
                }
            } else {
                return 'Gagal Mengirim Pesan: ' . $response->body();
            }
        } catch (\Exception $e) {
            // Tangani error koneksi atau lainnya
            return 'Error: ' . $e->getMessage();
        }
    }
}
