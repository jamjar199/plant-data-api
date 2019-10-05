<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Temperature
 *
 * @package App
 * @property integer $id
 * @property integer $plant_id
 * @property integer $sensor_id
 * @property double  $temperature
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Temperature extends Model
{

}
