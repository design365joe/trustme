<?php

use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \App\Review::create( [
            'user_id'     => 1,
            'business_id' => 4,
            'stars'       => 4,
            'comments'    => 'This is the first review of Smiths Electronics.',
        ] );

        \App\Review::create( [
            'user_id'     => 1,
            'business_id' => 4,
            'stars'       => 2,
            'comments'    => 'This is the second review of Smiths Electronics - they only scored 2 stars this time.',
        ] );

        \App\Review::create( [
            'user_id'     => 1,
            'business_id' => 6,
            'stars'       => 5,
            'comments'    => 'This business is excellent.',
        ] );
    }

}
