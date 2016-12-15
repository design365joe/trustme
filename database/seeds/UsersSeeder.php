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

        \App\User::create( [
            'name'     => 'Alan',
            'email'    => 'alan@abc.com',
            'password' => bcrypt( 'password' ),
            'role'     => 'member',
        ] );

        \App\User::create( [
            'name'     => 'George',
            'email'    => 'george@abc.com',
            'password' => bcrypt( 'password' ),
            'role'     => 'member',
        ] );

        \App\User::create( [
            'name'     => 'Smiths Electronics',
            'email'    => 'smiths@abc.com',
            'password' => bcrypt( 'password' ),
            'role'     => 'business',
        ] );

        \App\User::create( [
            'name'     => 'Jones Butchers',
            'email'    => 'jones@abc.com',
            'password' => bcrypt( 'password' ),
            'role'     => 'business',
        ] );

        \App\User::create( [
            'name'     => 'Lloyds TSB',
            'email'    => 'lloyds@abc.com',
            'password' => bcrypt( 'password' ),
            'role'     => 'business',
        ] );
    }

}
