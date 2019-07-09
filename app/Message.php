<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Auth;
use App\Good;


class Message extends Model
{
    protected $fillable = ['sender_name', 'message_data'];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function goods()
    {
      return $this->hasMany('App\Like');
    }

    public function good_by()
    {
      return Good::where('user_id', Auth::user()->id)->first();
    }

}
