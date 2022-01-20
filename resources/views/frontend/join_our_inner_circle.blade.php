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
<section class="space--sm unpad--bottom switchable text-center testimonial testimonial-1" style="padding-bottom:50px; background-color: #000000">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-5"> <img alt="Image" src="{{ asset('uploads/1-CellphoneIllustration.png') }}"> </div>
            <div class="col-md-6">
                <div class="switchable__text">
                    <h1 style="color:#FFDE59; font-family: 'Roboto', San-serif; font-size:55px; text-align:left; font-weight:800;">Join Our Inner Circle</h1>
                    <p style="font-size:17px; font-weight:400; font-family:'Ropa Sans', Sans-serif; text-align: left;color:#FFFFFF;"> The Inner Circle is Connect.ca’s exclusive club for seasoned real estate investors who have completed two or more deals with our team. These clients receive preferential access, portfolio management, and personal attention from our founders. </p>
                 </div>
              </div>
        </div>
    </div>
</section>


<section class="space--sm unpad--bottom switchable text-center testimonial testimonial-1" style="padding-bottom:50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-5"> <img alt="Image" src="{{ asset('uploads/Partners.png') }}"> </div>
            <div class="col-md-6">
                <div class="switchable__text">
                    <h1 style="color:#403254; font-family: 'Roboto', Sans-serif; font-size: 50px;font-weight:800;">The Perks</h1>
                    <p>
                        While all of Connect.ca’s clients have access to our content and webinars, members of the Inner Circle gain unfettered, direct contact to Connect.ca’s <u>Founders</u> , <u>Matt and Ryan</u> , and offers direct coaching and investment opportunities not available to regular clients.
                    </p>
                    <p>
                        This also includes regular financial and strategy reviews, where Inner Circle <br> clients get one-to-one advice.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="space--xs imageblock switchable feature-large" >
    <div class="imageblock__content col-lg-5 col-md-7">
        <div class="col-md-10">
            <div class="switchable__text">
                <br>
                <br>
                <br>
                <h1 style="color:#403254; font-family: 'Roboto', San-serif; font-size:24px; text-align:left; font-weight:600;">What Else?</h1>
                <p style=" font-weight:400; font-family:'Roboto', Sans-serif; color:#000000;"> With access to the Inner Circle, clients also receive exclusive, regular information sessions and educational webinars with expert industry guests to coach you through developing your personal portfolio. </p>
                <p style=" font-weight:400; font-family:'Roboto', Sans-serif; color:#000000;"> Connect.ca produces a wide range of data, content, and events to educate our Inner Circle clients, empowering them to make the best real estate decisions. </p>
                <p style=" font-weight:400; font-family:'Roboto', Sans-serif; color:#000000;"> This involves both general content about real estate and investing as well as specific content about individual investment opportunities. </p>
                <h3 style="color:#403254; font-family: 'Roboto', San-serif; font-size:24px; text-align:left; font-weight:600;">Unmatched Content</h3>
                <p style=" font-weight:400; font-family:'Roboto', Sans-serif; color:#000000;"> Generally speaking, we produce the widest range and most in-depth content out of all our competitors, including: </p>
                <p style=" font-weight:400; font-family:'Roboto', Sans-serif; color:#000000;">
                    • Emails and newsletters <br>
                    • Blog posts <br>
                    • Videos <br>
                    • Events <br>
                    • Webinars <br>
                    • Investor Seminars <br>
                    • Lunch and Learns <br>
                    • One Day Exclusive Sales <br>
                    • VIP Private Previews  </p>
                {{-- <p style=" font-weight:400; font-family:'Roboto', Sans-serif; color:#000000;">• Blog posts</p>
                <p style=" font-weight:400; font-family:'Roboto', Sans-serif; color:#000000;">• Videos </p>
                <p style=" font-weight:400; font-family:'Roboto', Sans-serif; color:#000000;">• Events </p>
                <p style=" font-weight:400; font-family:'Roboto', Sans-serif; color:#000000;">• Webinars </p>
                <p style=" font-weight:400; font-family:'Roboto', Sans-serif; color:#000000;">• Investor Seminars</p>
                <p style=" font-weight:400; font-family:'Roboto', Sans-serif; color:#000000;">• Lunch and Learns</p>
                <p style=" font-weight:400; font-family:'Roboto', Sans-serif; color:#000000;">• One Day Exclusive Sales </p>
                <p style=" font-weight:400; font-family:'Roboto', Sans-serif; color:#000000;">• VIP Private Previews </p> --}}


             </div>
          </div>
    </div>
    <div class="container">
        <div class="row" >
            <div class="col-lg-4 col-md-10"style="background-color: #000000; padding:50px 50px;">
                <h2 style="  color: #FFDE59; font-family: 'Roboto', Sans-serif; font-size: 25px; font-weight: 600; text-align:center">Join the Club</h2>
                <p style="text-align: center; color: #FFDE59;font-family: 'Ropa Sans', Sans-serif; font-size: 18px; font-weight: 400;">
                    Sharpen your investor’s edge and get a leg-up on securing the financial future of your dreams. Sign up for direct coaching and preferential access to our industry immersed founders through The Inner Circle here.
                </p>
                <form>
                    <div class="row">
                        {{-- <div class="col-12" > <input type="first_name" name="First Name" placeholder="First Name"> </div>
                        <div class="col-12"> <input type="last_name" name="Last Name" placeholder="Last Name"> </div>
                        <div class="col-12"> <input type="email_address" name="Email Address" placeholder="Email Address"> </div> --}}
                        <div class="col-12">
                            <input type="text" class="sticky_form_input" placeholder="Your First Name">
                            <input type="text" class="sticky_form_input" placeholder="Your Last Name">
                            <input type="text" class="sticky_form_input" placeholder="Your Email Address">
                            <textarea name="" id="" cols="30" rows="3" class="sticky_form_input mt-3" placeholder="How can we help?"></textarea>
                        </div>
                        <div style="padding-left:55px;">
                            <button class="my-button" title="Relevant Title" href="#">Let's Connect</button>
                        </div>
                        
        
                    </div>
                </form>
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