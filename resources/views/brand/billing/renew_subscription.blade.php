@extends('layouts.brand')

@section('brand-content')
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
            border-radius: 6px;
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

        .b-pricing-btn:hover{
            background-color: #2b2b2ba8;
        }
        label.error {
            font-size: 14px;
            display: block;
            margin-top: 5px;
            font-weight: 600;
            color: red;
        }


    </style>

    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin grid-margin-md-0 stretch-card">
                <div class="card clearfix" style="padding: 10px" >
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{url('brand/billing/dashboard')}}">Billing Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Renew Plan Plan Name</span></li>
                        </ol>
                    </nav>
                   <div class="row pricing-table">
                       <div class="col-md-4 grid-margin stretch-card pricing-card">
                           <div class="card pricing-card-body border-primary">
                               <div class="text-center pricing-card-head">

                                   <h1>Standard</h1>
                                   <div class="plan-price">
                                       Nrs 2000

                                       <div class="term">monthly</div>

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


                               <form class="forms-sample" method="post">
                                   @csrf()
                                  <select class="form-control" name="total_month">
                                      <option value="">Select Month</option>
                                      <option value="1">1 Month</option>
                                      <option value="3">3 Month</option>
                                      <option value="6">6 Month</option>
                                      <option value="9">9 Month</option>
                                      <option value="12">12 Month</option>
                                  </select>
                                   @if($errors->has('total_month'))
                                       <label id="name-error" class="error" for="total_month">{{$errors->first('total_month')}}</label>
                                   @endif
                                   <button  style="margin-top: 10px" type="submit" class="btn b-pricing-btn mr-2">Renew Plan</button>

                               </form>





                           </div>
                       </div>
                   </div>

                    </div>
                </div>
            </div>
        </div>
@stop()


