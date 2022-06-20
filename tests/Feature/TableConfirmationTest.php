<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TableConfirmationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_counting_white_squares()
    {
        $html = file_get_contents('https://cuatroenlinea.ddev.site/jugar/1');

        $this->assertTrue(substr_count($html,'bg-gray-200') == 41);
    }
}
