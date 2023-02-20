<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use \Illuminate\Database\Eloquent\SoftDeletes;
class Comment extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];
    protected static function booted()
    {
        parent::boot();
    
    }
    public function country ()
    {
        return $this->hasOneThrough('App\Address', 'App\User', 'id', 'user_id', 'user_id', 'id')->select('country as name');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    // Accessor for increment the ratting when it's retrieved from the database

    // public function getRattingAttribute($value)
    // {
    //     return $value + 10;
    // }

    public function getWhoWhatAttribute($value)
    {
        return "User {$this->user_id} has rated this ratting {$this->ratting}";
    }

      // Mutator for increment rating before it's stored in the database
      public function setRattingAttribute($value)
      {
          $this->attributes['ratting'] = $value + 1;
      }

}
