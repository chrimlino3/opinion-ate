<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class RestaurantTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetRestaurant()
    {
        $response = $this->Response::json('GET', '/api/v1/restaurants'); //json method returns a response from the API

        $response->assertStatus(200);
    }

    public function testPostRestaurant()
    {
        $response = $this->Response::withHeaders([
            'Current-Type '=> 'application/vnd.api+json'
        ])->json('POST', '/restaurant', ['name' => 'Food Place']);

        $response 
            ->assertStatus(200) // The assertStatus convert the response into an array.
            ->assertJson([
                'created'=> true,
            ]);
    }

}
