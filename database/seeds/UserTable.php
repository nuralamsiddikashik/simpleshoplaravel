<?php

use Illuminate\Database\Seeder;

class UserTable extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        App\User::create( [
            "name"     => "Ashik Eron",
            "email"    => 'ashik@gmail.com',
            "password" => bcrypt( '123456789' ),
        ] );
    }
}
