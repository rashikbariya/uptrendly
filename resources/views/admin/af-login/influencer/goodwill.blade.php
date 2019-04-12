
<!-- =========== Grid ============ -->
@extends('layouts.admin')
@section('admin-content')

    <div class="page has-sidebar-left">
        <header class="blue accent-3 relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <i class="icon icon-settings"></i>
                            Goodwill Lists
                        </h4>
                    </div>
                </div>
                <div class="row ">
                    <ul class="nav responsive-tab nav-material nav-material-white">
                        <li>
                            <a  class="nav-link {{Request::segment(3)==''?'active':''}}"  href="{{url('ut-admin/good-will')}}">
                                Good Well List</a>
                        </li>
                        <li>
                            <a class="nav-link {{Request::segment(3)=='add' || Request::segment(3)=='edit' ?'active':''}}"  href="{{url('ut-admin/good-will/add')}}">
                                <i class="icon icon-social-facebook"></i>{{Request::segment(3)=='edit'?'Edit':''}} {{Request::segment(3)=='add' || Request::segment(3)==''?'Add New':''}}   Goodwill</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>



        <div class="container-fluid my-3">
            <div class="container-fluid my-3">
                @if(Session::has('message'))
                    <div class="alert {{ Session::get('alert-class', 'alert-success') }} alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        {{ Session::get('message') }}
                    </div>
                @endif

            </div>

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">

                    @yield('influencer-goodwill-content')

                </div>
            </div>

        </div>

    </div>

@stop()


