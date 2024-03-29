<?php

namespace App\Services;

use App\Repositories\TemperatureRepository;
use App\Strategies\TemperatureStrategy;
use Illuminate\Http\Request;

class DataRecorderService
{
    /**
     * @param Request $request
     */
    public function save(Request $request)
    {
        $sensorsData = $request->get('data');
        $plantId = $request->get('plant');
        $sensorId = $request->get('sensor');

        foreach ($sensorsData as $key => $sensorData) {
            $strategy = $this->getSensorStrategy($key);
            if ($strategy !== false) {
                $strategy->saveData($sensorData, $plantId, $sensorId);
            }
        }
    }

    /**
     * @param $sensorType
     * @return TemperatureStrategy|bool
     */
    private function getSensorStrategy($sensorType)
    {
        switch ($sensorType) {
            case 'temperature':
                return new TemperatureStrategy(new TemperatureRepository);
            default:
                return false;
        }
    }
}
