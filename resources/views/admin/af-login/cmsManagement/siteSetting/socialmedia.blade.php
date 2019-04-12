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
                           <label for="facebook_link">Facebook Link</label>
                           <input type="text" autofocus="autofocus" value="{{isset(Helpers::getSocialMediaData()->facebook_link)?Helpers::getSocialMediaData()->facebook_link:''}}" name="facebook_link" class="form-control"> <!---->

                        </div>
                        <div class="col-md-12 mb-12 focused">
                           <label for="twitter_link">Twitter Link </label>
                           <input type="text" autofocus="autofocus" value="{{isset(Helpers::getSocialMediaData()->twitter_link)?Helpers::getSocialMediaData()->twitter_link:''}}" name="twitter_link" class="form-control"> <!---->

                        </div>
                        <div class="col-md-12 mb-12 focused">
                           <label for="instagram_link">Instagram Link</label>
                           <input type="text" autofocus="autofocus" value="{{isset(Helpers::getSocialMediaData()->instagram_link)?Helpers::getSocialMediaData()->instagram_link:''}}" name="instagram_link" class="form-control"> <!---->

                        </div>
                        <div class="col-md-12 mb-12 focused">
                           <label for="youtube_link">Youtube Link:</label>
                           <input type="text" autofocus="autofocus" value="{{isset(Helpers::getSocialMediaData()->youtube_link)?Helpers::getSocialMediaData()->youtube_link:''}}" name="youtube_link" class="form-control"> <!---->

                        </div>
                        <div class="col-md-12 mb-12 focused">
                           <label for="google_link">Google Plus Link </label>
                           <input type="text" autofocus="autofocus" value="{{isset(Helpers::getSocialMediaData()->google_link)?Helpers::getSocialMediaData()->google_link:''}}" name="google_link" class="form-control"> <!---->

                        </div>
                        <div class="col-md-12 mb-12 focused">
                           <label for="linkedin_link">Linkedin Link</label>
                           <input type="text" autofocus="autofocus" value="{{isset(Helpers::getSocialMediaData()->linkedin_link)?Helpers::getSocialMediaData()->linkedin_link:''}}" name="linkedin_link" class="form-control"> <!---->

                        </div>

                     </div>
                     <input style="margin-top: 10px" class=" btn btn-primary" value="Update" type="submit">
                  </form>

            </div>
         </div>
      </div>
   </div>


@stop()