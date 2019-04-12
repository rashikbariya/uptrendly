@extends('layouts.landing')
@section('landing-content')
    <header class="page-header">
     <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="hero">
                    <div class="hero-wrapper">
                        <h2 class="hero__title">About Us</h2>
                        <p class="hero__caption">Uptrendly is Nepal's only Influence marketing platform.
                            We advertise your products through Nepal's top social media influencers, who'll build brand recognition for you and engage your target audience with organic posts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>




    <section class="features-one reveal" data-sr-id="2"
             style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; transition: transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; ">
        <div class="container">
            <h1 style="margin-top: -60px;text-align: center;margin-bottom: 30px;">Our Team Members</h1>
            <div class="row">

                @foreach($staffInfo  as $staff)
                    <div class="col-12 col-md-3">
                        <div class="feature">
                            @if($staff->photo_path !=null)
                                <img style="border-radius: 50%; width: 70%;	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.12),
            0 2px 4px 0 rgba(0,0,0,0.08); margin-bottom:10px" class="img img-circle" src="{{url('/backend/assets/img/staffs/').'/'.$staff->photo_path}}" alt="staff">
                                @else
                                <img style="border-radius: 50%; width: 70%;	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.12),
            0 2px 4px 0 rgba(0,0,0,0.08); margin-bottom:10px" class="img img-circle" src="{{url('/frontend/img/LLogo.jpg')}}" alt="photo">
                                @endif
                            <h5 class="feature__title" style="color: #585858">{{$staff->fullname}}</h5>
                            <p class="feature__description">{{$staff->designation}}</p>
                        </div>
                    </div>
            @endforeach

            <!-- single item end -->
            </div>
            <!-- row end -->
        </div>
    </section>
@stop()
