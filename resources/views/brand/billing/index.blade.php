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
            border-bottom: 4px solid #65cadb;

        }

        .tab-solid .nav-item .nav-link {
            height: 50px;
            line-height: 30px;
        }
        .nav-tabs .nav-item {
             margin-bottom: 0px;
        }

        .nav-tabs .nav-item {
             margin-bottom: 0px;
        }
        ul li:first-child {
             border-radius:0;
        }
    </style>
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin grid-margin-md-0 stretch-card">
                <div class="card clearfix" >
                    <div class="card-body" style="padding: 0px">

                            <ul class="nav nav-tabs tab-solid tab-solid-info mr-4" role="tablist"
                                style="width: 100%;background-color: #f4f4f4;border-radius: 0">
                                <li class="nav-item " style="background: #eee">
                                    <a class="nav-link {{ Request::segment(3)=='dashboard'?'active show':'' }}" href="{{url('brand/billing/dashboard')}}">Dashboard</a>
                                </li>
                                <li class="nav-item " style="background: #eee">
                                    <a class="nav-link {{ Request::segment(3)=='plans'?'active show':'' }}" href="{{url('brand/billing/plans')}}">Plans</a>
                                </li>
                                <li class="nav-item" style="background: #eee">
                                    <a class="nav-link {{ Request::segment(3)=='payment_history'?'active show':'' }}" href="{{url('brand/billing/payment_history')}}">Payment History</a>
                                </li>

                            </ul>
                            @yield('billing-content')

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop()


