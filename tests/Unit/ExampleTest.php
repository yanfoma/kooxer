<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        //$this->assertTrue(true);
    }

    public function testView(){

        $response = $this->get('/search?s');

        $response->assertStatus(200);
    }
}
