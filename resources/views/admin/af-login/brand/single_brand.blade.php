@extends('layouts.admin')
@section('admin-content')

    <div class="page  has-sidebar-left height-full">
        <!--Change Status-->
        <div class="modal fade" id="changeStatus" data-backdrop="static"
             data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="changeStatus"
             aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content b-0">
                    <div class="modal-header r-0 bg-primary">
                        <h6 class="modal-title text-white">Change Status of Brand</h6>
                        <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle paper-nav-white active"><i></i></a>
                    </div>
                    <div class="modal-body">


                        <form>
                            <div class="form-row">

                                <div class="col-md-12 mb-12">
                                    <label for="status">Would you like status of brand? <span class="error">*</span></label>
                                    <select  name="status"
                                             class="form-control" id="status">
                                        <option value="0" selected="selected">Acitve</option>
                                        <option value="1">Inactive or Unverified</option>
                                        <option value="2">Suspended</option>
                                        <option value="3">Verified</option>
                                    </select>

                                </div>
                            </div>
                            <a data-dismiss="modal" aria-label="Close" style="margin-top:10px"
                               class="btn btn-danger float-left">Cancel</a>
                            <button style="margin-top:10px" class="btn btn-primary float-right">Change It
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <!--send mail to brand-->
        <div class="modal fade" id="sendMail" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="sendMail" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content b-0">
                    <div class="modal-header r-0 bg-primary">
                        <h6 class="modal-title text-white" id="exampleModalLabel">Send Message to Brand</h6>
                        <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle paper-nav-white active"><i></i></a>
                    </div>
                    <div class="modal-body no-p no-b">
                    </div>
                    <form method="post">
                        <div class="form-group col-md-12 focused">
                            <label  class="col-form-label">Subject</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-12 focused">
                            <label  class="col-form-label">Description/Message</label>
                            <textarea rows="4" class="form-control"></textarea>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <a data-dismiss="modal" aria-label="Close" style="margin-top:10px"
                           class="btn btn-danger float-left">Cancel</a>
                        <button style="margin-top:10px" class="btn btn-primary float-right">Send Message </button>
                    </div>
                </div>
            </div>
        </div>


        <!--reset password-->


        <!--view pricing history-->
        <div class="modal fade" id="pricingHistory" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="pricingHistory" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content b-0">
                    <div class="modal-header r-0 bg-primary">
                        <h6 class="modal-title text-white">View Subscription of Brand</h6>
                        <a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle paper-nav-white active"><i></i></a>
                    </div>
                    <div class="modal-body no-p no-b">

                    </div>

                    <div class="modal-footer">
                        <a data-dismiss="modal" aria-label="Close" style="margin-top:10px"
                           class="btn btn-danger float-left">Cancel</a>
                    </div>
                </div>
            </div>
        </div>


