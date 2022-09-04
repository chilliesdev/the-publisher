<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PublisherTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_subscribe()
    {
        $response = $this->post('/subscribe/new-topic', [
            "url" => "http://mysubscriber.test/"
        ]);

        $response->assertStatus(200);
    }
}
