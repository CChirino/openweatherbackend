<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetCitiesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_the_endpoint_weather_returns_a_successful_response(): void
    {


        $response =  $this->get('/api/v1/weather');

        $response->assertStatus(200);
        $response->assertJsonStructure(
                    [

                        '*' => [
                            "id",
                            "city",
                            "latitude",
                            "longitude",
                            "humidity",
                            "create_at",
                            "update_at",
 
                            ],
                        ],
                
                
            );


    }
}
