@extends('layouts.staff')
@section('staff-content')
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-report"></i>
                        Daily Report Information
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link active show" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all" role="tab" aria-controls="v-pills-all" aria-selected="true"><i class="icon icon-home2"></i>Report</a>
                    </li>
                    <li>
                        <a class="nav-link" id="v-pills-buyers-tab" data-toggle="pill" href="#v-pills-buyers" role="tab" aria-controls="v-pills-buyers" aria-selected="false"><i class="icon icon-history"></i> History</a>
                    </li>


                </ul>
            </div>
        </div>
    </header>

   <div id="app">
       <be-st-dr></be-st-dr>
   </div>
    @stop()
