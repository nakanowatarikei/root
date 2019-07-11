<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use Auth;
use Response; // return Response::make()を使用するために追加
use Input; // Input::get()を使用するために追加

class MessageController extends Controller
{
  public function index(Request $request)
  {
    $input = $request->all();
    $input = $input["receiver_id"];
    $audioFilename = $request->file('audio_data')->store('public');
    $messages = new Message;
    $messages->sender_id = Auth::user()->id;
    $messages->sender_name = Auth::user()->name;
    $messages->message_data = basename($audioFilename);
    $messages->receiver_id = $input;
    $messages->save();

    // $message = Message::find(auth()->id());
    // $message->save();

}
  
}