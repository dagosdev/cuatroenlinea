<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class functionalityTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_height()
    {
        $pagina = file_get_contents('http://cuatroenlinea.ddev.site/jugar/111111');

        $this->assertTrue(substr_count($pagina, '<div class="bg-gray-200 text-center mx-1 mt-1 w-24 h-24"></div>') == 36);
    }

    public function test_full()
    {
        $pagina = file_get_contents('http://cuatroenlinea.ddev.site/jugar/123456712345671234567123456712345671234567');

        $this->assertTrue(substr_count($pagina, '<div class="bg-gray-200 text-center mx-1 mt-1 w-24 h-24"></div>') == 0);
    }

    public function test_startup()
    {
        $pagina = file_get_contents('http://cuatroenlinea.ddev.site/jugar/');

        $this->assertTrue(substr_count($pagina, '<div class="bg-gray-200 text-center mx-1 mt-1 w-24 h-24"></div>') > 0);
    }
}
