<?php

namespace App\Models\Admin;

use App\Models\Admin\ProductCategory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $guarded = [];

    public function product_categories() {

        return $this->belongsTo( ProductCategory::class, 'product_category_id' );

    }

}
