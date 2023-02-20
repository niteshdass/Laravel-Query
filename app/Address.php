<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'number',
        'street',
        'country',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id'); // (Model, foreign_key, owner_key) here ownerkey and primary key is optional
        // if foreign key is like modelName + _id then laravel will automatically detect it with model id.
    }
}
