<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Link extends Model
{
    protected $fillable = ['title', 'url', 'description', 'user_id'];

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
        return $this->belongsToMany('App\Tag');
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

    public function scopeUnapproved($query){
        return $query->where('status_id', 1);
    }

    public function scopeFilter($query, $filters){
        if ($month = $filters['month']){
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $filters['year']){
            $query->whereYear('created_at', $year);
        }
    }
}
