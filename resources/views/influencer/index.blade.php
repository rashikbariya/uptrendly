@extends('layouts.influencer')
@section('influencer-content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-0">Statistics</h4>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-inline-block pt-3">
                                <div class="d-md-flex">
                                    <h3 class="mb-0">$10,200</h3>
                                    <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                        <i class="icon-clock text-muted"></i>
                                        <small class=" ml-1 mb-0">Updated: 9:10am</small>
                                    </div>
                                </div>
                                <small class="text-gray">Raised from 89 Campaign.</small>
                            </div>
                            <div class="d-inline-block">
                                <div class="bg-success px-4 py-2 rounded">
                                    <i class="icon-layers text-white icon-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer" style="background-color:white; padding: 0 0;">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">Campaign title</th>
                                <th scope="col">Amount/post</th>
                                <th scope="col">Total post</th>
                                <th scope="col">Total Amount</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">title 1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">title 1</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">title 3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                          </table>
                        <div class="row" ><a href="{{url('influencer/completed-campaign')}}" style="    margin-left: auto;
                            margin-right: auto;
                            width: 6em;">view all</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-0">Daily Order</h4>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-inline-block pt-3">
                                <div class="d-md-flex">
                                    <h3 class="mb-0">$2256</h3>
                                    <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                        <i class="icon-clock text-muted"></i>
                                        <small class="ml-1 mb-0">Updated: 05:42pm</small>
                                    </div>
                                </div>
                                <small class="text-gray">hey, let’s have lunch together</small>
                            </div>
                            <div class="d-inline-block">
                                <div class="bg-warning px-4 py-2 rounded">
                                    <i class="icon-wallet text-white icon-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop()
