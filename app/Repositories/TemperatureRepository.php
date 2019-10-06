<?php

namespace App\Repositories;

use App\Temperature;
use Illuminate\Database\Eloquent\Collection;

class TemperatureRepository
{
    /**
     * @return Temperature
     */
    public function create()
    {
        return new Temperature();
    }

    /**
     * @param Temperature $temperature
     * @return bool
     */
    public function save(Temperature $temperature)
    {
        return $temperature->save();
    }

    /**
     * @param $id
     * @return Collection
     */
    public function findByPlantId($id)
    {
        return Temperature::where('plant_id', $id)->get();
    }
}
