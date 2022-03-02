<?php

namespace App\Http\Controllers;


use App\Services\MusementService;
use App\Services\WeatherAPIService;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CityController extends Controller
{

    /**
     * This method, fetches all cities
     *
     * @return JsonResponse
     * @throws GuzzleException
     */
    public function index(MusementService $musementService): JsonResponse
    {
        // fetch all cities
        $cities  = json_decode($musementService->getCities()->getContents());

        // api response
        return response()->json(['cities' => $cities]);
    }

    /**
     * Show a single City and then fetch the city weatcher information
     * for the current day and the day afer and then print it to stdout
     * and also give ample waether infirmation as the api response.
     *
     * @param Request $request
     * @param MusementService $musementService
     * @param WeatherAPIService $weatherAPIService
     * @return JsonResponse
     */
    public function show(Request $request, MusementService $musementService, WeatherAPIService $weatherAPIService)
    {
        $city = json_decode($musementService->getCity($request->city_id)->getContents());

        // get weather information
        $weatherInformation = json_decode($weatherAPIService->getWeather($city->longitude, $city->latitude, 2)->getContents());

        $forecastDay = $weatherInformation->forecast->forecastday;

        // Print to stdout
        Log::channel('stdout')->info("Processed city {$city->name} | {$forecastDay[0]->day->condition->text} - {$forecastDay[1]->day->condition->text}");

        // provide api response
        return response()->json(['weather' => $weatherInformation]);
    }
}
