<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'products', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'product_title' );
            $table->string( 'product_slug' )->unique();
            $table->string( 'product_image' );
            $table->string( 'product_price' );
            $table->string( 'product_sell_price' )->default(0);
            $table->text( 'product_description' );
            $table->text( 'product_short_description' );
            $table->string( 'product_qty' );
            $table->string( 'product_sku' );
            $table->integer( 'product_category_id' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'products' );
    }
}
