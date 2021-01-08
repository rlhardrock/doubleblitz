<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //REVERSED RELATION ONE TO MANY
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //RELATION ONE TO MANY POLIMORPHIC
    public function comment(){
        return $this->morphMany('App\Models\Comment','commentable');
    }

    //RELATION MANY TO MANY POLIMORPHIC
    public function posts(){
        return $this->morphToMany('App\Models\Post','taggable');
    }
}
