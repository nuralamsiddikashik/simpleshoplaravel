<?php

namespace App\Models\Admin;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model {
    protected $guarded = [];

    public function product() {
        return $this->hasMany( Product::class );
    }

    public function setCategoryImageAttribute( $value ) {
        $this->attributes['category_image'] = 'stroage/category/' . $value;
    }
}
