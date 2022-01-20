@extends('layouts.frontend')

@section('title', $seo->title ?? $seo->name)
@section('description', $seo->description ?? '')
@section('keywords', $seo->keywords ?? '')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        
  
         <div class="text-center">
            <div class="mb-5">
                <h1 style="font-weight: 800; color: #403254; font-size: 50px; font-family:"Roboto", Sans-serif; ">Resources</h1>
                <p class="text-center" style="color: #000000; font-size: 20px; font-weight: 400; line-height:26px; font-family: "Ropa Sans", Sans-serif; ">We are constantly updating our blog to bring you valuable content designed to keep <br>
                    you up-to-date with current market trends and engage your real estate mind. <br><br>
                    Stay informed on what we’ve been thinking about recently here.
                </p>            
            </div>
        </div>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product">
                                    <a href="#"> <img alt="Image" src="uploads/realestate.jpeg"> </a>
                                    <a class="block" href="#">
                                        <div>
                                            <h5>3 Real Estate Quotes To Keep You Motivated</h5>
                                            <div>January 2, 2015</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
        
                            <div class="col-sm-6">
                                <div class="product">
                                    <a href="#"> <img alt="Image" src="uploads/realestate.jpeg"> </a>
                                    <a class="block" href="#">
                                        <div>
                                            <h5>3 Real Estate Quotes To Keep You Motivated</h5>
                                            <div>January 2, 2015</div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="product">
                                    <a href="#"> <img alt="Image" src="uploads/realestate.jpeg"> </a>
                                    <a class="block" href="#">
                                        <div>
                                            <h5>3 Real Estate Quotes To Keep You Motivated</h5>
                                            <div>January 2, 2015</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
        
                            <div class="col-sm-6">
                                <div class="product">
                                    <a href="#"> <img alt="Image" src="uploads/realestate.jpeg"> </a>
                                    <a class="block" href="#">
                                        <div>
                                            <h5>3 Real Estate Quotes To Keep You Motivated</h5>
                                            <div>January 2, 2015</div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="product">
                                    <a href="#"> <img alt="Image" src="uploads/realestate.jpeg"> </a>
                                    <a class="block" href="#">
                                        <div>
                                            <h5>3 Real Estate Quotes To Keep You Motivated</h5>
                                            <div>January 2, 2015</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
        
                            <div class="col-sm-6">
                                <div class="product">
                                    <a href="#"> <img alt="Image" src="uploads/realestate.jpeg"> </a>
                                    <a class="block" href="#">
                                        <div>
                                            <h5>3 Real Estate Quotes To Keep You Motivated</h5>
                                            <div>January 2, 2015</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h3 style="color: #403254; font-size: 28px; font-weight: 600; font-family: "Ropa Sans", Sans-serif; ">Search</h3>
                            <div class="d-flex">
								<input placeholder="Search by Keywords" class=""  value="" style="border-right:none;border-top:1px solid #403254;border-bottom:1px solid #403254;border-left:1px solid #403254;">
                                <i class="fas fa-search pt-3 pr-3" style="border-left:none;border-right:1px solid #403254;border-top:1px solid #403254;border-bottom:1px solid #403254;"></i>
							</div>	
                            
                            <div>
                                <h3 class="pt-5">Recent Posts</h3>

                                <ul>
                                    <li>
                                        <p>Four Eleven King</p>
                                    </li>
                                    <li>
                                        <p>Canada Realestate Investing</p>
                                    </li>
                                </ul>
                            </div>
                            
                    </div>

                    
                </div>  
            </div>          
        </section>

        <div class="imagebg text-center height-50" style=" background: linear-gradient(rgba(58, 53, 148, 0.8), rgba(58, 53, 148, 0.8)), url('{{ asset('uploads/CTAPanel.png') }}');; background-repeat: no-repeat; background-size: cover;">
            <div class="background-image-holder"> </div>
            <div class="container pos-vertical-center">
                <div class="row" >
                    <div class="col-md-12">
                        <div class="article__title">
                            <h1 style="font-family:Robot, Sans-serif; color: #FFDE59; font-size: 50px; font-weight:800;">Want more of this?</h1>
                            <p style="text-align: center; color: #FFDE59; font-family: Ropa Sans, Sans-serif; font-size: 22px; font-weight: 700;">
                                Members of Connect.ca’s Inner Circle get internal access to exclusive <br> information sessions and educational webinars with expert industry guests, as <br> well as direct contact with Connect.ca’s co-founders. Sign up for all that and <br> more by joining our Inner Circle.
                            </p>

                            
                            <a class="btn_connect_button text-center">Get the Inside Scoop</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


            

    </body>

</html>

@endsection