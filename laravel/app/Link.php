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

    public function tags(){
        return $this->belongsToMany('App\Tag', 'link_tags');
    }

    /**
     * Relations
     */
    public function comments(){
        return $this->hasMany('App\Comment');
    }

    /**
     * Scopes
     */
    public function scopeApproved($query){
        return $query->where('status_id', 2);
    }
}
