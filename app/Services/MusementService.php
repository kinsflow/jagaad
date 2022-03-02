<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class MusementService
{
    private $client;

    /**
     * Initialize Connection with Client Server.
     *
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('app.musemant_api_url'),
            'headers' => [
                'Accept' => 'application/json',
            ],
            'query' => [

            ],
        ]);
    }

    /**
     * Get Cities From Client Cities Endpoint.
     *
     * @throws GuzzleException
     */
    public function getCities()
    {
        return $this->client->get('api/v3/cities')->getBody();
    }

    public function getCity($city_id)
    {
        return $this->client->get("api/v3/cities/$city_id")->getBody();
    }
}
