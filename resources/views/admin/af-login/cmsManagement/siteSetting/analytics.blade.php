@extends('admin.af-login.cmsManagement.siteSetting.index')
@section('admin-setting-management')
<div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body b-b">
                 <form method="post">
                    @csrf()
                    <div class="form-row">
                       
                       <div class="col-md-12 mb-12 focused">
                          <label for="title">Tracking Script<span class="error">*</span></label>
                           <textarea rows="4" class="form-control" name="tracking_script"></textarea>
                          
                       </div>
             
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" style="margin-top:20px;">Save</button>
                 </form>
              </div>
           </div>
        </div>
     </div>

@stop()