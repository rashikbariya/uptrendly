@extends('layouts.landing')
@section('landing-content')
    <style>
        .form-control {
            height: 2.8em;
        }

        label.error {
            font-size: 14px;
            display: block;
            margin-top: 5px;
            font-weight: 600;
            color: red;
        }
    </style>
    <div class="login-one">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="login-table reveal " data-sr-id="10"
                         style="max-width: 780px; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; transition: transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; ">
                        <div class="login-header">
                            <a href="{{url('/')}}">
                                <img src="{{url('frontend/img')}}/logo.png" alt="uptrendly-logo">

                            </a>
                        </div>
                        <form method="POST" action="brand-signup">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6" style="margin-bottom: 15px">
                                    <input type="text" name="brand_name" value="{{old('brand_name')}}" placeholder="Brand Name" class="form-control">
                                    @if($errors->has('brand_name'))
                                        <label id="name-error" class="error" for="brand_name">{{$errors->first('brand_name')}}</label>
                                    @endif
                                </div>

                                <div class="col-lg-6" style="margin-bottom: 15px">
                                    <input type="text" name="brand_website_url"  value="{{old('brand_website_url')}}" placeholder="https://brand.com"
                                           class="form-control">
                                    @if($errors->has('brand_website_url'))
                                        <label id="name-error" class="error" for="brand_website_url">{{$errors->first('brand_website_url')}}</label>
                                    @endif
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6" style="margin-bottom: 15px">
                                    <input type="text" name="first_name"   value="{{old('first_name')}}" placeholder="First Name" class="form-control">
                                    @if($errors->has('first_name'))
                                        <label id="name-error" class="error"  for="first_name">{{$errors->first('first_name')}}</label>
                                    @endif
                                </div>


                                <div class="col-lg-6" style="margin-bottom: 15px">
                                    <input type="text" name="last_name"  value="{{old('last_name')}}"  placeholder="Last Name" class="form-control">
                                    @if($errors->has('last_name'))
                                        <label id="name-error"  class="error" for="last_name">{{$errors->first('last_name')}}</label>
                                    @endif
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-lg-6" style="margin-bottom: 15px">
                                    <input type="text" name="email"  value="{{old('email')}}" placeholder="Email" class="form-control">
                                    @if($errors->has('email'))
                                        <label id="name-error" class="error" for="email">{{$errors->first('email')}}</label>
                                    @endif
                                </div>

                                <div class="col-lg-6" style="margin-bottom: 15px">
                                    <input type="password"  name="password"  value="{{old('password')}}" placeholder="Password" class="form-control">
                                    @if($errors->has('password'))
                                        <label id="name-error" class="error" for="password">{{$errors->first('password')}}</label>
                                    @endif
                                </div>

                            </div>


                            <div class="text-center">
                           
                                 <label style="margin-bottom: 20px">
                                  <input type="checkbox" class="checkbox" name="confirm-agreement"/>By signing up you confirm that you accept the <strong
                                         style="color: red">Terms & Conditions</strong>.
                                 </label> <br>
                                 @if($errors->has('confirm-agreement'))
                                        <label id="name-error" class="error" for="confirm-agreement">{{$errors->first('confirm-agreement')}}</label>
                                    @endif
                                <input type="submit" style="margin-bottom: 20px"
                                       class="btn db-btn db-btn__blue db-btn__type-md"
                                       value="Sign up"> <br>
                            </div>

                        </form>
                        <div class="text-center">
                            <span style="margin-bottom: 20px">Already have an account?</span><br>
                            <a href="{{url('/login')}}" class="db-btn db-btn__white db-btn__type-md"
                               style="margin-bottom:20px ">Sign in</a>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
