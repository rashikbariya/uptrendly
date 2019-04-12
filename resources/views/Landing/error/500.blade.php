@extends('layouts.landing')
@section('landing-content')
 <style>
     .error{
         color: red;
     }
 </style>
    <div class="login-one">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="login-table reveal" data-sr-id="10"
                         style=" visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; transition: transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; ">
                         500 error
                        <div class="login-header">
                            <a href="{{url('/')}}">
                                <img style="width:140px" src="{{url('img/logo')}}/full.png" alt="uptrendly-logo">

                            </a>
                        </div>

                        <form method="POST" action="login" aria-label="{{ __('Login') }}">
                            @csrf
                            <input type="text" name="email" placeholder="Email" class="form-control" aria-invalid="true"
                                   style="">

                            @if ($errors->has('email'))
                                <span class="error">
                                           {{ $errors->first('email') }}
                                        </span>
                            @endif

                            <input type="password" name="password" placeholder="Password" class="form-control"
                                   aria-invalid="true" style="margin-top: 20px;">

                            @if ($errors->has('password'))
                                <span class="error">
                                           {{ $errors->first('password') }}
                                        </span>
                            @endif

                            <div class="text-left"><label class="nice-form" style="margin-top: 20px">
                                    <input type="checkbox"
                                           class="ng-pristine ng-untouched ng-valid ng-empty" aria-invalid="false">
                                    <span class="fake-input"></span>
                                    <span
                                        class="fake-label">Remember me</span></label></div>

                            <input type="submit" class="db-btn db-btn__blue db-btn__type-md"
                                   style="width: 100%; margin-bottom:20px" value="Sign in">
                        </form>
                        <div style="text-align: center;">
                            <ul>
                                <li><a href="">Forgot Password</a></li>
                                <li style="margin-top: 12px">No account yet?</li>
                                <li style="margin-top: 12px"><a href="{{url('/brand-signup')}}"
                                                                class="db-btn db-btn__white db-btn__type-md"
                                                                style="width: 100%">Sign Up As a Brand</a></li>
                                <li style="margin-top: 10px"><a href="{{url('/choose-social-account')}}"
                                                                class="db-btn db-btn__white db-btn__type-md"
                                                                style="width: 100%">Sign Up As a Influencer</a></li>

                                <li style="margin-top: 12px">2018, Uptrendly, LLC.</li>

                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
