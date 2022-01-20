@extends('layouts.frontend')

@section('title', $seo->title ?? $seo->name)
@section('description', $seo->description ?? '')
@section('keywords', $seo->keywords ?? '')

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

<div class="main-container">
    <section>
        <div class="container">
            <div class="row mb-5">
                <h1 style="color: #403254; font-family: 'Roboto', Sans-serif; font-size: 55px; font-weight: 800;">
                    Case Studies
                </h1>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div>
                        <p style="color: #000000; font-family: 'Roboto', Sans-serif; font-size: 18px; font-weight: 400; line-height: 23px;"> 
                            At Connect.ca, our full-service brokerage not only helps people buy and sell their dream homes, but we also leverage our experience and group of companies to help turn your dream home into a portfolio of real estate.
                         </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div >
                        <p style="color: #000000; font-family: 'Roboto', Sans-serif; font-size: 18px; font-weight: 400; line-height: 23px;">
                            This end-to-end investment model is designed to cover all the bases and offer the very best in client experience. With Connect.ca’s underlying industry framework set in place, it’s never been easier for ready investors to make a splash in the market. 
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div>
                        <img alt="Image" src="{{ asset('img/case1.png') }} " style="height: auto; max-width: 100%; Sborder: none;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
                <div class="mb-5">
                    <h1 style="color: #403254; font-family: 'Roboto', Sans-serif; font-size: 40px; font-weight: 800; line-height:46px;">
                        But don’t just take our word for it - read <br> what our clients have to say about their <br> Connect.ca experience:
                    </h1>
                </div>
            <div class="row mb-5">
                <div class="col-sm-4">
                    <div style="text-align:center;">
                        <p style="color: #000000; font-family: 'Roboto', Sans-serif; font-size: 18px; font-weight: 400; line-height: 23px;"> 
                            Tanner Eldridge <br> Location | Type of Transaction
                         </p>
                         <p style="text-align: center; color: #3A3594; font-family: 'Ropa Sans', Sans-serif; font-size: 20px; font-weight: 400; line-height: 25px;" class="case_studies_p">
                            “The Connect.ca team made investing in real estate as simple as possible. More than that, their professionalism and guidance made all the difference as I was looking to grow my portfolio”
                         </p>
                         <a href="#" style="center;" class="case_button" role="button">Read More</a>
                    </div>
                </div>
                <div class="col-sm-4">
                        <div style="text-align:center;" >
                            <p style="color: #000000; font-family: 'Roboto', Sans-serif; font-size: 18px; font-weight: 400; line-height: 23px; "> 
                                Prem Prashad <br> Location | Type of Transaction
                            </p>
                            <p style="text-align: center; color: #3A3594; font-family: 'Ropa Sans', Sans-serif; font-size: 20px; font-weight: 400; line-height: 25px;" class="case_studies_p">
                                “Connect.ca introduced us to the condo market in 2006, we’ve done a number of transactions with them. They’re our exclusive Broker, and took the time to understand our objectives…”
                            </p>
                            <a href="#" style="center;" class="case_button" role="button">Read More</a>
                        </div>
                </div>
                <div class="col-sm-4">
                    <div style="text-align:center;">
                        <p style="color: #000000; font-family: 'Roboto', Sans-serif; font-size: 18px; font-weight: 400; line-height: 23px;"> 
                            Rajesh Panilhar <br> Location | Type of Transaction
                         </p>
                         <p style="text-align: center; color: #3A3594; font-family: 'Ropa Sans', Sans-serif; font-size: 20px; font-weight: 400; line-height: 25px;" class="case_studies_p">
                            “My second purchase through Connect.ca has been an excellent experience. They helped me buy a condo unit of my choice at its first launch, which is crucial…”
                         </p>
                         <a href="#" style="center;" class="case_button" role="button">Read More</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div>
                        <img alt="Image" src="{{ asset('img/illust1.png') }} " style="height: auto; max-width: 100%; Sborder: none;">
                    </div>
                </div>
                <div class="col-sm-4">
                        <div style="text-align:center;">
                            <p style="color: #000000; font-family: 'Roboto', Sans-serif; font-size: 18px; font-weight: 400; line-height: 23px;"> 
                                Prem Prashad <br> Location | Type of Transaction
                            </p>
                            <p style="text-align: center; color: #3A3594; font-family: 'Ropa Sans', Sans-serif; font-size: 20px; font-weight: 400; line-height: 25px;" class="case_studies_p">
                                “Connect.ca introduced us to the condo market in 2006, we’ve done a number of transactions with them. They’re our exclusive Broker, and took the time to understand our objectives…”
                            </p>
                            <a href="#" style="center;" class="case_button" role="button">Read More</a>
                        </div>
                </div>
                <div class="col-sm-4">
                    <div style="text-align:center;">
                        <p style="color: #000000; font-family: 'Roboto', Sans-serif; font-size: 18px; font-weight: 400; line-height: 23px;"> 
                            Rajesh Panilhar <br> Location | Type of Transaction
                         </p>
                         <p style="text-align: center; color: #3A3594; font-family: 'Ropa Sans', Sans-serif; font-size: 20px; font-weight: 400; line-height: 25px;" class="case_studies_p">
                            “My second purchase through Connect.ca has been an excellent experience. They helped me buy a condo unit of my choice at its first launch, which is crucial…”
                         </p>
                         <a href="#" style="align:center;" class="case_button" role="button">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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