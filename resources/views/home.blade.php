@extends('layouts.app')

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
                    <h2>{{Auth::user()->name}}</h2>
                    <p>Profile:{{Auth::user()->profile}}</p>


                    <!-- SNSリンク -->
                    <!-- SNSリンクがnullであればグレースケール -->
                    <div>
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
                    </div>

                    <!-- urlシェア部分 -->
                    <div>
                    <input id="copyTarget" type="text" value='<?php echo("http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>' readonly>
                    <button onclick="copyToClipboard()" style="cursor:pointer">Copy URL</button>
                    </div>


                    <!-- メッセージテーブル -->
                    @foreach ($messages as $val)
                        <table class="table table-striped">
                            <tr>
                                <td>{{$val->sender_name}}</td>
                                <td>{{$val->message_data}}</td>
                                <td>{{$val->good}}</td>
                                <td>{{$val->bad}}</td>
                                <td>{{$val->created_at}}</td>
                                
                            </tr>
                        </table>
                    @endforeach



                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('homeJs')
<script>
        function copyToClipboard() {
            // コピー対象をJavaScript上で変数として定義する
            var copyTarget = document.getElementById("copyTarget");
            // コピー対象のテキストを選択する
            copyTarget.select();
            // 選択しているテキストをクリップボードにコピーする
            document.execCommand("Copy");
            // コピーをお知らせする
            alert("Sucess! : " + copyTarget.value);
        }
</script>
@endsection
