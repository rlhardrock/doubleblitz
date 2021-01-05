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
}
