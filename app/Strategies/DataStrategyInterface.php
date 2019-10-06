<?php

namespace App\Strategies;

use Illuminate\Database\Eloquent\Collection;

interface DataStrategyInterface
{
    /**
     * @param $data
     * @param $plantId
     * @param $sensorId
     * @return bool
     */
    public function saveData($data, $plantId, $sensorId) : bool;

    /**
     * @param $id
     */
    public function getData($id);
}
