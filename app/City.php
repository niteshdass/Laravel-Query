<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function rooms()
    {
        return $this->belongsToMany('App\Room', 'city_room', 'city_id', 'room_id');
    }

    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
}
