@extends('layouts.frontend')
@section('title', $seo->title ?? $seo->name)
@section('description', $seo->description ?? '')
@section('keywords', $seo->keywords ?? '')
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
@section('content')
<div class="container">
    <div class="text-center">
        <h1 style="color: #403254;font-size: 50px;font-weight: 800;font-family: 'Roboto', Sans-serif;">FAQs</h1>
        <p style="color: #2A2A2A;font-size: 21px;font-family: 'Ropa Sans', Sans-serif;">Sort through some of our most Frequently Asked<br> Questions to find the quick answer to your question.</p>
    </div><br><br>
</div>
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="accordion_border">
                <div class="accordion_li" id="ffb">
                    FAQs for Buyers
                </div>
                <div class="accordion_li" id="ffs">
                    FAQS for Sellers
                </div>
                <div class="accordion_li" id="ffi">
                    FAQs for Investors
                </div>
                <div class="accordion_li" id="cant">
                    Cant find what you're looking for?
                </div>
                 
            </div><br><br>
            <img src="img/FAQIllustration-1.png" width="224" height="346" style="display: block;margin: auto auto;">
        </div>
        
        <div class="col-8">
            <div class="">
                <div class="accordion_border">
                    <div id="ffi_show" style="display:none;border-style: solid;border-width: 1px;border-color:#3A3594;">
                            <a class="a_hidden">What makes Sellers.ca different?</a>
                            <p class="p_hidden">There are many things that make us different, but here are a few: We negotiate directly with the developer, not the sales company managing sales for the project. Our approach leads to many investment advantages which are not made available to the public.
                                <br><br>
                                We provide you with professional property management services to keep your assets performing strong and healthy to allow you to reach your investment goals.
                                <br><br>
                                We help educate you by utilizing the most advanced and industry approved market research and analysis reports that are not available to the public and/or Realtors. These reports are prepared by the leading research and development firms that developers retain for their own due diligence and market analysis.
                            </p>
                    </div>
                    <div class="accordion_border" id="cant_show"style="display: none;">
                        <button class="accordion">What makes Sellers.ca different?</button>
                            <div class="panel">
                                <p>There are many things that make us different, but here are a few: We negotiate directly with the developer, not the sales company managing sales for the project. Our approach leads to many investment advantages which are not made available to the public.
                                    <br><br>
                                    We provide you with professional property management services to keep your assets performing strong and healthy to allow you to reach your investment goals.
                                    <br><br>
                                    We help educate you by utilizing the most advanced and industry approved market research and analysis reports that are not available to the public and/or Realtors. These reports are prepared by the leading research and development firms that developers retain for their own due diligence and market analysis.
                                </p>
                            </div>
                    </div>
                    <div class="accordion_border"  id="ffs_show"style="display: none;">
                        <button class="accordion">What makes Buyers.ca different?</button>
                            <div class="panel">
                                <p>There are many things that make us different, but here are a few: We negotiate directly with the developer, not the sales company managing sales for the project. Our approach leads to many investment advantages which are not made available to the public.
                                    <br><br>
                                    We provide you with professional property management services to keep your assets performing strong and healthy to allow you to reach your investment goals.
                                    <br><br>
                                    We help educate you by utilizing the most advanced and industry approved market research and analysis reports that are not available to the public and/or Realtors. These reports are prepared by the leading research and development firms that developers retain for their own due diligence and market analysis.
                                </p>
                            </div>
                    </div>
                    <button class="accordion">What makes Connect.ca different?</button>
                        <div class="panel">
                            <p>There are many things that make us different, but here are a few: We negotiate directly with the developer, not the sales company managing sales for the project. Our approach leads to many investment advantages which are not made available to the public.
                                <br><br>
                                We provide you with professional property management services to keep your assets performing strong and healthy to allow you to reach your investment goals.
                                <br><br>
                                We help educate you by utilizing the most advanced and industry approved market research and analysis reports that are not available to the public and/or Realtors. These reports are prepared by the leading research and development firms that developers retain for their own due diligence and market analysis.
                            </p>
                        </div>
                </div>
               
               
                <div class="accordion_border">
                    <button class="accordion">What kind of research do you do?</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        </div>
                </div>
                <div class="accordion_border">
                    <button class="accordion">What are "incentives"?</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        </div>
                </div>
                <div class="accordion_border">
                    <button class="accordion">How much does it cost?</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div><br><br>
<section class="unpad pb-0 mb-0">
    <div class="imagebg text-center height-50" style=" background: linear-gradient(rgba(58, 53, 148, 0.8), rgba(58, 53, 148, 0.8)), url('{{ asset('uploads/CTAPanel.png') }}');; background-repeat: no-repeat; background-size: cover;">
        <div class="background-image-holder"> </div>
        <div class="container pos-vertical-center">
            <div class="row" >
                <div class="col-md-12">
                    <div class="article__title">
                        <h1 style="font-family:Roboto, Sans-serif; color: #FFDE59; font-size: 50px; font-weight:800;">
                            We’re Your Full-Service<br>Real Estate Brokerage
                        </h1>
                        <p style="text-align: center; color: #FFDE59; font-family: Ropa Sans, Sans-serif; font-size: 22px; font-weight: 700;">
                            Whether you you’re looking to buy, sell, manage, or invest, we cover the
                            <br>
                            entire real estate journey to meet all of your needs.
                        </p>
                        <a class="btn_connect_button" style="padding-left:2rem !important;padding-right:2rem !important;">Selling & Buying</a>
                        <a class="btn_connect_button" style="padding-left:2rem !important;padding-right:2rem !important;">Investment Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
    <script>
        var acc = document.getElementsByClassName("accordion");
                var i;
                for (i = 0; i < acc.length; i++) {
                  acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                      panel.style.maxHeight = null;
                    } else {
                      panel.style.maxHeight = panel.scrollHeight + "px";
                    } 
                  });
                }  
        $('#ffi').click(function(){
            $('#ffi_show').show();     
        });         
    </script>
@endsection