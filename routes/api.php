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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Store User Location
Route::post('/user_location','App\Http\Controllers\Api\UserController@storeLocation')->name('user_location');

// Display all users location
Route::get('/get_users_location','App\Http\Controllers\Api\UserController@index');

// Search for specific user based from uuid
Route::post('/search_user_location','App\Http\Controllers\Api\UserController@searchLocation')->name('search_user_location');
