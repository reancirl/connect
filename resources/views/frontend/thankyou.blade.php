@extends('layouts.frontend')

@section('content')
<style>
    /* .flex-parent 
    {
  display: flex;
    }
    button 
    {
        border-radius: 50px;
        width: 10px;

    }

.jc-center 
{
  justify-content: center;
}
 
button.margin-right {
  margin-right: 20%;
}  */

.my-button {
    display: inline-block;
    margin: 20px;
    background:#79C9D1; 
    color: #3A3594; 
    fill: #3A3594;
    font-size: 17px;
    font-weight: 800;
    font-family: 'Ropa Sans', Sans-serif!important;
    border-radius: 50px;
    padding: 8px 16px;
    /* -moz-transition: all 0.2s;
    -webkit-transition: all 0.2s; */
    transition: all 0.2s;
}
.my-button:hover {
    background: #666;
    color: #c1e1e0;
}

</style>
<div class="nav-container"> </div>
        <div class="main-container">
            <section class="text-center imagebg">
                <div class="background-image-holder"> <img alt="background" src="img/hero-1.jpg"> </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-lg-8">
                            <h1 style="color: #403254; font-size: 55px; font-weight:800;" >
                                Thanks for Connecting!
                            </h1>
                            <p class="lead" style="color:#000000"> We’re excited to learn more about your real estate ambitions. We’ll be in touch as
                                soon as we’ve read over your information.
                             </p>
                            <p style="color:#000000"> If you have any other questions, please reach out to us at <br>
                                <u style="color:#403254"><b>admin@connect.ca</b></u>  or <u style="color:#403254"><b>416.800.9272</b></u>
                            </p>

                        </div>
                    </div>
                </div>
            </section>
            <section class="text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-10">
                            <img width="1000" height="1067" alt="background" src="{{ asset('img/thankyou-person.jpg') }}">
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <br>
                <br>

            <section class="unpad">
            
                    <div class="imagebg text-center height-70" style=" background: linear-gradient(rgba(58, 53, 148, 0.8), rgba(58, 53, 148, 0.8)), url('{{ asset('uploads/CTAPanel.png') }}');; background-repeat: no-repeat; background-size: cover;">
                        <div class="background-image-holder"> </div>
                        <div class="container pos-vertical-center">
                            <div class="row" >
                                <div class="col-md-12">
                                    <div class="article__title">
                                        <h1 style="font-family:Robot, Sans-serif; color: #FFDE59; font-size: 50px; font-weight:800;">We’re Your Full-Service <br> Real Estate Brokerage</h1>
                                        <p style="text-align: center; color: #FFDE59; font-family: Ropa Sans, Sans-serif; font-size: 22px; font-weight: 700;">
                                            Whether you you’re looking to buy, sell, manage, or invest, we cover the entire <br> real estate journey to meet all of your needs.
                                        </p>

                                        <button class="my-button" title="Relevant Title" href="#">Selling & Buying</button>
                                        <button class="my-button" title="Relevant Title" href="#">Investment Service</button>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div> 

    


@endsection