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
    // return $request->user();
});


Route::get('dashboard','API\DashboardController@index');

Route::apiResource('user','API\UserController');
Route::apiResource('team','API\TeamController');

Route::get('contact','API\ContactController@index');
Route::delete('contact/{id}','API\ContactController@destroy');


Route::apiResource('category','API\CategoryController');
Route::get('category/selected/{id}','API\EventController@list');


Route::apiResource('event','API\EventController');


Route::apiResource('slider','API\SliderController');
Route::post('slider/sorting','API\SliderController@sortOrder');


Route::apiResource('video','API\VideoController');


Route::get('menubuilder','API\MenubuilderController@index');
Route::post('menubuilder','API\MenubuilderController@store');
Route::post('menubuilder/sorting','API\MenubuilderController@sortOrder');
Route::delete('menubuilder/{id}','API\MenubuilderController@delete');

//  routes for gallery 
Route::get('gallery','API\GalleryController@index');
Route::post('gallery','API\GalleryController@store');
Route::put('gallery/{id}','API\GalleryController@update');
Route::post('gallery/image/{id}','API\GalleryController@imageStore');