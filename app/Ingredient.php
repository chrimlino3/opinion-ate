<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['name'];

    public function dishes()
    {
        return $this->belongsToMany('App\Dish'); // 'SELECT ingredients FROM dishes WHERE dish_id = ingredient_id;'
    }
}
