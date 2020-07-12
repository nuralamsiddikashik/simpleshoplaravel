<?php

use App\Models\Admin\Product;
use Illuminate\Database\Seeder;
use App\Models\Admin\ProductCategory;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call( UserTable::class );
        factory( ProductCategory::class, 6 )->create();
        factory( Product::class, 6 )->create();
    }
}
