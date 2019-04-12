@extends('layouts.landing')
@section('landing-content')
    <style>
        .form-control {
            height: 2.5em;
        }
    </style>
    <div class="login-one">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="login-table reveal" data-sr-id="10"
                         style=" visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; transition: transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; ">
                        <div class="login-header">
                            <h4>Influencer Sign Up</h4>
                            <span>Here's the account that you have selected to sign up with</span>
                        </div>


                        <form method="POST">
                            @csrf()
                            <div style="text-align: center;">


                                @if($data['provider']=='facebook')
                                    <img  src="{{url('/frontend/img/fb.jpg')}}" width="100px" style="border-radius: 100%;margin-right: -20px">

                                @elseif($data['provider']=='google')
                                    <img  src="{{url('/frontend/img/youtube.png')}}" width="100px" style="border-radius: 100%;margin-right: -20px">
                                @elseif($data['provider']=='instagram')
                                    <img src="{{url('/frontend/img/instagram.png')}}" width="100px" style="border-radius: 100%;margin-right: -20px">
                                @endif
                                <img width="100px" src="{{$data['avatar']}}" style="border-radius: 100%">
                                    <input type="text" hidden value="{{$data['avatar']}}" name="avatar">
                                    <input type="text" hidden value="{{$data['id']}}" name="provider_id">
                                    <input type="text" hidden value="{{$data['provider']}}" name="provider">
                                    <input type="text" hidden value="{{$data['follower']}}" name="follower">
                                    <br>
                                <span style="font-weight:650">  {{$data['username']}} </span>
                                <br>
                                <span style="margin-bottom: 10px">
                                  {{$data['follower']}}
                            </span>

                                <div class="row">
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                        <input type="text" name="username" value="{{$data['username']}}" class="form-control" placeholder="Page Name">
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                        <select  name="profession_id" class="form-control">
                                            <option value="">Select Profession</option>

                                            @foreach($categoryData as $catData)
                                                <option value="{{$catData->id}}">{{$catData->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                        <input type="text" class="form-control" value="{{old('firstname')}}" name="firstname" placeholder="First Name">
                                        @if($errors->has('firstname'))
                                            <label id="name-error" class="error" for="firstname">{{$errors->first('firstname')}}</label>
                                        @endif
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                        @if($errors->has('lastname'))
                                            <label id="name-error" class="error" for="lastname">{{$errors->first('lastname')}}</label>
                                        @endif
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                        <input type="email" name="email" class="form-control" value="{{$data['email']}}" placeholder="Email">
                                        @if($errors->has('email'))
                                            <label id="name-error" class="error" for="email">{{$errors->first('email')}}</label>
                                        @endif
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                        @if($errors->has('password'))
                                            <label id="name-error" class="error" for="password">{{$errors->first('password')}}</label>
                                        @endif
                                    </div>


                                </div>

                             <button class="db-btn db-btn__blue db-btn__type-sm" style="float: right;line-height:  0px;margin-bottom:10px;height: 40px;max-width: 20px;" 
                                 ><a href="{{url('influencer-signup').'/'.$provider .'?page=audience-and-budget'}}">Next</a></button>
                            </div>
                        </form>

                    </div>



                </div>

            </div>
        </div>
    </div>
    <!-- //   <label class="nice-form">
    //                                 <input type="checkbox" class="ng-pristine ng-untouched ng-valid ng-empty" aria-invalid="false">
    //                                 By signing up you confirm that you accept the <a style="color: red">Terms & Conditions </a>
    //     </label> -->
@stop



 
                          