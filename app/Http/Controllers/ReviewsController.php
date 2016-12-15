<?php

namespace App\Http\Controllers;

use App\Business;
use App\Review;
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
        Business::findOrFail( $id )
                ->reviews()
                ->save( new Review( [
                    'user_id'  => Auth::id(),
                    'comments' => $request->body,
                    'stars'    => $request->stars,
                ] ) );

        return redirect()->back();
    }

}
