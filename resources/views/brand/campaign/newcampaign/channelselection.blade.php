<style>
    .form-check .form-check-label input[type="checkbox"] + .input-helper:before {

        border: solid #2b2b2b;

    }
    .md-checkbox{
        position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    left: 0;
    right: auto;
    }
</style>

<h3>
   <span class="w-circle"><i class="ti-check" data-toggle="tooltip" data-placement="bottom" data-original-title="Channel Selection"></i></span> <span class="title">Channel Selection</span>
</h3>
    <fieldset style="color:#2b2b2b">
    <h5>Targeted YouTube Campaign</h5>
    <p>Targeted YouTube Campaign With our Advanced YouTube Campaign Targeting and Proposal Filtering, you can now target creators by audience demographics, channel geography and more.</p>
    <div class="form-check" style="margin-top: 25px;">
                            <label class="form-check-label">
                              <input id="youtube-checkbox" onclick="youtubeCheckbox()" type="checkbox" class="form-check-input">
                            </label>

                             <img src="{{url('frontend/img/youtube.png')}}" alt="youtubelogo" style="width: 64px;margin-top: -24px;margin-left: 20px;">
                          
                          </div>
            
            <div id="afterChecedyoutube" style="display:none">

                          <h5>YouTube Video Types</h5>
                          <p>Select the video types that you’d like YouTube creators to focus on when sending you proposals.</p>
                          <div class="table-responsive">
                    <table class="table table-bordered">
                      <tr>
                      
                      <td>
                      <div class="form-check">
                      <label class="form-check-label" style="margin-left: 25px;">
                              <input id="video_type_review" type="checkbox" class="form-check-input">
                              Review 
                            <i class="input-helper"></i><i class="input-helper"></i></label>
                            <i style="right: 0;font-size: 10px;position: absolute;" class="icon-question" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="A dedicated video in which YouTubers provide a review of their experience with your products or service and talk about your features."></i>
                          </div>
                      </td>
                      <td>
                      <div class="form-check">
                      <label class="form-check-label" style="margin-left: 25px;">
                              <input id="video_type_mention"  type="checkbox" class="form-check-input">
                              Mention
                            <i class="input-helper"></i><i class="input-helper"></i></label>
                            <i style="right: 0;font-size: 10px;position: absolute;" class="icon-question" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="An endorsement at the beginning, middle, or end of a YouTuber's video, encouraging viewers to check out your company, to buy your products, or to use your service."></i>
                          </div>
                      </td>
                      <td>
                      <div class="form-check">
                      <label class="form-check-label" style="margin-left: 25px;">
                              <input id="video_type_haul"  type="checkbox" class="form-check-input">
                              Haul
                            <i class="input-helper"></i><i class="input-helper"></i></label>
                            <i style="right: 0;font-size: 10px;position: absolute;" class="icon-question" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="YouTubers show off products that they recently acquired, sharing knowledge about what is trendy, including details about the products and even the price."></i>
                          </div>
                      </td>
                      </tr>


                       <tr>
                      
                      <td>
                      <div class="form-check">
                      <label class="form-check-label" style="margin-left: 25px;">
                              <input id="video_type_lookbook"  type="checkbox" class="form-check-input">
                              LookBook
                            <i class="input-helper"></i><i class="input-helper"></i></label>
                            <i style="right: 0;font-size: 10px;position: absolute;" class="icon-question" data-toggle="tooltip" data-placement="left" title="" data-original-title="Fashion YouTubers style clothing and accessories, showcase the styled looks in a video, revealing their latest fashion picks as well as where to buy them."></i>
                          </div>
                      </td>
                      <td>
                      <div class="form-check">
                      <label class="form-check-label" style="margin-left: 25px;">
                              <input id="video_type_favorites"  type="checkbox" class="form-check-input">
                              Favorites
                            <i class="input-helper"></i><i class="input-helper"></i></label>
                            <i style="right: 0;font-size: 10px;position: absolute;" class="icon-question" data-toggle="tooltip" data-placement="left" title="" data-original-title="YouTubers showcase your product/service as a favorite and as part of products that they are loving right now and describe what makes you a favorite."></i>
                          </div>
                      </td>
                      <td>
                      <div class="form-check">
                      <label class="form-check-label" style="margin-left: 25px;">
                              <input id="video_type_tutorial"  type="checkbox" class="form-check-input">
                              Tutorial
                            <i class="input-helper"></i><i class="input-helper"></i></label>
                            <i style="right: 0;font-size: 10px;position: absolute;" class="icon-question" data-toggle="tooltip" data-placement="left" title="" data-original-title="YouTubers demonstrate how to use a product/service, how to do something with it, and why it's awesome. Ex: Makeup Tutorials, App Tutorials, Fashion and Hair How-Tos."></i>
                          </div>
                      </td>
                      </tr>


                       <tr>
                      
                      <td>
                      <div class="form-check">
                      <label class="form-check-label" style="margin-left: 25px;">
                              <input id="video_type_gameplay"  type="checkbox" class="form-check-input">
                              Game Play
                            <i class="input-helper"></i><i class="input-helper"></i></label>
                            <i style="right: 0;font-size: 10px;position: absolute;" class="icon-question" data-toggle="tooltip" data-placement="left" title="" data-original-title="A video following YouTubers playing your game while providing creative commentary. Viewers get to experience the game and learn how to play."></i>
                          </div>
                      </td>
                      <td>
                      <div class="form-check">
                      <label class="form-check-label" style="margin-left: 25px;">
                              <input id="video_type_comedic_sketch"  type="checkbox" class="form-check-input">
                              Comedic Sketch
                            <i class="input-helper"></i><i class="input-helper"></i></label>
                            <i style="right: 0;font-size: 10px;position: absolute;" class="icon-question" data-toggle="tooltip" data-placement="left" title="" data-original-title="A short improvised story featuring your product/service – think parodies, spoofs, ads, pranks or original short films. Can be serious or humorous."></i>
                          </div>
                      </td>
                      <td>
                      <div class="form-check">
                      <label class="form-check-label" style="margin-left: 25px;">
                              <input id="video_type_unboxing"  type="checkbox" class="form-check-input">
                              Unboxing
                            <i class="input-helper"></i><i class="input-helper"></i></label>
                            <i style="right: 0;font-size: 10px;position: absolute;" class="icon-question" data-toggle="tooltip" data-placement="left" title="" data-original-title="A first impressions video where YouTubers unpack your product for the first time on camera with commentary and product close-ups so that viewers know what to expect."></i>
                          </div>
                      </td>
                      </tr>
                    </table>
                  </div>
            </div>


    <h5>Supplemental Channels</h5>
 <p style="color: #2b2b2b;">Supplemental channels are a great way to increase additional brand exposure, however, these channels do not support audience targeting, proposal sorting or creator relevancy.</p>
 <ul style="
    list-style: none;
    display: -webkit-inline-box;
    display: inline-flex;
    /* padding-right: 27px; */
    margin-right: 23px;
">

 <li> <div class="form-check" style="margin-top: 25px; margin-right:10px">
                            <label class="form-check-label">
                              <input id="instagram-checkbox" type="checkbox" class="form-check-input">
                            </label>

                             <img src="{{url('frontend/img/instagram.png')}}" alt="youtubelogo" style="width: 64px;margin-top: -24px;margin-left: 20px;">
                          
                          </div>
</li>
 <li> <div class="form-check" style="margin-top: 25px;">
                            <label class="form-check-label">
                              <input id="facebook-checkbox" type="checkbox" class="form-check-input">
                            </label>

                             <img  src="{{url('frontend/img/fb.jpg')}}" alt="youtubelogo" style="width: 64px;margin-top: -24px;margin-left: 20px;border-radius:50%">
                          
                          </div>
</li>

 </ul>

    </fieldset>


    
