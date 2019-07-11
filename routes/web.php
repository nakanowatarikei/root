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



Route::get('/message/{id}', function ($id) {
  return view('message',['id' => $id]);
});


Route::get('/home', function () {
  return view('home');
});

Route::post('message/upload','MessageController@index');

Route::post('/message/{id}/','MessageController@index');

Route::get('/users', 'HomeController@listUsers')->name('users');
Route::get('/eachUser/{id}', 'HomeController@selectUser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@list')->name('home');
// Route::get('/home', 'MessagesController@show')->name('home');

// プロフィール登録のポストルート定義
Route::post('/pfsets', 'PfsetsController@index');


Route::any('/messages/{message}/goods', 'GoodsController@store');
Route::any('/messages/{message}/goods/{good}', 'GoodsController@destroy');

