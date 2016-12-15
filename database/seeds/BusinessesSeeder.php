<?php

use Illuminate\Database\Seeder;

class BusinessesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \App\Business::create( [
            'name' => 'Smiths Electronics',
        ] );

        \App\Business::create( [
            'name' => 'Jones Butchers',
        ] );

        \App\Business::create( [
            'name' => 'Lloyds TSB',
        ] );
    }

}
