<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Admin\ProductCategory;

$factory->define( ProductCategory::class, function ( Faker $faker ) {
    return [
        'category_name'        => $name = $faker->name,
        'category_slug'        => Str::slug( $name ),
        'category_description' => $faker->paragraph( rand( 100, 150 ) ),
        'category_image'       => $faker->image( 'public/stroage/category', 300, 300, 'food', false ),
    ];
} );
