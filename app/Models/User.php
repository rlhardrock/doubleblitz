<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

//use App\Models\Profile;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //MASSIVE ASSIGNEMENT
    //protected $guarded = [];

    // RELATION  ONE TO ONE
    public function profile(){
        //$profile = Profile::where('user_id', $this->id)->first();
        // return $this->hasOne(Profile::class);  //escribir use  ...\...\...\class
        return $this->hasOne('App\Models\Profile');
    }

    //RELATION ONE TO MANY
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }

    //RELATION ONE TO MANY
    public function videos(){
        return $this->hasMany('App\Models\Video');
    }

    //RELATION ONE TO MANY
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    //RELATION MANY TO MANY
    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }

    //RELATION ONE TO ONE POLIMORPHIC
    public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }

}
