<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\categories;
use Faker\Generator as Faker;

$factory->define(categories::class, function (Faker $faker) {
    return [
        
        'name' => $this->faker->sentence,
        
        'descripcion' => $this->faker->text(800),
        'image' => $this->faker->imageUrl(1280,720),
        
        

        'posts_id' => random(1,100),
        
    ];
});
