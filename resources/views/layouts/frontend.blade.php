<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Connect</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('stack/css/stack-interface.css') }}" rel="stylesheet" type="text/css" media="all">
        <link href="{{ asset('stack/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('stack/css/flickity.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('stack/css/stack-interface.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('stack/css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('stack/css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('stack/css/socicon.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">

    </head>
    <body data-smooth-scroll-offset="77">
        <div class="nav-container" style="margin-bottom:3rem;padding-top:2rem">
            <div>
                <div class="bar bar--sm visible-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-3 col-md-2">
                                <a href="index.html"> <img class="logo logo-dark" alt="logo" src="{{ asset('img/connect_logo.png') }}"> <img class="logo logo-light" alt="logo" src="{{ asset('img/connect_logo.png') }}"> </a>
                            </div>
                            <div class="col-9 col-md-10 text-right">
                                <a href="#" class="hamburger-toggle" data-toggle-class="#menu2;hidden-xs hidden-sm"> <i class="icon icon--sm stack-interface stack-menu"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav id="menu2" class="bar bar-2 hidden-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 text-center text-left-sm hidden-xs order-lg-2">
                                <div class="bar__module">
                                    <a href="{{ url('/') }}"> <img class="logo logo-dark" alt="logo" src="{{ asset('img/connect_logo.png') }}" style="max-height:120%;"> <img class="logo logo-light" alt="logo" src="{{ asset('img/connect_logo.png') }}" style="max-height:120%;"> </a>
                                </div>
                            </div>
                            <div class="col-lg-5 order-lg-1">
                                <div class="bar__module">
                                    <ul class="menu-horizontal text-left">
                                        <li><a href="#" style="opacity:1;"><i class="socicon socicon-instagram icon icon--xs"></i></a></li>
                                        <li><a href="#" style="opacity:1;"><i class="socicon socicon-twitter icon icon--xs"></i></a></li>
                                        <li><a href="#" style="opacity:1;"><i class="socicon socicon-linkedin icon icon--xs"></i></a></li>
                                        <li><a href="#" style="opacity:1;"><i class="socicon socicon-facebook icon icon--xs"></i></a></li>
                                        <li><a href="#" style="opacity:1;"><i class="socicon socicon-youtube icon icon--xs"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 text-right text-left-xs text-left-sm order-lg-3">
                                <div class="bar__module">
                                    <a href="tel:416-800-9272" class="secondary_text_color" style="line-height:200%;">
                                        Call Us
                                        <br>
                                        416-800-9272
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="main-container">
            <section class="imageblock switchable feature-large height-100 switchable--switch">
                <div class="imageblock__content col-lg-6 col-md-4 pos-right">
                    <div class="background-image-holder"> <img alt="image" src="{{ asset('uploads/home_banner_1.jpeg') }}"> </div>
                </div>
                <div class="container pos-vertical-center" style="margin-left:3rem !important;">
                    <div class="row">
                        <div class="col-lg-5 col-md-7">
                            <h1 style="font-weight:900; color:#403254; font-family:Roboto; font-size: 3.8rem;">
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
                            <button class="btn_connect_button mr-4">Selling & Buying</button>
                            <button class="btn_connect_button">Investment Services</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="row mt-0 pt-0">
                <div class="col-lg-6 col-md-4 text-center" style="background-color:#3A3594;height:100vh;">
                    <h2 style="font-weight:900; color:#fff; font-family:Roboto; font-size: 3rem;margin-top:40%;" >
                        Our Featured Listings
                    </h2>
                    <p style="color:#fff; font-weight:400; font-size:18px;">
                        Looking for your next property? Our listings represent some of the
                        <br> 
                        best resale and investment opportunities available.
                    </p>
                    <button class="btn_connect_button mr-4">Our Listings</button>
                    <button class="btn_connect_button">Start Buying</button>
                </div>
                <div class="col">
                
                </div>
            </section>
            <section class="text-center">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-8 col-lg-6">
                            <div class="cta">
                                <h2 style="color:#403254;font-family:Roboto;font-weight:700;">Start Your Search</h2>
                                <p style="color:#000; font-weight:400; font-size:18px;">
                                    Browse our selection of listings according to your needs to
                                    find properties that match your criteria.
                                </p>                                
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
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
                    <button class="btn_connect_button mt-4" style="font-weight:500;">Find Listings</button>
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
                                <h2 style="color:#403254;font-family:Roboto;font-weight:900;font-size:3rem;" class="mb-0 pb-0">Pre-Construction Developments</h2>
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
                                        <li> 
                                            <div class="row">
                                                <div class="col">
                                                    <h2 class="development_slider_number text-left pb-0 mb-0">01</h2>
                                                    <h2 class="development_slider_title text-left pb-0 mb-2">Featured Development</h2>
                                                    <p style="color:#3A3594; font-weight:400; font-size:16px;" class="mt-0 pt-0 pb-0 mb-3">
                                                        55 Charles Street East, Toronto By Mod Developments
                                                    </p> 
                                                    <p style="color:#000; font-weight:400; font-size:14px;padding-left:5rem;" class="mt-0 pt-0 text-left">
                                                        Etiam eu venenatis magna, ac fermentum est. Vestibulum sit amet posuere ipsum. Nullam neque risus, dapibus sit amet 
                                                        ullamcorper ut, pellentesque eu massa. Cras maximus mauris eget justo convallis…					
                                                    </p>  
                                                    <button class="btn_connect_button mr-4 float-right">Read more</button>
                                                </div>
                                                <div class="col">
                                                    <img alt="Image" src="{{ asset('stack/img/work-1.jpg') }}"> 
                                                </div>
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="row">
                                                <div class="col">
                                                    <h2 class="development_slider_number text-left pb-0 mb-0">02</h2>
                                                    <h2 class="development_slider_title text-left pb-0 mb-2">Featured Development</h2>
                                                    <p style="color:#3A3594; font-weight:400; font-size:16px;" class="mt-0 pt-0 pb-0 mb-3">
                                                        55 Charles Street East, Toronto By Mod Developments
                                                    </p> 
                                                    <p style="color:#000; font-weight:400; font-size:14px;padding-left:5rem;" class="mt-0 pt-0 text-left">
                                                        Etiam eu venenatis magna, ac fermentum est. Vestibulum sit amet posuere ipsum. Nullam neque risus, dapibus sit amet 
                                                        ullamcorper ut, pellentesque eu massa. Cras maximus mauris eget justo convallis…					
                                                    </p>  
                                                    <button class="btn_connect_button mr-4 float-right">Read more</button>
                                                </div>
                                                <div class="col">
                                                    <img alt="Image" src="{{ asset('stack/img/work-2.jpg') }}">
                                                </div>
                                            </div>
                                        </li>
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
                            <div class="masonry__item col-md-4 text-center filter-print" data-masonry-filter="Print">
                                <div class="project-thumb">
                                    <a href="#"> <img alt="Image" class="border--round" src="{{ asset('stack/img/work-6.jpg') }}"> </a>
                                    <h4 class="featured_developments_title">Deveplopment Name</h4> 
                                    <h4 class="featured_developments_subtitle">Toronto | 1234 Long Street Address</h4> 
                                </div>
                            </div>
                            <div class="masonry__item col-md-4 text-center filter-print" data-masonry-filter="Print">
                                <div class="project-thumb">
                                    <a href="#"> <img alt="Image" class="border--round" src="{{ asset('stack/img/work-2.jpg') }}"> </a>
                                    <h4 class="featured_developments_title">Deveplopment Name</h4> 
                                    <h4 class="featured_developments_subtitle">Toronto | 1234 Long Street Address</h4>
                                </div>
                            </div>
                            <div class="masonry__item col-md-4 text-center filter-print" data-masonry-filter="Print">
                                <div class="project-thumb">
                                    <a href="#"> <img alt="Image" class="border--round" src="{{ asset('stack/img/work-3.jpg') }}"> </a>
                                    <h4 class="featured_developments_title">Deveplopment Name</h4> 
                                    <h4 class="featured_developments_subtitle">Toronto | 1234 Long Street Address</h4>
                                </div>
                            </div>
                        </div>
                        <div class="masonry__container row masonry--active">
                            <div class="masonry__item col-md-4 text-center filter-print" data-masonry-filter="Print">
                                <div class="project-thumb">
                                    <a href="#"> <img alt="Image" class="border--round" src="{{ asset('stack/img/work-1.jpg') }}"> </a>
                                    <h4 class="featured_developments_title">Deveplopment Name</h4> 
                                    <h4 class="featured_developments_subtitle">Toronto | 1234 Long Street Address</h4>
                                </div>
                            </div>
                            <div class="masonry__item col-md-4 text-center filter-print" data-masonry-filter="Print">
                                <div class="project-thumb">
                                    <a href="#"> <img alt="Image" class="border--round" src="{{ asset('stack/img/work-5.jpg') }}"> </a>
                                    <h4 class="featured_developments_title">Deveplopment Name</h4> 
                                    <h4 class="featured_developments_subtitle">Toronto | 1234 Long Street Address</h4>
                                </div>
                            </div>
                            <div class="masonry__item col-md-4 text-center filter-print" data-masonry-filter="Print">
                                <div class="project-thumb">
                                    <a href="#"> <img alt="Image" class="border--round" src="{{ asset('stack/img/work-4.jpg') }}"> </a>
                                    <h4 class="featured_developments_title">Deveplopment Name</h4> 
                                    <h4 class="featured_developments_subtitle">Toronto | 1234 Long Street Address</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-4">
                        <button class="btn_connect_button mr-4">View Developments</button>
                        <button class="btn_connect_button">ROI Calculator</button>
                    </div>
                </div>
            </section>
            <section class="switchable feature-large" style="padding-top:8rem;">
                <div class="container" style="margin-left:1rem;margin-right:1rem;">
                    <div class="row justify-content-around">
                        <div class="col-md-6"> 
                            <img alt="Image" class="border--round" src="{{ asset('uploads/cover_circle_image.png') }}"> 
                        </div>
                        <div class="col-md-6 col-lg-5 text-center">
                            <div class="switchable__text">
                                <h2 style="color:#403254;font-family:Roboto;font-weight:700;">Our Resources</h2>
                                <p style="color:#000; font-weight:400; font-size:16px;" class="mt-5 pt-0">
                                    Learn more about real estate investing, what
                                    makes our services different, and the outcomes
                                    we’ve helped clients achieve.
                                </p>
                                <button class="btn_connect_button">Our FAQs</button>
                                <button class="btn_connect_button">Case Studies</button>
                             </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-6">
                            <div class="cta">
                                <h2>Purchase Stack now and get lifetime free content updates</h2>
                                <p class="lead"> Each purchase of Stack comes with six months free support — and a lifetime of free content and bug-fix updates. </p>
                                <a class="btn btn--primary type--uppercase" href="#purchase-template"> <span class="btn__text">
                            Purchase on Envato
                        </span> <span class="label">$18 USD</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="imageblock switchable feature-large height-100">
                <div class="imageblock__content col-lg-6 col-md-4 pos-right">
                    <div class="background-image-holder"> <img alt="image" src="{{ asset('stack/img/inner-3.jpg') }}"> </div>
                </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-lg-5 col-md-7">
                            <h1>Launching Soon</h1> <span class="h2 countdown color--primary" data-date="09/25/2018" data-fallback-text="Getting ready"></span>
                            <p class="lead">We're preparing to launch soon — hit the form below and we'll let you know when we're live.</p>
                            <form action="//mrare.us8.list-manage.com/subscribe/post?u=77142ece814d3cff52058a51f&amp;id=f300c9cce8" data-success="Thanks for signing up.  Please check your inbox for a confirmation email." data-error="Please provide your email address.">
                                <div class="row">
                                    <div class="col-12"> <input class="validate-required validate-email" type="email" name="EMAIL" placeholder="Email Address"> </div>
                                    <div class="col-12"> <button type="submit" class="btn btn--primary type--uppercase">Notify Me</button> </div>
                                    <div class="col-12"> <span class="type--fine-print">By signing up, you agree to the <a href="#">Terms of Service</a></span> </div>
                                    <div style="position: absolute; left: -5000px" aria-hidden="true"> <input type="text" name="b_77142ece814d3cff52058a51f_f300c9cce8" tabindex="-1" value=""> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="imageblock switchable feature-large height-100">
                <div class="imageblock__content col-lg-6 col-md-4 pos-right">
                    <div class="background-image-holder"> <img alt="image" src="{{ asset('stack/img/inner-3.jpg') }}"> </div>
                </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-lg-5 col-md-7">
                            <h1>Launching Soon</h1> <span class="h2 countdown color--primary" data-date="09/25/2018" data-fallback-text="Getting ready"></span>
                            <p class="lead">We're preparing to launch soon — hit the form below and we'll let you know when we're live.</p>
                            <form action="//mrare.us8.list-manage.com/subscribe/post?u=77142ece814d3cff52058a51f&amp;id=f300c9cce8" data-success="Thanks for signing up.  Please check your inbox for a confirmation email." data-error="Please provide your email address.">
                                <div class="row">
                                    <div class="col-12"> <input class="validate-required validate-email" type="email" name="EMAIL" placeholder="Email Address"> </div>
                                    <div class="col-12"> <button type="submit" class="btn btn--primary type--uppercase">Notify Me</button> </div>
                                    <div class="col-12"> <span class="type--fine-print">By signing up, you agree to the <a href="#">Terms of Service</a></span> </div>
                                    <div style="position: absolute; left: -5000px" aria-hidden="true"> <input type="text" name="b_77142ece814d3cff52058a51f_f300c9cce8" tabindex="-1" value=""> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="{{ asset('stack/js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('stack/js/flickity.min.js') }}"></script>
        <script src="{{ asset('stack/js/parallax.js') }}"></script>
        <script src="{{ asset('stack/js/isotope.min.js') }}"></script>
        <script src="{{ asset('stack/js/countdown.min.js') }}"></script>
        <script src="{{ asset('stack/js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('stack/js/scripts.js') }}"></script>

    </body>

</html>