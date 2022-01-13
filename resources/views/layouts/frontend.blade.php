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
        <div class="nav-container" style="margin-bottom:3rem;padding-top:2rem;">
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
            @yield('content')
        </div>

        <footer class="row mt-0 pt-0 mb-0 pb-0">
            <div class="col-sm-7 text-center" style="background-color:#564e62;">
                <div class="row" style="margin-top:10%;">
                    <div class="col-sm-5 text-left" style="padding-left:17%;">
                        <h2 style="color: #FFDE59;font-size: 35px; font-weight: 700;" class="mb-3 pb-0">Let's Talk</h2>
                        <p style="color: #FFDE59; font-family: "Ropa Sans", Sans-serif; font-size: 18px; font-weight: 400;">We always want to know more about our clients. Fill out the form below to reach out.</p>
                    </div>
                    <div class="col-sm-7" style="padding-right:5%;padding-left:5%;">
                        <form action="">
                            <input type="text" class="footer_input footer_input_size_custom" placeholder="Your First Name">
                            <input type="text" class="footer_input footer_input_size_custom mt-3" placeholder="Your Last Name">
                            <input type="text" class="footer_input footer_input_size_custom mt-3" placeholder="Your Email Address">
                            <input type="text" class="footer_input footer_input_size_custom mt-3" placeholder="Your Phone Number">
                            <textarea name="" id="" cols="30" rows="3" class="footer_input mt-3" placeholder="How can we help?"></textarea>

                            <div class="row">
                                <div class="col-sm-7"></div>
                                <div class="col-sm-5 pr-2">
                                    <button type="submit" class="btn_connect_button mt-3">Let's Connect</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 text-left pt-5 pb-5 pl-5" style="background-color:#403254;">
                <img src="{{ asset('img/connect_logo_light.png') }}" alt="logo_light" width="60%">
                <div class="p-2" style="color:#fff;">
                    <h4 style="color: #FFFFFF;font-size: 1.3rem;font-weight: 400;" class="mb-3 pb-0">Contact Us</h4>
                    <p class="pb-0 mb-0" style="font-size:.8rem">Direct: <a href="tel:4168009272" style="color:#79c9d1;">416.800.9272</a></p>
                    <p style="font-size:.8rem">Email: <a href="mailto:admin@connect.ca" style="color:#79c9d1;">admin@connect.ca</a></p>

                    <p class="pb-0 mb-0" style="font-size:.8rem">
                        Keller Williams Referred Urban Connect Realty
                        <br>
                        624 King Street West Lower Level
                        <br>
                        Toronto, ON M5V 1M7
                    </p>

                    <h4 style="color: #FFFFFF;font-size: 1.3rem;font-weight: 400;" class="mt-3 pb-0 mb-1">Follow Us</h4>
                    <ul class="menu-horizontal">
                        <li><a href="#" style="opacity:1;"><i class="socicon socicon-instagram icon icon--xs icon_footer"></i></a></li>
                        <li><a href="#" style="opacity:1;"><i class="socicon socicon-twitter icon icon--xs icon_footer"></i></a></li>
                        <li><a href="#" style="opacity:1;"><i class="socicon socicon-linkedin icon icon--xs icon_footer"></i></a></li>
                        <li><a href="#" style="opacity:1;"><i class="socicon socicon-facebook icon icon--xs icon_footer"></i></a></li>
                        <li><a href="#" style="opacity:1;"><i class="socicon socicon-youtube icon icon--xs icon_footer"></i></a></li>
                    </ul>

                    <p class="" style="font-size:.8rem">
                        © Connect.ca 2020 | <a href="" style="color:#79c9d1;">Privacy Policy</a> | <a href="" style="color:#79c9d1;">Contact Us</a>
                        <br>
                        Made by MergedMedia
                    </p>
                </div>
            </div>
        </footer>

        <script src="{{ asset('stack/js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('stack/js/flickity.min.js') }}"></script>
        <script src="{{ asset('stack/js/parallax.js') }}"></script>
        <script src="{{ asset('stack/js/isotope.min.js') }}"></script>
        <script src="{{ asset('stack/js/countdown.min.js') }}"></script>
        <script src="{{ asset('stack/js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('stack/js/scripts.js') }}"></script>
        
    </body>

</html>