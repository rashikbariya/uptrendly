@extends('layouts.landing')
@section('landing-content')
    <div class="page-header">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="hero">
                    <div class="hero-wrapper">
                        <h2 class="hero__title">Frequently asked questions (FAQ)</h2>
                        <p class="hero__caption">Advice and answers from the Uptrendly Team.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <section class="features-two" id="feature">
        <div class="container">

            <!-- section title row end -->
            <div class="row">
                <div class="col-12 col-md-11 offset-md-1">
                    <div class="feature-wrapper">
                        <ul class="feature">
                            <li class="feature__list" data-sr-id="3" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; transition: transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; ">

                                <div>
                                    <h5 class="feature__title"><a href="{{url('/faqs/general-faqs')}}">General FAQs</a></h5>
                                    <p class="feature__description">Big, small, online, offline, local or international. Size doesn't matter. We work on diverse projects for top brands.</p>
                                </div>
                            </li>
                            <!-- single item end -->
                            <li class="feature__list" data-sr-id="4" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; transition: transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; ">

                                <div>
                                    <h5 class="feature__title"><a href="{{url('/faqs/influencer-faqs')}}">Influencer FAQs</a></h5>
                                    <p class="feature__description">They're probably distracted too. Keep it simple and beautiful, fun and functional. Clean aesthetics supported.</p>
                                </div>
                            </li>
                            <!-- single item end -->
                            <li class="feature__list" data-sr-id="5" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; transition: transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; ">

                                <div>
                                    <h5 class="feature__title"><a href="{{url('/faqs/brand-faqs')}}">Brand FAQs</a></h5>
                                    <p class="feature__description">While designing residential property, a great emphasis is placed on infrastructure: landscaping design.
                                    </p>
                                </div>
                            </li>
                            <!-- single item end -->
                        </ul>
                        <!-- feature content end -->
                        <div class="feature-media reveal">
                            <picture class="feature-media__img">
                                <source srcset="{{url('frontend/img')}}/faq-1.png" media="(min-width: 768px)">
                                <img src="{{url('frontend/img')}}/faq-2.png" alt="features--smaller">
                            </picture>
                        </div>
                        <!-- media content end -->
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
    </section>

@stop()
