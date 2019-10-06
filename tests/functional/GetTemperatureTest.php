<?php

class GetTemperatureTest extends TestCase
{
    /**
     * Asserts a get temperature request can be made
     */
    public function testGetTemperatureRequest()
    {
        $this->get('plant/1/temperature');
        $this->assertResponseStatus(200);
    }

    /**
     * Test making a request with a plant ID that dose not exist
     */
    public function testGetTemperatureRequestWithInvalidPlant()
    {
        $this->get('plant/null/temperature');
        $this->assertResponseStatus(200);
        $this->assertJson(json_encode([]));
    }

    /**
     * Test making a request without a plant ID that dose exist
     */
    public function testGetTemperatureRequestWithValidPlant()
    {
        $this->get('plant/null/temperature');
        $this->assertResponseStatus(200);
    }
}
