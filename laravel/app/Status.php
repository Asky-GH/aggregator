<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * Inverse relations
     */
    public function links(){
        return $this->belongsTo('App\Link');
    }
}
