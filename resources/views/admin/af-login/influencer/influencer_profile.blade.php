<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header')
</head>
<body>
<div class="main-wrapper home-4">
    <!-- =========== Navigation Start ============ -->
    @include('partials/admin/side-nav')

    <div class="has-sidebar-left">
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
                    <div class="search-bar">
                        <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                               placeholder="start typing...">
                    </div>
                    <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
                       aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
                </div>
            </div>
        </div>
        <div class="sticky">
            <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
                <div class="relative">
                    <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                        <i></i>
                    </a>
                </div>
                <!--Top Menu Start -->
            @include('partials.admin.top-nav')
            <!-- top menu end -->
            </div>
        </div>
    </div>
    <!-- =========== Navigation End ============ -->
    @yield('admin-content')

</div>
<!-- =========== Grid ============ -->
<div class="container-fluid " style="padding-left: 290px;">
    <div id="v-pills-tabContent" class="tab-content my-3">
        <div id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab" class="tab-pane show active go">
            <div class="row row-eq-height my-3">
                <div class="col-lg-8">
                    <div class="card no-b">
                        <div class="card-header indigo darken-1 text-white">
                            <h4><i class="icon-message mr-2 mb-5"></i>Campaigns</h4>
                        </div>
                        <div class="card-body no-p">
                            <div id="v-pills-tabContent2" class="tab-content">
                                <div style="margin-top: 10px; margin-bottom: -20px;">
                                    <div class="form-group col-md-12 focused">
                                        <select class="form-control"><option>All</option> <option>Pending</option> <option>Running</option> <option>Past</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-columns pt-3 pb-3" style="padding: 12px; column-count: 2;">
                                    <div class="card"><img src="" alt="Card image cap" class="card-img-top">
                                        <div class="card-body"><h5 class="card-title">Card title</h5>
                                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                                content.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





</div>


<!-- Main JS Files -->
@include('partials.jscript')
</body>
</html>


