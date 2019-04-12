<style>
    .form-check .form-check-label input[type="checkbox"] + .input-helper:before {

        border: solid #2b2b2b;

    }
</style>

<h3>
   <span class="w-circle"><i class="ti-check" data-toggle="tooltip" data-placement="bottom" data-original-title="Product/Service Details"></i></span> <span class="title">Product/Service Details</span>
</h3>
<fieldset>
    <span style="color: #2b2b2b; font-size: 16px; margin-bottom: 10px">Tell us a bit about product or service you are looking to promote.</span>
    <div class="form-group" style="margin-top: 20px">
        <label>Product Name *</label><br>
        <input type="text" name="product_name" id="product_name" class="required form-control">
    </div>
    <div class="form-group">
        <label class="label">Product Category <i style="font-size: 10px;" class="icon-question"
                                                 data-toggle="tooltip" data-placement="bottom"
                                                 title=""
                                                 data-original-title="Tell us where your product fits best in our marketplace."></i>*</label><br>
        <input type="text" name="product_category"  class="required form-control">
       
    </div>
    <div class="form-group">
        <label class="label">Product Photo <i style="font-size: 10px;" class="icon-question"
                                              data-toggle="tooltip" data-placement="bottom"
                                              title=""
                                              data-original-title="Upload a high resolution photo with 512px x 512px of your product so that it can be displayed to influencers ."></i>*</label><br>
        <img id="previewImage" class="previewImage" src="{{url('users/images/uploadcampainimage.jpg')}}" style="border: 3px dotted #ccc;width:312px;height:312px;margin-bottom:10px;padding: 5px;" alt="add new campaign image"/><br>
        <input  type="file" name="campaign_product_image" id="campaign_product_image" class="required form-control"/>
    </div>
    <div class="form-group">
        <label class="label">About Your Product/Service Photo <i style="font-size: 10px;" class="icon-question"
                                                                 data-toggle="tooltip" data-placement="bottom"
                                                                 title=""
                                                                 data-original-title="Use this space to let influencer know about your product/service and get them exicited. Remember this may be the first time they have heard your brand."></i>*</label><br>
        <textarea  name="about_product" id="about_product" rows="4" class="required form-control"></textarea>
    </div>
</fieldset>

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script>
function readURL(input) {

if (input.files && input.files[0]) {
  var reader = new FileReader();

  reader.onload = function(e) {
    $('.previewImage').attr('src', e.target.result);
    $('.previewImage').attr('src', e.target.result);
  }

  reader.readAsDataURL(input.files[0]);
}
}

$("#campaign_product_image").change(function() {
readURL(this);
});
</script>
