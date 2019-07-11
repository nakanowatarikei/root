@extends('layouts.app')

@section('content')
<div class="container">    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$user->name}}さんのページ</div>

                <div class="card-body">
                <div class="jumbotron">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- プロフィール上部 -->
                    <div style="display:flex; ">
                        @if($user->image == "")
                            <img src="{{ asset('profile.png') }}" alt="">
                        @else
                            
                        @endif
                        
                        <div style="display:flex; align-items: center;">
                            <h2>{{$user->name}}</h2>
                        </div>
                    </div><br>
                    <p>{{$user->profile}}</p>

                    <!-- SNSリンク -->
                    <!-- SNSリンクがnullであればグレースケール -->
                    <div>
                        @if($user->twitter == "")
                        <a href="{{$user->twitter}}"><img src="{{ asset('sns/twitter_g.png') }}" alt="twitter" id='twitter' class='sns'></a>
                        @else
                        <a href="{{$user->twitter}}"><img src="{{ asset('sns/twitter.png') }}" alt="twitter" id='twitter' class='sns'></a>
                        @endif

                        @if($user->facebook == "")
                        <a href="{{$user->facebook}}"><img src="{{ asset('sns/facebook_g.png') }}" alt="facebook" id='facebook' class='sns'></a>
                        @else
                        <a href="{{$user->facebook}}"><img src="{{ asset('sns/facebook.png') }}" alt="facebook" id='facebook' class='sns'></a>
                        @endif

                        @if($user->instagram == "")
                        <a href="{{$user->instagram}}"><img src="{{ asset('sns/instagram_g.png') }}" alt="instagram" id='instagram' class='sns'></a>
                        @else
                        <a href="{{$user->instagram}}"><img src="{{ asset('sns/instagram.png') }}" alt="instagram" id='instagram' class='sns'></a>
                        @endif

                        @if($user->qiita == "")
                        <a href="{{$user->qiita}}"><img src="{{ asset('sns/qiita_g.png') }}" alt="qiita" id='qiita' class='sns'></a>
                        @else
                        <a href="{{$user->qiita}}"><img src="{{ asset('sns/qiita.png') }}" alt="qiita" id='qiita' class='sns'></a>
                        @endif
                    </div><br>

                    <!-- urlシェア部分 -->
                    <div>
                        <input id="copyTarget" type="text" value='<?php echo("http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>' readonly>
                        <button onclick="copyToClipboard()" style="cursor:pointer">URLをコピーする</button>
                    </div>
                </div>
                

                    <!-- メッセージテーブル -->
                    @foreach ($messages as $val)
                        <table class="table table-striped">
                            <tr>
                                <td>{{$val->sender_name}}</td>
                                <td><img src="{{ asset('megaphone.png') }}" style="height:32px; width:32px;"></td>
                                <td><audio src = "/storage/{{$val->message_data}}" controls></td>
                                <td><a href="" class="btn btn-danger">♥</a></td>
                                <td>
                                    <a href="" class="btn btn-primary">♡</a>
                                </td>
                                <td>{{$val->created_at}}</td>
                            </tr>
                        </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <!-- 録音ボタン -->
    <div class="fixed-bottom">
    <a href="/message/{{$user->id}}"><img src="{{ asset('record.png') }}" style="width:64px; height:64px; margin-left:60px; margin-bottom:30px;"></a>
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
