<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Projects of the month</h4>
            <p class="text-muted font-weight-light">We have 12 new projects from USA this month in Web Applications</p>




           @if(count($influencerData)>0)
                <div class="owl-carousel owl-theme nonloop">
                    @foreach($influencerData as $influencerDataSingle)
                        <div class="item">
                            <div class="card">
                                <div class="card-body" style="color:black; text-align: center; text-align: -webkit-center">
                                    <div>
                                        <div class="eye" style="float: right;">
                                            <a href="#"> <i class="ti-eye" style="font-size: 20px;" data-toggle="tooltip" data-placement="bottom" title="view infliencer name details" data-original-title="Influencer Name"></i></a>
                                        </div>
                                        <img src="{{url('img/branddefault.png')}}" class="img-lg rounded-circle mb-2 center" alt="profile image" style=" height: 180px; width:180px;">
                                        <div class="">
                                            <h6 style="text-align: center;">{{$influencerDataSingle->influencer_info->firstname . ' ' .$influencerDataSingle->influencer_info->lastname}}
                                            </h6>
                                            <h6 style="font-size: 16px;text-align: center;margin-top: -4px;margin-bottom: 10px;font-weight: 300;">{{$influencerDataSingle->influencer_info->profession->title }}</h6>
                                        </div>


                                        <div style="margin-bottom:10px">

                                            @for($i=0;$i<count((explode(',',$influencerDataSingle->influencer_info->interested_for)));$i++)
                                                <div class="badge badge-outline-success badge-pill" style="border-color: #DBE0EB; color:black;border-radius:5px; font-size:0.9em; font-weight: 400; background-color: #DBE0EB;">
                                                    {{str_limit(explode(',',$influencerDataSingle->influencer_info->interested_for)[$i],6)}}
                                                </div>&nbsp;

                                                {{-- limit no. of intrest in view --}}
                                                @if($i == 2)
                                                    @break
                                                @endif
                                            @endfor

                                        </div>
                                    </div>

                                    <div class="border-top pt-3">
                                        <div class="row">

                                            <?php $getFollowers='' ?>

                                            @foreach($influencerDataSingle->socailProvider as $socialProvider)
                                                @if($socialProvider->followers>999999)
                                                    <?php $getFollowers = (sprintf('%0.1f',$socialProvider->followers)/100000) . 'M' ?>
                                                @elseif($socialProvider->followers>9999 && $socialProvider->followers<999999)
                                                    <?php $getFollowers = (sprintf('%0.1f',$socialProvider->followers)/1000) . 'K' ?>
                                                @else
                                                    <?php $getFollowers = (sprintf('%0.1f',$socialProvider->followers))  ?>
                                                @endif


                                                @if($socialProvider->provider=='facebook')
                                                    <div class="col-4 border-right" style="text-align: center;">
                                                        <i class="ti-facebook" data-toggle="tooltip" data-placement="bottom" title="{{'@'.$socialProvider->username}}" data-original-title="facebook username"></i>&nbsp;{{$getFollowers}}
                                                    </div>
                                                @endif
                                                @if($socialProvider->provider=='instagram')
                                                    <div class="col-4 border-right" style="text-align: center;">
                                                        <i class="ti-instagram" data-toggle="tooltip" data-placement="bottom" title="{{'@'.$socialProvider->username}}" data-original-title="insta username"></i>&nbsp;{{$getFollowers}}
                                                    </div>
                                                @endif
                                                @if($socialProvider->provider=='google')
                                                    <div class="col-4 " style="text-align: center;">
                                                        <i class="ti-youtube" data-toggle="tooltip" data-placement="bottom" title="{{$socialProvider->username}}" data-original-title="youtube Name"></i>&nbsp;{{$getFollowers}}
                                                    </div>
                                                @endif

                                            @endforeach





                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            @else
                <div class="text-center" style="width: 100%">
                    <img src="{{url('norecord-inf.png')}}" style="width: 150px">
                    <p > No Records Found</p></div>

            @endif






        </div>
    </div>
</div>