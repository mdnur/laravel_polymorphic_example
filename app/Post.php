<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //comment Relation
    public function comments(){
        return $this->morphMany('App\Comment','commentable');
    }
}
