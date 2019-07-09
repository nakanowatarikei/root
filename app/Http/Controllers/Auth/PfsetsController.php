<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request; 

use App\Pfsets;

class PfsetsController extends Controller
{
    public function index(Request $request)
    {
            //バリデーション
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:64',
        'email' => 'required|max:256',
        'Password' => 'required|max:64',
        'image' => 'required',
        'twtter' => 'required',
        'facebook' => 'required',
        'instagram' => 'instagram',
        'image' => 'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MIMEタイプを指定
                'mimes:jpeg,png',
        'qiita' => 'required',
        'profile' => 'required',
    ]);
    // 画像をpublic/avatarに保存するファイルさえも作成するようにする
    if ($request->file('image')->isValid([])) {
        $filename = $request->file->store('public/avatar');

        $user = User::find(auth()->id()); 
        $user->avatar_filename = basename($filename);
        $user->save();

        return redirect('/home')->with('success', '保存しました。');
    } else {
        return redirect()
            ->back()
            ->withInput()
            ->withErrors(['image' => '画像がアップロードされていないか不正なデータです。']);
    }

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    }
}