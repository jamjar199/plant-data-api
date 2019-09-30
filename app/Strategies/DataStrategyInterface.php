<?php

namespace App\Strategies;

interface DataStrategyInterface
{
    /**
     * @param $data
     * @param $plantId
     * @param $sensorId
     * @return bool
     */
    public function saveData($data, $plantId, $sensorId) : bool;
}
