<!-- resources/views/books.blade.php -->
@extends('layouts.app')
@section('content')

    <!-- @yield('content') -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="container">
          <div class="jumbotron text-center">
              <!-- <p>説明文</p>
              <p>説明文2</p> -->
              <!-- <div id="controls"> -->
              <button id="recordButton"><i class="fas fa-microphone fa-lg myicon"></i></button>
              
              <div>クリックするとエールの録音を開始します<br>10秒経過すると自動で録音を終了します</div>
              <!-- <button id="stopButton" disabled>Stop</button> -->
              <!-- </div> -->
              <!-- <div id="formats">Format: start recording to see sample rate</div> -->
              <!-- <h3>Recordings</h3> -->
              <ol id="recordingsList"></ol>
              <ul style="list-style: none;">
                <li id = "retake"></li>
              </ul>
              <input type = "hidden" value ="{{$id}}" id  ="receiver_id">
            <button type="submit" class="btn btn-primary" id="abc" style="visibility:hidden;">エールを送る</button>
          </div>
        </div>
@endsection
<!-- <script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script> -->
<!-- <script type="text/javascript" src="{{ asset('js/record.js') }}"></script> -->

