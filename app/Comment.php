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
        //! Here is the event list
        // retrieved
        // creating
        // created
        // updating
        // updated
        // saving
        // saved
        // deleting
        // deleted
        // restoring
        // restored
        // replicating
        // forceDeleted
        // retrievedByMany
        // retrievedByManyUsingPivot
        // retrievedByManyUsingSubqueries
        // retrievedUsingPagination
        // chunking

        static::creating(function ($comment) {
            $comment->content = 'creating content';
        });

        static::created(function ($comment) {
            dd('created', $comment->toArray());
        });
    }

}
