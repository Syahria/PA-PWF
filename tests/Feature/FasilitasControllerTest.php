<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FasilitasControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test untuk memastikan controller mengembalikan view yang benar.
     */
    public function test_index_returns_fasilitas_view()
    {
        // Mengirimkan request GET ke route yang sesuai dengan FasilitasController@index
        $response = $this->get('/fasilitas');

        // Memastikan status code adalah 200 (OK)
        $response->assertStatus(200);

        // Memastikan view yang dikembalikan adalah 'fasilitas'
        $response->assertViewIs('fasilitas');
    }
}
