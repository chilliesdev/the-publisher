<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubscribersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_get_all_subscribers()
    {
        $response = $this->get('/subscribers');

        $response->assertStatus(200);
    }

    public function test_create_new_subscriber(): string
    {
        $response = $this->post('/subscribers', [
            "url" => "http://mysubscriber.test/"
        ]);
        
        $data = json_decode($response->getContent(), true);

        $id = $data['id'];

        $response->assertStatus(201);

        return $id;
    }

    /**
     * @depends test_create_new_subscriber
     */

    public function test_update_subscriber(string $id): void
    {
        $response = $this->patch('//subscribers/'.$id, [
            "url" => "http://mysubscriber.test/"
        ]);

        // dd($response);

        $response->assertStatus(200);
    }

    /**
     * @depends test_create_new_subscriber
     */

    public function test_delete_subscriber(string $id): void
    {
        $response = $this->delete('//subscribers/'.$id);

        $response->assertStatus(200);
    }
}
