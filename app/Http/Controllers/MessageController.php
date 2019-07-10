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
    $request->file('audio_data')->store('voice');
    $messages = new Message;
    $messages->sender_id = Auth::user()->id;
    $messages->sender_name = Auth::user()->name;
    $messages->message_data = $request->file('audio_data');
    $messages->receiver_id = 0;
    $messages->save();
    return redirect('/home');

    // $message = Message::find(auth()->id());
    // $message->save();

}
  
}