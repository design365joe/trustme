<?php

namespace App\Http\Controllers;

use App\Review;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;

class ReviewsController extends Controller {

    /**
     * @return \Illuminate\View\View
     */
    public function fetchReviews() {
        $reviews = Review::with( 'user', 'business' )
                         ->newestFirst()
                         ->take( 3 )
                         ->get();

        return view( 'home', compact( 'reviews' ) );
    }

    public function store( Request $request, $id ) {
        User::businesses()
            ->findOrFail( $id )
            ->reviewsOf()
            ->save( new Review( [
                'user_id'  => Auth::id(),
                'comments' => $request->body,
                'stars'    => $request->stars,
            ] ) );

        return redirect()->back();
    }

}
