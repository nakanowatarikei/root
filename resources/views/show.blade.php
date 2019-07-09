@extends('layouts.app')

@section('content')
@if (Auth::check())
    @if ($good)
      {{ Form::model($message, array('action' => array('messagesController@destroy', $message->id, $goods->id))) }}
        <button type="submit">
          <img src="/images/icon_heart_red.svg">
          Like {{ $message->goods_count }}
        </button>
      {!! Form::close() !!}
    @else
      {{ Form::model($message, array('action' => array('messagesController@store', $message->id))) }}
        <button type="submit">
          <img src="/images/icon_heart.svg">
          Like {{ $message->goods_count }}
        </button>
      {!! Form::close() !!}
    @endif
  @endif
@section('content')