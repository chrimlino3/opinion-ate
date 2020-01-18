<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = ['name', 'rating', 'restaurant_id'];

    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }
}
