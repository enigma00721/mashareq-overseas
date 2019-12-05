<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/contact-us' ,[
    'as' => 'contactus',
    'uses' => 'FrontController@contactUs' 
]);
Route::get('/about-us' ,[
    'as' => 'aboutus',
    'uses' => 'FrontController@aboutUs' 
]);
Route::get('/procedure' ,[
    'as' => 'procedure',
    'uses' => 'FrontController@procedure' 
]);
Route::get('/documentation' ,[
    'as' => 'documentation',
    'uses' => 'FrontController@documentaion' 
]);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('{path}', 'HomeController@index')->where( 'path' , '([A-z\d\-\/_.]+)?' );
