<?php

use App\Plant;

class GetPlantTest extends TestCase
{
    /**
     * Test the plant endpoint exists
     */
    public function testPlantEndpointExists()
    {
        $id = 1;
        $this->get("/plant/{$id}");
        $this->assertResponseStatus(200);
    }

    /**
     * Test plant data is found
     */
    public function testGetPlantData()
    {
        $id = 1;
        $this->get("/plant/{$id}");
        $this->assertResponseStatus(200);
        $this->assertJson(json_encode(Plant::findOrFail($id)->toArray));
    }
}
