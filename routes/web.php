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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// プロフィール登録のポストルート定義
Route::post('/pfsets', 'PfsetsController@index');
