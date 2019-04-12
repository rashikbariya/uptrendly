@extends('influencer.setting.nav')
@section('influencer-setting-content')



    <style>
        .connect{
            font-size: 10px;
            padding: 5px 12px 5px 12px;
            background: #2b2b2b;
            color: #fff;

        }

        .connected{
            font-size: 10px;
            padding: 5px 12px 5px 12px;
            background: #c7c7c7;
            color: #000;

        }
        .connect:hover{
            background: #65cadb;
            color: #fff;
        }

        .bnwimg {
            -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
            filter: grayscale(90%);
        }
    </style>

    <div class="tab-content tab-content-solid" style="padding: 20px;width: 80%;color: #2b2b2b">

       <h5 style="color: #2a2a2a">Linked Social Media Accounts</h5>
        <p style="color: #2a2a2a">You must have at least 5,000 followers/subscribers in order to link your account with Uptrendly.</p>

        <ul style="list-style: none; display:inline-flex;padding: 0;color: #2b2b2b">

           
                <ul style="list-style: none; padding: 10px 10px 10px 10px;text-align: center">
                    <li>
                        <img class="{{count($youtubeData)==0?'':'bnwimg'}}" src="{{url('frontend/img/youtube.png')}}" style="width: 85px;border-radius: 50%;border:2px solid #e7e7e7" alt="youtube">
                    </li>
                    <li style="margin-top: 10px">
                        @if(count($youtubeData)==0)
                            <a class="connect" href="{{url('auth/google')}}">CONNECT</a>
                            @else<label class="connected" >CONNECTED</label>
                            @endif
                    </li>
                </ul>
        


            <li >
                <ul style="list-style: none; padding: 10px 10px 10px 10px;text-align: center">
                    <li>
                        <img class="{{count($instagramData)==0?'':'bnwimg'}}" src="{{url('frontend/img/instagram.png')}}" style="width: 85px;border-radius: 50%;border:2px solid #e7e7e7" alt="instagram">
                    </li>
                    <li style="margin-top: 10px">
                        @if(count($instagramData)==0)
                            <a class="connect" href="{{url('auth/instagram')}}">CONNECT</a>
                        @else<label class="connected" >CONNECTED</label>
                        @endif
                    </li>
                </ul>
            </li>





            <li >
                <ul style="list-style: none; padding: 10px 10px 10px 10px;text-align: center">
                    <li>
                        <img class="{{count($facebookData)==0?'':'bnwimg'}}" src="{{url('frontend/img/fb.jpg')}}" style="width: 85px;border-radius: 50%;border:2px solid #e7e7e7" alt="fb">
                    </li>
                    <li style="margin-top: 10px">
                        @if(count($facebookData)==0)
                            <a class="connect" href="{{url('auth/facebook')}}">CONNECT</a>
                        @else
                            <label class="connected" >CONNECTED</label>
                        @endif
                    </li>
                </ul>
            </li>


        </ul>

         <h6 style="margin-bottom: 15px">
             Linked Social Accounts

         </h6>
        @if(count($facebookData)>1)
        <ul style="display: inline-flex;padding: 0;list-style: none">
            <li> 
                <img src="{{url('frontend/img/fb.jpg')}}" style="width: 40px;border-radius: 50%;border: 2px solid #e7e7e7" alt="fb">
            </li>
        <ul style="list-style: none;display: inline-flex">
        <li> <img src="https://scontent.cdninstagram.com/vp/2036fdde32cd361a9d19c224c20efb4a/5C2F0E2F/t51.2885-19/s150x150/40337930_245099636150347_7612560959265046528_n.jpg" style="width: 40px;border-radius: 50%;border: 2px solid #e7e7e7" alt="naruto">     </li>
        <li style="line-height: 40px">
            <ul style="list-style: none;">
                <li><b>{{$facebookData['username']}}</b></li>
                <li>
                @if($facebookData['followers']>1000 )
                {{$facebookData['followers']/1000}}k
                @else
                {{$facebookData['followers']}}
                @endif
                Followers
                </li>
            </ul>
        </li>
        <li style=" margin-left: 10px" ><a href="#"><b>Switch Account</b></a></li>
        </ul>

        </ul><br/>
        @endif

        @if(count($youtubeData)>1)
        <ul style="display: inline-flex;padding: 0;list-style: none">
        <li> <img src="{{url('frontend/img/youtube.png')}}" style="width: 40px;border-radius: 50%;border:
         2px solid #e7e7e7" alt="youtube">
        </li>

        <ul style="list-style: none;display: inline-flex">
        <li> <img src="https://scontent.cdninstagram.com/vp/2036fdde32cd361a9d19c224c20efb4a/5C2F0E2F/t51.2885-19/s150x150/40337930_245099636150347_7612560959265046528_n.jpg" style="width: 40px;border-radius: 50%;border: 2px solid #e7e7e7" alt="naruto">     </li>
        <li style="line-height: 40px">
        <ul style="list-style: none;">
        <li><b>{{$youtubeData['username']}}</b></li>
        <li>
        @if($youtubeData['followers']>1000 )
        {{$youtubeData['followers']/1000}}k
        @else
        {{$youtubeData['followers']}}
        @endif
        Followers
        </li>
        </ul>
        </li>
        <li style=" margin-left: 10px"><a href="#"><b>Switch Account</b></a></li>
        </ul>


        </ul><br>
        @endif()
        @if(count($instagramData)>1)
        <ul style="display: inline-flex;padding: 0;list-style: none; color: #2b2b2b">
        <li> <img src="{{url('frontend/img/instagram.png')}}" style="width: 40px;border-radius: 50%;border: 2px solid #e7e7e7" alt="instagram">

        <ul style="list-style: none;display: inline-flex">
        <li> <img src="https://scontent.cdninstagram.com/vp/2036fdde32cd361a9d19c224c20efb4a/5C2F0E2F/t51.2885-19/s150x150/40337930_245099636150347_7612560959265046528_n.jpg" style="width: 40px;border-radius: 50%;border: 2px solid #e7e7e7" alt="naruto">     </li>
        <li style="line-height: 40px">
        <ul style="list-style: none;">
        <li><b>{{$instagramData['username']}}</b></li>
        <li>
        @if($instagramData['followers']>1000 )
        {{$instagramData['followers']/1000}}k
        @else
        {{$instagramData['followers']}}
        @endif
        Followers
        </li>
        </ul>
        </li>
        <li style=" margin-left: 10px"><a href="#"><b>Switch Account</b></a></li>
        </ul>
        </ul>
        @endif()
    </div>
@stop()
