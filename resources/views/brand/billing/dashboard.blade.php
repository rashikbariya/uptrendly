@extends('brand.billing.index')
@section('billing-content')


<div class="row clearfix" style="color: #2b2b2b; margin-bottom: 20px; padding: 5px;text-align: center">
     @if(count($data)>0)
        <div class="col-lg-4" style="text-align: center; margin-bottom: 30px">
            <h2 class="mbs">Plan Info</h2>
            <div class="mbs standout-text">{{$data['pricing_title']}} Pricing</div>
            <div class="plan-price free">

                @if($data['price_per_month']==0)
                    FREE
                    <div class="term">forever</div>
                @else
                    Nrs {{$data['price_per_month']}}
                    <div class="term">monthly</div>
                @endif
            </div>
            <div class="mbm">
                <p>You have <strong>1</strong> inbox(es)</p>
                <p>Your plan has <strong>1</strong> inbox(es)</p>



            </div>
            @if($data['pricing_status']==2)
                <a href="#" class="a-pricing-btn">RENEW PLAN</a><br>
            @elseif($data['pricing_status']==1)
                @if($data['left_days']<6)
                    <a href="#" class="a-pricing-btn">RENEW PLAN</a><br>
                    @else
                    <p style="background: #db0700; padding: 5px;text-align: center;font-size: 12px; color: white">You can renew your package only after it expires or before 5 days!!!</p>
                @endif
            @endif


        </div>
         @else
        <div class="col-lg-4" style="text-align: center; margin-bottom: 30px">
            <h2 class="mbs">Plan Info</h2>
            <div class="mbs standout-text">Basic Pricing</div>
            <div class="plan-price free">


                    FREE
                    <div class="term">forever</div>


            </div>
            <div class="mbm">
                <p>You have <strong>1</strong> inbox(es)</p>
                <p>Your plan has <strong>1</strong> inbox(es)</p>



            </div>
            <a href="{{url('brand/billing/plans')}}" class="a-pricing-btn">CHANGE PLAN</a><br>


        </div>
         @endif



    @if(count($data)>0)
           @if($data['pricing_status']==1)

            <div class="col-lg-4" style="text-align: center; margin-bottom: 10px">
                <div>
                    <svg width="250" height="250" viewBox="0 0 120 120">
                        <circle cx="60" cy="60" r="54" fill="none" stroke="#e6e6e6" stroke-width="8" />
                        <circle cx="60" cy="60" r="54" fill="none" stroke="{{$data['left_days']<6?'#c71818c9':'#65cadb'}}" stroke-width="8" stroke-dasharray="339.292" stroke-dashoffset="{{339.292 * (1-((($data['total_days']-$data['left_days']))/100))}}" />


                        <text x="50%" y="40%" font-size="11px" alignment-baseline="middle" text-anchor="middle">
                            {{$data['left_days'] }} {{ $data['left_days']<2?'Day':'Days'.' Left'}} </text>
                        <text x="50%" y="53%" font-size="10px" alignment-baseline="middle" text-anchor="middle">of</text>
                        <text x="50%" y="65%" font-size="11px" alignment-baseline="middle" text-anchor="middle">
                            {{$data['total_days'] }} {{ $data['total_days']<2?'Day':'Days'.' Left'}} </text>




                    </svg>
                </div>
            </div>
               @elseif($data['pricing_status']==2)
            <div class="col-lg-4" style="text-align: center; margin-bottom: 10px">
                <h3 style="font-size: 1rem">
                   Your subscription has been expired, Please renew your "{{$data['pricing_title']}}" subscription
                </h3>
                <p>
                    <a href="{{url('brand/billing/renew-plan/'.$data['id'])}}" class="btn b-pricing-btn btn">Renew Now</a>
                </p>
                <p>
                    OR
                </p>
                <h3 style="font-size: 1rem">
                    upgrade your subscription
                </h3>
                <p>
                    <a href="{{url('brand/billing/plans')}}" class="btn b-pricing-btn btn">Change Plan</a>
                </p>
            </div>

               @elseif($data['pricing_status']==3)
                 <div class="col-lg-4" style="text-align: center; margin-bottom: 10px">
                   <img style="width:200px" src="{{url('img/pending-payment.gif')}}" alt="gifofpendingpayment">
                     <h3 style="font-size: 1rem">
                         Your "{{$data['pricing_title']}}" subscription payment is still pending, Please clear your payment
                     </h3>

                 </div>
               @endif

            @else



        @endif





   @if(count($data)>0)
             <div class="col-lg-4" style="text-align: center; margin-bottom: 10px;">
                 <div>


                     @if($data['pricing_status']==1)
                         <p><i class="icon-calendar"></i> Start Date: <b>{{$data['from_date']}}</b></p>

                         <p style="color: {{$data['pricing_status']==2?'#c71818c9':'#2b2b2b'}}"><i class="icon-calendar"></i> End Date: <b>{{$data['to_date']}} {{$data['pricing_status']==2?'(Out Dated)':''}}</b></p>
                       @if($data['left_days']<6)
                             <p> <span style="color: #c71818c9; font-size: 1.5rem">{{$data['left_days']}}</span> {{$data['left_days']==1?'Day':'Days'}} left
                                 Would you like to renew your {{$data['pricing_title']}} subscription </p>
                             <a href="#" class="btn b-pricing-btn btn">Renew Now</a>
                           @endif
                     @endif

                 </div>

             </div>
       @endif

</div>

@stop()


