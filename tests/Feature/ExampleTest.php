<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Verifica que la url funciona
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/jugar/1');

        $response->assertStatus(200);
    }

    public function test_tablero() {
        $response = $this->get('/jugar/1');

        $content = $response->getContent();
        $this->assertEquals(41, substr_count($content, 'bg-gray-200 text-center'));
    }
}
