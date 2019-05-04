<?php

use App\Models\Post;
use App\Models\User;
use Faker\Generator;

$factory->define(Post::class, function (Generator $faker) {
    return [
        'title' => $faker->sentence,
        'en'  => [
            'content' => $faker->paragraph,
            'title' => $faker->sentence
        ],
        'vi'  => [
            'content' => $faker->paragraph,
            'title' => $faker->sentence
        ],
        'posted_at' => now(),
        'author_id' => function () {
            return factory(User::class)->create()->id;
        }
    ];
});
