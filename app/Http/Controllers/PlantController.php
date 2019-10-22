<?php

namespace App\Http\Controllers;

use App\Plant;

class PlantController
{
    /**
     * @param int $plantId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPlant($plantId)
    {
        return response()->json(
            Plant::findOrFail($plantId), 200
        );
    }
}
