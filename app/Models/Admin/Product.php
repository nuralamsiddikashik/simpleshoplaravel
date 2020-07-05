<?php

namespace App\Models\Admin;

use App\Models\Admin\ProductCategory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $guarded = [];

    public function product_categories() {

        return $this->belongsTo( ProductCategory::class, 'product_category_id' );

    }

    public function finalPrice() {
        return $this->product_sell_price == 0 ? $this->product_price : $this->product_sell_price;
    }

}
