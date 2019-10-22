<?php

namespace App\Http\Controllers;

use App\Repositories\TemperatureRepository;
use App\Strategies\TemperatureStrategy;
use Illuminate\Http\JsonResponse;

class DataRetrieverController extends Controller
{
    /**
     * Gets the temperature data for a plant
     *
     * @param $id
     * @return JsonResponse
     */
    public function getTemperature($id)
    {
        $temperatureStrategy = new TemperatureStrategy(
            new TemperatureRepository()
        );

        return response()->json(
            $temperatureStrategy->getData($id),
            200
        );
    }
}
