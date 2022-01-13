
   
@extends('layouts.frontend')

@section('content')
    <div class="container-fluid" style="height: 300px;">
        <div class="row justify-content-center">
            <div class="col-md-5" style="margin-top:4%;">
                <h1 style="color: #403254;font-weight: 800;font-size: 4rem;">
                    Buying and Selling
                    <br> 
                    is at Our Core
                </h1>
                <p style="color:#000; font-size:1.3rem;" class="lead">Despite our end-to-end suite of 
                    <u style="color: #1e73be">
                        investment services
                    </u>
                    , Connect.ca hasn’t lost 
                    <br> 
                    touch with the core functions every real estate brokerage is built on – buying 
                    <br>                    
                    and selling property.</p>
            </div>

            <div>
                <img alt="image" src="{{ asset('img/rres.png') }}" id="rres_png">
                <style type="text/css">
                    @media (max-width:629px) {
                        img#rres_png {
                            display: none;
                            }
                        }
                </style>
            </div>
            
        </div>
    </div>
    <br><br><br><br>
    <div style="background-color: #f1f2f9;">
    <br>
    <div class="container mb-4">
        <div align="center">
           <div class="text-block"></div>
            <div class="col-lg-7">
                <div class="text-block">
                    <p style="color:#000; font-size:1.3rem;" class="lead text-center">With the addition of Lisa Andrews, a storied resale real estate professional with decades of experience in building and leading
                         teams of top-class real estate brokers to numerous awards and achievements, Connect.ca also knows how to help clients buy and sell single properties better 
                         than the competition.</p>
                </div>
                <a class="btn_connect_button mr-5">What Your Home Worth?</a>
                <a class="btn_connect_button">Connect with a Buyer's Agent</a>
            </div>
        </div>
    </div>
    
    <br>
    <div class="container">
        <div class="row justify-content-around">
             <div class="col-md-6"> <img alt="Image" src="{{ asset('img/2-Exterior.jpg') }}" style="width: 1100px;"> </div>
            <div class="col-md-6">
                <div class="switchable__text">

                    <div class="text-block"></div><div class="text-block"></div>
                    <h2 style="color: #403254;font-size: 25px;font-weight: bold;font-family: Ropa Sans, Sans-serif;">The Resale Experience</h2>
                    <p class="lead" style="font-size: 1.2rem;color:#000;"> While we believe that every property owner already has the potential to become a successful investor, we know that many transactions with our clientele will solely be a one-time purchase or sale. </p> 
                    <div class="float-right">
                        <ul class="accordion accordion-2">
                            <li class="">
                                <div class="accordion__title" style="opacity:1;"> 
                                    <span class="h5 float-right" style="color:#3A3594;text-decoration:underline;">Read More ></span>
                                 </div>
                                <div class="accordion__content">
                                    <p class="lead" style="color:#000;font-size:1.2rem;"> Stack follows the BEM naming convention that focusses on logical code readability that is reflected in both the HTML and CSS.
                                         Interactive elements such as accordions and tabs follow the same markup patterns making rapid development easier for developers and beginners
                                          alike. </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-6">
                <div class="switchable__text">
                    <div class="text-block"></div><div class="text-block"></div>
                    <h2 style="color: #403254;font-size: 25px;font-weight: bold;font-family: Ropa Sans, Sans-serif;">Home Advantage</h2>
                    <p class="lead" style="font-size: 1.2rem;color:#000;"> WOur customer service second-to-none in the industry. Along with access to our in-house real estate brokerage, Connect.ca Realty, we also utilize the services of in-house team of VIP Platinum Realtors, as well as our in-house Resale network, and our OneDayAssignments and OneDayPurchase programs – all to our clients’ full advantage. </p> 
                    <div class="float-right">
                        <ul class="accordion accordion-2">
                            <li class="">
                                <div class="accordion__title" style="opacity:1;"> 
                                    <span class="h5 float-right" style="color:#3A3594;text-decoration:underline;">Read More ></span>
                                 </div>
                                <div class="accordion__content">
                                    <p class="lead" style="color:#000;font-size:1.2rem;"> Stack follows the BEM naming convention that focusses on logical code readability that is reflected in both the HTML and CSS.
                                         Interactive elements such as accordions and tabs follow the same markup patterns making rapid development easier for developers and beginners
                                          alike. </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6"> <img alt="Image" src="{{ asset('img/3-InteriorPlaceHolder.jpg') }}" style="width: 1100px;"> </div>
        </div>
    </div>
    <br><br>
    <section class="unpad pb-0 mb-0">
        <div class="imagebg text-center height-50" style=" background: linear-gradient(rgba(58, 53, 148, 0.8), rgba(58, 53, 148, 0.8)), url('{{ asset('uploads/CTAPanel.png') }}');; background-repeat: no-repeat; background-size: cover;">
            <div class="background-image-holder"> </div>
            <div class="container pos-vertical-center">
                <div class="row" >
                    <div class="col-md-12">
                        <div class="article__title">
                            <h1 style="font-family:Roboto, Sans-serif; color: #FFDE59; font-size: 50px; font-weight:800;">
                                Sell with Us Today
                            </h1>
                            <p style="text-align: center; color: #FFDE59; font-family: Ropa Sans, Sans-serif; font-size: 22px; font-weight: 700;">
                                Selling with Connect.ca is the easiest, most integrated
                                <br>
                                selling experience on the market. To sell with the best,
                                <br>
                                click below.
                            </p>

                            <a class="btn_connect_button" style="padding-left:2rem !important;padding-right:2rem !important;">Get Selling</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
