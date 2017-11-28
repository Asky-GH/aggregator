<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * Relations
     */
    public function links(){
        return $this->hasMany('App\Link');
    }
}
