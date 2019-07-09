<!-- resources/views/books.blade.php -->
@extends('layouts.app')
@section('content')

    <!-- @yield('content') -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <div>
          <h1>エールを送る</h1>
          <!-- <p>説明文</p>
          <p>説明文2</p> -->
          <div id="controls">
          <button id="recordButton">Record</button>
          <!-- <button id="stopButton" disabled>Stop</button> -->
          </div>
          <div id="formats">Format: start recording to see sample rate</div>
          <h3>Recordings</h3>
          <ol id="recordingsList"></ol>
          <ul>
            <li id = "retake"></li>
          </ul>
        </div>
@endsection
<!-- <script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script> -->
<!-- <script type="text/javascript" src="{{ asset('js/record.js') }}"></script> -->

