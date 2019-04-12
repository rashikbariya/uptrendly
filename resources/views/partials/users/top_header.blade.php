


<nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
  <div class="nav-top flex-grow-1">
        <div class="container d-flex flex-row h-100">
          <div class="text-center navbar-brand-wrapper d-flex align-items-top">
            <a class="navbar-brand brand-logo" href="{{url('/brand')}}"><img src="{{isset(Helpers::getGeneralSettingData()->site_big_logo_path)?url('img/website/logo').'/'.Helpers::getGeneralSettingData()->site_big_logo_path:'error'}}" alt="{{isset(Helpers::getGeneralSettingData()->site_big_logo_path)?Helpers::getGeneralSettingData()->site_big_logo_path:'error'}}" alt="logo"></a>
            <a class="navbar-brand brand-logo-mini" href="{{url('/brand')}}"><img src="{{isset(Helpers::getGeneralSettingData()->site_small_logo_path)?url('img/website/logo').'/'.Helpers::getGeneralSettingData()->site_small_logo_path:'error'}}" alt="{{isset(Helpers::getGeneralSettingData()->site_small_logo_path)?Helpers::getGeneralSettingData()->site_small_logo_path:'error'}}" alt="logo"></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <form class="search-field" action="{{url('brand/search')}}">
              <div class="form-group mb-0">
                <div class="input-group">

                      <input type="text" name="influencer" class="form-control" style="color: white" placeholder="Search influncers">

                  <div class="input-group-append">
                    <span class="input-group-text"><i class="icon-magnifier"></i></span>

                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav navbar-nav-right mr-0">
                <li class="nav-item nav-profile">
                    @if(Helpers::getPricing()!=null)

                            <a class="nav-link" href="{{url('brand/billing/dashboard')}}">
                                <span class="nav-profile-text" style="font-weight: 500">{{Helpers::getPricing()->pricing->pricing_title}} Pricing</span>

                            </a>

                        @else
                        <a class="nav-link" href="{{url('brand/billing/dashboard')}}">
                            <span class="nav-profile-text" style="font-weight: 500">Basic Package</span>

                        </a>
                        @endif

                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="icon-heart"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" >
                                <a class="dropdown-item py-3">
                                        <a class="dropdown-item preview-item">
                                                <div class="preview-thumbnail">
                                                  <div class="preview-icon bg-inverse-success">
                                                    <i class="icon-exclamation mx-0"></i>
                                                  </div>
                                                </div>
                                                <div class="preview-item-content">
                                                  <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                                                  <p class="font-weight-light small-text mb-0">
                                                    Just now
                                                  </p>
                                                </div>
                                              </a>
                      
                                </a>
                            </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="icon-envelope"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" >
                            <a class="dropdown-item py-3">
                                <p class="mb-0 font-weight-medium float-left">You have 0 new messages
                                </p>

                            </a>

                            <div class="dropdown-divider"></div>
                            <a href="{{url('/influencer/message/all')}}" class="dropdown-item preview-item">

                                <p class="mb-0 font-weight-medium float-left">View All Messages
                                </p>
                            </a>


                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="icon-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" >
                            <a class="dropdown-item py-3">
                                <p class="mb-0 font-weight-medium float-left">You have 0 new notifications
                                </p>

                            </a>

                            <div class="dropdown-divider"></div>
                            <a href="{{url('/brand/notification')}}" class="dropdown-item preview-item">

                                <p class="mb-0 font-weight-medium float-left">View All Notifications
                                </p>
                            </a>


                        </div>
                    </li>

            

            </ul>

              <div  class="dropdown" style="margin-left: 20px">
                  <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuOutlineButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


                          @foreach(Helpers::getBrandInfo() as $brandInfo)

                              <span class="nav-profile-text" style="font-weight: 500;">{{$brandInfo->brand_name}}</span>
                              <img  style="width: 40px" src="{{$brandInfo->photo_name!=''?url('users/upload/brand/thumbnail/'.$brandInfo->photo_name):url('/img/branddefault.png')}}" class="rounded-circle" alt="profile">

                          @endforeach
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton1">


                      <a class="dropdown-item" href="{{url('faqs/brand-faqs')}}" target="_blank" ><i class="icon-question"></i> FAQs</a>
                      <a class="dropdown-item" href="{{url('brand/settings/general')}}"><i class="icon-settings"></i> Setting</a>
                      <a class="dropdown-item" href="{{url('/brand/notification')}}"><i class="icon-bell"></i> Notification</a>
                      <a class="dropdown-item" href="{{url('/brand/billing/dashboard')}}"><i class="icon-note"></i> Billing</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{url('/brand/settings/password')}}"><i class="icon-key"></i> Change password</a>
                      <a class="dropdown-item" href="{{url('/logout')}}"><i class="icon-lock"></i> Logout</a>
                  </div>
              </div>
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="icon-menu text-white"></span>
            </button>
          </div>
        </div>
    </div>

    <div class="nav-bottom" style="background-color: #2b2b2b">
        <div class="container">
            <ul class="nav page-navigation" style="padding-left: 20px">
                <li class="nav-item">
                    <a href="{{url('/brand')}}" class="nav-link"><i class="link-icon icon-home"></i><span class="menu-title">Home</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/brand/campaign-list')}}" class="nav-link"><i class="link-icon icon-drawer"></i><span
                            class="menu-title">Campaigns</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/brand/message')}}" class="nav-link"><i class="link-icon icon-envelope-open"></i><span class="menu-title">Message</span></a>
                </li>


            </ul>
        </div>
    </div>


</nav>
