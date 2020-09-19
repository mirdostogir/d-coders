<?php

namespace App\Http\Controllers;

use DB;
use APP\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //$orders=DB::table('orders')->where(['userid' => Auth::user()->id])->first();
        $orders=DB::table('orders')->where('userid', '=', Auth::user()->id)->get();
        return view('home',compact('orders'));
    }

    public function adminHome()
    {
        return view('adminHome');
    }
}
