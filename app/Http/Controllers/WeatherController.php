<?php

namespace App\Http\Controllers;

use App\Services\CallApiService;
use Illuminate\Http\Request;

class WeatherController extends Controller
{

    protected CallApiService $apiService;


    public function __construct(CallApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function index(Request $request)
    {
        $city = $request->query('city', '');
        $weatherData = [];
        $error = null;

        if (!empty($city)) {
            $weatherData = $this->apiService->getWeather($city);

            if (empty($weatherData)) {
                $error = 'City not found or API error.';
            }
        }

        return view('weather', [
            'city' => $city,
            'weatherData' => $weatherData,
            'error' => $error,
        ]);
    }
}
