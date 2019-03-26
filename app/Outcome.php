<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outcome extends Model
{
    public function owner()
    {
        return $this->morphTo();
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
