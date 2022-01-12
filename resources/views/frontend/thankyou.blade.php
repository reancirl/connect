@extends('layouts.frontend')

@section('content')
    <section class="text-center imagebg mb-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8">
                    <h1 style="color: #403254; font-size: 4rem; font-weight:900;" >
                        Thanks for Connecting!
                    </h1>
                    <p class="lead" style="color:#000000">
                        We’re excited to learn more about your real estate ambitions. We’ll be in touch as
                        <br>
                        soon as we’ve read over your information.
                    </p>
                    <p class="lead" style="color:#000000">
                        If you have any other questions, please reach out to us at <br>
                        <span style="color:#3a3594;text-decoration:underline;font-weight:700;">admin@connect.ca</span> or <span style="color:#3a3594;text-decoration:underline;font-weight:700;">416.800.9272</span>
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section class="text-center pt-0 mt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-10">
                    <img alt="background" src="{{ asset('img/thankyou-person.jpg') }}">
                </div>
            </div>
        </div>
    </section>

    <section class="unpad pb-0 mb-0">
    
            <div class="imagebg text-center height-50" style=" background: linear-gradient(rgba(58, 53, 148, 0.8), rgba(58, 53, 148, 0.8)), url('{{ asset('uploads/CTAPanel.png') }}');; background-repeat: no-repeat; background-size: cover;">
                <div class="background-image-holder"> </div>
                <div class="container pos-vertical-center">
                    <div class="row" >
                        <div class="col-md-12">
                            <div class="article__title">
                                <h1 style="font-family:Robot, Sans-serif; color: #FFDE59; font-size: 50px; font-weight:800;">We’re Your Full-Service <br> Real Estate Brokerage</h1>
                                <p style="text-align: center; color: #FFDE59; font-family: Ropa Sans, Sans-serif; font-size: 22px; font-weight: 700;">
                                    Whether you you’re looking to buy, sell, manage, or invest, we cover the entire <br> real estate journey to meet all of your needs.
                                </p>

                                <a class="btn_connect_button">Selling & Buying</a>
                                <a class="btn_connect_button">Investment Service</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection