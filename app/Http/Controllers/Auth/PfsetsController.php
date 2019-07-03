<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request; 

use App\Pfsets;

class PfsetsController extends Controller
{
    public function index(Request $request)
    {
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
    }
}