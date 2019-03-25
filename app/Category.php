<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function outcomes()
    {
        return $this->hasMany('App\Outcome');
    }

    public function incomes()
    {
        return $this->hasMany('App\Income');
    }

    public function planned()
    {
        return $this->hasMany('App\Planned');
    }
}
