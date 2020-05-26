<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/post/create', 'blogController@store');
Route::get('/post/edit/{id}', 'blogController@edit');
Route::post('/post/update/{id}', 'blogController@update');
Route::delete('/post/delete/{id}', 'blogController@delete');
Route::get('/blog', 'blogController@index');
// Route::get('/search', [
//   'as' => 'api.search',
//   'uses' => 'Api\SearchController@search'
// ]);
Route::get('/search', 'SearchController@search');
