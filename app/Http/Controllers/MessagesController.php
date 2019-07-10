<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Message;
use Auth;


class MessagesController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth', array('except' => 'index'));
    }

    public function show($id) {
      $message = Message::findOrFail($id); // findOrFail 見つからなかった時の例外処理

      $good = $message->goods()->where('user_id', Auth::user()->id)->first();

      return view('/home')->with(array('message' => $message, 'good' => $good));
    }
}
