<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\JsonResponse;
use Tests\TestCase;

class CityTest extends TestCase
{
    public function test_fetch_all_city()
    {
        $cities = $this->get('/api/cities');

        $cities->assertStatus(200);
    }

    public function test_fetch_weather_condition_of_a_city()
    {
        $city = $this->get('/api/cities/57');

        $city->assertStatus(200);
    }
}
