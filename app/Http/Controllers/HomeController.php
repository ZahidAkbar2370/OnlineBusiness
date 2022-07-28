<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        if(!empty(auth()->user()) && auth()->user()->role == "shop_owner"){
            return redirect('shop-/dashboard');
        }
        elseif(!empty(auth()->user()) && auth()->user()->role == "customer"){
            return redirect('customer/my-account');
        }
        elseif(!empty(auth()->user()) && auth()->user()->role == "super_admin"){
            return redirect('admin-panel/dashboard');
        }
        else{
            return redirect('404'); 
        }
        // return view('home');
    }
}
