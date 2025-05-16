<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CallApiService
{
    /**
     * 
     *
     *@param string $city
     *@return array
     */
    public function getWeather(string $city): array
    {
        // Make API request


        $apiKey = config('services.openweather.key');
        $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q={$city}&units=metric&appid={$apiKey}";


        $response = Http::get($apiUrl);


        if ($response->successful()) {
            $weatherData = $response->json();

            return $weatherData;
        }

        return [];
    }
}
