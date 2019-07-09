<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Good;
use Auth;
use App\Message;
class GoodsController extends Controller
{
    public function store(Request $request, $messageId)
    {
        Like::create(
          array(
            'user_id' => Auth::user()->id,
            'message_id' => $messageId
          )
        );

        $message = Message::findOrFail($messageId);

        return redirect()
             ->action('MessagesController@show', $message->id);
    }

    public function destroy($messageId, $goodId) {
      $message = Messsage::findOrFail($messageId);
      $message->good_by()->findOrFail($goodId)->delete();

      return redirect()
             ->action('MessagesController@show', $message->id);
    }
}
