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

Route::get('/pfsets', function () {
    return view('pfset');
});


Route::get('/message', function () {
  return view('message');
});

Route::any('/upload','MessageController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/messages/{message}/goods', 'GoodsController@store');
Route::post('/messages/{message}/goods/{good}', 'GoodsController@destroy');
