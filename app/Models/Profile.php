<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    //RECOVERY USER INFO
    public function user(){
        //$user = User::find($this->user_id);
        return $this->belongsTo('App\Models\Profile');
    }
}
