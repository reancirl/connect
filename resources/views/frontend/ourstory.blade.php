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
            <section class="switchable feature-large">
                <div class="container">
                    <div class="row justify-content-around">
                        <div class="col-md-6"> <img alt="Image" style="width: 590px; height: 576px;" align="right" src="uploads/s.png"> </div>
                        <div class="col-md-7">
                            <div class="switchable__text">
                                <h2 style="color: #403254; font-family: 'Roboto', Sans-serif; font-size: 55px; font-weight: 800;">What is Connect.ca?</h2>
                                <p class="lead" style="color: #000000; font-family: 'Ropa Sans', Sans-serif;  font-size: 19px; font-weight: 400;"> Connect.ca is the culmination of our own journey in buying, selling, managing, and investing in real estate over the last twenty-plus years. <br> <br>     
                                    Just like everyone else, we started out as first-time homebuyers too, but, we quickly realized the tremendous potential for building wealth through real estate that the majority of people aren’t aware of. <br> <br> 
                                    For most Canadians, real estate offers the best, safest, and easiest return on their investment. Everyone wants a beautiful home, everyone wants financial freedom, and everyone wants to provide for their children and pass on generational wealth; but not everyone has the access, resources, or knowledge to do so.     
                                </p>
                                <h4  style="color: #3A3594; font-family: 'Ropa Sans', Sans-serif; font-weight: bold;font-size: 25px;">That’s why we started Connect.ca</h4>
                            </div>
                        </div>
                </div>
            </section>
<div style="background-color: #f7f8f9;">
            <section class=" unpad--bottom">
                <div class="container" align="center">
                    <div class="col-md-8">
                        <div class="feature">
                            <h4 style="color: #403254; font-family: 'Roboto', Sans-serif; font-size: 40px; font-weight: 800;">The Connect Brand Promise</h4>
                            <p style="text-align:center; color: #000000; font-family:'Roboto', Sans-serif; font-size: 21px; font-weight:400; line-height: 28px;">As an organization, Connect.ca’s promise is to deliver the best full-service real estate experience for our clients. </p>
                        </div>
                    </div>
    
                    <div class="container">
                        <div class="row justify-content-around">
                            <div class="col-md-6">
                                <div class="switchable__text">
                                    <h2 style="color: #403254; font-family: 'Ropa Sans', Sans-serif; font-size: 26px; font-weight: bold; margin-top: 40px; text-align: left;">What We Do</h2>
                                    <p class="lead" style="color: #000000; font-family: 'Roboto', Sans-serif; font-size: 18px; font-weight: normal; margin-top: 40px; text-align: left; line-height: 24px;">We want to share our expertise and experience so you can reach your milestones and secure the home and financial freedom that you want. In our quest to make real estate simple, Connect.ca has grown to become Canada’s leading full-service real estate company—covering every step of the real estate and investment ladder. </p> 
                                    <a href="#" style="font-family: 'Gibson', Sans-serif; font-size: 14px; font-weight: 600; color: #3A3594; float: right">Read More »</a> 
                                </div>
                            </div>
                            
                            <div  class="col-md-6 " > <img alt="Image"  style="width: 596px; height: 418px;" src="uploads/2-Interior-1.jpg"> </div>
                        </div>
                       
                    </div>
                    <br>
                    <div class="container">
                        <div class="row justify-content-around">
                            <div  class="col-md-6 " > <img alt="Image"  style="width: 596px; height: 418px;" src="uploads/2.jpg"> </div>
                            <div class="col-md-6">
                                <div class="switchable__text">
                                    <h2 style="color: #403254; font-family: 'Ropa Sans', Sans-serif; font-size: 26px; font-weight: bold; margin-top: 40px; text-align: left;"><br>Buying and Selling: the Foundation <br> of Real Estate</h2>
                                    <p class="lead" style="color: #000000; font-family: 'Roboto', Sans-serif; font-size: 18px; font-weight: normal; margin-top: 40px; text-align: left; line-height: 24px;"> No matter how long your real estate journey, everyone has to start somewhere. We love helping first-time buyers and sellers, those looking to upgrade or downsize, and those with modest resale market experience. </p> 
                                    <a href="#" style="font-family: 'Gibson', Sans-serif; font-size: 14px; font-weight: 600; color: #3A3594; float: right">Read More »</a> </div>
                            </div>
                          
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row justify-content-around">
                            <div class="col-md-6">
                                <div class="switchable__text">
                                    <h2 style="color: #403254; font-family: 'Ropa Sans', Sans-serif; font-size: 26px; font-weight: bold; margin-top: 60px; text-align: left;"><br>Designed for companies, small teams and freelancers</h2>
                                    <p class="lead" style="color: #000000; font-family: 'Roboto', Sans-serif; font-size: 18px; font-weight: normal; margin-top: 40px; text-align: left; line-height: 24px;"> Stack's visual style is simple yet distinct, making it an ideal starting point for your project whether it be a basic marketing site, or multi-page company presence. </p>
                                     <a href="#" style="font-family: 'Gibson', Sans-serif; font-size: 14px; font-weight: 600; color: #3A3594; float: right" >Read More »</a> </div>
                            </div>
                            <div  class="col-md-6 " > <img alt="Image"  style="width: 596px; height: 418px;" src="uploads/4-NetworkIllusration.png"> </div>
                        </div>
                    </div>
