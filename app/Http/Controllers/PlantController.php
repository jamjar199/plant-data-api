<?php

namespace App\Http\Controllers;

use App\Plant;

class PlantController
{
    /**
     * @param Plant $plant
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPlant($plantId)
    {
        $plant = Plant::findOrFail($plantId);

        return response()->json($plant, 200);
    }
}
