<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function planned()
    {
        return $this->belongsToMany('App\Planned');
    }

    public function incomes()
    {
        return $this->belongsToMany('App\Income');
    }

    public function outcomes()
    {
        return $this->belongsToMany('App\Outcome');
    }
}
