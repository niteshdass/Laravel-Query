<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use \Illuminate\Database\Eloquent\SoftDeletes;
class Comment extends Model
{
    use SoftDeletes;
    // protected $fillable = ['user_id', 'ratting', 'content'];
    protected $guarded = ['id'];
    protected static function booted()
    {
        // parent::boot();

        // static::addGlobalScope('ratting4', function (Builder $builder) {
        //     $builder->where('ratting', '>', 4);
        // });

        // static::addGlobalScope('ratting3', function (Builder $builder) {
        //     $builder->where('ratting', '>', 3);
        // });

        // static::addGlobalScope('ratting2', function (Builder $builder) {
        //     $builder->where('ratting', '>', 2);
        // });
        
    }
    // public function scopeRatting($query, $val)
    // {
    //     return $query->where('ratting', '>',  $val);
    // }
    // public function scopeRatting5($query, $val)
    // {
    //     return $query->where('ratting',  $val);
    // }
}
