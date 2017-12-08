<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;

    /**
     * Inverse relations
     */
    public function links(){
        return $this->belongsToMany('App\Link');
    }

    public function getRouteKeyName(){
        return 'name';
    }
}
