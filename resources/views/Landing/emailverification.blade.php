@extends('layouts.landing')
@section('landing-content')

  @if($status=='verified')
      <div class="login-one">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="login-table reveal text-center " data-sr-id="10"
                           style="max-width: 780px; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; transition: transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; ">
                          <div class="login-header">
                              <h3>Congratulations!</h3>
                          </div>
                          <div>
                            <span>
                                Your account has been successfully verified click on link below to access your account
                            </span><br>
                              <a style="margin-top: 10px;padding: 10px;background: #65cadb;color: white;text-decoration: none" href="{{url('/login')}}">Access on your account</a>
                              <br>
                              <span style="margin-bottom: 15px; margin-top: 15px">
                                If you any query, please contact <a style="color: #65cadb; font-weight: 450">corporate@uptrendly.com</a>
                            </span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>


   @elseif($status=='expired')
       <div class="login-one">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <div class="login-table reveal text-center " data-sr-id="10"
                            style="max-width: 780px; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; transition: transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; ">
                           <div class="login-header">
                               <h3>Verification link expired!</h3>
                           </div>
                           <div>
                            <span>
                               Looks like the verification link you clicked on expired. Resend one from your profile page.
                            </span><br>
                               <a style="margin-top: 10px;padding: 10px;background: #65cadb;color: white;text-decoration: none" href="{{url('/login')}}">Resend Verification Email</a>
                               <br>
                               <span style="margin-bottom: 15px; margin-top: 15px">
                                If you any query, please contact <a style="color: #65cadb; font-weight: 450">corporate@uptrendly.com</a>
                            </span>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    @endif




@stop()
