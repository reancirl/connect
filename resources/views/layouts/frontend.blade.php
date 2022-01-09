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
            @yield('content')
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