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
}
