@extends('admin.af-login.cmsManagement.siteSetting.index')
@section('admin-setting-management')

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body b-b">
             <form method="post" enctype="multipart/form-data">
                 @csrf()
                <div class="form-row">
                   <div class="col-md-12 mb-12 focused">
                      <label for="title">Site Name</label>
                   <input type="text" autofocus="autofocus" name="site_name" class="form-control" value="{{isset(Helpers::getGeneralSettingData()->site_name)?Helpers::getGeneralSettingData()->site_name:''}}"> 
                   @if($errors->has('site_name'))
                        <label id="name-error" class="error">{{$errors->first('site_name')}}</label>
                    @endif
                   </div>
                   <div class="col-md-12 mb-12 focused">
                      <label for="title">Comapany Address </label>
                      <input type="text" autofocus="autofocus" name="company_address" class="form-control" value="{{isset(Helpers::getGeneralSettingData()->company_address)?Helpers::getGeneralSettingData()->company_address:''}}">
                      @if($errors->has('company_address'))
                        <label id="name-error" class="error">{{$errors->first('company_address')}}</label>
                    @endif
                   </div>
                    <div class="col-md-12 mb-12 focused">
                        <label for="title">Company phone 1</label>
                        <input type="text" autofocus="autofocus" name="company_phone1" class="form-control" value="{{isset(Helpers::getGeneralSettingData()->company_phone1)?Helpers::getGeneralSettingData()->company_phone1:''}}">
                        @if($errors->has('company_phone1'))
                        <label id="name-error" class="error">{{$errors->first('company_phone1')}}</label>
                    @endif
                    </div>
                    <div class="col-md-12 mb-12 focused">
                        <label for="title">Company phone 2(optioinal)</label>
                        <input type="text" autofocus="autofocus" name="company_phone2" class="form-control" value="{{isset(Helpers::getGeneralSettingData()->company_phone2)?Helpers::getGeneralSettingData()->company_phone2:''}}">
                    </div>
                    <div class="col-md-12 mb-12 focused">
                        <label for="title">Company email</label>
                        <input type="text" autofocus="autofocus" name="company_email" class="form-control" value="{{isset(Helpers::getGeneralSettingData()->company_email)?Helpers::getGeneralSettingData()->company_email:''}}">
                        @if($errors->has('company_email'))
                        <label id="name-error" class="error">{{$errors->first('company_email')}}</label>
                    @endif
                    </div>
                    <div class="col-md-12 mb-12 focused">
                        <label for="title">Small Logo (512*512)</label><br/>
                         <div style="width: 50px;height: 50px;border: 2px dotted #e8e8e8;margin-bottom: 5px;">
                             <img src="http://www.uptrendly.com/img/logo/blacksmalllogo.png" alt="logo" height="50px" width="50px" id="output">

                         </div>
                          <input type="file" autofocus="autofocus" name="site_small_logo_path" class="form-control" value="{{isset(Helpers::getGeneralSettingData()->site_small_logo_path)?Helpers::getGeneralSettingData()->site_small_logo_path:''}}" onchange="small_image(event)">
                          @if($errors->has('site_small_logo_path'))
                        <label id="name-error" class="error">{{$errors->first('site_small_logo_path')}}</label>
                    @endif
                    </div>
                    <div class="col-md-12 mb-12 focused">
                        <label for="title">Big logo (1024*579)</label><br/>

                        <img style="margin-bottom: 10px" src="http://www.uptrendly.com/img/logo/full.png" alt="logo" height="67.84px" width="120px" id="output1">

                        <input type="file" autofocus="autofocus" name="site_big_logo_path" class="form-control" value="{{isset(Helpers::getGeneralSettingData()->site_big_logo_path)?Helpers::getGeneralSettingData()->site_big_logo_path:''}}" onchange="big_image(event)">
                        @if($errors->has('site_big_logo_path'))
                        <label id="name-error" class="error">{{$errors->first('site_big_logo_path')}}</label>
                    @endif
                    </div>

                    <button type="submit" class="btn btn-primary mr-2" style="margin-top:20px;">Save</button>
                   
                </div>
             </form>
          </div>
       </div>
    </div>
 </div>
@stop()

<script>
        var small_image = function(event) {
          var output = document.getElementById('output');
          output.src = URL.createObjectURL(event.target.files[0]);
        };
        var big_image = function(event) {
          var output1 = document.getElementById('output1');
          output1.src = URL.createObjectURL(event.target.files[0]);
        };
</script>