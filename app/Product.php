<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function modelings()
    {
        return $this->hasMany(Modeling::class);
    }
}
