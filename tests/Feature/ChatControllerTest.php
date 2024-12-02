<?php

namespace Tests\Feature;

use App\Services\GeminiService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Mockery;

class ChatControllerTest extends TestCase
{
    /**
     * Test untuk mengirim pesan yang berhasil
     */
    public function test_send_message_success()
    {
        // Membuat mock dari GeminiService
        $geminiService = Mockery::mock(GeminiService::class);
        $this->app->instance(GeminiService::class, $geminiService);

        // Menyusun pesan dan balasan yang diinginkan
        $message = "Hello Gemini";
        $reply = "Hello User";

        // Mengatur respon yang diharapkan dari method sendMessage pada GeminiService
        $geminiService->shouldReceive('sendMessage')
            ->with($message)
            ->andReturn($reply);

        // Menyimulasikan permintaan HTTP POST ke endpoint /chat/send
        $response = $this->postJson('/chat/send', ['message' => $message]);

        // Memastikan status code adalah 200 (OK)
        $response->assertStatus(200);

        // Memastikan format respon JSON yang benar
        $response->assertJson([
            'reply' => $reply,
        ]);
    }

    /**
     * Test untuk validasi pesan kosong
     */
    public function test_send_message_validation_error()
    {
        // Mengirimkan request POST tanpa field message
        $response = $this->postJson('/chat/send', []);

        // Memastikan status code adalah 422 (Unprocessable Entity)
        $response->assertStatus(422);

        // Memastikan pesan validasi untuk field 'message'
        $response->assertJsonFragment([
            'messages' => [
                'message' => ['The message field is required.']
            ]
        ]);
    }

    /**
 * Test untuk validasi pesan yang tidak sesuai format
 */
public function test_send_message_invalid_format()
{
    // Mengirimkan request dengan message yang tidak valid (seharusnya berupa string)
    $response = $this->postJson('/chat/send', ['message' => 12345]);

    // Memastikan status code adalah 422 (Unprocessable Entity)
    $response->assertStatus(422);

    // Memastikan pesan validasi untuk field 'message'
    $response->assertJsonFragment([
        'messages' => [
            'message' => ['The message field must be a string.']
        ]
    ]);
}

}
