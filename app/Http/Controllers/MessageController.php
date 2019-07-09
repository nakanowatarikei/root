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
    $messages = new Message;
    $messages->message_data = $request->audio_data;
    $messages->save();

    // $message = Message::find(auth()->id());
    // $message->save();

}
  
}