@extends('layouts.frontend')

@section('content')
    <section class="imageblock feature-large height-100">
        <div class="container pos-vertical-center" style="margin-left:3rem !important;background-image:url('{{ asset('uploads/headerbannerblank1.jpg') }}'); background-size: cover;">
            <div class="row">
                <div class="col-lg-5 col-md-7">
                    <h1 style="font-weight:900; color:#403254; font-size: 3.8rem;">
                        Your Full-Service
                        <br>
                        Real Estate
                        <br>
                        Brokerage
                    </h1>
                    <p style="color:#000; font-weight:400; font-size:18px;">Whether you’re looking to buy, sell, manage,
                        or invest, we cover the entire real estate journey
                        to meet all of your needs.
                    </p>
                    <a class="btn_connect_button mr-4">Selling & Buying</a>
                    <a class="btn_connect_button">Investment Services</a>
                </div>
            </div>
        </div>
        <div class="imageblock__content col-lg-6 col-md-4 pos-right">
            <div class="background-image-holder"> <img alt="image" src="{{ asset('uploads/home_banner_1.jpeg') }}"> </div>
        </div>
    </section>
    <section class="row mt-0 pt-0">
        <div class="col-lg-6 col-md-4 text-center" style="background-color:#3A3594;">
            <div style="height:100%;display:block;padding-bottom:30%;">
                <div style="position:sticky;top:30%;left:0;">
                    <h2 style="font-weight:900; color:#fff; font-size: 3rem;margin-top:30%;">
                        Our Featured Listings
                    </h2>
                    <p style="color:#fff; font-weight:400; font-size:18px;">
                        Looking for your next property? Our listings represent some of the
                        <br> 
                        best resale and investment opportunities available.
                    </p>
                    <div style="padding-bottom:30%;">
                        <a class="btn_connect_button mr-4">Our Listings</a>
                        <a class="btn_connect_button">Start Buying</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col pt-5 featured_section">
            @foreach ($featured_listings as $item)
                <a href="{{ $item->media ? asset('storage/'.$item->media->path) : '' }}" class="featured_listing_a">
                    <img class="mb-0 pb-3" src="{{ $item->media ? asset('storage/'.$item->media->path) : '' }}" alt="{{ $item->media ? $item->media->alt_text : '' }}" width="100%">
                    <br>
                    <span class="featured_listings_address">{{ $item->address }}</span>
                    <br>
                    <span class="bed_bath_count">{{ $item->beds }} Bed | {{ $item->baths }} Baths</span>
                </a>
                <br>
                <br>
                <br>
            @endforeach
        </div>
    </section>
    <section class="text-center">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-lg-6">
                    <div class="cta">
                        <h2 style="color:#403254font-weight:700;">Start Your Search</h2>
                        <p style="color:#000; font-weight:400; font-size:18px;">
                            Browse our selection of listings according to your needs to
                            find properties that match your criteria.
                        </p>                                
                    </div>
                </div>
            </div>
            <div class="d-flex mb-4">
                <input type="text" class="rounded-0 search_input search_fields thin_border_right flex-grow-1" placeholder="Enter a city, town neighbourhood or address">

                <select name="" id="" style="border-radius:0px !important;text-align:center;" class="search_fields thin_border_right">
                    <option disabled selected>Property Type</option>
                </select>
                <select name="" id="" style="border-radius:0px !important;text-align:center;" class="search_fields thin_border_right">
                    <option disabled selected>Min Price</option>
                </select>
                <select name="" id="" style="border-radius:0px !important;text-align:center;" class="search_fields thin_border_right">
                    <option disabled selected>Max Price</option>
                </select>
                <select name="" id="" style="border-radius:0px !important;text-align:center;" class="search_fields thin_border_right">
                    <option disabled selected>Beds</option>
                </select>
                <select name="" id="" style="border-radius:0px !important;text-align:center;" class="search_fields">
                    <option disabled selected>Baths</option>
                </select>
            </div>
            <a class="btn_connect_button" style="font-weight:500;">Find Listings</a>
            <p style="color:#000; font-weight:300; font-size:16px;margin-top:2rem;margin-bottom:0px;padding-bottom:0px;">
                Or search active listings for sale by:
            </p> 
            <p style="color:#000; font-weight:300; font-size:14px;margin-top:0px;padding-top:0px;">
                <a href="">Search by Price</a>
                | <a href="">Search by Neighbourhood</a>
                | <a href="">Search All Listings</a>
                | <a href="">Search All Homes</a>
                | <a href="">Search All Condos</a>
                | <a href="">Search All Lofts</a>
            </p>  
        </div>
    </section>
    <section class="text-center pt-5 mb-0 pb-0" style="background-color:#F1F2F9;">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 col-lg-12">
                    <div class="cta">
                        <h2 style="color:#403254;font-weight:900;font-size:3rem;" class="mb-0 pb-0">Pre-Construction Developments</h2>
                        <p style="color:#000; font-weight:400; font-size:16px;" class="mt-0 pt-0">
                            Ready to enjoy the unique advantages of pre-construction investing? View some
                            <br>
                            of the most exciting developments coming to the market.
                        </p>                                
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="slider" data-arrows="true" data-paging="true" data-timing="30000">
                            <ul class="slides">
                                @foreach ($featured_developments as $i => $item)
                                    <li> 
                                        <div class="row">
                                            <div class="col">
                                                <h2 class="development_slider_number text-left pb-0 mb-0">0{{ ++$i }}</h2>
                                                <h2 class="development_slider_title text-left pb-0 mb-2">{{ $item->title }}</h2>
                                                <p style="color:#3A3594; font-weight:400; font-size:16px;padding-left:5rem" class="mt-0 pt-0 pb-0 mb-3 text-left">
                                                    {{ $item->address }}
                                                </p> 
                                                <p style="color:#000; font-weight:400; font-size:14px;padding-left:5rem;" class="mt-0 pt-0 text-left">
                                                    {{ $item->excerpt }}				
                                                </p>  
                                                <a class="btn_connect_button mr-4 float-right">Read more</a>
                                            </div>
                                            <div class="col">
                                                <img src="{{ $item->media ? asset('storage/'.$item->media->path) : '' }}" alt="{{ $item->media ? $item->media->alt_text : '' }}"> 
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section style="background-color:#F1F2F9;padding-bottom:4rem;">
        <div class="container">
            <div class="masonry">
                <div class="masonry__container row masonry--active">
                    @foreach ($featured_developments as $i => $item)
                        <div class="masonry__item col-md-4 text-center filter-print" data-masonry-filter="Print">
                            <div class="project-thumb">
                                <a href="#"> <img src="{{ $item->media ? asset('storage/'.$item->media->path) : '' }}" alt="{{ $item->media ? $item->media->alt_text : '' }}"> </a>
                                <h4 class="featured_developments_title">{{ $item->title }}</h4> 
                                <h4 class="featured_developments_subtitle">{{ $item->address }}</h4> 
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center pt-4">
                <a class="btn_connect_button mr-4">View Developments</a>
                <a class="btn_connect_button">ROI Calculator</a>
            </div>
        </div>
    </section>
    <section class="switchable feature-large" style="padding-top:8rem;">
        <div class="container" style="">
            <div class="row justify-content-around">
                <div class="col-md-5"> 
                    <img alt="Image" class="border--round" src="{{ asset('uploads/cover_circle_image.png') }}"> 
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 col-lg-5 text-center">
                    <div class="switchable__text">
                        <h2 style="color:#403254font-weight:900;font-size:3.4rem;padding-bottom:0px;margin-bottom:0px;padding-top:5rem;">Our Resources</h2>
                        <p style="color:#000; font-weight:400; font-size:16px;" class="mt-0 pt-0">
                            Learn more about real estate investing, what 
                            <br>
                            makes our services different, and the outcomes
                            <br>
                            we’ve helped clients achieve.
                        </p>
                        <a class="btn_connect_button">Our FAQs</a>
                        <a class="btn_connect_button">Case Studies</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center mb-0 pb-0">
        <div class="row mb-3">
            <div class="col" style="background-image:url('{{ asset('uploads/LinkedBrandmarks1.png') }}'); background-size: cover;padding-top:10%;">
                <h2 style="font-weight:900;font-size:3rem;color:#403254;">
                    Investing In Success
                </h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col pt-0 mt-0">
                <p style="color:#000; font-weight:400; font-size:17px;" class="mb-5">
                    Our personal real estate portfolios are a testament to our
                    <br>
                    expertise. Find out more about our full-circle investment process—
                    <br>
                    and start securing your future.
                </p>                                
                <a class="btn_connect_button">Our FAQs</a>
                <a class="btn_connect_button">Case Studies</a>
            </div>
        </div>
        <div class="row">
            <div class="col" style="background-image:url('{{ asset('uploads/LinkedBrandmarks2.png') }}'); background-size: cover;background-position: center bottom;padding-bottom:10%;">

            </div>
        </div>
    </section>
    <section class="row mt-0 pt-0 mb-0 pb-0">
        <div class="col pt-5 featured_section">
            @foreach ($featured_blog as $item)
                <a href="{{ $item->media ? asset('storage/'.$item->media->path) : '' }}" class="featured_listing_a">
                    <img class="mb-0 pb-3" src="{{ $item->media ? asset('storage/'.$item->media->path) : '' }}" alt="{{ $item->media ? $item->media->alt_text : '' }}" width="100%">
                    <br>
                    <span class="featured_listings_address">{{ $item->title }}</span>
                    <br>
                    <span class="bed_bath_count">{{ $item->beds }} Bed | {{ $item->baths }} Baths</span>
                </a>
                <br>
                <br>
                <br>
            @endforeach
        </div>
        <div class="col-lg-6 col-md-4 text-center" style="background-color:#403254;">
            <div style="height:100%;display:block;padding-bottom:40%;">
                <div style="position:sticky;top:40%;left:0;">
                    <h2 style="font-weight:900; color:#fff; font-size: 3rem;margin-top:40%;" >
                        The Connect Blog
                    </h2>
                    <p style="color:#fff; font-weight:400; font-size:18px;">
                        Visit our blog for up-to-date real estate
                        <br>
                        insight, market trends, investment tips,
                        <br>
                        and much more.
                    </p>
                    <div style="padding-bottom:40%;">
                        <a class="btn_connect_button mr-4">Read Posts</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row mt-0 pt-0 mb-0 pb-0">
        <div class="col-lg-6 col-md-4 text-center" style="background-color:#3A3594;height:100vh;">
            <h2 style="font-weight:900; color:#fff; font-size: 3rem;margin-top:40%;" >
                About Connect
            </h2>
            <p style="color:#fff; font-weight:400; font-size:18px;">
                Here’s how we’ve gone from being first-time home
                <br>
                buyers to seasoned investors to Canada’s leading full-
                <br>
                service real estate providers.
            </p>
            <a class="btn_connect_button mr-4">Read Our Story</a>
            <a class="btn_connect_button">Meet The Team</a>
        </div>
        <div class="col" style="background-image:url('{{ asset('uploads/owners.jpeg') }}'); background-size: cover;">
        
        </div>
    </section>
@endsection
