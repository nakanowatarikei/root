@extends('layouts.app')

@section('')

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Page</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- プロフィール上部 -->
                    <p>{{Auth::user()->name}}</p>
                    <p>Profile:{{Auth::user()->profile}}</p>
                    <p>{{Auth::user()->profile}}</p>

                    <!-- SNSリンク -->
                    @if(Auth::user()->twitter == "")
                    <a href="{{Auth::user() ->twitter}}"><img src="{{ asset('sns/twitter_g.png') }}" alt="twitter" id='twitter' class='sns'></a>
                    @else
                    <a href="{{Auth::user() ->twitter}}"><img src="{{ asset('sns/twitter.png') }}" alt="twitter" id='twitter' class='sns'></a>
                    @endif

                    @if(Auth::user()->facebook == "")
                    <a href="{{Auth::user() ->facebook}}"><img src="{{ asset('sns/facebook_g.png') }}" alt="facebook" id='facebook' class='sns'></a>
                    @else
                    <a href="{{Auth::user() ->facebook}}"><img src="{{ asset('sns/facebook.png') }}" alt="facebook" id='facebook' class='sns'></a>
                    @endif

                    @if(Auth::user()->instagram == "")
                    <a href="{{Auth::user() ->instagram}}"><img src="{{ asset('sns/instagram_g.png') }}" alt="instagram" id='instagram' class='sns'></a>
                    @else
                    <a href="{{Auth::user() ->instagram}}"><img src="{{ asset('sns/instagram.png') }}" alt="instagram" id='instagram' class='sns'></a>
                    @endif

                    @if(Auth::user()->qiita == "")
                    <a href="{{Auth::user() ->qiita}}"><img src="{{ asset('sns/qiita_g.png') }}" alt="qiita" id='qiita' class='sns'></a>
                    @else
                    <a href="{{Auth::user() ->qiita}}"><img src="{{ asset('sns/qiita.png') }}" alt="qiita" id='qiita' class='sns'></a>
                    @endif

                    <!-- メッセージリスト -->
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


