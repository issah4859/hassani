<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::APIResource('/products', 'ProductController');

Route::group(['prefix'=> 'products'], function (){

    Route::APIResource('/{product}/reviews', 'ReviewController');

});
