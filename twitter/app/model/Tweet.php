<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    public $dates=['date'];

    public function user()
    {
        // return $this->belongsTo('App\model\User');
        return $this->belongsTo('App\User');
    }
    public function likes()
    {
        // return $this->belongsToMany('App\Model\User');
        return $this->belongsToMany('App\User');
    }

}
