<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DiarioModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/diario');

        $response->assertStatus(200);
    }
    /*
     * A basic feature test example.
     *
     * @return void
     */
    public function testFind()
    {
        $response = $this->get('/diario/find');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testListar()
    {
        $response = $this->get('/diario/list');
        $response->assertStatus(200);
    }
}
