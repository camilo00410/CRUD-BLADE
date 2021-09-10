<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Profile;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /******************** RELACION DE UNO A UNO **************/
    public function profile(){
        // $profile = Profile::where('user_id', $this->id)->first();

        // return $this->hasOne(Profile::class);

        return $this->hasOne('App\Models\Profile');
    }

    /********************* RELACION DE UNO A MUCHOS ************** */
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }

    public function videos(){
        return $this->hasMany('App\Models\Video');
    }


    /***********************RELACION DE MUCHOS A MUCHOS **************/
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }


}


