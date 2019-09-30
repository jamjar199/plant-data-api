<?php

namespace App\Services;

use App\Strategies\TemperatureStrategy;
use Illuminate\Http\Request;

class DataRecorderService
{
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

    private function getSensorStrategy($sensorType)
    {
        switch ($sensorType) {
            case 'temperature':
                return new TemperatureStrategy();
                break;
            default:
                return false;
        }
    }
}
