@extends('brand.billing.index')
@section('billing-content')
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
        margin: 0;

        margin-bottom: 25px;
        font-size: 14px;
        line-height: 1.7;

    }



   .pricing-table ul li:nth-child(odd) {
        background-color: #f7f7f7;
    }

    .pricing-table ul li:nth-child(even) {
        background-color: #fbfbfb;
    }

   ul li:first-child {
        /*border-radius: 6px 6px 0 0;*/
    }

   .pricing-table ul li {
        padding: 6px 10px;
        position: relative;
    }


    .pricing-table .pricing-card .pricing-card-body{
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 10px;
        border-radius: 6px;
        text-align: center;
    }
    .hoverpricing{

    }

    .hoverpricing:hover{
        border-color: #0a1015;
    }
    .pricing-table{
        padding: 20px;
    }
    .border-primary{
        border: 1px solid;
        border-color:#b4b4b4 !important;
    }
    .pricing-card-body h1{
        font-size: 36px;
        font-weight: 300;
        margin-bottom: 5px;
    }
    .plan-price {
        margin: auto;
        padding-bottom: 15px;
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

    .selected{
        border: 2px solid;
        border-color: #65cadb;
    }

    .selected:before{
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
        content: "current";

    }

    .b-pricing-btn{
        background-color: #2b2b2b;
        max-width: 65%;
        margin-left: auto;
        margin-right: auto;
        padding: 8px 15px;
        font-size: 14px;
        font-weight: 500;
        text-transform: uppercase;
        border-radius: 6px;
        left: 20px;
        right: 20px;
        color: white;
        border: none;
    }



    .a-pricing-btn{
        background-color: #65cadb;
        max-width: 65%;
        margin-left: auto;
        margin-right: auto;
        padding: 8px 15px;
        font-size: 14px;
        font-weight: 500;
        text-transform: uppercase;
        border-radius: 6px;
        left: 20px;
        right: 20px;
        color: white;
        border: none;
    }




</style>


<div class="row pricing-table" style="color: #2b2b2b">


    <div class="col-md-4 grid-margin stretch-card pricing-card">
        <div class="card pricing-card-body {{$brandPriceId==0 ?'selected':'border-primary'}}">
            <div class="text-center pricing-card-head">

                <h1>Basic</h1>
                <div class="plan-price">

                        Free


                        <div class="term">forever</div>





                </div>
            </div>
            <ul style="
    margin-left: -18px;
">
                <li>Email preview on air</li>
                <li>Spam testing and blocking</li>
                <li>10 GB Space</li>
                <li>50 user accounts</li>
                <li>Free support for one years</li>
                <li>Free upgrade for one year</li>
            </ul>


            @if($brandPriceId==0)
                <a href="{{url('brand/billing/dashboard')}}" class="{{$brandPriceId==0 ?'a-pricing-btn':'b-pricing-btn'}}">VIEW PLAN</a>

            @else
                <a href="" class="{{$brandPriceId==0 ?'a-pricing-btn':'b-pricing-btn'}}">CHANGE PLAN</a>

            @endif



        </div>
    </div>

    @foreach($pricingData as $pricing)

    <div class="col-md-4 grid-margin stretch-card pricing-card">
        <div class="card pricing-card-body {{$pricing->id == $brandPriceId ?'selected':'border-primary'}}">
            <div class="text-center pricing-card-head">

                <h1>{{$pricing->pricing_title}}</h1>
                <div class="plan-price">
                   @if($pricing->price_per_month==0)
                       Free


                        <div class="term">forever</div>

                       @else
                       Nrs {{$pricing->price_per_month}}

                        <div class="term">monthly</div>

                       @endif
                </div>
            </div>
            <ul style="
    margin-left: -18px;
">
                <li>Email preview on air</li>
                <li>Spam testing and blocking</li>
                <li>10 GB Space</li>
                <li>50 user accounts</li>
                <li>Free support for one years</li>
                <li>Free upgrade for one year</li>
            </ul>



               @if($pricing->id ==$brandPriceId)
                <a href="{{url('brand/billing/dashboard')}}" class="{{$pricing->id == $brandPriceId ?'a-pricing-btn':'b-pricing-btn'}}">VIEW PLAN</a>

            @else
                <a href="{{url('brand/billing/change-plan/'.$pricing->id)}}" class="{{$pricing->id == $brandPriceId ?'a-pricing-btn':'b-pricing-btn'}}">CHANGE PLAN</a>

            @endif


        </div>
    </div>
        @endforeach

</div>

@stop()


