@extends('layouts.frontend')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            <div>
                 <ul>
                    <li>
                        <div> <span class="h5">FAQs for Buyers</span> </div>
                    </li>
                    <li>
                        <div > <span class="h5">FAQS for Sellers</span> </div>
                    </li>
                    <li>
                        <div > <span class="h5">FAQs for Investors</span> </div>
                    </li>
                    <li>
                        <div > <span class="h5">Cant find what you're looking for?</span> </div>
                    </li>
                </ul>
            </div>
            <img src="img/FAQIllustration-1.png" width="224" height="346" style="display: block;margin: auto auto;">
        </div>
        <div class="col-8">
            <div class="container" style="border-style: solid;border-width: 1px; border-color: #3A3594;">
                <div class="row">
                    <ul>
                        <li>
                            <div>
                               <div id="1stheader"type="button"data-toggle="collapse" data-target="#1st" style="color:#3A3594;font-size: 18px;font-weight: 400;font-family: Ropa Sans, Sans-serif;">
                                    <span>What makes Connect.ca different? </span>
                                    <a style="position: absolute;top: 0;right: 20;" data-toggle="collapse" data-target="#1st">+</a>
                               </div>
                               <p id="1st" class="collapse">There are many things that make us different, but here are a few: We negotiate directly with the developer, not the sales company managing sales for the project. Our approach leads to many investment advantages which are not made available to the public.
                                <br>
                                We provide you with professional property management services to keep your assets performing strong and healthy to allow you to reach your investment goals.
                                <br>
                                We help educate you by utilizing the most advanced and industry approved market research and analysis reports that are not available to the public and/or Realtors. These reports are prepared by the leading research and development firms that developers retain for their own due diligence and market analysis.
                               </p>
                            </div>
                        </li>
                        <li>
                            <div type="button"data-toggle="collapse" data-target="#2nd"style="color:#3A3594;font-size: 18px;font-weight: 400;font-family: Ropa Sans, Sans-serif;">
                                What kind of research do you do?
                            </div>
                            <p id="2nd" class="collapse">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        </li>
                        <li>
                            <div type="button"data-toggle="collapse" data-target="#3rd"style="color:#3A3594;font-size: 18px;font-weight: 400;font-family: Ropa Sans, Sans-serif;">
                                What are "incentives"?
                            </div> 
                            <p id="3rd" class="collapse">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        </li>
                        <li>
                            <div type="button"data-toggle="collapse" data-target="#4th"style="color:#3A3594;font-size: 18px;font-weight: 400;font-family: Ropa Sans, Sans-serif;">
                                How much does it cost?
                            </div>
                            <p id="4th" class="collapse">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection