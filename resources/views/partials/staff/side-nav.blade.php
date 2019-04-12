<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
            <img src="{{url('frontend/img')}}/logo.png" alt="">
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
               aria-controls="userSettingsCollapse"
               class="btn-fab btn-fab-sm absolute fab-right-bottom fab-top btn-primary shadow1 ">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img class="user_avatar" src="{{url('backend')}}/assets/img/staffs/{{Auth::user()->photo_path}}"
                             alt="User Image">
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1">{{ Auth::user()->fullname}}</h6>
                        <a href="#"><i class="icon-circle text-success"></i> Online</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="index.html" class="list-group-item list-group-item-action ">
                            <i class="mr-2 icon-umbrella text-blue"></i>Profile
                        </a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-security text-purple"></i>Change Password</a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-lock text-purple"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="treeview"><a href="{{url('ut-staff/home')}}"><i class="icon icon-home light-green-text s-18"></i>
                    Home</a>
            </li>
            <li class="treeview"><a href="{{url('ut-staff/daily-report')}}"><i
                        class="icon icon-report light-green-text s-18"></i>Daily Report</a>
            </li>
        </ul>
    </section>
</aside>
