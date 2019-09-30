<?php

namespace App\Strategies;

use App\Temperature;

class TemperatureStrategy implements DataStrategyInterface
{
    /**
     * @param $data
     * @param $plantId
     * @param $sensorId
     * @return bool
     */
    public function saveData($data, $plantId, $sensorId): bool
    {
        $temperature = new Temperature();
        $temperature->temperature = $data;
        $temperature->plant_id = $plantId;
        $temperature->sensor_id = $sensorId;

        return $temperature->save();
    }
}
