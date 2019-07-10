@extends('layouts.app')

@section('content')
@if (Auth::check())
    @if ($good)
      {{ Form::model($message, array('action' => array('messagesController@destroy', $message->id, $goods->id))) }}
        <button type="submit">
          Like {{ $message->goods_count }}
        </button>
      {!! Form::close() !!}
    @else
      {{ Form::model($message, array('action' => array('messagesController@store', $message->id))) }}
        <button type="submit">
          Like {{ $message->goods_count }}
        </button>
      {!! Form::close() !!}
    @endif
  @endif
@section('content')

@if (Auth::check())
                                    @if ($good->where('message_id', $val->id)->exists())
                                    <a href="{{ action('GoodsController@destroy', ['id' => $val->id]) }}" class="btn btn-primary">♥</a>
                                
                                    @else
                                    <a href="{{ action('GoodsController@store', ['id' => $val->id]) }}" class="btn btn-primary">♡</a>
                                @endif
                                @endif