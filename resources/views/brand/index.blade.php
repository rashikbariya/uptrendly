@extends('layouts.brand')

@section('brand-content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                <div class="card bg-dark text-white border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="icon-support icon-lg"></i>
                            <div class="ml-4">
                                <h4 class="font-weight-light">Total campaign</h4>
                                <h3 class="font-weight-light mb-3">75, 650</h3>
                                <p class="mb-0 font-weight-light">39% more growth </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                <div class="card bg-danger text-white border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="icon-user icon-lg"></i>
                            <div class="ml-4">
                                <h4 class="font-weight-light">Recommended Influencer</h4>
                                <h3 class="font-weight-light mb-3">1349</h3>
                                <p class="mb-0 font-weight-light">69% increase</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                <div class="card bg-success text-white border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="icon-support icon-lg"></i>
                            <div class="ml-4">
                                <h4 class="font-weight-light">Bounce rate</h4>
                                <h3 class="font-weight-light mb-3">37, 580</h3>
                                <p class="mb-0 font-weight-light">65% higher rate </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--completedCampaign section here--}}
        @include ('brand.dashboard.completedCampaign')
        {{--end--}}
        <div class="row">
            {{--pricing section here--}}
            @include ('brand.dashboard.pricing')
             {{--end--}}
             {{-- newly register influencer cascuale --}}
            @include ('brand.dashboard.newly_influencers')
              {{--end--}}
        </div>

    </div>
    @stop()
