@extends('layouts.landing')
@section('landing-content')
    <style>
        .form-control {
            height: 2.5em;
        }
        p{
            color: black;
        }
    </style>
    <div class="login-one">
        <div class="container">
            <div class="row">
                <div class="col-12">



                        <div class="login-table reveal text-center " data-sr-id="10"
                             style="max-width: 780px; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; transition: transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; ">
                            <div class="login-header">
                                <h3>Influencer Sign Up!</h3>
                            </div>
                            <p>We've encountered an error with the account you were trying to link:</p>
                        @if($message=='email_already_exists')
                                <p style="color: #db0700;">The account you selected is already linked to a Uptrendly user!</p>
                        @elseif($message=='not_enough_followers')
                                <p style="color: #DB0700;">You need at least 5000 followers
                                    to connect this account.</p>
                            @endif
                            <p>Please <a href="/choose-social-account" style="font-weight: 500;color: #DB0700">go back</a> and choose a different account.</p>
                            <p>If you feel that you have seen this message in error, please contact support at <a style="color: #DB0700" ng-href="mailto:coporate@uptrendly.com" href="mailto:coporate@uptrendly.com">coporate@uptrendly.com</a></p>


                        </div>


                </div>

            </div>
        </div>
    </div>

@stop
