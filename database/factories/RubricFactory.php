<?php

use Faker\Generator as Faker;

$factory->define(App\Rubric::class, function (Faker $faker) {
    $faker->locale('ru_RU');

    $city = $faker->unique()->city;
    return [
        'status' => 'normal',
        'category' => $faker->randomElement(['news', 'styler', 'afisha', 'lite', 'all']),
        'name_rus' => $city,
        'name_ukr' => $city,
        'h1_rus' => $city,
        'h1_ukr' => $city,
        'seo_title_rus' => $city,
        'seo_title_ukr' => $city,
        'seo_key_rus' => $faker->sentence(6),
        'seo_key_ukr' => $faker->sentence(6),
        'seo_descr_rus' => $faker->sentence(6),
        'seo_descr_ukr' => $faker->sentence(6),
        'banner_zone' => $faker->randomElement(['other', 'business']),
        'google_news' => $city,
        'subdomain' => $faker->randomElement([false, true]),
        'order' => rand(0,100)
    ];
});
