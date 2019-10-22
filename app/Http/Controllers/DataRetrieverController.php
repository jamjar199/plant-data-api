<?php

namespace App\Http\Controllers;

use App\Strategies\TemperatureStrategy;
use Illuminate\Http\JsonResponse;

class DataRetrieverController extends Controller
{
    /**
     * Gets the temperature data for a plant
     *
     * @param $id
     * @param $temperatureStrategy
     * @return JsonResponse
     */
    public function getTemperature($id, TemperatureStrategy $temperatureStrategy)
    {
        return response()->json(
            $temperatureStrategy->getData($id),
            200
        );
    }
}
