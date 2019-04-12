@extends('layouts.admin')
@section('admin-content')

    <div class="page has-sidebar-left">
        <header class="blue accent-3 relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <i class="icon icon-settings"></i>
                            General
                        </h4>
                    </div>
                </div>
                <div class="row ">
                    <ul class="nav responsive-tab nav-material nav-material-white">
                        <li>
                            <a  class="nav-link {{Request::segment(4)=='general'?'active':''}}"  href="{{url('ut-admin/cms-management/site-setting/general')}}">
                                <i class="icon icon-gear"></i>General</a>
                        </li>
                        <li>
                            <a class="nav-link {{Request::segment(4)=='social-media'?'active':''}}"  href="{{url('ut-admin/cms-management/site-setting/social-media')}}">
                                <i class="icon icon-social-facebook"></i>Social Media</a>
                        </li>
                        <li>
                            <a class="nav-link {{Request::segment(4)=='seo-management'?'active':''}}"  href="{{url('ut-admin/cms-management/site-setting/seo-management')}}">
                                <i class="icon icon-camera2"></i>SEO</a>
                        </li>
                        <li>
                            <a class="nav-link {{Request::segment(4)=='google-analytics'?'active':''}}"  href="{{url('ut-admin/cms-management/site-setting/google-analytics')}}">
                                <i class="icon icon-palette"></i> GoogleAnalytics</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="container-fluid my-3">


            @if(Session::has('message'))
                <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    {{ Session::get('message') }}
                </div>
            @endif
            @yield('admin-setting-management')
        </div>

    </div>
@stop()