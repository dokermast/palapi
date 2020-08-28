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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::get('books', 'API\BookController@books');
Route::get('books/{id}', 'API\BookController@book');
Route::post('books', 'API\BookController@bookCreate');
Route::put('books/{book}', 'API\BookController@bookEdit');
Route::get('refresh', 'Api\Auth\LoginController@refresh');

Route::get('authors', 'API\AuthorController@authors');
Route::post('authors', 'API\AuthorController@authorCreate');
