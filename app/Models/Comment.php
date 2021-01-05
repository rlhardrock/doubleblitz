<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //REVERSED RELATION ONE TO MANY
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //RELATION POLIMORPHIC
    public function commentable(){
        return $this->morphTo();
    }
}
