@extends('layouts.frontend')

@section('title', $seo->title ?? $seo->name)
@section('description', $seo->description ?? '')
@section('keywords', $seo->keywords ?? '')

@section('content')



            <h2 class="text-center pb-0" style=" color: #403254; font-size: 55px; font-weight: 800; line-height: 1.2em; text-weight:800; font-family: "Roboto", Sans-serif;">New Development <br> Opportunities</h2>
            <div class="text-center pt-0 pb-5" style="color: #000000; font-size: 22px; font-weight: 400; font-family: "Ropa Sans", Sans-serif;">
                Here you’ll find some of our most coveted resale and investment opportunities down below.					
            </div>
            <div class="pb-5 pt-5" >
                <div class="">
                    <div class=""><!-- search long -->


            <link rel="stylesheet" href="https://listings.connect.ca/Themes/Responsive/css/wordpress.css">

            <div class="search-all homepage margin-b-30 clearfix">
            <form class="form" name="frmHomePageSearch" action="https://listings.connect.ca/index.asp" method="get">
            <input type="hidden" name="PageAction" value="searchresult">
            <input type="hidden" name="SortOrder" id="SortOrder" value="highest">
            <input type="hidden" name="SearchType" id="SearchType" value="">
            <input type="hidden" id="firstvalue" name="firstvalue" value="">
            <input type="hidden" id="garages" name="garages" value="any">

            <div class="main-par clearfix">
            <div class="refine-par-group clearfix">
                <div class="form-group medium searchterm">
                    <span class="label-name"><strong>Start Your Search Below:</strong></span>
                    <input class="medium term" autocomplete="OFF" type="text" name="searchDetails" id="searchDetails" value="" placeholder="Type any City, Community or Street Name">
                </div>

                <div class="form-group medium minprice">
                    <span class="label-name"><strong>Min Price</strong></span>
                    <select name="priceRangeFrom">
                        <option value="any" selected="selected">Any</option>
                        <option value="100">$100</option>
                        <option value="500">$500</option>
                        <option value="1000">$1,000</option>
                        <option value="1500">$1,500</option>
                        <option value="2000">$2,000</option>
                        <option value="3000">$3,000</option>
                        <option value="4000">$4,000</option>
                        <option value="5000">$5,000</option>
                        <option value="10000">$10,000</option>
                        <option value="50000">$50,000</option>
                        <option value="100000">$100,000</option>
                        <option value="125000">$125,000</option>
                        <option value="150000">$150,000</option>
                        <option value="175000">$175,000</option>
                        <option value="200000">$200,000</option>
                        <option value="225000">$225,000</option>
                        <option value="250000">$250,000</option>
                        <option value="275000">$275,000</option>
                        <option value="300000">$300,000</option>
                        <option value="325000">$325,000</option>
                        <option value="350000">$350,000</option>
                        <option value="375000">$375,000</option>
                        <option value="400000">$400,000</option>
                        <option value="425000">$425,000</option>
                        <option value="450000">$450,000</option>
                        <option value="475000">$475,000</option>
                        <option value="500000">$500,000</option>
                        <option value="525000">$525,000</option>
                        <option value="550000">$550,000</option>
                        <option value="575000">$575,000</option>
                        <option value="600000">$600,000</option>
                        <option value="625000">$625,000</option>
                        <option value="650000">$650,000</option>
                        <option value="675000">$675,000</option>
                        <option value="700000">$700,000</option>
                        <option value="725000">$725,000</option>
                        <option value="750000">$750,000</option>
                        <option value="775000">$775,000</option>
                        <option value="800000">$800,000</option>
                        <option value="825000">$825,000</option>
                        <option value="850000">$850,000</option>
                        <option value="875000">$875,000</option>
                        <option value="900000">$900,000</option>
                        <option value="925000">$925,000</option>
                        <option value="950000">$950,000</option>
                        <option value="975000">$975,000</option>
                        <option value="1000000">$1,000,000</option>
                        <option value="1100000">$1,100,000</option>
                        <option value="1300000">$1,300,000</option>
                        <option value="1500000">$1,500,000</option>
                        <option value="1700000">$1,700,000</option>
                        <option value="1900000">$1,900,000</option>
                        <option value="2000000">$2,000,000</option>
                        <option value="3000000">$3,000,000</option>
                        <option value="4000000">$4,000,000</option>
                    </select>

                </div>

                <div class="form-group medium maxprice">
                    <span class="label-name"><strong>Max Price</strong></span>
                    <select name="priceRangeTo">
                        <option value="any" selected="selected">Any</option>
                        <option value="100">$100</option>
                        <option value="500">$500</option>
                        <option value="1000">$1,000</option>
                        <option value="1500">$1,500</option>
                        <option value="2000">$2,000</option>
                        <option value="3000">$3,000</option>
                        <option value="4000">$4,000</option>
                        <option value="5000">$5,000</option>
                        <option value="10000">$10,000</option>
                        <option value="50000">$50,000</option>
                        <option value="100000">$100,000</option>
                        <option value="125000">$125,000</option>
                        <option value="150000">$150,000</option>
                        <option value="175000">$175,000</option>
                        <option value="200000">$200,000</option>
                        <option value="225000">$225,000</option>
                        <option value="250000">$250,000</option>
                        <option value="275000">$275,000</option>
                        <option value="300000">$300,000</option>
                        <option value="325000">$325,000</option>
                        <option value="350000">$350,000</option>
                        <option value="375000">$375,000</option>
                        <option value="400000">$400,000</option>
                        <option value="425000">$425,000</option>
                        <option value="450000">$450,000</option>
                        <option value="475000">$475,000</option>
                        <option value="500000">$500,000</option>
                        <option value="525000">$525,000</option>
                        <option value="550000">$550,000</option>
                        <option value="575000">$575,000</option>
                        <option value="600000">$600,000</option>
                        <option value="625000">$625,000</option>
                        <option value="650000">$650,000</option>
                        <option value="675000">$675,000</option>
                        <option value="700000">$700,000</option>
                        <option value="725000">$725,000</option>
                        <option value="750000">$750,000</option>
                        <option value="775000">$775,000</option>
                        <option value="800000">$800,000</option>
                        <option value="825000">$825,000</option>
                        <option value="850000">$850,000</option>
                        <option value="875000">$875,000</option>
                        <option value="900000">$900,000</option>
                        <option value="925000">$925,000</option>
                        <option value="950000">$950,000</option>
                        <option value="975000">$975,000</option>
                        <option value="1000000">$1,000,000</option>
                        <option value="1100000">$1,100,000</option>
                        <option value="1300000">$1,300,000</option>
                        <option value="1500000">$1,500,000</option>
                        <option value="1700000">$1,700,000</option>
                        <option value="1900000">$1,900,000</option>
                        <option value="2000000">$2,000,000</option>
                        <option value="3000000">$3,000,000</option>
                        <option value="4000000">$4,000,000</option>
                        <option value="10000000">$10,000,000</option>
                        <option value="15000000">$15,000,000</option>
                        <option value="20000000">$20,000,000</option>
                        <option value="25000000">$25,000,000</option>
                    </select>
                </div>

                <div class="form-group medium typeofhome">
                    <span class="label-name"><strong>Type of Home</strong></span>
                    <select name="Type2">
                        <option value="any">Any Type of Home</option>
                        <option value="Detached">Detached Home</option>
                        <option value="Semi-Detached">Semi-Detached Home</option>
                        <option value="Att/Row/Twnhouse">Row / Townhouse</option>
                        <option value="Condo Townhouse">Condo Townhouse</option>
                        <option value="Condo Apt">Condo Apartment</option>
                        <option value="Loft">Loft</option>
                    </select>
                </div>

                <div class="form-group medium beds">
                    <span class="label-name"><strong>Beds</strong></span>
                    <select name="bedrooms">
                        <option value="any" selected="selected">Any</option>
                        <option value="1">1+</option>
                        <option value="2">2+</option>
                        <option value="3">3+</option>
                        <option value="4">4+</option>
                        <option value="5">5+</option>
                        <option value="6">6+</option>
                        <option value="7">7+</option>
                        <option value="8">8+</option>
                        <option value="9">9+</option>
                        <option value="10">10+</option>
                    </select>
                </div>
                <div class="form-group medium baths">
                    <span class="label-name"><strong>Baths</strong></span>
                    <select name="bathrooms">
                        <option value="any" selected="selected">Any</option>
                        <option value="1">1+</option>
                        <option value="2">2+</option>
                        <option value="3">3+</option>
                        <option value="4">4+</option>
                        <option value="5">5+</option>
                        <option value="6">6+</option>
                        <option value="7">7+</option>
                        <option value="8">8+</option>
                        <option value="9">9+</option>
                        <option value="10">10+</option>
                    </select>
                </div>
                <div class="form-group medium salerent">
                    <span class="label-name"><strong>Sale / Rent</strong></span>
                    <select name="Sale_Lease">
                        <option value="Sale" selected="">Sale</option>
                        <option value="Lease">Rent</option>
                    </select>
                </div>

            </div>
            </div>

            <div class="form-count-con clearfix">
            <div class="form-count clearfix">
                <button class="medium btn submit-btn" style="width: 20%" type="submit">Show results!</button>
            </div>
            </div>

            </form>
            </div>
            <!-- search long end --></div>
                </div>
                </div>


                <section class="text-center " style="background-color:#F1F2F9; margin-top:40px">
                    <div class="container">
                        <div class="row mb-5">
                            <div class="col-md-12 col-lg-12">
                                <div class="cta">
                                    <h2 style="color:#403254font-weight:900;font-size:3rem;" class="mb-0 pb-0">Pre-Construction Developments</h2>
                                    <p style="color:#000; font-weight:400; font-size:16px;" class="mt-0 pt-0">
                                        Ready to enjoy the unique advantages of pre-construction investing? View some
                                        <br>
                                        of the most exciting developments coming to the market.
                                    </p>                                
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="slider" data-arrows="true" data-paging="true" data-timing="30000">
                                        <ul class="slides">
                                            <li> 
                                                <div class="row">
                                                    <div class="col">
                                                        <h2 class="development_slider_number text-left pb-0 mb-0">01</h2>
                                                        <h2 class="development_slider_title text-left pb-0 mb-2">Featured Development</h2>
                                                        <p style="color:#3A3594; font-weight:400; font-size:16px;" class="mt-0 pt-0 pb-0 mb-3">
                                                            55 Charles Street East, Toronto By Mod Developments
                                                        </p> 
                                                        <p style="color:#000; font-weight:400; font-size:14px;padding-left:5rem;" class="mt-0 pt-0 text-left">
                                                            Etiam eu venenatis magna, ac fermentum est. Vestibulum sit amet posuere ipsum. Nullam neque risus, dapibus sit amet 
                                                            ullamcorper ut, pellentesque eu massa. Cras maximus mauris eget justo convallis…					
                                                        </p>  
                                                        <a class="btn_connect_button mr-4 float-right">Read more</a>
                                                    </div>
                                                    <div class="col">
                                                        <img alt="Image" src="{{ asset('stack/img/work-1.jpg') }}"> 
                                                    </div>
                                                </div>
                                            </li>
                                            <li> 
                                                <div class="row">
                                                    <div class="col">
                                                        <h2 class="development_slider_number text-left pb-0 mb-0">02</h2>
                                                        <h2 class="development_slider_title text-left pb-0 mb-2">Featured Development</h2>
                                                        <p style="color:#3A3594; font-weight:400; font-size:16px;" class="mt-0 pt-0 pb-0 mb-3">
                                                            55 Charles Street East, Toronto By Mod Developments
                                                        </p> 
                                                        <p style="color:#000; font-weight:400; font-size:14px;padding-left:5rem;" class="mt-0 pt-0 text-left">
                                                            Etiam eu venenatis magna, ac fermentum est. Vestibulum sit amet posuere ipsum. Nullam neque risus, dapibus sit amet 
                                                            ullamcorper ut, pellentesque eu massa. Cras maximus mauris eget justo convallis…					
                                                        </p>  
                                                        <a class="btn_connect_button mr-4 float-right">Read more</a>
                                                    </div>
                                                    <div class="col">
                                                        <img alt="Image" src="{{ asset('stack/img/work-2.jpg') }}">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>

                <body >
                    
                            <div class="container pt-5">
                                <div class="masonry">
                                    <div class="masonry__container row masonry--active">
                                        <div class="masonry__item col-md-4 text-center filter-print" data-masonry-filter="Print">
                                            <div class="project-thumb">
                                                <a href="#"> <img alt="Image" src="uploads/fd1.jpeg"> </a>
                                                <a href="#">Development Name</a> <span>Toronto | 1234 Long Street Address</span> </div>
                                        </div>
                                        <div class="masonry__item col-md-4 text-center filter-print" data-masonry-filter="Print">
                                            <div class="project-thumb">
                                                <a href="#"> <img alt="Image" src="uploads/fd2.jpeg"> </a>
                                                <a href="#">Development Name</a> <span>Toronto | 1234 Long Street Address</span> </div>
                                        </div>
                                        <div class="masonry__item col-md-4 text-center filter-print" data-masonry-filter="Print">
                                            <div class="project-thumb">
                                                <a href="#"> <img alt="Image" src="uploads/fd3.jpeg"> </a>
                                                <a href="#">Development Name</a> <span>Toronto | 1234 Long Street Address</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     
                
                    
                     
                            <div class="container">
                                <div class="masonry">
                                    <div class="masonry__container row masonry--active">
                                        <div class="masonry__item col-md-4 text-center filter-print" data-masonry-filter="Print">
                                            <div class="project-thumb">
                                                <a href="#"> <img alt="Image" src="uploads/fd4.jpeg"> </a>
                                                <a href="#">Development Name</a> <span>Toronto | 1234 Long Street Address</span> </div>
                                        </div>
                                        <div class="masonry__item col-md-4 text-center filter-print" data-masonry-filter="Print">
                                            <div class="project-thumb">
                                                <a href="#"> <img alt="Image" src="uploads/fd5.jpeg"> </a>
                                                <a href="#">Development Name</a> <span>Toronto | 1234 Long Street Address</span> </div>
                                        </div>
                                        <div class="masonry__item col-md-4 text-center filter-print" data-masonry-filter="Print">
                                            <div class="project-thumb">
                                                <a href="#"> <img alt="Image" src="uploads/fd6.jpeg"> </a>
                                                <h4>Get Lost in Thailand</h4> <span>Print Marketing</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     
    

            <div class="imagebg text-center height-70" style=" background: linear-gradient(rgba(58, 53, 148, 0.8), rgba(58, 53, 148, 0.8)), url('{{ asset('uploads/CTAPanel.png') }}');; background-repeat: no-repeat; background-size: cover;  " >
                <div class="background-image-holder"> </div>
                <div class="container pos-vertical-center">
                    <div class="row" >
                        <div class="col-md-12">
                            <div class="article__title">
                                <h1 style="font-family:Robot, Sans-serif; color: #FFDE59; font-size: 50px; font-weight:800;">Get on the Ladder</h1>
                                <p style="text-align: center; color: #FFDE59; font-family: Ropa Sans, Sans-serif; font-size: 22px; font-weight: 700;">
                                    In this market, your next investment opportunity won’t <br> be around forever. Tie-down your future property now.   
                                </p>

                                <button class="medium btn submit-btn" style="width: 20%" type="submit">Show results!</button>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
                


@endsection