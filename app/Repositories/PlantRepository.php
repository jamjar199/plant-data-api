<?php

namespace App\Repositories;

use App\Plant;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class PlantRepository
 *
 * @package App\Repositories
 */
class PlantRepository
{
    /**
     * Get all plants
     *
     * @return Collection
     */
    public function all() : Collection
    {
        return Plant::all();
    }
}