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
    return view('pfset');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// プロフィール登録のポストルート定義
Route::post('/pfsets', function (Request $request) {
    //バリデーション
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:64',
        'email' => 'required|max:256',
        'Password' => 'required|max:64',
        'image' => 'required',
        'twtter' => 'required',
        'facebook' => 'required',
        'instagram' => 'instagram',
        'image' => 'required',
        'qiita' => 'required',
        'profile' => 'required',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    //以下に登録処理を記述（Eloquentモデル）
});