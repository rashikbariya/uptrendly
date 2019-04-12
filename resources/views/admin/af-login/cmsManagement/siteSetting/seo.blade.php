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
                        <label for="title">Meta Title <span class="error">*</span></label>
                        <input type="text" autofocus="autofocus" value="{{isset(Helpers::getSeoManagementData()->meta_title)?Helpers::getSeoManagementData()->meta_title:''}}" name="meta_title" class="form-control"> <!---->
                        @if($errors->has('meta_title'))
                           <label id="name-error" class="error" for="total_month">{{$errors->first('meta_title')}}</label>
                        @endif
                     </div>
                     <div class="col-md-12 mb-12 focused">
                        <label for="title">Meta Description <span class="error">*</span></label>
                         <textarea rows="4" class="form-control" name="meta_description">{{isset(Helpers::getSeoManagementData()->meta_description)?Helpers::getSeoManagementData()->meta_description:''}}</textarea>
                        @if($errors->has('meta_description'))
                           <label id="name-error" class="error" for="total_month">{{$errors->first('meta_description')}}</label>
                        @endif
                     </div>
                     <div class="col-md-12 mb-12 focused">
                        <label for="title">Meta Keywords <span class="error">*</span></label>

                        <input name="meta_keyword" type="text" class="tags-input"
                               value="{{isset(Helpers::getSeoManagementData()->meta_keyword)?Helpers::getSeoManagementData()->meta_keyword:''}}"
                               data-options='{"tagClass": "badge badge-danger"}' required>
                        @if($errors->has('meta_keyword'))
                           <label id="name-error" class="error" for="total_month">{{$errors->first('meta_keyword')}}</label>
                        @endif
                     </div>
                  </div>
                  <input class=" btn btn-primary" value="Update" type="submit">
               </form>
            </div>
         </div>
      </div>
   </div>

@stop()