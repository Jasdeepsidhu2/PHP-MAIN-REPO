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

Route::get('/', 'TweetsController@index');
Route::get('/contact', 'ContactController@index2' );
Route::get('/demo', 'TweetsController@demo' );




Route::get('/page1', function () {
    return view('page1');
});
Route::get('/page2', function () {
    return view('page2');
}); 