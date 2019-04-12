@extends('layouts.staff')

@section('staff-content')
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort go">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel"
                     aria-labelledby="v-pills-home-tab">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card ">

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="icon icon-mobile text-primary"></i><strong
                                            class="s-12">Mobile</strong> <span
                                            class="float-right s-12">{{ Auth::user()->phone_number}}</span></li>
                                    <li class="list-group-item"><i class="icon icon-mail text-success"></i><strong
                                            class="s-12">Email</strong> <span
                                            class="float-right s-12">{{ Auth::user()->email}}</span></li>

                                    <li class="list-group-item"><i class="icon icon-web text-danger"></i> <strong
                                            class="s-12">Designation</strong> <span class="float-right s-12">{{ Auth::user()->designation}}</span>
                                    </li>
                                </ul>
                            </div>


                        </div>
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-header white">
                                    <h6>New Followers <span class="badge badge-success r-3">30+</span></h6>
                                </div>
                                <div class="card-body">

                                    <ul class="list-inline mt-3">
                                        <li class="list-inline-item ">
                                            <img src="assets/img/dummy/u13.png" alt="" class="img-responsive w-40px circle mb-3">
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="assets/img/dummy/u12.png" alt="" class="img-responsive w-40px circle mb-3">
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="assets/img/dummy/u11.png" alt="" class="img-responsive w-40px circle mb-3">
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="assets/img/dummy/u10.png" alt="" class="img-responsive w-40px circle mb-3">
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="assets/img/dummy/u9.png" alt="" class="img-responsive w-40px circle mb-3">
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="assets/img/dummy/u8.png" alt="" class="img-responsive w-40px circle mb-3">
                                        </li>
                                        <li class="list-inline-item ">
                                            <img src="assets/img/dummy/u7.png" alt="" class="img-responsive w-40px circle mb-3">
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="assets/img/dummy/u6.png" alt="" class="img-responsive w-40px circle mb-3">
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="assets/img/dummy/u5.png" alt="" class="img-responsive w-40px circle mb-3">
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="assets/img/dummy/u4.png" alt="" class="img-responsive w-40px circle mb-3">
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="assets/img/dummy/u3.png" alt="" class="img-responsive w-40px circle mb-3">
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="assets/img/dummy/u2.png" alt="" class="img-responsive w-40px circle mb-3">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>

                    </div>

            </div>
        </div>
    </div>
@stop()
