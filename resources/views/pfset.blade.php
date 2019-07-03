<!-- resources/views/books.blade.php -->
@extends('layouts.app')
@section('content')

    <!-- @yield('content') -->
<div class="container">
<form action="{{ url('pfsets') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">名前</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="名前" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">facebookのURL</label>
            <input type="url" class="form-control" id="exampleInputEmail1" placeholder="facebook" name="facebook">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">TwitterのURL</label>
            <input type="url" class="form-control" id="exampleInputEmail1" placeholder="Twitter" name="twtter">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">instagramのURL</label>
            <input type="url" class="form-control" id="exampleInputEmail1" placeholder="instagram" name="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">QiitaのURL</label>
            <input type="url" class="form-control" id="exampleInputEmail1" placeholder="Qiita" name="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">プロフィール説明文</label>
            <textarea class="form-control" rows="3" placeholder="プロフィール説明文" name="Password"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">プロフィール画像</label>
            <input type="file" id="exampleInputFile" name="image" capture="camera">
            <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="checkbox">
            <label>
            <input type="checkbox"> Check me out
            </label>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </form>
    @endsection
</div>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