</div>               
    
                    <div class="container" align="center" style="margin-top: 100px;">
                        <div class="col-md-8">
                            <div class="feature">
                                <h4 style="color: #403254; font-family: 'Roboto', Sans-serif; font-size: 40px; font-weight: 800;">Connect.ca’s History</h4>
                                <p style="text-align:center; color: #000000; font-family:'Roboto', Sans-serif; font-size: 21px; font-weight:400; line-height: 28px;">
                                    Connect.ca didn’t always look like this – it’s the product of many years of hard work and dedication in offering the ultimate real estate investing and resale experience to our clients. Take a look at our timeline and follow along with our brand’s story, from it’s early beginnings to our latest acquisition.
                                </p>
                            </div>
                        </div>
                    </div>
            </section>
            <section>
                <div class="row text-center md-0 pd-0">
                    <div class="col-sm-5">
                        <p class="text-right mb-0 pb-0" style="color:#3a3594;font-size:20px;line-weight:25px;font-weight:700;">Ryan Coyle and Matt Elkind<br>
                            meet for the first time</p>
                        <p class="mt-0 pt-0" align="right" style="text-decoration: underline;color:#3a3594;">Read More >></p>
                    </div>
                    <div class="col-sm-2">
                        <span style="border-radius:50%;display:inline-block;width:100px;height:100px;background-color:#636265;color:#ffffff;text-align:center;">
                        <p style="margin-top: 35%;">20XX</p>
                        </span>
                    </div>
                    <div class="col-sm-5">
                    </div>
                </div>
                <div class="row text-center mt-0 pt-4">
                    <div class="col-sm-5">
                    </div>
                    <div class="col-sm-2">
                        <span style="border-radius:50%;display:inline-block;width:100px;height:100px;background-color:#636265;color:#ffffff;text-align:center;">
                        <p style="margin-top: 35%;">20XX</p>
                        </span>
                    </div>
                    <div class="col-sm-5">
                       <p class="text-left" style="color:#3a3594;font-size:20px;line-weight:25px;font-weight:700;"> Lisa Andrews joins the team.</p>
                    </div>
                </div>
                <div class="row text-center mt-0 pt-4">
                    <div class="col-sm-5">
                        <p class="text-right mb-0 pb-0" style="color:#3a3594;font-size:20px;line-weight:25px;font-weight:700;">Connect.ca is founded</p>
                        <p class="mt-0 pt-0" align="right" style="text-decoration: underline;color:#3a3594;">Read More >></p>
                    </div>
                    <div class="col-sm-2">
                        <span style="border-radius:50%;display:inline-block;width:130px;height:130px;background-color:#636265;color:#ffffff;text-align:center;">
                        <p style="margin-top: 40%;">20XX</p>
                        </span>
                    </div>
                    <div class="col-sm-5">
                    </div>
                </div>
                <div class="row text-center mt-0 pt-4">
                    <div class="col-sm-5">
                    </div>
                    <div class="col-sm-2">
                        <span style="border-radius:50%;display:inline-block;width:100px;height:100px;background-color:#636265;color:#ffffff;text-align:center;">
                        <p style="margin-top: 35%;">20XX</p>
                        </span>
                    </div>
                    <div class="col-sm-3">
                        <p class="text-left mb-0 pb-0" style="color:#3a3594;font-size:20px;line-weight:25px;font-weight:700;">Connect.ca Realty launches</p>
                        <p class="mt-0 pt-0" align="right" style="text-decoration: underline;color:#3a3594;">Read More >></p>
                    </div>
                    <div class="col-sm-2">
                       <p>Jump to <br>Year</p>
                       <a>20XX</a><br>
                       <a>20XX</a><br>
                       <a>20XX</a><br>
                       <a>2019</a>
                    </div>
                </div>
                <div class="row text-center" style="margin-top: -4%;">
                    <div class="col-sm-5">
                        <p class="text-right mb-0 pb-0" style="color:#3a3594;font-size:20px;line-weight:25px;font-weight:700;">The Inner Circle launches</p>
                        <p class="mt-0 pt-0" align="right" style="text-decoration: underline;color:#3a3594;">Read More >></p>
                    </div>
                    <div class="col-sm-2">
                        <span style="border-radius:50%;display:inline-block;width:100px;height:100px;background-color:#636265;color:#ffffff;text-align:center;">
                        <p style="margin-top: 35%;">20XX</p>
                        </span>
                    </div>
                    <div class="col-sm-3">  
                    </div>
                </div>
                <div class="row text-center" style="margin-top: 2%;">
                    <div class="col-sm-5">
                       
                    </div>
                    <div class="col-sm-2">
                        <span style="border-radius:50%;display:inline-block;width:100px;height:100px;background-color:#636265;color:#ffffff;text-align:center;">
                        <p style="margin-top: 35%;">20XX</p>
                        </span>
                    </div>
                    <div class="col-sm-3">
                        <p class="text-left mb-0 pb-0" style="color:#3a3594;font-size:20px;line-weight:25px;font-weight:700;">Connect.ca launches our
                            in-house private mortgage
                            lending company,
                            OneDayMoney</p>
                        <p class="mt-0 pt-0" align="right" style="text-decoration: underline;color:#3a3594;">Read More >></p> 
                    </div>
                </div>
                <div class="row text-center" style="margin-top: 2%;">
                    <div class="col-sm-5">
                        <p class="text-right mb-0 pb-0" style="color:#3a3594;font-size:20px;line-weight:25px;font-weight:700;">Connect.ca acquires<br>
                            property management<br>
                            company Marco Toronto</p>
                        <p class="mt-0 pt-0" align="right" style="text-decoration: underline;color:#3a3594;">Read More >></p> 
                    </div>
                    <div class="col-sm-2">
                        <span style="border-radius:50%;display:inline-block;width:100px;height:100px;background-color:#636265;color:#ffffff;text-align:center;">
                        <p style="margin-top: 35%;">20XX</p>
                        </span>
                    </div>
                    <div class="col-sm-3">
                        
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