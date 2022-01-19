<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Post;
use App\Models\Media;

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

    // FRONTEND PAGES
    public function front_page()
    {
        $featured_listings = Project::with('media')
                                    ->where('is_featured',1)
                                    ->where('sales_status','!=','Under Development')
                                    ->where('status','Publish')
                                    ->get();

        $featured_developments = Project::with('media')
                                        ->where('is_featured',1)
                                        ->where('status','Publish')
                                        ->where('sales_status','Under Development')
                                        ->get();

        $featured_blog = Post::with('media')
                                ->where('is_featured',1)
                                ->where('status','publish')
                                ->get();

        return view('frontend.home',compact('featured_listings','featured_developments','featured_blog'));
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

    public function feature_listing()
    {
        return view('frontend.feature_listing');
    }
    public function case_studies()
    {
        return view('frontend.case_studies');  
    }
    public function reis()
    {
        return view('frontend.real_estate_investment_services');  
    }
    public function neighbourhood_search()
    {
        return view('frontend.neighbourhood_search');
    }
    public function our_agents()
    {
        return view('frontend.our_agents');
    }
    public function meet_the_team()
    {
        return view('frontend.meet_the_team');
    }

    public function all_resources()
    {
        return view('frontend.all_resources');
    }
    
}
