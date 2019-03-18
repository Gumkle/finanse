<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planned extends Model
{
    protected $table = "planned";

    public function owner()
    {
        return $this->morphTo();
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
