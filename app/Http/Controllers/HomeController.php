<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Message;
use App\Good;
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

    public function list(Request $request)
    {
    # messageテーブルを取得

    $messages = DB::select('select * from messages ORDER BY created_at');
    $goods = new Good;
    $good  = $goods->where('user_id', Auth::user()->id);
    return view('home', ['messages' => $messages, 'good' => $good]);
}
}
