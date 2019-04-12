<?php

namespace App\Http\Controllers;

use App\Pricing;
use App\Testimonials;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fe_testimonials = Testimonials::orderBy('sort_order', 'ASC')->where('status', 'Active')->get();
        $totalBrand = User::where('user_type','0')->where('status','1')->count();
        $totalInfluencer = User::where('user_type','1')->where('status','1')->count();
        $pricing = Pricing::where('status','1')->get();



       // dd($totalBrand);
        return view('landing/index', compact('fe_testimonials','totalBrand','totalInfluencer','pricing'));
    }

    public function choose_social_account()
    {
        return view('landing/socialaccount');
    }

    public function pagenotfound() {
        return view('landing.error.404');
    }
}
