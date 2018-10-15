<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //comment Relation
    public function comments(){
        return $this->morphMany('App\Comment','commentable');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
