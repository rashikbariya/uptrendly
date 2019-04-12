{{Helpers::checkUserStatus()}}

<nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
    <div class="nav-top flex-grow-1">
        <div class="container d-flex flex-row h-100">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top">
                <a class="navbar-brand brand-logo" href="{{url('/influencer')}}"><img src="{{url('img/logo/whitefull.png')}}" alt="logo"></a>
                <a class="navbar-brand brand-logo-mini" href="{{url('/influencer')}}"><img src="{{url('img/logo/whitelo.png')}}" alt="logo"></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                {{-- <form class="search-field" method="GET" action="{{url('influencer/brandlist/search')}}">
                    <div class="form-group mb-0">
                        <div class="input-group">
                        <input type="text" class="form-control" style="color: white" name="brand_name" value="{{isset($brandName)?$brandName:''}}"  placeholder="Search Brand" >
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                            </div>
                        </div>
                    </div>
                </form> --}}
                <ul class="navbar-nav navbar-nav-right mr-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="icon-envelope"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list">
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
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="icon-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" >
                            <a class="dropdown-item py-3">
                                <p class="mb-0 font-weight-medium float-left">You have 0 new notifications
                                </p>

                            </a>

                            <div class="dropdown-divider"></div>
                            <a href="{{url('/influencer/notification')}}" class="dropdown-item preview-item">

                                <p class="mb-0 font-weight-medium float-left">View All Notifications
                                </p>
                            </a>


                        </div>
                    </li>
                </ul>

                <div  class="dropdown" style="margin-left: 20px">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuOutlineButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @foreach(Helpers::getInfluencerInfo() as $influencerInfo)

                            <span  class="nav-profile-text" style="font-weight: 500;text-transform: capitalize;margin-right: 10px">{{$influencerInfo->username}}</span>
                            <img style="width: 40px" src="{{$influencerInfo->avatar}}" class="rounded-circle" alt="profile">

                        @endforeach
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton1">


                        <a class="dropdown-item" href="{{url('faqs/influencer-faqs')}}" target="_blank" ><i class="icon-question"></i> FAQs</a>
                        <a class="dropdown-item" href="{{url('influencer/settings/general')}}"><i class="icon-settings"></i> Setting</a>
                        <a class="dropdown-item" href="{{url('/influencer/notification')}}"><i class="icon-bell"></i> Notification</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('/influencer/settings/password')}}"><i class="icon-key"></i> Change password</a>
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
                    <a href="{{url('/influencer')}}" class="nav-link"><i class="link-icon icon-home"></i><span class="menu-title">Home</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/influencer/campaign-list')}}" class="nav-link"><i class="link-icon icon-drawer"></i><span
                            class="menu-title">Campaigns</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/influencer/message')}}" class="nav-link"><i class="link-icon icon-envelope-open"></i><span class="menu-title">Message</span></a>
                </li>



            </ul>
        </div>
    </div>


</nav>
