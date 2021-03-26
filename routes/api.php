<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/books','PostController@createBook');
Route::get('/books/edit/{id}','PostController@getBook');
Route::get('/books','PostController@getAllBook');
Route::put('/books/update/{id}','PostController@updateBook');
Route::post('/books/delete/{id}','PostController@deleteBook');


Route::group(['prefix'=>'auth'], function(){
    Route::post('signin','AuthController@signin');
    Route::post('signup','AuthController@signup');

    Route::group(['middlewere'=>'auth:api'], function(){
        Route::get('logout','AuthController@logout');
        Route::get('user','AuthController@user');
    });
});
