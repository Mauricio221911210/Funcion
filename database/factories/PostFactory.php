<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {
    return [
        

        'title' => $this->faker->sentence,
        'slug' => $this->faker->slug,
        'descripcion' => $this->faker->text(800),
        'image' => $this->faker->imageUrl(1280,720),
        
        'category' => $this->faker->sentence,
        'extract' => $this->faker->sentence,

        'tags_id' => random(1,100),
        'users_id' => random (1,100),

    ];
});
