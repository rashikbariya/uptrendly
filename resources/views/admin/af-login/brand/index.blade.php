@extends('layouts.admin')
@section('admin-content')
    <style>

        .ava-Status-no{
            border-radius: 50%;
            position: absolute;
            left: 0px;
            margin-left: 10px;
            background-color: #ed5564;
            width: 15px;
            height: 15px;
        }

        .ava-Status-yes{
            border-radius: 50%;
            position: absolute;
            left: 0px;
            margin-left: 10px;
            background-color: green;
            width: 15px;
            height: 15px;
        }

    </style>

    <div class="page  has-sidebar-left height-full">
        <header class="blue accent-3 relative">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <i class="icon-backspace"></i>
                            Brand Information
                        </h4>
                    </div>
                </div>
                {{--<div class="row justify-content-between">--}}
                    {{--<ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">--}}
                        {{--<li>--}}
                            {{--<a class="nav-link active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all"--}}
                               {{--role="tab" aria-controls="v-pills-all"><i class="icon icon-all_out"></i>All Brand</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a class="nav-link" id="v-pills-buyers-tab" data-toggle="pill" href="#v-pills-buyers"--}}
                               {{--role="tab" aria-controls="v-pills-buyers"><i class="icon icon-data_usage"></i> Brand--}}
                                {{--Login Log</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            </div>
        </header>
        <div class="container-fluid " >
            <div class="tab-content my-3" id="v-pills-tabContent">
                <div class="tab-pane show active go" id="v-pills-all" role="tabpanel">
                    <div class="row row-eq-height my-3">

                        @foreach($brandInfoData as $brandInfo)

                            <!-- Social Widget Start -->
                                <div class="col-lg-4 col-md-4 ">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="{{$brandInfo->available_status==0?'ava-Status-no':'ava-Status-yes'}}"></div>
                                            @if($brandInfo->brandinfo->new_status==0)
                                                <div class="blink" style="right:  0;background-color: #ff752f;position: absolute;width: 40px;height:  20px;" >
                                                    <label style="color:white">New</label>
                                                </div>
                                                @endif()
                                            <div class="image m-3">

                                                <img alt="{{$brandInfo->brandinfo->brand_name}}" style="width: 150px" src="{{$brandInfo->brandinfo->photo_name!=null || $brandInfo->brandinfo->photo_name!=''?
                                                    url('/users/upload/brand/thumbnail/'.$brandInfo->brandinfo->photo_name):url('/img/branddefault.png') }}" class="user_avatar img-thumbnail">


                                            </div>
                                            <div style="margin-bottom: 10px">
                                                <h6 class="p-t-10"> {{$brandInfo->brandinfo->brand_name}}</h6>
                                                {{$brandInfo->email}}<br>

                                                @switch($brandInfo->status)

                                                    @case(1)
                                                    <span class="badge badge-success"><span>Active</span></span>
                                                    @break
                                                    @case(2)
                                                    <span class="badge badge-danger"><span class="blink">Not Verified</span></span>
                                                    @break
                                                    @case(3)
                                                    <span class="badge badge-danger"><span class="blink">Suspended</span></span>
                                                    @break
                                                    @case(4)
                                                    <span class="badge badge-primary"><span>Verified</span></span>
                                                    @break

                                                @endswitch()


                                            </div>
                                            <div style="margin-bottom: 10px" class="text-center bg-light b-b p-3">

                                                <h3 class="my-3">
                                                @if($brandInfo->brandPricing!=null)
                                                        @if($brandInfo->brandPricing->to_date < date('Y-m-d') )

                                                        @else
                                                            @if(\Carbon\Carbon::createFromFormat('Y-m-d',$brandInfo->brandPricing->to_date) ->
                                                        diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d',date('Y-m-d')))<1)
                                                        @else
                                                            {{\Carbon\Carbon::createFromFormat('Y-m-d',$brandInfo->brandPricing->to_date) ->
                                                        diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d',date('Y-m-d')))>1?\Carbon\Carbon::createFromFormat('Y-m-d',$brandInfo->brandPricing->to_date) ->
                                                        diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d',date('Y-m-d'))).' DAYS':\Carbon\Carbon::createFromFormat('Y-m-d',$brandInfo->brandPricing->to_date) ->
                                                        diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d',date('Y-m-d'))).' DAY'}}
                                                        @endif
                                                            @endif
                                                    @else
                                                        FREE
                                                    @endif

                                                    </h3>


                                            </div>


                                            <label>

                                            @if($brandInfo->brandPricing!=null)
                                                {{$brandInfo->brandPricing->pricing->pricing_title . ' Package'}}
                                                {{ $brandInfo->brandPricing->total_month>1?'(' .$brandInfo->brandPricing->total_month . ' Months)':'(' .$brandInfo->brandPricing->total_month .' Month)'  }}
                                             @else
                                                Basic Package
                                                @endif
                                            </label>

                                            {{--<label v-if="brandInfo.brand_pricing!=null">{{brandInfo.brand_pricing.pricing.pricing_title}} Package--}}
                                                {{--({{brandInfo.brand_pricing.total_month>1?brandInfo.brand_pricing.total_month+ ' Months': brandInfo.brand_pricing.total_month+ ' Month' }})</label>--}}
                                            {{--<label v-if="brandInfo.brand_pricing==null">Basic Package</label> <br>--}}

                                            {{--<label v-if="brandInfo.brand_pricing!=null">Start Date: {{brandInfo.brand_pricing.from_date}}</label>--}}
                                            {{--<label v-if="brandInfo.brand_pricing==null">Start Date: {{brandInfo.created_at}}</label>--}}
                                            {{--<label v-if="brandInfo.brand_pricing!=null">End Date: {{brandInfo.brand_pricing.to_date}}</label>--}}
                                            {{--<label v-if="brandInfo.brand_pricing==null">End Date: Null</label>--}}
                                            </div>



                                        <div class="card-footer white">
                                            <a  href="{{url('ut-admin/brand-info/'.$brandInfo->id)}}" class="btn btn-outline-primary btn-xs">View Brand</a>
                                        </div>
                                    </div>
                                </div>

                            @endforeach()

                    </div>

                </div>
            </div>
        </div>
    </div>
@stop()
