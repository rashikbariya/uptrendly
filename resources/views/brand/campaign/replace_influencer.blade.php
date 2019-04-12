@extends('layouts.brand')

@section('brand-content')
    <style> .icon-eye {
            color: #2b2b2b;
            font-size: 18px;

        }

        .icon-shuffle{
            color: #2b2b2b;
            font-size: 18px;
        }

        .dark-green-badge {
            border-radius: 50%;
            width: 18px;
            height: 18px;
            background-color: #11b732;
        }

        .light-green-badge {
            border-radius: 50%;
            width: 18px;
            height: 18px;
            background-color: #90ee901f;
        }

        .dark-yellow-badge {
            border-radius: 50%;
            width: 18px;
            height: 18px;
            background-color: darkorange;
        }

        .light-yellow-badge {
            border-radius: 50%;
            width: 18px;
            height: 18px;
            background-color: #fff8f5;
        }</style>
    <div class="content-wrapper">



       <div class="row">
           <div class="col-lg-12">
               <h5 style="color: #2b2b2b;float: left">Replace Influencer</h5>
               <nav aria-label="breadcrumb" style="float: right">
                   <ol class="breadcrumb bg-light">
                       <li class="breadcrumb-item"><a href="{{url('brand')}}">Home</a></li>
                       <li class="breadcrumb-item"><a href="{{url('brand/campaign-list')}}">Campaign List</a></li>
                       <li class="breadcrumb-item"><a href="{{url('brand/campaign/single/1')}}">Campaign Name</a></li>
                       <li style="color: #2a2a2a;" class="breadcrumb-item active" aria-current="page">Replace Influencer</li>
                   </ol>
               </nav>
           </div>
       </div>
        <div class="row">
            <div class="col-md-4" style="">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <img src="{{url('users')}}/images/faces/face3.jpg" class="img-lg rounded" alt="profile image">
                            <div class="ml-3">
                                <h6>Influencer Name</h6>
                                <p class="text-muted">Designation</p>
                                <p class="mt-2 text-danger font-weight-bold">Decline</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow my-3 no-b">
                    <div class="card-body" style="padding: 0.9rem;border-bottom: 1px solid #e1e8ee">
                        <div class="d-flex align-items-center">
                            <div class="pull-left">
                                <span style="font-weight: 600;color: black">Budget 50,000</span>
                            </div>

                        </div>
                    </div>
                    <img style="height: 300px"
                         src="{{url('img')}}/cover.png">
                    <div class="card-body">
                        <h5 style="font-weight: 600; color: black;margin-bottom: 10px">Red Tea Detox</h5>
                        <span style=" color:  black;font-weight: 400;font-size: 15px;">
                                        I'm looking for English speaking Youtubers in the health and fitness/diet niche. I would prefer Youtubers who's videos reach...
                                    </span>
                    </div>

                    <div class="card-body b-t">

                    </div>

                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">

                    <input type="text" class="form-control"  placeholder="Search by influencer name">
                </div>

                <table  class="table table-hover text-center">
                    <thead>
                    <tr class="text-center">

                        <th>
                            Fullname
                        </th>
                        <th class="text-center">
                            Accepted
                        </th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr for="check1">

                        <td class="">
                            <div class="d-flex align-items-center">
                                <img src="http://10.10.25.218/users/images/faces/face2.jpg" alt="profile">
                                <div class="ml-3">
                                    <p class="mb-2">Fullname</p>
                                    <p class="mb-0 text-muted text-small">Designation</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <ul style="list-style-type: none; margin-top: 10px">
                                <li style="display: inline-block">
                                    <div class="dark-green-badge" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="High chance of acceptance."></div>

                                </li>
                                <li style="display: inline-block">
                                    <div class="light-yellow-badge" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Low chance of acceptance."></div>
                                </li>
                            </ul>
                        </td>
                        <td>
                            Amount
                        </td>
                        <td class="text-center">
                            <a href="#"><i class="icon-eye" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Influencer Information."></i></a>
                            <a href="#"><i class="icon-shuffle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Replace Influencer."></i></a>
                        </td>
                    </tr>
                    <tr for="check1">

                        <td class="">
                            <div class="d-flex align-items-center">
                                <img src="http://10.10.25.218/users/images/faces/face12.jpg" alt="profile">
                                <div class="ml-3">
                                    <p class="mb-2">Fullname</p>
                                    <p class="mb-0 text-muted text-small">Designation</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <ul style="list-style-type: none; margin-top: 10px">
                                <li style="display: inline-block">
                                    <div class="dark-green-badge" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="High chance of acceptance."></div>

                                </li>
                                <li style="display: inline-block">
                                    <div class="light-yellow-badge" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Low chance of acceptance."></div>
                                </li>
                            </ul>
                        </td>
                        <td>
                            Amount
                        </td>
                        <td class="text-center">
                            <a href="#"><i class="icon-eye" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Influencer Information."></i></a>
                            <a href="#"><i class="icon-shuffle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Replace Influencer."></i></a>
                        </td>
                    </tr>
                    <tr for="check1">

                        <td class="">
                            <div class="d-flex align-items-center">
                                <img src="http://10.10.25.218/users/images/faces/face11.jpg" alt="profile">
                                <div class="ml-3">
                                    <p class="mb-2">Fullname</p>
                                    <p class="mb-0 text-muted text-small">Designation</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <ul style="list-style-type: none; margin-top: 10px">
                                <li style="display: inline-block">
                                    <div class="dark-green-badge" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="High chance of acceptance."></div>

                                </li>
                                <li style="display: inline-block">
                                    <div class="light-yellow-badge" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Low chance of acceptance."></div>
                                </li>
                            </ul>
                        </td>
                        <td>
                            Amount
                        </td>
                        <td class="text-center">
                            <a href="#"><i class="icon-eye" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Influencer Information."></i></a>
                            <a href="#"><i class="icon-shuffle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Replace Influencer."></i></a>
                        </td>
                    </tr>
                    <tr for="check1">

                        <td class="">
                            <div class="d-flex align-items-center">
                                <img src="http://10.10.25.218/users/images/faces/face4.jpg" alt="profile">
                                <div class="ml-3">
                                    <p class="mb-2">Fullname</p>
                                    <p class="mb-0 text-muted text-small">Designation</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <ul style="list-style-type: none; margin-top: 10px">
                                <li style="display: inline-block">
                                    <div class="dark-green-badge" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="High chance of acceptance."></div>

                                </li>
                                <li style="display: inline-block">
                                    <div class="light-yellow-badge" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Low chance of acceptance."></div>
                                </li>
                            </ul>
                        </td>
                        <td>
                            Amount
                        </td>
                        <td class="text-center">
                            <a href="#"><i class="icon-eye" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Influencer Information."></i></a>
                            <a href="#"><i class="icon-shuffle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Replace Influencer."></i></a>
                        </td>
                    </tr>
                    <tr for="check1">

                        <td class="">
                            <div class="d-flex align-items-center">
                                <img src="http://10.10.25.218/users/images/faces/face10.jpg" alt="profile">
                                <div class="ml-3">
                                    <p class="mb-2">Fullname</p>
                                    <p class="mb-0 text-muted text-small">Designation</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <ul style="list-style-type: none; margin-top: 10px">
                                <li style="display: inline-block">
                                    <div class="dark-green-badge" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="High chance of acceptance."></div>

                                </li>
                                <li style="display: inline-block">
                                    <div class="light-yellow-badge" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Low chance of acceptance."></div>
                                </li>
                            </ul>
                        </td>
                        <td>
                            Amount
                        </td>
                        <td class="text-center">
                            <a href="#"><i class="icon-eye" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Influencer Information."></i></a>
                            <a href="#"><i class="icon-shuffle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Replace Influencer."></i></a>
                        </td>
                    </tr>
                    <tr for="check1">

                        <td class="">
                            <div class="d-flex align-items-center">
                                <img src="http://10.10.25.218/users/images/faces/face6.jpg" alt="profile">
                                <div class="ml-3">
                                    <p class="mb-2">Fullname</p>
                                    <p class="mb-0 text-muted text-small">Designation</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <ul style="list-style-type: none; margin-top: 10px">
                                <li style="display: inline-block">
                                    <div class="dark-green-badge" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="High chance of acceptance."></div>

                                </li>
                                <li style="display: inline-block">
                                    <div class="light-yellow-badge" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Low chance of acceptance."></div>
                                </li>
                            </ul>
                        </td>
                        <td>
                            Amount
                        </td>
                        <td class="text-center">
                            <a href="#"><i class="icon-eye" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Influencer Information."></i></a>
                            <a href="#"><i class="icon-shuffle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Replace Influencer."></i></a>
                        </td>
                    </tr>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop()
