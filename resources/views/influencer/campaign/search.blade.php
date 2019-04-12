@extends('layouts.influencer')
@section('influencer-content')
<style>
    .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    align: middle;
    width: 150px;
    height: 150px;
}
*{
    margin :0px;
}
</style>
    <div class="content-wrapper clearfix">
       <div class="row">
           <div class="col-md-12">
                <form class="search-field" method="POST" action="{{url('influencer/brandlist/search')}}">
                    @csrf()
                    <div class="form-group">
                            <div class="input-group" >
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search Brand Here" name="brand_name" value="{{isset($brandName)?$brandName:''}}">
                            </div>
                        </div>
               </form>
           </div>
       </div>
    <label>{{count($brandList)>1?count($brandList).' records found':count($brandList).' record found'}} </label>
       
    
    <div class="row">  
            @foreach($brandList as $key => $brandData) 
     <div class="col-lg-4 col-md-6 col-sm-12" style="color: black;">
            <div class="card">
                <div class="card-body" >                   
                <img src="{{url($brandData->brandInfo->photo_name==null?'/img/branddefault.png':'')}}" class="img-lg rounded-circle mb-2 center" alt="{{str_replace(' ','_',$brandData->brandInfo->brand_name)}}">
                        <div class="">
                            <h4 style="text-align: center;"> {{$brandData->brandInfo->brand_name}}
                                @if($brandData->new_status == 1)    
                                <img src="{{url('/img/logo/verified.png')}}" alt="verified" height="14px" width="14px" brandData-toggle="tooltip" brandData-placement="Right" title="" brandData-original-title="Verified">
                                @endif
                            </h4>
                            <p >
                                    {{substr($brandData->brandInfo->about_brand,0,100)}}
                            </p>
                        </div>                   
                    
                    <div class="border-top pt-3">
                        <div class="row">
                            <div class="col-6" style="text-align: center;">
                                <h6 style="font-size:50px; color: #65cadb;">0</h6>
                                <p >Engaged Influencer</p>
                            </div>
                            <div class="col-6" style="text-align: center;">
                                <h6 style="font-size:50px; color: #65cadb;">0</h6>
                                <p>Total Campaing</p>
                            </div>
                            
                        </div>
                    </div>
                    <button type="button" class="btn btn-dark btn-fw" style="margin-left:auto;margin-right:auto;display:block; width:100%; margin-buttom:0px;">View Brand</button>
                </div>
            </div>          
        </div>
        @endforeach
    
    </div>
     <div style="margin-top:10px;left:auto;right:auto">
            {{$brandList->links()}}
     </div>
    </div>
    

@stop()

