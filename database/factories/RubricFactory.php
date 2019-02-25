<?php

use Faker\Generator as Faker;

$factory->define(App\Rubric::class, function (Faker $faker) {
    $faker->locale('ru_RU');

    $city = $faker->unique()->city;
    return [
        'status' => 'normal',
        'category' => $faker->randomElement(['news', 'styler', 'afisha', 'lite', 'all']),
        'name_ru' => $city,
        'name_ua' => $city,
        'h1_ru' => $city,
        'h1_ua' => $city,
        'seo_title_ru' => $city,
        'seo_title_ua' => $city,
        'seo_key_ru' => $faker->sentence(6),
        'seo_key_ua' => $faker->sentence(6),
        'seo_descr_ru' => $faker->sentence(6),
        'seo_descr_ua' => $faker->sentence(6),
        'banner_zone' => $faker->randomElement(['other', 'business']),
        'google_news' => $city,
        'subdomain' => $faker->randomElement([false, true]),
        'order' => rand(0,100)
    ];
});
