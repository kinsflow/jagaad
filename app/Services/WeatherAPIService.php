<?php

namespace App\Services;

use GuzzleHttp\Client;

class WeatherAPIService
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('app.weather_api_url'),
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);
    }

    public function getWeather($longitude, $latitude, $days)
    {
        return $this->client->get('/v1/forecast.json', [
            'query' => [
                'q' => "$latitude,$longitude",
                'key' => config('app.weather_api_key'),
                'days' => $days
            ]
        ])->getBody();
    }
}
