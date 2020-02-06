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

Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact info@website.com'], 404);
});

JsonApi::register('default')->routes(function ($api) {
    $api->resource('restaurants')->relationships(function ($relations) {
        $relations->hasMany('dishes');
    });
    $api->resource('dishes')->relationships(function ($relations) {
        $relations->hasOne('restaurant');
        $relations->hasMany('ingredients');
    });
    $api->resource('ingredients')->relationships(function ($relations) {
        $relations->hasMany('dishes');
    });
});