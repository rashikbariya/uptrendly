  @extends('layouts.landing')
  @section('landing-content')

  <div class="login-one">
  	<div class="container">
  		<div class="row">
  			<div class="col-12">
  				<div class="login-table reveal" data-sr-id="10" style=" visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; transition: transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; ">
  					<div class="login-header">
             <h3>Creator Sign Up
             </h3>
             <p>View top paying sponsorships today! You need at least <span>5000 followers</span> on a channel to join our marketplace.</p>
           </div>
           <div style="text-align: center;">
            <ul>
             <li style="margin-top: 10px"><a href="#" class="db-btn db-btn__yt db-btn__type-md" style="width: 100%">
            <i class="fa fa-youtube" style="margin-right: 20px"></i>  Sign up with YouTube</a></li>
             <li style="margin-top: 10px"><a href="#" class="db-btn db-btn__tw db-btn__type-md" style="width: 100%">
             <i class="fa fa-twitter" style="margin-right: 20px"></i>  Sign up with Twitter</a></li>
             <li style="margin-top: 10px"><a href="#" class="db-btn db-btn__tum db-btn__type-md" style="width: 100%">
            <i class="fa fa-tumblr" style="margin-right: 20px"></i>   Sign up with Tumblr</a></li>
             <li style="margin-top: 10px"><a href="#" class="db-btn db-btn__fb db-btn__type-md" style="width: 100%">
             <i class="fa fa-facebook" style="margin-right: 20px"></i>  Sign up with Facebook</a></li>
             <li><a href="{{url('/login')}}" style="width: 100%; margin-top:20px">Already hava an account?</a></li>
             <li style="margin-top: 12px">2018, Uptrendly, LLC.</li>
           </ul>
         </div>
       </div>
     </div>

   </div>
 </div>
</div>
@stop