@foreach($brandInfoData as $singleBrandInfo)
            <header class="blue accent-3 relative">
                <div class="container-fluid text-white">
                    <div class="row p-t-b-10 ">
                        <div class="col">
                            <h4>
                                <i class="icon-backspace"></i>
                                <a href="{{url('/ut-admin/brand-info')}}">Brand Information</a> / {{$singleBrandInfo->brandinfo->brand_name}}
                            </h4>
                        </div>
                    </div>
                </div>
            </header>
        @endforeach



        <div class="container-fluid ">

            <div class="tab-content my-3" id="v-pills-tabContent">
                <div class="tab-pane show active go" id="v-pills-all" role="tabpanel">
                    <div class="row row-eq-height my-3">
                        <!-- Social Widget Start -->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="{{$singleBrandInfo->available_status==0?'ava-Status-no':'ava-Status-yes'}}"></div>
                                    @if($singleBrandInfo->brandinfo->new_status==0)
                                        <div class="blink" style="right:  0;background-color: #ff752f;position: absolute;width: 40px;height:  20px;" >
                                            <label style="color:white">New</label>
                                        </div>
                                    @endif()
                                    <div class="image m-3">

                                        <img alt="{{$singleBrandInfo->brandinfo->brand_name}}" style="width: 150px" src="{{$singleBrandInfo->brandinfo->photo_name!=null || $singleBrandInfo->brandinfo->photo_name!=''?
                                                    url('/users/upload/brand/thumbnail/'.$singleBrandInfo->brandinfo->photo_name):url('/img/branddefault.png') }}" class="user_avatar img-thumbnail">


                                    </div>
                                    <div style="margin-bottom: 10px">
                                        <h6 class="p-t-10"> {{$singleBrandInfo->brandinfo->brand_name}}</h6>
                                        {{$singleBrandInfo->email}}<br>

                                        @switch($singleBrandInfo->status)

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
                                            @if($singleBrandInfo->brandPricing!=null)
                                                @if($singleBrandInfo->brandPricing->to_date < date('Y-m-d') )

                                                @else
                                                    @if(\Carbon\Carbon::createFromFormat('Y-m-d',$singleBrandInfo->brandPricing->to_date) ->
                                                diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d',date('Y-m-d')))<1)
                                                    @else
                                                        {{\Carbon\Carbon::createFromFormat('Y-m-d',$singleBrandInfo->brandPricing->to_date) ->
                                                    diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d',date('Y-m-d')))>1?\Carbon\Carbon::createFromFormat('Y-m-d',$singleBrandInfo->brandPricing->to_date) ->
                                                    diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d',date('Y-m-d'))).' DAYS':\Carbon\Carbon::createFromFormat('Y-m-d',$singleBrandInfo->brandPricing->to_date) ->
                                                    diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d',date('Y-m-d'))).' DAY'}}
                                                    @endif
                                                @endif
                                            @else
                                                FREE
                                            @endif

                                        </h3>


                                    </div>


                                    <label>

                                        @if($singleBrandInfo->brandPricing!=null)
                                            {{$singleBrandInfo->brandPricing->pricing->pricing_title . ' Package'}}
                                            {{ $singleBrandInfo->brandPricing->total_month>1?'(' .$singleBrandInfo->brandPricing->total_month . ' Months)':'(' .$singleBrandInfo->brandPricing->total_month .' Month)'  }}
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

                                <ul class="list-group list-group-flush">

                                    <li class="list-group-item">
                                        <i class="icon-history"></i> <a href="#pricingHistory" data-toggle="modal"
                                                                        data-target="#pricingHistory">View Subscription</a>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="icon-settings2"></i><a href="#changeStatus" data-toggle="modal"
                                                                         data-target="#changeStatus">Change Status of Brand</a>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="icon-envelope-o"></i> <a href="#sendMail" data-toggle="modal"
                                                                           data-target="#sendMail">Send Message to brand</a>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="icon-settings2"></i> Reset Password
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">

                            <div class="row">



                                <div class="col-lg-4" style="margin-bottom: 10px">
                                    <div class="card r-3">
                                        <div class="p-4">
                                            <div class="float-right">
                                                <span class="icon-award text-light-blue s-48"></span>
                                            </div>
                                            <div class="counter-title">Class Position</div>
                                            <h5 class="sc-counter mt-3 counter-animated">5</h5>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4" style="margin-bottom: 10px">
                                    <div class="card r-3">
                                        <div class="p-4">
                                            <div class="float-right">
                                                <span class="icon-award text-light-blue s-48"></span>
                                            </div>
                                            <div class="counter-title">Class Position</div>
                                            <h5 class="sc-counter mt-3 counter-animated">5</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4" style="margin-bottom: 10px">
                                    <div class="card r-3">
                                        <div class="p-4">
                                            <div class="float-right">
                                                <span class="icon-award text-light-blue s-48"></span>
                                            </div>
                                            <div class="counter-title">Class Position</div>
                                            <h5 class="sc-counter mt-3 counter-animated">5</h5>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-12" style="margin-bottom: 10px">
                                    <div class="card">
                                        <div class="card-header white">
                                            <h6>Engaged Influencers <span class="badge badge-success r-3">30+</span></h6>
                                        </div>
                                        <div class="card-body">

                                            <ul class="list-inline mt-3">
                                               @for($i=0;$i<20;$i++)
                                                    <li class="list-inline-item ">
                                                        <img src="{{url('backend/assets/img/dummy/u13.png')}}" alt="" class="img-responsive user_avatar w-40px circle mb-2" data-toggle="tooltip" data-placement="bottom"
                                                             title=""
                                                             data-original-title="Select the age range of your target audience.">
                                                    </li>
                                               @endfor
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="card no-b shadow">
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-responsive ">
                                                    <tbody>
                                                    <tr class="no-b">
                                                        <td class="w-15">
                                                            <img src="{{url('backend/assets/img/demo/shop/s1.png')}}" alt="">
                                                        </td>
                                                        <td>
                                                            <h6>Campaign Name </h6>
                                                            <small class="text-muted">Budget</small>
                                                        </td>

                                                        <td>

                                                            <ul class="social" style="display: inline-flex">
                                                                <li>
                                                                    <a href="#" class="facebook mr-3">
                                                                        <i class="icon-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="youtube mr-3">
                                                                        <i class="icon-youtube"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="instagram mr-3">
                                                                        <i class="icon-instagram"></i>
                                                                    </a>

                                                                </li>
                                                            </ul>
                                                        </td>

                                                        <td><span class="badge badge-success float-right">Finished</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">
                                                            <h5>About the Product/Service </h5>
                                                            USA CREATORS Please Apply!
                                                            We're hoping to connect with
                                                            health and wellness influencers
                                                            who are: - Focused on their health
                                                            and working on achieving ultimate
                                                            wellness - Interested in promoting.....      </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">
                                                            <h5>Campaign Goals</h5>
                                                            USA CREATORS Please Apply!
                                                            We're hoping to connect with
                                                            health and wellness influencers
                                                            who are: - Focused on their health
                                                            and working on achieving ultimate
                                                            wellness - Interested in promoting.....      </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">
                                                            aksdjlaskjdlaksjdlkasjdlk
                                                        </td>
                                                    </tr>



                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


@stop()
