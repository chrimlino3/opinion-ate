<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use app\config\database;

use App\Restaurant;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        // factory(App\Restaurant::class, 10)->create()->each(function ($restaurant) {
        //     $restaurant->restaurants()->save(factory(App\Restaurant::class)->make());
        // });
        $sushiPlace = Restaurant::create(['name' => 'Sushi Place', 'address' => '123 Main Street']); // we can pass the attributes to the ::create() method in an array
        $burgerPlace = Restaurant::create(['name' => 'Burger Place', 'address' => '456 Other Street']);


        $sushiPlace->dishes()->createMany([          // We can access the dishes() relationship for a given restaurant.
            ['name'=> 'Volcano Roll', 'rating' => 3],
            ['name' => 'Salmon Nigiri', 'rating' => 4],
        ]);

        $burgerPlace->dishes()->createMany([                //createMany() records on that relationship.
            ['name' => 'Barbeque Burger', 'rating' => '5'],
            ['name' => 'Slider', 'rating' => 3],
        ]);
    }
}
