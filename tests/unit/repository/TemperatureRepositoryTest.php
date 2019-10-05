<?php

use App\Repositories\TemperatureRepository;
use App\Temperature;

class TemperatureRepositoryTest extends TestCase
{
    /**
     * Tests a temperature model is created
     */
    public function testCreateTemperatureModel()
    {
        $temperatureRepository = new TemperatureRepository();
        $temperatureModel = $temperatureRepository->create();

        $this->assertEquals(new Temperature(), $temperatureModel);
    }

    /**
     * Tests the temperature saves
     */
    public function testTemperatureSaves()
    {
        $mockModel = Mockery::mock(new Temperature());
        $mockModel->shouldReceive('save')->andReturn(true);

        $temperatureRepository = new TemperatureRepository();
        $saved = $temperatureRepository->save($mockModel);

        $this->assertTrue($saved);
    }

    /**
     * Tests the temperature does not save
     */
    public function testTemperatureDoesNotSave()
    {
        $mockModel = Mockery::mock(new Temperature());
        $mockModel->shouldReceive('save')->andReturn(false);

        $temperatureRepository = new TemperatureRepository();
        $saved = $temperatureRepository->save($mockModel);

        $this->assertFalse($saved);
    }
}
