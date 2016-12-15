<?php

namespace App\Http\Controllers;
use App\Business;
use DB;
use App\Review;
use App\User;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * @param User $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function fetchReviews(){
        
       $userData = DB::table('users')->join('reviews', 'users.id', '=', 'reviews.user_id')->select('users.name', 'reviews.comments', 'reviews.stars', 'reviews.business_id')->get();

       return view('/home' , compact('userData'));
    }

    public function store(Request $request, Business $business){
        $review = new Review;

        $review->comments = $request->body;

        $business->reviews()->save($review);

        return redirect('/business');
    }

    
    
}
