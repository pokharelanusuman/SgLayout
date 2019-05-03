<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    protected $fillable=['country_id', 'state_id', 'region_id', 'city_id', 'street'];
}
