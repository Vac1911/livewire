<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $sentence = $faker->sentence(rand(3, 6));
    $datetime = $faker->dateTimeBetween(now()->subYears(3));
    return [
        'title' => substr($sentence, 0, strlen($sentence) - 1),
        'body' => $sentence . ' ' . $faker->paragraphs($nb = 3, $asText = true),
        'cover_photo_url' => $faker->imageUrl(600, 300),
        'created_at' => $datetime,
        'updated_at' => $datetime,
    ];
});
