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

// NOTE authentication uncomented by @JindalAnuj
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// first sample api 
Route::get('loc2', 'LocationTrackingController@index');

// api for socket implementation
// Route::get('location', 'LocationTrackingController@fetchLocation');
Route::post('location', 'LocationTrackingController@addLocation');