<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Inverse relations
     */
    public function links(){
        $this->belongsToMany('App\Link', 'link_tags');
    }
}
