 <style>

 #static-site #static-header {
     position: absolute;
     top: 0;
     left: 0;
     right: 0;
     padding: 59px 0;
     z-index: 99;
 }

 .static-site a {
     transition: color .3s ease-in-out,border .3s ease-in-out,background .3s ease-in-out,opacity .3s ease-in-out;
     color: red;
 }

 .static-site a {
     background-color: transparent;
 }
 .static-site a, .disabled-link:hover, .email-description:hover {
     text-decoration: none;
 }
 .static-site * {
     max-height: 1000000px;
 }

 .static-container{
     padding-left: 10px;
     padding-right: 10px;
     margin: 0 auto;
     max-width: 1120px;
 }
 @media (min-width: 768px){
     .static-site .static-header .logo {
         width: 143px;
         padding-top: 16px;
     }
 }




 </style>
 <header style="

    margin-top: 10px;
" class="navigation navigation__transparent navigation__left navigation-text__dark navigation__btn-fill">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="navigation-content">
                            <a href="{{url('/')}}" class="navigation__brand">

                                <img class="navigation-main__logo" style="width: 120px" src="{{isset(Helpers::getGeneralSettingData()->site_big_logo_path)?url('img/website/logo').'/'.Helpers::getGeneralSettingData()->site_big_logo_path:'error'}}" alt="{{isset(Helpers::getGeneralSettingData()->site_big_logo_path)?Helpers::getGeneralSettingData()->site_big_logo_path:'error'}}">
                                <img class="sticky-nav__logo" style="width: 56px;" src="{{isset(Helpers::getGeneralSettingData()->site_small_logo_path)?url('img/website/logo').'/'.Helpers::getGeneralSettingData()->site_small_logo_path:'error'}}" alt="{{isset(Helpers::getGeneralSettingData()->site_small_logo_path)?Helpers::getGeneralSettingData()->site_small_logo_path:'error'}}">
                            </a>
                            <button class="navigation__toggler"></button>
                            <!-- offcanvas toggle button -->
                            <nav class="navigation-wrapper">
                                <button class="offcanvas__close">✕</button>
                                <!-- offcanvas close button -->
                                <ul class="navigation-menu right-nav" id="nav">
                                    {{--<li class="navigation-menu__item">--}}
                                        {{--<a class="navigation-menu__link" href="{{url('/about-us')}}" style=" {{Request::segment(1)=='faqs' || Request::segment(1)=='about-us' || Request::segment(1)=='contact-us'?'color:white;':''}}" >About us</a>--}}
                                    {{--</li>--}}
                                    <li class="navigation-menu__item">
                                        <a style="font-size: 14px;{{Request::segment(1)=='influencers'?'color: #65cadb':''}}" class="navigation-menu__link active" href="{{url('/influencers')}}" style=" {{Request::segment(1)=='faqs' || Request::segment(1)=='about-us' || Request::segment(1)=='contact-us'?'color:white;':''}}" >Influencer</a>
                                    </li>
                                    <li class="navigation-menu__item">
                                        <a style="font-size: 14px;{{Request::segment(1)=='brands'?'color: #65cadb':''}} " class="navigation-menu__link" href="{{url('/brands')}}" style=" {{Request::segment(1)=='faqs' || Request::segment(1)=='about-us' || Request::segment(1)=='contact-us'?'color:white;':''}}" >Brand</a>
                                    </li>
                                    <li class="navigation-menu__item">
                                        <a style="font-size: 14px;{{Request::segment(1)=='pricing'?'color: #65cadb':''}}" class="navigation-menu__link" href="{{url('/pricing')}}" style=" {{Request::segment(1)=='faqs' || Request::segment(1)=='about-us' || Request::segment(1)=='contact-us'?'color:white;':''}}" >Pricing</a>
                                    </li>


                                    {{--<li class="navigation-menu__item">--}}
                                    {{--<a class="navigation-menu__link" href="{{url('/faqs')}}" style=" {{Request::segment(1)=='faqs' || Request::segment(1)=='about-us' || Request::segment(1)=='contact-us'?'color:white;':''}}" >FAQs</a>--}}
                                    {{--</li>--}}

                                    {{--<li class="navigation-menu__item">--}}
                                    {{--<a class="navigation-menu__link" href="{{url('/contact-us')}}" style=" {{Request::segment(1)=='faqs' || Request::segment(1)=='about-us' || Request::segment(1)=='contact-us'?'color:white;':''}}">Contact</a>--}}
                                    {{--</li>--}}

                                </ul>

                                <ul class="navigation-menu right-nav">
                                    <li class="navigation-menu__item">
                                        <a style="font-size: 14px;" class="navigation-menu__link" href="{{url('/login')}}" style=" {{Request::segment(1)=='faqs' || Request::segment(1)=='about-us' || Request::segment(1)=='contact-us'?'color:white;':''}}" >Login</a>
                                    </li>




                                    <li class="navigation-menu__item">
                                        <a style="font: 700 14px/18px Roboto,'Helvetica Neue',Arial,Helvetica,sans-serif;border: none;background-color: #65cadb;font-size: 14px;border-radius: 30px;letter-spacing: 1px;padding: 16px 55px;color: white;min-width: 130px;" class="navigation-menu__link" href="#">Join Now</a>

                                        <ul class="navigation-dropdown right-nav" style="margin-top: 10px;">
                                            <li class="navigation-menu__item">
                                                <a style="font-size: 14px;" class="navigation-menu__link" href="{{url('/choose-social-account')}}">Influencers</a>
                                            </li>
                                            <li class="navigation-menu__item">
                                                <a  style="font-size: 14px;" class="navigation-menu__link" href="{{url('/brand-signup')}}">Brands</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- nav item end -->


                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
        </header>



 {{--<header class="static-header" ng-controller="StaticHeaderController as vm" ng-class="{ 'header-grey' : vm.requiresColouredHeader }">--}}
     {{--<div class="static-container">--}}
         {{--<div class="logo"><a ui-sref="root" href="/"><img src="/assets/img/static/logo.png?dd2cd2f60125b4b9" alt="FAMEBIT" width="143"></a></div><a--}}
                 {{--href="#" class="nav-opener"><span></span></a><div class="static-navbar">--}}
             {{--<ul class="static-nav">--}}
                 {{--<li ui-sref-active="active"><a ui-sref="creators" href="/creators">Creators</a></li>--}}
                 {{--<li ui-sref-active="active"><a ui-sref="brands" href="/brands">Brands &amp; Agencies</a></li>--}}
                 {{--<li ui-sref-active="active"><a ui-sref="pricing" href="/pricing">Pricing</a></li>--}}
             {{--</ul>--}}
             {{--<ul class="static-nav right-nav">--}}
                 {{--<li ui-sref-active="active"><a ui-sref="login" href="/login">Login</a></li>--}}
                 {{--<li class="has-dropdown"><a href="#" class="btn btn-red">Join Now</a><ul class="js-slide-hidden">--}}
                         {{--<li><a href="/creatorSignup" rel="nofollow" target="_self">Creators</a></li>--}}
                         {{--<li><a href="/brandSignupCheck" rel="nofollow" target="_self">Brand + Agencies</a></li>--}}
                     {{--</ul>--}}
                 {{--</li>--}}
             {{--</ul>--}}
         {{--</div>--}}
     {{--</div>--}}
 {{--</header>--}}