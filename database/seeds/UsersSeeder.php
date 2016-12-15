<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \App\User::create( [
            'name'     => 'Joe',
            'email'    => 'joe@abc.com',
            'password' => bcrypt( 'password' ),
            'role'     => 'member',
        ] );
    }

}
