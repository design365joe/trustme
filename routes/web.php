<?php

Auth::routes();

Route::get( '/', 'ReviewsController@fetchReviews' ); //fetches all the reviews

Route::post( '/business/search', 'BusinessController@search' );

Route::get( '/business/{id}', 'BusinessController@index' );  //Goes to the specific business
Route::post( '/business/{id}', 'ReviewsController@store' );


