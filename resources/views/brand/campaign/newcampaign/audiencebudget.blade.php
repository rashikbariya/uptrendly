<h3> <span class="w-circle">
        <i class="ti-check" data-toggle="tooltip" data-placement="bottom" data-original-title="Audience & Budget"></i></span> <span class="title">Audience & Budget</span>
</h3>
<fieldset>
    <h5  style="color: #2b2b2b;">Target Audience</h5>
    <span  style="color: #2b2b2b;">Define the audience you’d like to connect with by choosing specific audience demographics below.</span>

    {{--Audience Gender start--}}
    <label style="color: #2b2b2b;font-size: 12px">Audience Gender <i style="font-size: 10px;" class="icon-question"
                                                                     data-toggle="tooltip" data-placement="bottom"
                                                                     title=""
                                                                     data-original-title="Select the gender of your target audience."></i>*</label>
    <ul style="list-style-type: none">
        <li style="margin-right: 40px;display:  inline-block;">
            <div class="form-check">
                <label style="margin-left:25px" class="form-check-label">
                    <input type="radio" class="form-check-input" id="genderradio" name="genderradio" id="optionsRadios1"
                           value="All" checked>
                    All
                </label>

            </div>
        </li>
        <li style="margin-right: 40px;display:  inline-block;">
            <div class="form-check">
                <label style="margin-left:25px" class="form-check-label">
                    <input type="radio" class="form-check-input"  id="genderradio"  name="genderradio" id="optionsRadios2"
                           value="Female" >
                    Female </label>

            </div>
        </li>
        <li style="margin-right: 40px;display:  inline-block;">
            <div class="form-check">
                <label style="margin-left:25px" class="form-check-label">
                    <input type="radio" class="form-check-input"  id="genderradio"  name="genderradio" id="optionsRadios3"
                           value="Male">
                    Male </label>

            </div>
        </li>
    </ul>
    {{--Audience Gender end--}}


    {{--Audience Age start--}}
    <label  style="color: #2b2b2b;font-size: 12px">Audience Age <i style="font-size: 10px;" class="icon-question"
                                                                   data-toggle="tooltip" data-placement="bottom"
                                                                   title=""
                                                                   data-original-title="Select the age range of your target audience."></i>*</label>
    <ul style="list-style-type: none">
        <li style="margin-right: 40px;display:  inline-block;">
            <div class="form-check">
                <label style="margin-left:25px" class="form-check-label">
                    <input value="All" onClick="deselectAllAgeOption()" type="checkbox" id="tar_aud_gender_1" class="form-check-input" checked>
                    All
                </label>

            </div>
        </li>
     
        <li style="margin-right: 40px;display:  inline-block;">
            <div class="form-check">
                <label style="margin-left:25px" class="form-check-label">
                    <input value="13-17" onClick="deselectAllOptionFromAge()"  type="checkbox" id="tar_aud_gender_2" class="form-check-input">
                    13 - 17 </label>

            </div>
        </li>
        <li style="margin-right: 40px;display:  inline-block;">
            <div class="form-check">
                <label style="margin-left:25px" class="form-check-label">
                    <input value="18-24" onClick="deselectAllOptionFromAge()"  type="checkbox" id="tar_aud_gender_3" class="form-check-input">
                    18 - 24 </label>

            </div>
        </li>
        <li style="margin-right: 40px;display:  inline-block;">
            <div class="form-check">
                <label style="margin-left:25px" class="form-check-label">
                    <input value="25-34" onClick="deselectAllOptionFromAge()"  type="checkbox" id="tar_aud_gender_4" class="form-check-input">
                    25 - 34 </label>

            </div>
        </li>
        <li style="margin-right: 40px;display:  inline-block;">
            <div class="form-check">
                <label style="margin-left:25px" class="form-check-label">
                    <input value="35-44" onClick="deselectAllOptionFromAge()" type="checkbox" id="tar_aud_gender_5" class="form-check-input">
                    35 - 44 </label>

            </div>
        </li>
        <li style="margin-right: 40px;display:  inline-block;">
            <div class="form-check">
                <label style="margin-left:25px" class="form-check-label">
                    <input value="45-54" onClick="deselectAllOptionFromAge()"  type="checkbox" id="tar_aud_gender_6" class="form-check-input">
                    45 - 54 </label>

            </div>
        </li>
        <li style="margin-right: 40px;display:  inline-block;">
            <div class="form-check">
                <label style="margin-left:25px" class="form-check-label">
                    <input value="55-64" onClick="deselectAllOptionFromAge()" type="checkbox" id="tar_aud_gender_7" class="form-check-input">
                    55 - 64 </label>

            </div>
        </li>
        <li style="margin-right: 40px;display:  inline-block;">
            <div class="form-check">
                <label style="margin-left:25px" class="form-check-label">
                    <input value="65" onClick="deselectAllOptionFromAge()" type="checkbox" id="tar_aud_gender_8" class="form-check-input">
                    65 + </label>

            </div>
        </li>
    </ul>
    {{--Audience Age--}}

    {{--Budget start--}}
    <h5  style="color: #2b2b2b;">Budget</h5>
    <span  style="color: #2b2b2b;">By selecting a content budget range we will estimate the size of the influencer.</span>


    <div class="form-group" style="margin-top: 10px">
        <label style="color: #2b2b2b;font-size: 12px">Budget for your campaign <i style="font-size: 10px;" class="icon-question"
                                                                                  data-toggle="tooltip" data-placement="bottom"
                                                                                  title=""
                                                                                  data-original-title="This is the price range you are looking to spend per piece of campaign.Please note 15% service charge and 13% VAT will added to your total amount."></i>*</label><br>
        <input name="campaign_budget" id="campaign_budget"  type="number" class="required form-control">

    </div>
    <div style="
    color: #2b2b2b;
    padding-left: 10px;
    /* padding: 20px; */
    background: #e9ecef;
    height: 40px;
    line-height: 40px;box-shadow: 0 2px 4px 0 rgba(0,0,0,0.10);
">
     <p>Please note 15% service charge and 13% VAT will added to your total amount</P>
    </div>
    {{--Budget end--}}

  
</fieldset>
