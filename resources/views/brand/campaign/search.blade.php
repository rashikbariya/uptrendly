@extends('layouts.brand')
@section('brand-content')
<style>
        .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        align: middle;
        width: 150px;
        height: 150px;
    }
    .icon {
        text-align: center;
        font-size: 20px;
    }
    .favourite{
        margin-left: 270px;
        margin-top: -9px;
        z-index: -1;
        color: #868096;
        

    }
        @font-face {
            font-family: 'entypo';
            src: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-90/entypo.woff") format("woff");
        }
        .entypo-heart:before {
            content: "\2665";
        }

        .entype-verfied:before{
            content: "\2222";
        }



        [class*="entypo-"]:before {
            font-family: 'entypo', sans-serif;
            /*color: #f5f6f7;*/
            color: #9ea0a2;
            font-size: 40px;
            position: absolute;
            top: 0;

        }

    </style>
    <div class="row" style="margin-bottom: 0px;margin-top:20px">
            <div class="col-md-12">
                 <form class="search-field" method="POST" action="{{url('brand/search?influencer=')}}">
                     @csrf()
                     <div class="form-group">
                             <div class="input-group" >
                                 <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                 </div>
                                 <input type="text"  class="form-control" placeholder="Search Influencer Here" name="brand_name" value="{{($searchText)}}">
                             </div>
                         </div>
                </form>
            </div>
        </div>
    <div class="row" style="margin-bottom: 15px;margin-top:0px">
    @if(count($influencerInfo)>0)
            @foreach($influencerInfo as $key => $influencerData)
                <div class="col-lg-4 col-md-6 col-sm-12" style="margin-top:5px;">
                    <div class="card">
                        <div class="card-body" style="color:black; margin-top:10px;">
                                <div class="favourite">
                                    <span class="entypo-heart"></span>
                                    </div>
                            <div >
                                <img src="{{url('img/branddefault.png')}}" class="img-lg rounded-circle mb-2 center" alt="profile image" style="margin-top: 15px">
                                <div class="">
                                    <h5 style="text-align: center;">{{$influencerData->firstname.' '.$influencerData->lastname}} <img src="{{url('/img/logo/verified.png')}}" alt="verified" height="14px" width="14px" data-toggle="tooltip" data-placement="Right" title="" data-original-title="Verified">
                                    </h5>
                                    <h6 style="font-size: 16px;text-align: center;margin-top: -4px;margin-bottom: 10px;font-weight: 300;">{{$influencerData->profession->title}}</h6>
                                </div>
                            </div>


                            <div class="border-top pt-3" >
                                <div class="row" >
                                    <div class="col-4 border-right" style="text-align: center;">
                                        <p style="font-size: 11px;">Social Reach
                                        <i class="ti-help-alt" style="font-size: 8px; color: #A9A9A9;" data-toggle="tooltip" data-placement="bottom" title="Totla number of followers accross all social media platform" data-original-title="Basic tooltip"></i>
                                        </p>

                                        <div class="icon">

                                               <?php $totalSocialReach =0; $getSocialReach = ''; $getFollowers=0 ?>

                                                        @foreach($influencerUserData as $getInfluencerData)
                                                            @foreach($getInfluencerData->socailProvider as $socialProvider)
                                                                  @if($socialProvider->user_id == $influencerData->user_id)
                                                                        <?php $totalSocialReach = $totalSocialReach + $socialProvider->followers?>

                                                                            @if($totalSocialReach>999999)
                                                                            <?php $getSocialReach = (sprintf('%0.1f',$totalSocialReach)/100000) . 'M' ?>
                                                                            @elseif($totalSocialReach>9999 && $totalSocialReach<999999)
                                                                                <?php $getSocialReach = (sprintf('%0.1f',$totalSocialReach)/1000) . 'K' ?>
                                                                            @else
                                                                                <?php $getSocialReach = (sprintf('%0.1f',$totalSocialReach))  ?>
                                                                            @endif


                                                                            @if($socialProvider->followers>999999)
                                                                                <?php $getFollowers = (sprintf('%0.1f',$socialProvider->followers)/100000) . 'M' ?>
                                                                            @elseif($socialProvider->followers>9999 && $socialProvider->followers<999999)
                                                                                <?php $getFollowers = (sprintf('%0.1f',$socialProvider->followers)/1000) . 'K' ?>
                                                                            @else
                                                                                <?php $getFollowers = (sprintf('%0.1f',$socialProvider->followers))  ?>
                                                                            @endif


                                                                         @if($socialProvider->provider=="facebook")
                                                                                 <i class="ti-facebook"  style="font-size: 16px;" data-toggle="tooltip" data-placement="bottom"title="{{(sprintf('%0.1f',$getFollowers))}} Followers" data-original-title="Followers"></i>
                                                                        @endif
                                                                             @if($socialProvider->provider=="instagram")
                                                                                 <i class="ti-instagram"  style="font-size: 16px;" data-toggle="tooltip" data-placement="bottom"title="{{(sprintf('%0.1f',$getFollowers))}} Followers" data-original-title="Followers"></i>
                                                                             @endif
                                                                             @if($socialProvider->provider=="google")
                                                                                 <i class="ti-youtube"  style="font-size: 16px;" data-toggle="tooltip" data-placement="bottom"title="{{(sprintf('%0.1f',$getFollowers))}} Subscribers" data-original-title="Subscribers"></i>
                                                                             @endif
                                                                    @endif
                                                                @endforeach()
                                                            @endforeach()

                                    
                                    </div>
                                        <h6 style="font-size: 18px; ">{{$getSocialReach}}</h6>
                               
                                    </div>
                                    <div class="col-4 border-right" style="text-align: center;">
                                        <p style="font-size: 11px;">Cost Per Post</p>
                                        <h3 style="font-size: 14px;">
                                            <i class="ti-facebook"  style="font-size: 16px;  "></i>&nbsp;
                                            0k</h3>
                                        <h3 style="font-size:14px;">
                                            <i class="ti-instagram" style="font-size: 16px; "></i>&nbsp;
                                            0k</h3>
                                            <h3 style="font-size:14px;">
                                                    <i class="ti-youtube" style="font-size: 16px; "></i>&nbsp;
                                                    0k</h3>
                                    </div>
                                    <div class="col-4" style="text-align: center;">
                                        <p style="font-size: 11px;">Engagement</p>
                                        <h6 style="font-size: 22px; margin-top: 20px;">0%</h6>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer" style="background: white; margin-top:10px;     margin-left: -14px;  color: black;">
                                <i class="ti-tag" style="font-size: 21px;" data-toggle="tooltip" data-placement="bottom" title="Interest" data-original-title="Basic tooltip"></i>&nbsp;
                                @for($i=0;$i<count((explode(',',$influencerData->interested_for)));$i++)
                                    <div class="badge badge-outline-success badge-pill" style="border-color: black; color:black;">
                                        {{str_limit(explode(',',$influencerData->interested_for)[$i],6)}}
                                    </div>&nbsp;
                                    {{-- limit no. of intrest in view --}}
                                    @if($i == 2)
                                        @break
                                    @endif
                                @endfor


                                <br/>

                                <div style="margin-top: 5px;">
                                    <img src="{{url('/img/logo/age.svg')}}" alt="" height="20px" width="20px" data-toggle="tooltip" data-placement="bottom" title="Target Audience Gender" data-original-title="Basic tooltip">&nbsp;
                                    @if($influencerData->target_audience_gender=='All')

                                        Male,Female

                                    @else

                                        {{$influencerData->target_audience_gender}}

                                    @endif

                                </div >
                                <div style="margin-top: 5px;">
                                    <img src="{{url('/img/logo/Target_Audiences.png')}}" alt="" height="20px" width="20px" data-toggle="tooltip" data-placement="bottom" title="Target Audience Age" data-original-title="Basic tooltip">&nbsp;
                                    {{$influencerData->target_audience_age}}
                                </div>


                            </div>



                        </div>
                    </div>
                </div>
            @endforeach

        @else

        <div class="text-center" style="width: 100%">
           <img src="{{url('norecord-inf.png')}}" style="width: 150px">
            <p > No Records Found</p></div>

        @endif()
</div>
{{$influencerInfo->links()}}

    @stop()

