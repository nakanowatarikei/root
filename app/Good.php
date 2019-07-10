<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use kanazaca\CounterCache\CounterCache;

class Good extends Model
{
    use CounterCache;

    public $counterCacheOptions = [
        'Message' => [
            'field' => 'goods',
            'foreignKey' => 'message_id'
        ]
    ];

    protected $fillable = ['user_id', 'message_id'];

    public function Message()
    {
      return $this->belongsTo('App\Message');
    }

    public function User()
    {
      return $this->belongsTo(User::class);
    }
}
