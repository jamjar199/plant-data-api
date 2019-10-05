<?php

namespace App\Repositories;

use App\Temperature;

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
}
