<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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
        'password', 'remember_token',
    ];
    public function tweets()
    {
        return $this->hasMany('App\Model\Tweet');
    }

    public function likedTweets()
    {
        return $this->belongsToMany('App\Model\Tweet');
        //  I can also override the join table name with
        // a second argument.
        // return $this->belongsToMany('App\Model\Tweet', 'likes');
    }
    public function profile(){
        return $this->hasOne('App\Model\Profile');
    }
}
