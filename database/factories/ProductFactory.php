<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Product;

use Faker\Generator as Faker;
use App\Models\Admin\ProductCategory;

$factory->define( Product::class, function ( Faker $faker ) {

    $randomLetters = '';
    for ( $i = 0; $i < 5; $i++ ) {
        $randomLetters .= strtoupper( $faker->randomLetter );
    }
    return [
        'product_title'             => $product_title = $faker->text( 60 ),
        'product_slug'              => Str::slug( $product_title ),
        'product_category_id'       => ProductCategory::all()->random()->id,
        'product_short_description' => $faker->paragraph( rand( 2, 7 ) ),
        'product_description'       => $faker->paragraph( rand( 100, 150 ) ),
        'product_price'             => $price = $faker->randomFloat( 2, 10, 100 ),
        'product_sell_price'        => $price - rand( 0, 5 ),
        'product_sku'               => rand( 10, 99 ) . $randomLetters . rand( 10, 99 ),
        'product_qty'               => rand( 15, 100 ),
        'product_image'             => $faker->image( 'public/stroage/product', 600, 600, 'food', false ),
    ];

} );
