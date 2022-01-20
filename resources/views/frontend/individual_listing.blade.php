@extends('layouts.frontend')

@section('title', $seo->title ?? $seo->name)
@section('description', $seo->description ?? '')
@section('keywords', $seo->keywords ?? '')

@section('content')

<div class="main-container">
    <section class="switchable">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-5">
                    <div class="switchable__text">
                        <hr class="short">
                        <form>
                            <div class="col-md-12" style="padding-right:35%; padding-left:5%;">
                                <form action="">
                                    <input type="text" class="indiv_input footer_input_size_custom" placeholder="Your First Name">
                                    <input type="text" class="indiv_input footer_input_size_custom mt-3" placeholder="Your Last Name">
                                    <input type="text" class="indiv_input footer_input_size_custom mt-3" placeholder="Your Email Address">
                                    <input type="text" class="indiv_input footer_input_size_custom mt-3" placeholder="Your Phone Number">
                                    <textarea name="" id="" cols="30" rows="4" class="indiv_input mt-3" placeholder="What's your investment experience"></textarea>
        
                                    <div class="row">
                                        <div class="col-sm-7"></div>
                                        <div class="col-sm-7 pr-1" style="padding-left: 50px;">
                                            <button type="submit" class="individual_button mt-3" style="text-align:center;">Let's Connect</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-8 col-lg-8"> <img alt="Image" src="{{ asset('img/img1.png') }}" style="padding-left: 100px; "> </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col text-block">
                    <h1 style="color: #403254; font-family: 'Roboto', Sans-serif; font-size: 21px; font-weight: 600;">1234 Long Street Address</h1>
                    <h3 style="color: #3A3594; font-family: 'DINPro', Sans-serif; font-size: 18px; font-weight: 400;">$1,867,000</h3>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-sm-2">
                    <p class="mb-3" style="color:#3A3594; font-size: 13px; font-weight: 400; font-family: 'DINPro', Sans-serif;">
                        <i class="fa fa-home"> </i>
                        Townhome
                    </p>
                    <p class="mb-3"  style="color:#3A3594; font-size: 13px; font-weight: 400; font-family: 'DINPro', Sans-serif;">
                        <i class="fas fa-arrows-alt"> </i>
                        3000 SqFt
                    </p>
                    <p class="mb-3"  style="color:#3A3594; font-size: 13px; font-weight: 400; font-family: 'DINPro', Sans-serif;">
                        <i class="fa fa-bed"> </i> 
                        3 Beds
                    </p>
                    <p class="mb-3"  style="color:#3A3594; font-size: 13px; font-weight: 400; font-family: 'DINPro', Sans-serif;">
                        <i class="fa fa-bath"> </i>
                        2.5 Baths
                    </p>
                </div>
                <div class="col-sm-5">
                    <p style="color:#000000; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 400;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisl magna, venenatis in quam et, pretium auctor augue. Integer id lectus tellus. Proin in fringilla tortor. Ut in nisi eget purus malesuada commodo sit amet sit amet libero. Integer ac venenatis est. Mauris placerat condimentum lorem. Nulla id finibus lacus. Nunc non lorem nulla. Fusce ultrices libero at laoreet convallis. Proin sit amet sem in diam commodo dictum eget a risus.</p>
                </div>
                <div class="col-sm-5">
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-sm-2">
                    <div class="">
                        <h3 style="color: #3A3594; font-family: 'DINPro', Sans-serif; font-size: 18px; font-weight: 400;">Property Tour</h3>
                    </div>
                </div>
                <div class="col-sm-5">
                    <img alt="Image" style="max-width: 100%; height:auto;" src="{{ asset('img/img1.png') }} ">
                </div>
                <div class="col-sm-5">

                </div>
            </div>
            <div class="row pb-4">
                <div class="col-sm-2">
                    <div class="">
                        <h3 style="color: #3A3594; font-family: 'DINPro', Sans-serif; font-size: 18px; font-weight: 400;">Amenities</h3>
                    </div>
                </div>
                <div class="col-sm-5">
                    <p style="color:#000000; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 400; list-style-type: circle;" class="mb-1"> 
                        • Nunc feugiat nisl id arcu sollicitudin, vitae tincidunt velit tempus. Pellentesque quis massa eu augue tristique
                    </p>
                    <p style="color:#000000; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 400; list-style-type: circle;" class="mb-1"> 
                        • Etiam a scelerisque tortor
                    </p>
                    <p style="color:#000000; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 400; list-style-type: circle;" class="mb-1"> 
                        • Nulla mattis libero sed dolor efficitur, in luctus risus rutrum
                    </p>
                    <p style="color:#000000; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 400; list-style-type: circle;" class="mb-1"> 
                        • Sed ut turpis sed nunc efficitur rhoncus sit amet at nulla
                    </p>
                    <p style="color:#000000; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 400; list-style-type: circle;" class="mb-1"> 
                        • Fusce laoreet nibh at magna pharetra posuere  
                    </p>
                </div>
                <div class="col-sm-5"></div>
        </div>
        <div class="row pb-4" >
            <div class="col-sm-2">
                <h3 style="color: #3A3594; font-family: 'DINPro', Sans-serif; font-size: 18px; font-weight: 400;">Taxes & Fees</h3>
            </div>
            <div class="col-sm-5">
                <p style="color:#000000; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 700; list-style-type: circle;" class="mb-0"> 
                    Taxes
                </p>
                <p style="color:#000000; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 400; list-style-type: circle;" class="mb-5"> 
                    $9313.65
                </p>
                <p style="color:#000000; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 700; list-style-type: circle;" class="mb-0"> 
                    Condo Fees
                </p>
                <p style="color:#000000; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 400; list-style-type: circle;" class="mb-3"> 
                    N/A
                </p>
            </div>
            <div class="col-sm-5">

            </div>
        </div>
        <div class="row pb-4" >
            <div class="col-sm-2">
                <h3 style="color: #3A3594; font-family: 'DINPro', Sans-serif; font-size: 18px; font-weight: 400;">Parking & Locker</h3>
            </div>
            <div class="col-sm-5">
                <p style="color:#000000; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 700; list-style-type: circle;" class="mb-0"> 
                    Parking
                </p>
                <p style="color:#000000; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 400; list-style-type: circle;" class="mb-5"> 
                    2 Car Garage
                </p>
                <p style="color:#000000; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 700; list-style-type: circle;" class="mb-0"> 
                    Locker
                </p>
                <p style="color:#000000; font-family: 'DINPro', Sans-serif; font-size: 16px; font-weight: 400; list-style-type: circle;" class="mb-5"> 
                    N/A
                </p>
            </div>
            <div class="col-sm-5">
            </div>
        </div>
        <div class="row pb-4">
            <div class="col-sm-2">
                <h3 style="color: #3A3594; font-family: 'DINPro', Sans-serif; font-size: 18px; font-weight: 400;">Location</h3>
            </div>
            <div class="col-sm-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.5406050415118!2d-0.12174238423017254!3d51.50329727963449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2sph!4v1642091016944!5m2!1sen!2sph" width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-sm-5">

            </div>
        </div>
        <div class="row pb-4">
            <div class="col-sm-2">
                <h3 style="color: #3A3594; font-family: 'DINPro', Sans-serif; font-size: 18px; font-weight: 400;">Image Gallery</h3>
            </div>
            <div class="col-sm-6">
                <img alt="Image" style="max-width:20%; margin-bottom:5px !important;" src="{{ asset('img/img1.png') }} ">
                <img alt="Image" style="max-width:20%; margin-bottom:5px !important;" src="{{ asset('img/img1.png') }} ">
                <img alt="Image" style="max-width:20%; margin-bottom:5px !important;" src="{{ asset('img/img1.png') }} ">
                <img alt="Image" style="max-width:20%; margin-bottom:5px !important;" src="{{ asset('img/img1.png') }} ">
                <br>
                <img alt="Image" style="max-width:20%; margin-bottom:5px !important;" src="{{ asset('img/img1.png') }} ">
                <img alt="Image" style="max-width:20%; margin-bottom:5px !important;" src="{{ asset('img/img1.png') }} ">
                <img alt="Image" style="max-width:20%; margin-bottom:5px !important;" src="{{ asset('img/img1.png') }} ">
                <img alt="Image" style="max-width:20%; margin-bottom:5px !important;" src="{{ asset('img/img1.png') }} ">
            </div>
            <div class="col-sm-4">
            </div>
    </section>

</div>

@endsection