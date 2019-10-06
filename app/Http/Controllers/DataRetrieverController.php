<?php

namespace App\Http\Controllers;

use App\Repositories\TemperatureRepository;
use App\Strategies\TemperatureStrategy;
use Illuminate\Http\JsonResponse;
use Laravel\Lumen\Http\Request;

class DataRetrieverController extends Controller
{
    /**
     * Gets the temperature data for a plant
     *
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function getTemperature(Request $request, $id)
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
