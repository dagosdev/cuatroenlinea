<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class circleConfirmationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_blue_circle()
    {
        $response = $this->get('/jugar/1');

        $response->assertStatus(200);
    }

    public function test_red_circle()
    {
        $response = $this->get('/jugar/12');

        $response->assertStatus(200);
    }
}
