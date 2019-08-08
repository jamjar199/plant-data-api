<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Collection;

/**
 * Interface PlantRepositoryInterface
 *
 * @package App\Repositories\Interfaces
 */
interface PlantRepositoryInterface
{
    /**
     * Gets all the plants
     *
     * @return Collection
     */
    public function all() : Collection ;
}