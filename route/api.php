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

//list articles
Route::get('articles', 'ArticleController@index');


// single articles display
Route::get('article/{id}', 'ArticleController@show');



// create a new article
Route::post('article', 'ArticleController@store');

// update article
Route::put('article', 'ArticleController@store');

// delete article
Route::delete('article/{id}', 'ArticleController@destroy');


