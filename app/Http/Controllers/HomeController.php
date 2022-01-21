<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Post;
use App\Models\Media;
use App\Models\Pages;

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

        $seo = Pages::where('name','Home')->first();

        return view('frontend.home',compact('featured_listings','featured_developments','featured_blog','seo'));
    }
    public function ourstory()
    {
        $seo = Pages::where('name','Our Story')->first();
        return view('frontend.ourstory',compact('seo'));
    }
    public function thankyou()
    {
        $seo = Pages::where('name','Thank You')->first();
        return view('frontend.thankyou',compact('seo'));
    }
     public function rres()
    {
        $seo = Pages::where('name','Resale Real Estate Services')->first();
        return view('frontend.rres',compact('seo'));
    }
     public function itbw()
    {
        $seo = Pages::where('name','Investment To Build Wealth')->first();
        return view('frontend.itbw',compact('seo'));
    }
     public function if()
    {
        $seo = Pages::where('name','Investors Faq')->first();
        return view('frontend.if',compact('seo'));
    }

    public function join_our_inner_circle()
    {
        $seo = Pages::where('name','Join Our Inner Circle')->first();
        return view('frontend.join_our_inner_circle',compact('seo'));  
    }

    public function individual_listing()
    {
        $seo = Pages::where('name','Individual Listing')->first();
        return view('frontend.individual_listing',compact('seo'));  
    }

    public function feature_listing()
    {
        $seo = Pages::where('name','Feature Listing')->first();
        return view('frontend.feature_listing',compact('seo'));
    }
    public function case_studies()
    {
        $seo = Pages::where('name','Case Studies')->first();
        return view('frontend.case_studies',compact('seo'));  
    }
    public function reis()
    {
        $seo = Pages::where('name','Real Estate Investment Services')->first();
        return view('frontend.real_estate_investment_services',compact('seo'));  
    }
    public function neighbourhood_search()
    {
        $seo = Pages::where('name','Neighbourhood Search')->first();
        return view('frontend.neighbourhood_search',compact('seo'));
    }
    public function our_agents()
    {
        $seo = Pages::where('name','Our Agents')->first();
        return view('frontend.our_agents',compact('seo'));
    }
    public function meet_the_team()
    {
        $seo = Pages::where('name','Meet The Team')->first();
        return view('frontend.meet_the_team',compact('seo'));
    }
    public function main_search()
    {
        $seo = Pages::where('name','Main Search')->first();
        return view('frontend.main_search',compact('seo'));
    }
    public function all_resources()
    {
        $seo = Pages::where('name','All Resources')->first();
        return view('frontend.all_resources',compact('seo'));
    }
}
