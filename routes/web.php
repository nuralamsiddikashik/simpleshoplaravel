<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get( '/', 'HomeController@index' )->name( 'home' );

Route::get( 'shop', 'HomeController@shop' )->name( 'shop' );

Route::get( '/product-category/{category_slug}', 'HomeController@showProduct' )->name( 'product-category' );

Route::get( '/product/{slug}', 'HomeController@showSingleProduct' )->name( 'product-single' );

Route::post( '/add-to-cart', '\App\Http\Controllers\Frontend\CartController@add_to_cart' )->name( 'add_to_cart' );

Route::get( '/cart', 'HomeController@cart' )->name( 'cart' );

Route::post( '/remove_product', '\App\Http\Controllers\Frontend\CartController@remove_from_cart' )->name( 'remove_product' );

Route::group( ['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get( '/dashboard', function () {
        return view( 'admin.dashboard.index' );
    } );

    Route::resource( 'product-category', '\App\Http\Controllers\Admin\ProductCategoryController' );

    Route::resource( 'product', '\App\Http\Controllers\Admin\ProductController' );

} );
