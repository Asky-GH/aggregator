<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /**
     * Inverse relations
     */
    public function user(){
        return $this->belongsTo('App\User');
    }

    /**
     * Relations
     */
    public function status(){
        return $this->hasOne('App\Status');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
