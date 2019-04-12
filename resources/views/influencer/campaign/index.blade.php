@extends('layouts.influencer')
@section('influencer-content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.checked {
    color: orange;
}
</style>
    
    
    <div class="row" style="margin-top:10px; margin-bottom:10px; ">
        <div class="col-md-12 col-sm-6 col-ld-12">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" style="color: #000;
                background-color: #F5F6F7;
                border-color: #F5F6F7;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Campaign Category
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">All</a>
                  <a class="dropdown-item" href="#">Pending</a>
                  <a class="dropdown-item" href="#">Running</a>
                  <a class="dropdown-item" href="#">Past</a>
                  <a class="dropdown-item" href="#">Rejected</a>
                </div>
              </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 col-sm-12 col-lg-4">
            <div class="card" style="box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important; margin-bottom:40px;">
                <div class="card-body" style="color:black; margin-top:-8px;">
                        <div class="row">
                            <div style="font-weight: 700;    margin-top: -7px;">$100</div>
                            <span style="float:right;     margin-left: 200px;">Channel logo</span>
                        </div>
                    <div >
                    <img src="{{url('img/Cycling.jpg')}}" class="center" alt="profile image" style="width: 113.2%; height: auto;margin-left: -20px;">
                        <div class="">
                            <h6 style="font-size: 16px;font-weight: 300;margin-top:5px;    margin-left: -13px;">title</h6>
                            <h6 style="font-size: 14px;margin-top: -2px;font-weight: 100;    margin-left: -13px;">description Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, exercit nesciunt maxime hic...</h6>
                        </div>
                    </div>

                   <div class="row">
                        <div class="col-md-4" style="text-align:center;    margin-top: 9px;">
                                    
                                    <div class="progress" style="    margin-bottom: 3px;">
                                         <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                         <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                               
                            <span >relevancy</span>
                        </div>
                        <div class="col-md-4" style="font-size:14px; text-align:center;">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                           <span>rating</span>
                        </div>
                        <div class="col-md-4" style="text-align:center;">
                                <p style="font-size: 16px;font-weight: 400;margin-bottom:0px;">In 20 Days</p>
                            <span >deadline</span>
                        </div>
                   </div>

                   

                </div>
            </div>
        </div>

       
                
                    
    </div>
   
@stop()

<script>
    
</script>