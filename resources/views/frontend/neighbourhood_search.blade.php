@extends('layouts.frontend')

@section('content')
<style>

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
    transition: all 0.2s;
}
.my-button:hover {
    background: #666;
    color: #c1e1e0;
}

</style>

<section class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8">
                <h1 style="color: #403254; font-family: 'Roboto', Sans-serif; font-size: 55px; font-weight: 800;">
                    Neighbourhood Search
                </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-1">
            <div class="col-sm-3 pl-1 pr-1 ">
                <div  style="background-color: #403254D9; padding-top: 29px; padding-bottom: 29px;border-radius:3%;">
                    <h3 style="color: #FFFFFF; font-family: 'Gibson', Sans-serif; font-weight: 600;">
                        Sunnylea
                    </h3>
                    <p style="color: #79C9D1; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 500; text-transform: none;">
                        <u>
                            View Listings
                        </u>
                    </p>
                </div>
            </div>
            <div class="col-sm-3 pl-1 pr-1">
                <div  style="background-color: #403254D9; padding-top: 29px; padding-bottom: 29px;border-radius:3%;">
                    <h3 style="color: #FFFFFF; font-family: 'Gibson', Sans-serif; font-weight: 600;">
                        Meadowvale
                    </h3>
                    <p style="color: #79C9D1; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 500; text-transform: none;">
                        <u>
                            View Listings
                        </u>
                    </p>
                </div>
            </div>
            <div class="col-sm-3 pl-1 pr-1">
                <div  style="background-color: #403254D9; padding-top: 29px; padding-bottom: 29px;border-radius:3%;">
                    <h3 style="color: #FFFFFF; font-family: 'Gibson', Sans-serif; font-weight: 600;">
                        Mississauga Valleys
                    </h3>
                    <p style="color: #79C9D1; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 500; text-transform: none;">
                        <u>
                            View Listings
                        </u>
                    </p>
                </div>
            </div>
            <div class="col-sm-3 pl-1 pr-1">
                <div  style="background-color: #403254D9; padding-top: 29px; padding-bottom: 29px;border-radius:3%;">
                    <h3 style="color: #FFFFFF; font-family: 'Gibson', Sans-serif; font-weight: 600;">
                        Meadowvale Village
                    </h3>
                    <p style="color: #79C9D1; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 500; text-transform: none;">
                        <u>
                            View Listings
                        </u>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-1">
            <div class="col-sm-3 pl-1 pr-1 ">
                <div  style="background-color: #403254D9; padding-top: 29px; padding-bottom: 29px;border-radius:3%;">
                    <h3 style="color: #FFFFFF; font-family: 'Gibson', Sans-serif; font-weight: 600;">
                         Malton
                    </h3>
                    <p style="color: #79C9D1; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 500; text-transform: none;">
                        <u>
                            View Listings
                        </u>
                    </p>
                </div>
            </div>
            <div class="col-sm-3 pl-1 pr-1">
                <div  style="background-color: #403254D9; padding-top: 29px; padding-bottom: 29px;border-radius:3%;">
                    <h3 style="color: #FFFFFF; font-family: 'Gibson', Sans-serif; font-weight: 600;">
                            Dixie
                    </h3>
                    <p style="color: #79C9D1; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 500; text-transform: none;">
                        <u>
                            View Listings
                        </u>
                    </p>
                </div>
            </div>
            <div class="col-sm-3 pl-1 pr-1">
                <div  style="background-color: #403254D9; padding-top: 29px; padding-bottom: 29px;border-radius:3%;">
                    <h3 style="color: #FFFFFF; font-family: 'Gibson', Sans-serif; font-weight: 600;">
                            Rathwood
                    </h3>
                    <p style="color: #79C9D1; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 500; text-transform: none;">
                        <u>
                            Mineola
                        </u>
                    </p>
                </div>
            </div>
            <div class="col-sm-3 pl-1 pr-1">
                <div  style="background-color: #403254D9; padding-top: 29px; padding-bottom: 29px;border-radius:3%;">
                    <h3 style="color: #FFFFFF; font-family: 'Gibson', Sans-serif; font-weight: 600;">
                        Meadowvale Village
                    </h3>
                    <p style="color: #79C9D1; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 500; text-transform: none;">
                        <u>
                            View Listings
                        </u>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-1">
            <div class="col-sm-3 pl-1 pr-1 ">
                <div  style="background-color: #403254D9; padding-top: 29px; padding-bottom: 29px;border-radius:3%;">
                    <h3 style="color: #FFFFFF; font-family: 'Gibson', Sans-serif; font-weight: 600;">
                        Clarkson – Lorne Park
                    </h3>
                    <p style="color: #79C9D1; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 500; text-transform: none;">
                        <u>
                            View Listings
                        </u>
                    </p>
                </div>
            </div>
            <div class="col-sm-3 pl-1 pr-1">
                <div  style="background-color: #403254D9; padding-top: 29px; padding-bottom: 29px;border-radius:3%;">
                    <h3 style="color: #FFFFFF; font-family: 'Gibson', Sans-serif; font-weight: 600;">
                        East Credit
                    </h3>
                    <p style="color: #79C9D1; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 500; text-transform: none;">
                        <u>
                            View Listings
                        </u>
                    </p>
                </div>
            </div>
            <div class="col-sm-3 pl-1 pr-1">
                <div  style="background-color: #403254D9; padding-top: 29px; padding-bottom: 29px;border-radius:3%;">
                    <h3 style="color: #FFFFFF; font-family: 'Gibson', Sans-serif; font-weight: 600;">
                        Central Erin Mills
                    </h3>
                    <p style="color: #79C9D1; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 500; text-transform: none;">
                        <u>
                            Lakeview
                        </u>
                    </p>
                </div>
            </div>
            <div class="col-sm-3 pl-1 pr-1">
                <div  style="background-color: #403254D9; padding-top: 29px; padding-bottom: 29px;border-radius:3%;">
                    <h3 style="color: #FFFFFF; font-family: 'Gibson', Sans-serif; font-weight: 600;">
                        Meadowvale Village
                    </h3>
                    <p style="color: #79C9D1; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 500; text-transform: none;">
                        <u>
                            View Listings
                        </u>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-1">
            <div class="col-sm-3 pl-1 pr-1 ">
                <div  style="background-color: #403254D9; padding-top: 29px; padding-bottom: 29px;border-radius:3%;">
                    <h3 style="color: #FFFFFF; font-family: 'Gibson', Sans-serif; font-weight: 600;">
                        Cooksville
                    </h3>
                    <p style="color: #79C9D1; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 500; text-transform: none;">
                        <u>
                            View Listings
                        </u>
                    </p>
                </div>
            </div>
            <div class="col-sm-3 pl-1 pr-1">
                <div  style="background-color: #403254D9; padding-top: 29px; padding-bottom: 29px;border-radius:3%;">
                    <h3 style="color: #FFFFFF; font-family: 'Gibson', Sans-serif; font-weight: 600;">
                        Lisgar
                    </h3>
                    <p style="color: #79C9D1; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 500; text-transform: none;">
                        <u>
                            View Listings
                        </u>
                    </p>
                </div>
            </div>
            <div class="col-sm-3 pl-1 pr-1">
                <div  style="background-color: #403254D9; padding-top: 29px; padding-bottom: 29px;border-radius:3%;">
                    <h3 style="color: #FFFFFF; font-family: 'Gibson', Sans-serif; font-weight: 600;">
                        Applewood
                    </h3>
                    <p style="color: #79C9D1; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 500; text-transform: none;">
                        <u>
                            Lakeview
                        </u>
                    </p>
                </div>
            </div>
            <div class="col-sm-3 pl-1 pr-1">
                <div  style="background-color: #403254D9; padding-top: 29px; padding-bottom: 29px;border-radius:3%;">
                    <h3 style="color: #FFFFFF; font-family: 'Gibson', Sans-serif; font-weight: 600;">
                        Churchill Meadows
                    </h3>
                    <p style="color: #79C9D1; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 500; text-transform: none;">
                        <u>
                            View Listings
                        </u>
                    </p>
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
                        <h1 style="font-family:Robot, Sans-serif; color: #FFDE59; font-size: 50px; font-weight:800;">Looking for Sold Data</h1>
                        <p style="text-align: center; color: #FFDE59; font-family: Ropa Sans, Sans-serif; font-size: 22px; font-weight: 700; text-align:center;">
                            Vivamus non elementum purus. Duis eu <br> rutrum nisl, sed laoreet diam. Mauris magna <br> ante, aliquet sit amet metus facilisis, laoreet <br> vulputate leo.
                        </p>


                        <button class="my-button" title="Relevant Title" href="#">See old data</button>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection