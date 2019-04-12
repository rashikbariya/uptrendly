@extends('layouts.landing')
@section('landing-content')
    <style>



        .slick-slide img {
            width: 100%;
        }

        .slick-slider
        {
            position: relative;

            display: block;
            box-sizing: border-box;

            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;

            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list
        {
            position: relative;

            display: block;
            overflow: hidden;

            margin: 0;
            padding: 0;
        }
        .slick-list:focus
        {
            outline: none;
        }


        .slick-slider .slick-track,
        .slick-slider .slick-list
        {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slick-track
        {
            position: relative;
            top: 0;
            left: 0;

            display: block;
        }
        .slick-track:before,
        .slick-track:after
        {
            display: table;

            content: '';
        }
        .slick-track:after
        {
            clear: both;
        }
        .slick-loading .slick-track
        {
            visibility: hidden;
        }

        .slick-slide
        {
            display: none;
            float: left;

            height: 100%;
            min-height: 1px;
        }
        [dir='rtl'] .slick-slide
        {
            float: right;
        }
        .slick-slide img
        {
            display: block;
        }
        .slick-slide.slick-loading img
        {
            display: none;
        }
        .slick-slide.dragging img
        {
            pointer-events: none;
        }
        .slick-initialized .slick-slide
        {
            display: block;
        }
        .slick-loading .slick-slide
        {
            visibility: hidden;
        }
        .slick-vertical .slick-slide
        {
            display: block;

            height: auto;

            border: 1px solid transparent;
        }
        .slick-arrow.slick-hidden {
            display: none;
        }
        .how-it-works {
            background: #282828;
            color: #fff;
            padding: 153px 0 56px;
        }
        .how-it-works .static-container {
            position: relative;
            z-index: 1;
        }
        .static-container {
            padding-left: 10px;
            padding-right: 10px;
            margin: 0 auto;
            max-width: 1120px;
        }
        .how-it-works.add {
            background: url('frontend/img/bg04.png') -50px 100% no-repeat #282828;
        }
        @media (min-width: 1024px)
        {
            .how-it-works .section-heading {
            margin-bottom: 123px;
        }
        }

            @media (min-width: 768px)
            {
               .how-it-works .section-heading {
                    margin-bottom: 80px;
                }
            }
               .how-it-works .section-heading {
                    margin-bottom: 50px;
                }
               .section-heading.in-viewport {
                    -webkit-transform: none;
                    -ms-transform: none;
                    transform: none;
                    opacity: 1;
                }
                .section-heading {
                    transition: opacity .3s ease-in-out,-webkit-transform .3s ease-in-out;
                    transition: opacity .3s ease-in-out,transform .3s ease-in-out;
                    transition: opacity .3s ease-in-out,transform .3s ease-in-out,-webkit-transform .3s ease-in-out;
                    margin: 0 auto 75px;
                    text-align: center;
                    max-width: 610px;
                    font-size: 18px;
                    line-height: 1.6;
                    opacity: 0;
                    -webkit-transform: translateY(-20%);
                    -ms-transform: translateY(-20%);
                    transform: translateY(-20%);
                    transition-duration: .5s;
                }
        .how-it-works .section-heading .sub-title {
            text-transform: capitalize;
            font-size: 22px;
            display: block;
            margin: 0 0 12px;
            letter-spacing: -.3px;
        }
        .section-heading h2 {
            margin-bottom: 25px;
        }
        .grid-flex,.grid-flex-height {
            margin-left: -10px;
            margin-right: -10px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
        .process-detail-list {
            font-size: 18px;
            line-height: 1.35;
            padding-top: 12px;
            max-width: 432px;
        }
        .how-it-works.in-viewport .process-detail-list li {
            opacity: 1;
        }

      .process-detail-list li {
            transition: opacity .3s ease-in-out;
            border-bottom: 1px solid #fff;
            margin-bottom: 33px;
            padding-bottom: 18px;
            transition-duration: .5s;
            opacity: 0;
        }

       .how-it-works.add .process-list {
            margin-bottom: 0;
        }

        @media (min-width: 768px)
        {
            .process-list {
                max-width: 436px;
                margin: 0 0 -90px 11px;
            }
        }
          .process-list {
                text-align: center;
            }
        .process-list li {
            padding: 0 0 41px;
            position: relative;
            z-index: 1;
        }

        .process-list .caption {
            font-size: 17px;
            font-weight: 500;
            text-transform: capitalize;
        }
        .process-list .inner-hold {
            position: relative;
            top: -54px;
        }

        .clearfix:after, .grid:after, #static-site .static-container:after {
            content: '';
            display: block;
            clear: both;
        }
        .process-list .process-title {
            display: inline-block;
            vertical-align: top;
            background: #fff;
            min-width: 200px;
            color: #65cadb;
            border-radius: 25px;
            font: 700 14px/18px Roboto,"Helvetica Neue",Arial,Helvetica,sans-serif;
            box-shadow: 0 4px 10px rgba(57,71,90,.13);
            padding: 10px 26px 11px;
            margin: -22px 0 90px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .process-list li:nth-child(odd):before {
            left: auto;
            right: 0;
            border-width: 6px 6px 6px 0;
            border-radius: 0 16px 16px 0;
        }

        .process-list li:before {
            content: '';
            position: absolute;
            top: -6px;
            left: 0;
            bottom: 0;
            width: 50%;
            border: solid #fff;
            border-radius: 16px 0 0 16px;
            border-width: 6px 0 6px 6px;
            z-index: -1;
        }

        .process-list li {
            padding: 0 0 41px;
            position: relative;
            z-index: 1;
        }
        .process-detail-list h3 .number {
            margin-right: 10px;
            color: #65cadb;
        }
        .process-list .ico-hold {
            margin: 0 0 15px;
        }
        .process-list .inner-hold {
            position: relative;
            top: -54px;
        }
        .how-it-works {
            background: #282828;
            color: #fff;
            padding: 153px 0 56px;
        }
        .clearfix:after,.grid:after,.static-container:after {
            content: '';
            display: block;
            clear: both;
        }
        p {
            margin: 0 0 1em;
        }

    </style>


    <div>

    </div>

    <!-- =========== Hero Start ============ -->
    <section class="hero-four hero-text-dark content-left ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero">
                        <div class="hero-wrapper">
                            <div class="hero-content">
                                <h1 class="hero__title" style="font-weight: 600;font-size: 1.9em;">Monetize Your Passion</h1>
                                <p class="hero__caption">
                                    Got followers on Social Media? Are your posts usually flooded with likes? How about getting financial returns for posting pictures with your Favorite brands.</p>
                                <div class="newsletter-optin">
                                    <a href="{{url('choose-social-account')}}" class="db-btn db-btn__blue db-btn__type-sm">Be Influencer and Get Paid</a>

                                </div>
                            </div>
                            <div class="hero-media reveal"
                                <picture class="hero-media__img">
                                    <img src="{{url('frontend/img/influencers/i1.png')}}" style="
    width: 750px;
" alt="hero-media__img">
                                </picture>

                                <span class="hero__circle">
                <img class="svg" src="{{url('frontend/img')}}/circle.svg" alt="hero__circle">
            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========== Hero End ============ -->




    <!-- =========== How it work End ============ -->
    <section style="padding-top: 30px" class="working-process" id="services">
        <div class="container">

            <!-- section title row end -->
            <div class="row">
                <div class="col-12">
                    <div class="working-process-wrapper reveal">
                        <ul class="working-process-list">
                            <li class="working-process-list-item">
                                        <span class="working-process__icon">
                                            <i class="fa fa-dollar" style="color: #65cadb;
    font-size: 2.625rem;
    line-height: 5.8125rem;"></i>
                                        </span>
                                <div>
                                    <h5 class="working-process__title">Earn Money</h5>
                                    <p class="working-process__description">Generate remuneration for doing what you love-sharing inspirational photos, videos and engaging content.
                                    </p>
                                </div>
                            </li>
                            <!-- single item end -->
                            <li class="working-process-list-item">
                                        <span class="working-process__icon">
                                         <i style="font-weight: 700;" class="nc-icon nc-p-heart"></i>
                                     </span>
                                <div>

                                    <h5 class="working-process__title">Build Personal Brand</h5>
                                    <p class="working-process__description">Associate with Nepal’s biggest brands and get opportunities to network with top influencers to build your profile.

                                    </p>
                                </div>
                            </li>
                            <!-- single item end -->
                            <li class="working-process-list-item">
                                    <span class="working-process__icon">
                                        <i style="font-weight: 700;" class="nc-icon nc-chart-bar-33"></i>
                                    </span>
                                <div>
                                    <h5 class="working-process__title">Professionals Growth</h5>
                                    <p class="working-process__description">Influencers maximize on earnings and professional growth through a constant flow of opportunities that fit their audience and personal brand.
                                    </p>
                                </div>
                            </li>
                            <!-- single item end -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- content row end -->
        </div>
    </section>




    <!-- =========== how it works-1 Start ============ -->
    <section class="how-it-works add viewport-section in-viewport">
        <div class="static-container">
            <header class="section-heading in-viewport"><span class="sub-title">how it works</span><h2>Getting Started is Simple</h2>
            </header>
            <div class="grid-flex">
                <div class="col-sm-6 col-md-offset-1 col-md-4">
                    <ul class="process-detail-list">
                        <li style="transition-delay: 0ms;">
                            <h3><span class="number">01</span>Get Registered</h3>
                            <p style="color: #fff;">The basic requirement for you to get registered is to have a strong media presence minimum 5k followers in your Instagram handle.</p>
                        </li>
                        <li style="transition-delay: 250ms;">
                            <h3><span class="number">02</span>Get Campaign</h3>
                            <p style="color: #fff;">You can get opportunity to be part of different campaign from various brands. The better follower you have the better chance of getting big campaigns. The campaign duration can last from a month till a yearlong campaign.</p>
                        </li>
                        <li style="transition-delay: 500ms;">
                            <h3><span class="number">03</span>Get paid</h3>
                            <p style="color: #fff;">Once you complete your required post share in your social media handles, your payment will be deposited in your provided bank details.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-offset-1 col-md-6">
                    {{--<img src="{{url('frontend/img/i-step.png')}}" style="width: 320px; max-width: 320px">--}}
                    <ul class="process-list">
                        <li><strong class="process-title">Uptrendly Platform</strong></li>
                        <li>
                            <div class="inner-hold">
                                <div class="ico-hold"><img src="{{url('frontend/img/ico08.png?29ec308166c25ec3')}}" style=" width: 97px;height: 97px;" alt=""></div><span class="caption">Get Registered
                                </span></div>
                        </li>
                        <li>
                            <div class="inner-hold">
                                <div class="ico-hold"><img src="{{url('frontend/img/ico09.png?29ec308166c25ec3')}}" style=" width: 97px;height: 97px;" alt=""></div><span class="caption">Get Campaing</span></div>
                        </li>

                            <div class="inner-hold">
                                <div class="ico-hold"><img src="{{url('frontend/img/ico10.png?29ec308166c25ec3')}}" style=" position: relative;width: 97px;height: 97px;z-index: 99;" alt=""></div><span class="caption">Get
                                paid</span></div>

                    </ul>
                </div>
            </div>
        </div>
    </section>



    <script>
        $(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 2
                    }
                }]
            });
        });
    </script>
@stop
