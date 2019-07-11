<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Message;
use App\Good;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }

    public function list()
    {
    # messageテーブルを取得

    $messages = DB::select('select * from messages ORDER BY created_at');
    $goods = new Good;
    $good  = $goods->where('user_id', Auth::user()->id);
    return view('home', ['messages' => $messages, 'good' => $good]);
    }
    public function listUsers()
    {
   

    $users = DB::select('select * from users');
    return view('user', ['users' => $users]);
    }
    public function selectUser($id)
    {
   

    $users = new User;
    $user  = $users->where('id', $id)->first();
    $messages = new Message;
    $message = $messages->where('receiver_id', $id)->get();
    return view('eachUser', ['user' => $user, 'messages' => $message]);
    }
}
