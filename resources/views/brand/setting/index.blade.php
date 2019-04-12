@extends('layouts.brand')

@section('brand-content')
    <style>
        label.error {
            font-size: 14px;
            display: block;
            margin-top: 5px;
            font-weight: 600;
            color: red;
        }
    </style>
    <style>
        .tab-solid-info .nav-link.active {
            background: white;
            border-radius: 0px;
        }

        .tab-solid .nav-item .nav-link.active {
            color: #0a0a0a;
            border-left: 4px solid #65cadb;

        }

        .tab-solid .nav-item .nav-link {
            height: 50px;
            line-height: 30px;
        }
    </style>
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin grid-margin-md-0 stretch-card">
                <div class="card">
                    <div class="card-body" style="padding: 0px">
                        <div class="vertical-tab">
                            <ul class="nav nav-tabs tab-solid tab-solid-info mr-4" role="tablist"
                                style="width: 20%;background-color: #f4f4f4">
                                <li class="nav-item " style="background: #eee">
                                    <a class="nav-link {{ Request::segment(3)=='general'?'active show':'' }}" href="{{url('brand/settings/general')}}">General</a>
                                </li>
                                <li class="nav-item " style="background: #eee">
                                    <a class="nav-link {{ Request::segment(3)=='profile'?'active show':'' }}" href="{{url('brand/settings/profile')}}">Profile</a>
                                </li>
                                <li class="nav-item" style="background: #eee">
                                    <a class="nav-link {{ Request::segment(3)=='password'?'active show':'' }}" href="{{url('brand/settings/password')}}">Change password</a>
                                </li>

                            </ul>
                            @yield('setting-content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop()


