<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\post_tag;
use Faker\Generator as Faker;

$factory->define(post_tag::class, function (Faker $faker) {
    return [
        

        'posts_id' => random(1,100),

        'tags_id' => random(1,100),
    ];
});
