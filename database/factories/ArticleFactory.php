<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $sentence = $faker->sentence(rand(3, 6));
    $datetime = $faker->dateTimeThisDecade();
    return [
        'title' => substr($sentence, 0, strlen($sentence) - 1),
        'body' => $sentence . ' ' . $faker->paragraphs($nb = 3, $asText = true),
        'created_at' => $datetime,
        'updated_at' => $datetime,
    ];
});
