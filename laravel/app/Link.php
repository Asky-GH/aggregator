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
    
    public function status(){
        return $this->belongsTo('App\Status');
    }

    /**
     * Relations
     */
    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
