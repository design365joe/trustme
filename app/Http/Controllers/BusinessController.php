<?php

namespace App\Http\Controllers;

use App\Business;

class BusinessController extends Controller {

    //

    //accepts the name of the business that the user searched and returns the business view

    public function index( $id ) {
        $business = Business::findOrFail( $id );

        return view( 'business', compact( 'business' ) );
    }

    public function search() {
        $searchTerm = request()->input( 'businessName' );
        $businesses   = Business::where( 'name', 'LIKE', '%' . $searchTerm . '%' )->get();

        if ( $businesses->isEmpty() ) {
            return redirect()->back();
        } else if ( $businesses->count() === 1 ) {
            return redirect( '/business/' . $businesses->first()->id );
        }

        return view( 'search', compact( 'searchTerm', 'businesses' ) );
    }

    /*
       public function index(Request $request){

           $name = $request->input('businessName');
           return view('business', compact($name));
       }*/

}
