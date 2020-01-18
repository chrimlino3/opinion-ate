<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['name', 'address'];

    public function dishes()
    {
        return $this->hasMany('App\Dish');
    }
}
