<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model

{  
     public $primaryKey='user_id';
    public $dates = ['joined']; 
    public $table='user_profiles';
    
    




    // public function tweets()
    // {
    //     return $this->hasMany('App\Model\Tweet');
    // }

    // public function likedTweets()
    // {
    //     return $this->belongsToMany('App\Model\Tweet');
         // I can also override the join table name with
        // a second argument.
        // return $this->belongsToMany('App\Model\Tweet', 'likes');
    // }


}
