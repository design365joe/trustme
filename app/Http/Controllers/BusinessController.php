<?php

namespace App\Http\Controllers;

use App\Business;
use App\Review;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    //

    //accepts the name of the business that the user searched and returns the business view
   /*
    public function index($name){
        $business = Business::find($name);
        return view('business', compact('business'));
    }
*/

   public function index(Request $request){

       $name = $request->input('businessName');
       return view('business', compact($name));
   }





}
