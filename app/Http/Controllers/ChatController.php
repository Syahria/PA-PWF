<?php

namespace App\Http\Controllers;

use App\Services\GeminiService;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    protected $geminiService;

    public function __construct(GeminiService $geminiService)
    {
        $this->geminiService = $geminiService;
    }

    public function sendMessage(Request $request)
{
    try {
        $validated = $request->validate([
            'message' => 'required|string',
        ]);
        $response = $this->geminiService->sendMessage($validated['message']);
        return response()->json([
            'reply' => $response,
        ]);
    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json([
            'error' => 'Validation failed',
            'messages' => $e->errors(),
        ], 422);
    } catch (\Exception $e) {
        return response()->json([
            'reply' => $e->getMessage(),
        ], 422);  // Menambahkan status 422 jika terjadi error
    }
}
}