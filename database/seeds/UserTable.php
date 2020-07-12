<?php

use Illuminate\Database\Seeder;

class UserTable extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        App\User::insert( [
            [
                "first_name" => "Ashik Eron",
                "email"      => 'ashik@gmail.com',
                "password"   => bcrypt( '123456789' ),
                "is_admin"   => 1,
            ],

            [
                "first_name" => "ashik",
                "email"      => 'user@gmail.com',
                "password"   => bcrypt( '123456789' ),
                "is_admin"   => 0,
            ],

        ] );

    }
}
