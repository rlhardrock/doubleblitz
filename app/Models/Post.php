<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //REVERSE RELATION ONE TO MANY
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //REVERSE RELATION ONE TO MANY
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    //RELATION ONE TO ONE POLIMORPHIC
    public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }

    //RELATION ONE TO MANY POLIMORPHIC
    public function comment(){
        return $this->morphMany('App\Models\Comment','commentable');
    }
}
