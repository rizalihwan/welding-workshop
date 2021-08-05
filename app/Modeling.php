<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modeling extends Model
{
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
