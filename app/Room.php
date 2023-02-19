<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //! Laravel by default assumes that the table name is the plural of the model name
    //! but we can override this by setting the $table property on the model.
    // protected $table = 'my_rooms';

    public function cities()
    {
        return $this->belongsToMany('App\City', 'city_room', 'room_id', 'city_id');
    }
}
