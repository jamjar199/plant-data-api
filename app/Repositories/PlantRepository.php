<?php

namespace App\Repositories;

use App\Plant;
use App\Repositories\Interfaces\PlantRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class PlantRepository
 *
 * @package App\Repositories
 */
class PlantRepository implements PlantRepositoryInterface
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
