<?php

namespace App\Strategies;

use App\Repositories\TemperatureRepository;

class TemperatureStrategy implements DataStrategyInterface
{
    /** @var TemperatureRepository $temperatureRepository */
    private $temperatureRepository;

    /**
     * TemperatureStrategy constructor.
     * @param TemperatureRepository $temperatureRepository
     */
    public function __construct(TemperatureRepository $temperatureRepository)
    {
        $this->temperatureRepository = $temperatureRepository;
    }

    /**
     * @param $data
     * @param $plantId
     * @param $sensorId
     * @return bool
     */
    public function saveData($data, $plantId, $sensorId): bool
    {
        $temperature = $this->temperatureRepository->create();
        $temperature->temperature = $data;
        $temperature->plant_id = $plantId;
        $temperature->sensor_id = $sensorId;

        return $this->temperatureRepository->save($temperature);
    }
}
