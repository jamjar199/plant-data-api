<?php

class DataRecorderServiceTest extends TestCase
{
    /**
     * Test Request fails when missing the plant field in the json
     */
    public function testRequestMissingPlantIdFails()
    {
        $requestBody =  $this->getTestData();
        unset($requestBody['plant']);

        $this->post('/data', $requestBody);

        $this->assertResponseStatus('422');
        $this->assertJson(json_encode([
            'plant' => 'The plant field is required'
        ]));
    }

    /**
     * Test Request fails when missing the sensor field in the json
     */
    public function testRequestMissingSensorIdFails()
    {
        $requestBody =  $this->getTestData();
        unset($requestBody['sensor']);

        $this->post('/data', $requestBody);

        $this->assertResponseStatus('422');
        $this->assertJson(json_encode([
            'sensor' => 'The sensor field is required'
        ]));
    }

    /**
     * Test Request fails when missing the data field in the json
     */
    public function testRequestMissingDataFails()
    {
        $requestBody =  $this->getTestData();
        unset($requestBody['data']);

        $this->post('/data', $requestBody);

        $this->assertResponseStatus('422');
        $this->assertJson(json_encode([
            'data' => 'The data field is required'
        ]));
    }

    /**
     * Test Request fails when the data field in the json is empty
     */
    public function testRequestDataEmpty()
    {
        $requestBody =  $this->getTestData();
        $requestBody['data'] = null;

        $this->post('/data', $requestBody);

        $this->assertResponseStatus('422');
        $this->assertJson(json_encode([
            'data' => 'The data field is required'
        ]));
    }

    public function testRequestDataInvalid()
    {
        $requestBody =  $this->getTestData();
        $requestBody['data'] = [
            'light' => 120
        ];

        $this->post('/data', $requestBody);

        $this->assertResponseStatus('200');
        $this->assertJson(json_encode([
            'message' => true
        ]));
    }

    /**
     * Test request is successful when all data is valid
     */
    public function testRequestSuccessful()
    {
        $requestBody =  $this->getTestData();

        $this->post('/data', $requestBody);

        $this->assertResponseStatus('200');
        $this->assertJson(json_encode([
            'message' => true
        ]));
    }

    /**
     * Test payload
     *
     * @return array
     */
    private function getTestData()
    {
        return [
            'sensor' => 1,
            'plant' => 1,
            'data' => [
                'temperature' => 12.9
            ]
        ];
    }
}
