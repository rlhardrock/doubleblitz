<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //RELATION MANY TO MANY
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    //RELATION MANY TO MANY
    public function permits(){
        return $this->belongsToMany('App\Models\Permit');
    }
}
