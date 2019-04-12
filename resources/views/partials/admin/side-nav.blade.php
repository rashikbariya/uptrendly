<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
            <img src="{{url('frontend/img')}}/logo.png" alt="">
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
               aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm absolute fab-right-bottom fab-top btn-primary shadow1 ">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img class="user_avatar" src="{{url('backend')}}/assets/img/dummy/u2.png" alt="User Image">
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1">{{ Auth::user()->firstname .' ' . Auth::user()->lastname}}</h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="index.html" class="list-group-item list-group-item-action ">
                            <i class="mr-2 icon-umbrella text-blue"></i>Profile
                        </a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-cogs text-yellow"></i>Settings</a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-security text-purple"></i>Change Password</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
        <!-- <li class="header"><strong>MAIN NAVIGATION</strong></li> -->
        <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>CMS Management<i class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('ut-admin/cms-management/featured-influencers')}}"><i class="icon icon-circle-o"></i>Featured Influencers</a>
                    </li>

                     <li><a href="{{url('ut-admin/cms-management/profession')}}"><i class="icon icon-circle-o"></i>Professions</a>
                    </li>

                    <li><a href="{{url('ut-admin/cms-management/testimonials')}}"><i class="icon icon-circle-o"></i>Testimonials</a>
                    </li>


                    <li><a href="{{url('ut-admin/cms-management/faqs')}}"><i class="icon icon-circle-o"></i>Faqs</a>
                    </li>

                    <li><a href="{{url('ut-admin/cms-management/pricing')}}"><i class="icon icon-circle-o"></i>Pricing</a>
                    </li>

                    <li><a href="{{url('ut-admin/cms-management/site-setting')}}"><i class="icon icon-circle-o"></i>Site Setting</a>
                    </li>


                </ul>
            </li>
            <li class="treeview"><a href="{{url('ut-admin/staff-info')}}"><i class="icon icon-group light-green-text s-18"></i>Staff Information</a>
            <li class="treeview"><a href="{{url('ut-admin/career')}}"><i class="icon icon-ac_unit light-green-text s-18"></i>Career Management</a>

            </li>

            <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>Brand Management<i class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('ut-admin/brand-info')}}"><i class="icon icon-circle-o"></i>Brand Information</a>
                    </li>


                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>Influencer Management<i class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('ut-admin/influencer')}}"><i class="icon icon-circle-o"></i>Influencer Information</a>
                    </li>

                    <li><a href="{{url('ut-admin/good-will')}}"><i class="icon icon-circle-o"></i>Good Will</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
