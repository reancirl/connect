@extends('layouts.frontend')

@section('content')

<div class="main-container">
    <section class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8">
                    <h1 style="color: #403254; font-family: Roboto', Sans-serif; font-size: 55px; font-weight: 800; line-height: 57px;">
                         The Connect Team of Agents
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="slider" data-paging="true">
                        <ul class="slides">
                            <li class="col-md-3 col-12">
                                <div class="product">
                                    <a href="#"> <img alt="Image" src="{{ asset('uploads/human1.jpg') }}"> </a>
                                    <a class="block" href="#">
                                        <div>
                                            <h5 style="font-weight: 600; font-size: 18px; line-height: 24px; margin: 0; margin-top: 12px; padding-bottom: 0;">
                                                Sample 1
                                            </h5>
                                        </div>
                                        <div> 
                                            <span>
                                                Sales Representative
                                            </span> 
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="col-md-3 col-12">
                                <div class="product">
                                    <a href="#"> <img alt="Image" src="{{ asset('uploads/human1.jpg') }}"> </a>
                                    <a class="block" href="#">
                                        <div>
                                            <h5 style="font-weight: 600; font-size: 18px; line-height: 24px; margin: 0; margin-top: 12px; padding-bottom: 0;">
                                                Sample 2
                                            </h5>
                                        </div>
                                        <div> 
                                            <span>
                                                Sales Representative
                                            </span>    
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="col-md-3 col-12">
                                <div class="product">
                                    <a href="#"> <img alt="Image" src="{{ asset('uploads/human1.jpg') }}"> </a>
                                    <a class="block" href="#">
                                        <div>
                                            <h5 style="font-weight: 600; font-size: 18px; line-height: 24px; margin: 0; margin-top: 12px; padding-bottom: 0;">
                                                Sample 3
                                            </h5>
                                        </div>
                                        <div> 
                                            <span>
                                                Sales Representative
                                            </span>
                                         </div>
                                    </a>
                                </div>
                            </li>
                            <li class="col-md-3 col-12">
                                <div class="product">
                                    <a href="#"> <img alt="Image" src="{{ asset('uploads/human1.jpg') }}"> </a>
                                    <a class="block" href="#">
                                        <div>
                                            <h5 style="font-weight: 600; font-size: 18px; line-height: 24px; margin: 0; margin-top: 12px; padding-bottom: 0;">
                                                Sample 4
                                            </h5>
                                        </div>
                                        <div>
                                            <span>
                                                Sales Representative
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>
<section class="unpad pb-0 mb-0">
    
    <div class="imagebg text-center height-70" style=" background: linear-gradient(rgba(58, 53, 148, 0.8), rgba(58, 53, 148, 0.8)), url('{{ asset('uploads/Exterior.jpg') }}');; background-repeat: no-repeat; background-size: cover;">
        <div class="background-image-holder"> </div>
        <div class="container pos-vertical-center">
            <div class="row" >
                <div class="col-md-12">
                    <div class="article__title">
                        <h1 style="font-family:Robot, Sans-serif; color: #FFDE59; font-size: 50px; font-weight:800;">We’re Your Full-Service <br> Real Estate Brokerage</h1>
                        <p style="text-align: center; color: #FFDE59; font-family: Ropa Sans, Sans-serif; font-size: 22px; font-weight: 700;">
                            Whether you you’re looking to buy, sell, manage, or invest, we cover the entire <br> real estate journey to meet all of your needs.
                        </p>

                        <a class="our_button">Selling & Buying</a>
                        <a class="our_button">Investment Service</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection