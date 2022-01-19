@extends('layouts.frontend')

@section('content')

<div class="main-container">
    <section class="text-center unpad--bottom switchable cta cta-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-4" style="position: relative;" >
                     <img alt="Image" class="block" src="{{ asset('uploads/Partners.png') }}"  style="margin-bottom: 0; max-width: 497px; width: 461px; height: auto; vertical-align: middle; display: inline-block;"> 
                     <img alt="Image" class="block" src="{{ asset('uploads/boat.png') }}" style="position:absolute; margin-top:-30px; max-width: 497px; width: 450px; height: auto; vertical-align: middle; display: inline-block; left:-80px;">
                    </div>
                <div class="col-sm-2">
                </div>
                <div class="col-sm-6">
                    <div class="switchable__text">
                        <h2 style="color: #403254; font-family: 'Roboto', Sans-serif; font-size: 55px; font-weight: 800; text-align:left;">
                            Meet the Team
                        </h2>
                        <p style="text-align: left; box-sizing: border-box; color: #000000; font-family: 'Ropa Sans', Sans-serif; font-size: 20px; font-weight: 400;"> 
                            Led by our two seasoned veterans of Canadian real estate
                            investment, Ryan Coyle and Matt Elkind, the Connect.ca team
                            is a modern, highly ambitious full-service brokerage.
                         </p>
                         <div class="row">
                            <div class="col-md-6">
                                <div class="feature">
                                    <p style="text-align: left; color: #000000; font-family: 'Gibson', Sans-serif; font-weight: 400;">
                                        Ryan and Matt have almost four decades of combined real estate investing experience and almost one hundred properties in their personal portfolios. Together, they built Connect.ca, which began by offering end-to-end real estate services for people inspired to develop a lucrative real estate portfolio and build long-term wealth. After teaming up with Lisa Andrews, a vastly experienced industry leader in real estate resale, they have been able to leverage their combined knowledge to further develop Connect.ca’s resale services.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature">
                                    <p style="text-align: left; color: #000000; font-family: 'Gibson', Sans-serif; font-weight: 400;"> 
                                        Now, Connect.ca is a full-service real estate brokerage, offering all of the advantages of being both a resale and investment real estate brokerage. As one of the most highly-awarded teams in Canadian real estate, Connect.ca has built over one billion dollars of real estate wealth for its clients through resale and investment properties.
                                    </p>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h1 style="color: #403254; font-family: 'Roboto', Sans-serif; font-size: 35px; font-weight: 800; text-align:center">
            Meet Our Founders
        </h1>
        <div class="row">
            <div class="col-sm-6" style="background-color: #403254">
                <div class="container" style="padding: 90px;">
                    <div class="row">
                        <div class="col-sm-9 mb-2">
                            <h2 style="color: #FFFFFF;
                                        font-family: 'Ropa Sans', Sans-serif;
                                        font-size: 27px;
                                        font-weight: bold;">
                                Ryan Coyle
                                <br>
                                <p style=" color: #FFFFFF;
                                    font-family: 'Roboto', Sans-serif;
                                    font-size: 15px;
                                    font-weight: 500;
                                    margin-top:-10px;">Broker, Co-Founder</p> 
                                </h2>
                        </div>
                        <div class="col-sm-1 mr-4">
                            <i class="fab fa-facebook"style="border-radius: 50px 50px 50px 50px; background-color: #79C9D1; font-size: var(--icon-size,25px);
                                                            line-height: var(--icon-size,25px);width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                            height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                            text-align: center;
                                                            justify-content: center;
                                                            cursor: pointer;
                                                            align-items: center;
                                                            webkit-box-align: center;
                                                            display: inline-flex;
                                                            color: #ffff;">
                            </i>
                        </div>
                        <div class="col-sm-1">
                            <i class="fab fa-twitter" style="border-radius: 50px 50px 50px 50px; background-color: #79C9D1; font-size: var(--icon-size,25px);
                                                                line-height: var(--icon-size,25px);width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                                height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                                text-align: center;
                                                                justify-content: center;
                                                                cursor: pointer;
                                                                align-items: center;
                                                                webkit-box-align: center;
                                                                display: inline-flex;
                                                                color: #ffff;">
                            </i>
                        </div>
                    </div>
                    <p style="color: #FFFFFF;
                             font-family: 'Roboto', Sans-serif;
                             font-size: 14px;
                             font-weight: 400;">
                        Knowing from a young age that a regular pension plan (if he ever had one) would never be enough to retire comfortably on, Ryan became obsessed with securing his financial future and quickly realized that real estate offered the best, simplest, and safest solution.
                    </p>
                    <p style="color: #FFFFFF;
                             font-family: 'Roboto', Sans-serif;
                             font-size: 14px;
                             font-weight: 400;">
                       Today, after 18 years of real estate investment experience, Ryan has built a personal portfolio of over 40 doors. Having learned first-hand how to accumulate massive wealth through real estate, Ryan is now obsessed with sharing his knowledge and helping others achieve their financial dreams.
                    </p>
                    <p style="color: #FFFFFF;
                             font-family: 'Roboto', Sans-serif;
                             font-size: 14px;
                             font-weight: 400;">
                       Life isn’t all about real estate deals and work; however, Ryan loves the outdoors and finds balance by being active in various sports. Ryan is a true believer in giving back to the community and city that he has been so fortunate to serve and do business in – he also contributes his time and money to several youth charities in the Greater Toronto Area.
                    </p>
                </div>
            </div>
            <div class="col-sm-6 pr-0 pl-0">
                <img src="{{ asset('uploads/p1.jpg') }}" alt="image">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 pr-0 pl-0">
                <img src="{{ asset('uploads/p2.jpg') }}" alt="image">
            </div>
            <div class="col-sm-6" style="background-color: #3A3594;">
                <div class="container" style="padding: 90px;">
                    <div class="row">
                        <div class="col-sm-9 mb-2">
                            <h2 style="color: #FFFFFF;
                                        font-family: 'Ropa Sans', Sans-serif;
                                        font-size: 27px;
                                        font-weight: bold;">
                                    Matt Elkind
                                <br>
                                <p style=" color: #FFFFFF;
                                    font-family: 'Roboto', Sans-serif;
                                    font-size: 15px;
                                    font-weight: 500;
                                    margin-top:-10px;">Broker of Record, Co-Founder</p> 
                                </h2>
                        </div>
                        <div class="col-sm-1 mr-4">
                            <i class="fab fa-facebook"style="border-radius: 50px 50px 50px 50px; background-color: #79C9D1; font-size: var(--icon-size,25px);
                                                            line-height: var(--icon-size,25px);width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                            height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                            text-align: center;
                                                            justify-content: center;
                                                            cursor: pointer;
                                                            align-items: center;
                                                            webkit-box-align: center;
                                                            display: inline-flex;
                                                            color: #ffff;">
                            </i>
                        </div>
                        <div class="col-sm-1">
                            <i class="fab fa-twitter" style="border-radius: 50px 50px 50px 50px; background-color: #79C9D1; font-size: var(--icon-size,25px);
                                                                line-height: var(--icon-size,25px);width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                                height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                                text-align: center;
                                                                justify-content: center;
                                                                cursor: pointer;
                                                                align-items: center;
                                                                webkit-box-align: center;
                                                                display: inline-flex;
                                                                color: #ffff;">
                            </i>
                        </div>
                    </div>
                    <p style="color: #FFFFFF;
                             font-family: 'Roboto', Sans-serif;
                             font-size: 14px;
                             font-weight: 400;">
                        Matt has always been passionate about wealth creation. As an investment fund advisor, Matt made the switch to focus full-time on real estate when he saw the unparalleled opportunities and return potential that traditional stocks and mutual funds just couldn’t match.
                    </p>
                    <p style="color: #FFFFFF;
                             font-family: 'Roboto', Sans-serif;
                             font-size: 14px;
                             font-weight: 400;">
                       Today, with over 30 condos, multi-unit residential buildings, and land development projects in his personal portfolio, Matt knows he made the right choice all those years ago – and has the proof to back it up! Now, Matt’s mission is to help others do the same.
                    </p>
                    <p style="color: #FFFFFF;
                             font-family: 'Roboto', Sans-serif;
                             font-size: 14px;
                             font-weight: 400;">
                       When not analyzing his next deal or researching more efficient tax strategies, Matt loves being active and helping people achieve more than they thought possible, whether that’s with his eight-year-old son or a member of the Connect.ca team. Matt loves skiing, kite surfing, mountain biking, and the occasional game of golf. An avid chef, art collector, and bio-hacker, Matt is always up for trying a new restaurant or gadget.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h2 style="color: #403254; font-family: 'Roboto', Sans-serif; font-size: 35px;font-weight: 800; text-align:center;">
            Our Team
        </h2>
        <div class="row" style="padding:100px;">
            <div class="col-sm-4">
                <img src="{{ asset('uploads/p3.png') }}" alt="image" style="width: 363px; height: auto; max-width: 100%; box-shadow: none; border-radius: 0; border: none;">
            </div>
            <div class="col-sm-6">
                <h2 style="color: #403254;
                            font-family: 'Ropa Sans', Sans-serif;
                            font-size: 25px;
                            font-weight: bold;">
                            Lisa Andrews
                            <br>
                            <p style="color: #403254;
                                    font-family: 'Roboto', Sans-serif;
                                    font-size: 16px;
                                    font-weight: 600;
                                    margin-top:-10px;">
                                   Director of Sales and Operations & Licensed Sales Representative
                            </p> 
                </h2>
                <div class="row">
                    <div class="col-sm-6">
                      <p style="color: #000000; font-family: 'Roboto', Sans-serif; font-size: 14px; font-weight: 400;">
                        Having grown up in Toronto, Lisa became a Realtor in 2004. Lisa is passionate about building and supporting teams and ensuring that top quality service is provided to our clients and team members. Lisa began her career on the resale side of the business, helping a team of 12 at RE/MAX become the number one team in Toronto for the number of units sold. After that, she transitioned to Keller Williams and was named the number 1 CEO in Canada, having helped more agents join her brokerage than anyone else in the country.
                      </p>
                    </div>
                    <div class="col-sm-6">
                        <p style="color: #000000; font-family: 'Roboto', Sans-serif; font-size: 14px; font-weight: 400;">
                            Lisa has been investing in real estate since she was 22 – her goal was to be mortgage-free by age 30 in order to raise a family with no financial obligations. After flipping a few properties and achieving that goal, Lisa re-financed her primary residence and invested in multi-unit homes, assignments and pre-construction condos. Lisa enjoys assisting the Connect team and our clients, and when she’s not working, she loves spending time outdoors with her husband and two kids in Toronto’s east end.
                          </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 pr-0 pl-40">
                <i class="fab fa-facebook"style="border-radius: 50px 50px 50px 50px; background-color: #79C9D1; font-size: var(--icon-size,25px);
                                                            line-height: var(--icon-size,25px);width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                            height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                            text-align: center;
                                                            justify-content: center;
                                                            cursor: pointer;
                                                            align-items: center;
                                                            webkit-box-align: center;
                                                            display: inline-flex;
                                                            color: #ffff;">
                </i>
            </div>
            <div class="col-sm-1 pr-40 pl-0">
                <i class="fab fa-twitter" style="border-radius: 50px 50px 50px 50px; background-color: #79C9D1; font-size: var(--icon-size,25px);
                                                        line-height: var(--icon-size,25px);width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                        height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                        text-align: center;
                                                        justify-content: center;
                                                        cursor: pointer;
                                                        align-items: center;
                                                        webkit-box-align: center;
                                                        display: inline-flex;
                                                        color: #ffff;">
                </i>    
        </div>
    </section>
    <section>
     <div class="main container">
         <div class="row">
            <div class="col-sm-12 text-center">
                <h1 style="color: #403254; font-family: 'Roboto', Sans-serif; font-size: 40px; font-weight: 800; text-align:center">
                    Looking For a Real Estate Agent?
                </h1>
                <p style="text-align: center; color: #000000; font-family: 'Ropa Sans', Sans-serif; font-size: 22px; font-weight: 500;">
                    Whether you’re selling, buying or investing in a property <br> our awards winning team of agents can help.
                </p>
                <a class="meet_our_agents_button">Meet Our Agents</a>
            </div>
         </div>
     </div>
    </section>
    <section class="unpad pb-0 mb-0">
    
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
    
                            <a class="meet_the_team_button">Selling & Buying</a>
                            <a class="meet_the_team_button">Investment Service</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection