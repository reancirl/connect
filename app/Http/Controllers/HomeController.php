<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function ourstory()
    {
        return view('frontend.ourstory');
    }
    public function thankyou()
    {
        return view('frontend.thankyou');
    }
     public function rres()
    {
        return view('frontend.rres');
    }
     public function itbw()
    {
        return view('frontend.itbw');
    }
     public function if()
    {
        return view('frontend.if');
    }

    public function join_our_inner_circle()
    {
        return view('frontend.join_our_inner_circle');  
    }

    public function individual_listing()
    {
        return view('frontend.individual_listing');  
    }
    public function case_studies()
    {
        return view('frontend.case_studies');  
    }
    public function neighbourhood_search()
    {
        return view('frontend.neighbourhood_search');
    }
    public function our_agents()
    {
        return view('frontend.our_agents');
    }
}
