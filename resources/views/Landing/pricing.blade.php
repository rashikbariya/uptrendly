@extends('layouts.landing')
@section('landing-content')
    <style>



        .plan-price .term {
            text-align: center;
            color: #b2b2b2;
            font-size: 14px;
            font-style: italic;
            font-weight: 300;
            margin: 5px 0 0 -5px;
        }

        ul{
            list-style: none;
            margin: 0px;
            margin-bottom: 25px;
            font-size: 14px;
            line-height: 1.7;

        }
        .pricing-one .prcing-table__plan-name {
            font-size: 1.125rem;
            font-weight: 500;
            background-color: #f2f4f6;
            padding: .25rem .875rem;
            color: #2d3136;
        }


        .pricing-table ul li:nth-child(odd) {
            background-color: #f7f7f7;
        }
        .pricing-table ul li:nth-child(even) {
            background-color: #fbfbfb;
        }



        .pricing-table ul li {
            padding: 6px 10px;
            position: relative;
        }


        .pricing-table .pricing-card .pricing-card-body {
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 10px;
            text-align: center;
        }

        .pricing-card-body h1{
            font-size: 36px;
            font-weight: 300;
            margin-bottom: 5px;
        }

        .term {
            text-align: center;
            color: #b2b2b2;
            font-size: 14px;
            font-style: italic;
            font-weight: 300;
            margin: 5px 0 0 -5px;
        }

        .plan-price {
            font-size: 49px;
            line-height: 1.29;
            color: #65cadb;
        }

        .db-btn__type-md {
            min-width: 11.125rem;
            height: 3.625rem;
            line-height: 3.625rem;
        }
        .selected{
            border: 2px solid;
            border-color: #65cadb;
            box-shadow: 0 15px 30px 0 rgba(0,0,0,0.11),
            0 5px 15px 0 rgba(0,0,0,0.08);
        }
        .not-selected{

            border: 1px solid;
            border-color: #5858581c;

        }
        .not-selected:hover{


            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.12),
            0 2px 4px 0 rgba(0,0,0,0.08);
        }

        .pricing-table{
            display: inline;
        }
        .db-btn__type-md {
            min-width: 8.125rem;
            height: 2.625rem;
            line-height: 2.625rem;
        }
        .selected:before {
            position: absolute;
            top: 0px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            max-width: 65%;
            width: 100%;
            padding: 3px 15px 5px;
            border-radius: 0 0 6px 6px;
            color: #fff;
            font-weight: 600;
            background-color: #65cadb;
            white-space: nowrap;
            text-transform: uppercase;
            content: "Recommended";
        }
        .pricing-header h1 {
            font-size: 36px;
            font-weight: 300;
            margin-bottom: 5px;
        }
        .opacity {
            opacity: 0.3;
        }

    </style>
    <section class="pricing-one" id="pricing" style="background-color: white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Pricing Module</h2>
                        <p>Although there is no strict rules when it comes to pricing on the most popular platform for Influencer Marketing,
                            there are many ways to strategize your budget based on a plan.
                        </p>
                    </div>
                </div>
                <!-- section title end -->
            </div>
            <!-- section title row end -->
            <div class="row">
                <div class="col-12 col-md-4" style="margin-bottom: 20px">
                    <div class="prcing-table reveal not-selected" style="height:100%;">

                        <div class="pricing-header">

                            <h1>Package 1 </h1>
                            <div class="plan-price">Free</div>
                            <div class="term">Forever</div>


                            <div class="pricing-table">
                                <ul>
                                    <li class="even">Unlimited Searches</li>
                                    <li class="odd">1 campaign</li>
                                    <li class="even opacity">advisor for campaign</li>
                                    <li class="odd opacity">dedicated manager and regular visit</li>
                                    <li class="even opacity">detailed monthly report </li>
                                    <li class="odd opacity">Favourite list </li>
                                    <li class="even opacity">campaign tracking </li>
                                    <li class="odd">analyze details about influencer </li>
                                    <li class="odd">email and chat support  </li>
                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="col-12 col-md-4" style="margin-bottom: 20px">
                    <div class="prcing-table reveal not-selected" style="height:100%;">

                        <div class="pricing-header">

                            <h1>Package 2</h1>
                            <div class="plan-price">Free</div>
                            <div class="term">Forever</div>


                            <div class="pricing-table">
                                <ul>
                                    <li class="even">Unlimited Searches</li>
                                    <li class="odd">3 campaign</li>
                                    <li class="even opacity">advisor for campaign</li>
                                    <li class="odd">dedicated manager and regular visit</li>
                                    <li class="even">detailed monthly report </li>
                                    <li class="odd">Favourite list </li>
                                    <li class="even opacity">campaign tracking </li>
                                    <li class="odd">analyze details about influencer </li>
                                    <li class="odd">email and chat support  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" style="margin-bottom: 20px">
                    <div class="prcing-table reveal selected" style="height:100%;">

                        <div class="pricing-header">

                            <h1>Package 3</h1>
                            <div class="plan-price">Free</div>
                            <div class="term">Forever</div>


                            <div class="pricing-table">
                                <ul>
                                    <li class="even">Unlimited Searches</li>
                                    <li class="odd">unlimited campaign</li>
                                    <li class="even">advisor for campaign</li>
                                    <li class="odd">dedicated manager and regular visit</li>
                                    <li class="even">detailed monthly report </li>
                                    <li class="odd">Favourite list </li>
                                    <li class="even">campaign tracking </li>
                                    <li class="odd">analyze details about influencer </li>
                                    <li class="odd">email and chat support  </li>
                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
                {{--@foreach($pricing as $pricingData)--}}
                    {{--<div class="col-12 col-md-4" style="margin-bottom: 20px">--}}
                        {{--<div class="prcing-table reveal {{$pricingData->r_status==1?'selected':'not-selected'}}" style="height:100%;">--}}

                            {{--<div class="pricing-header">--}}

                                {{--<h1>{{$pricingData->pricing_title}}</h1>--}}
                                {{--<div class="plan-price">Nrs {{$pricingData->price_per_month}}</div>--}}
                                {{--<div class="term">monthly</div>--}}

                                {{--<div class="pricing-table">--}}
                                    {{--<ul>--}}
                                        {{--<li class="even">Email preview on air</li>--}}
                                        {{--<li class="odd">Spam testing and blocking</li>--}}
                                        {{--<li class="even">10 GB Space</li>--}}
                                        {{--<li class="odd">50 user accounts</li>--}}
                                        {{--<li class="even">Free support for one years</li>--}}
                                        {{--<li class="odd">Free upgrade for one year</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<a href="{{url('brand/billing/change-plan/'.$pricingData->id)}}" class="db-btn db-btn__type-md" style="background: #0a0a0a;" >Buy Now</a>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}





            </div>
        </div>
    </section>
@stop()
