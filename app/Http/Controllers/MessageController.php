<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response; // return Response::make()を使用するために追加
use Input; // Input::get()を使用するために追加

class MessageController extends Controller
{
  public function index(Request $request)
  {
    $request->file('audio_data')->store('voice');

  //   $validator = Validator::make($request->all(), [
  //     'audio_data' => 'required|mimes:mpga,wav',
  // ]);

  // if($validator->fails()){
  //     return redirect()->back()->withErrors($validator)->withInput();
  //     echo 'validation passed';

  // }

  // ///save audio, etc
  // echo 'validation passed';
}
  
}