<style>
    .col1{
        position: absolute;
        width: 5em;
        left: 4em;
        top: auto;
        margin-left: -43px;
        background: white;
    }
    .icon {
        font-size:14px;
        color: black;
    }
    .raised-label-container {
    font-size: 0;
    margin-bottom: -5px;
}
.raised-label-container {
    font-size: 0;
    margin-bottom: -5px;
}
.raised-label {
    padding: 1px 6px;
    padding-bottom: 3px;
    border-radius: 2px;
    background-color: #eaeaeb;
    font-family: sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 10px;
    line-height: 1.5em;
    color: black;
    -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.05);
    -moz-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.05);
    -ms-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.05);
    -o-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.05);
    box-shadow: inset 0 -1px 0 rgba(0,0,0,0.05);
}
.raised-label-container .raised-label {
    display: inline-block;
    margin-right: 5px;
    margin-bottom: 5px;
}
.raised-label i {
    position: relative;
    top: 2px;
    margin-right: 4px;
}
</style>

<h3> </span><span class="w-circle"><i class="ti-check" data-toggle="tooltip" data-placement="bottom" data-original-title="Recommended Influencers"></i></span> <span class="title">Influencers</span>
</h3>
<fieldset>


    {{--Recommended Influencers start--}}
    <h5  style="color: #2b2b2b;"> Recommended Influencers</h5>
    
    <div style="
    margin-bottom: 13px;
    position: sticky;
    top: 0;
    background: #f5f6f7;
    padding: 10px;
    z-index: 1;">
    <input type="text" placeholder="Search by influencer name" class="form-control">
    </div>
    <div style="overflow-x: scroll;  overflow-y: hidden; ">
    <table id="inf_re" class="table table-hover text-center" style= "   table-layout: fixed;
    min-width: calc(150vw - 280px);
    border-collapse: collapse;
    margin-left: -130px;">
        <thead>
        <tr class="text-center">
            <th class="col1" style=" width: 83px;"></th>
            <th style="width: 14%; margin-left: -10px; font-size: 10px; font-weight: 400;">
                Profile
            </th>
            <th class="text-center" style="font-size: 10px;  font-weight: 400;">Social Reach</th>
            <th class="text-center" style=" font-size: 10px; font-weight: 400;">Engagement</th>
            <th class="text-center" style="font-size: 10px; font-weight: 400; ">Estimated cost per post</th>
            <th class="text-center" style="font-size: 10px; font-weight: 400;">Topic</th>
            <th class="text-center" style="font-size: 10px; font-weight: 400;">Gender</th>
        </tr>
        </thead>
        <tbody>
        <tr id="tr_1" for="check1">
            <td class="col1" >
                <div class="form-check">
                    <label class="form-check-label">
                        <input id="tr_check_1" onClick="getCheckedValuefromtr(1)" type="checkbox" class="form-check-input" id="check1">
                    </label>
                </div>
            </td>
            <td class="">
                <div class="d-flex align-items-center">
                    <img src="{{url('users')}}/images/faces/face1.jpg" alt="profile">
                    <div class="ml-3">
                        <p style="margin-top:10px; color:black;">Name</p>
                    </div>
                </div>
            </td>
            <td>
                <div class="icon">
                        <i class="ti-facebook"  ></i>
                        <i class="ti-instagram"  ></i>
                        <i class="ti-youtube"  ></i><br/><br/>
                    <span style="margin-top:-10px;">200k</span>
                </div>
            </td>
            <td >
                    <div class="raised-label-container">
                        <button type="button" style="width: 70px; color: #262628;
                            background-color: #2ad081; border: none; border-radius: 2px;">
                            <i class="ti-instagram" style="float: left; font-size: 12px; margin-top: 3px;"></i>
                            <span style="font-size: 10px; line-height: 1.6;">High</span>
                        </button>&nbsp;
                    
                    </div>
            </td>
            <td  style="color:#262628;    text-align: left;" >
                <div class="raised-label-container">
                    <div class="raised-label">
                      <i class="ti-instagram"></i>$7k - $15k
                    </div>&nbsp;
                    <div class="raised-label">
                        <i class="ti-facebook"></i>$7k - $15k
                    </div>&nbsp;
                    <div class="raised-label">
                        <i class="ti-youtube"></i>$7k - $15k
                    </div>
                </div>
            
            </td>
            <td>
                    <div class="badge badge-outline-success badge-pill" style="border-color: black; color:black;">
                            interested
                        </div>
                        <div class="badge badge-outline-success badge-pill" style="border-color: black; color:black;">
                            interested
                        </div>
                    
            </td>
            <td>
                <div class="badge badge-outline-success badge-pill" style="border-color: black; color:black;">
                    female
                </div>
            </td>

        </tr>

        <tr id="tr_2" for="check1">
            <td class="col1" >
                <div class="form-check">
                        <label class="form-check-label">
                            <input id="tr_check_1" onClick="getCheckedValuefromtr(1)" type="checkbox" class="form-check-input" id="check1">
                        </label>
                </div>
            </td>
                <td class="">
                    <div class="d-flex align-items-center">
                        <img src="{{url('users')}}/images/faces/face1.jpg" alt="profile">
                        <div class="ml-3">
                            <p style="margin-top:10px; color:black;">Name</p>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="icon">
                            <i class="ti-facebook"  ></i>
                            <i class="ti-instagram"  ></i>
                            <i class="ti-youtube"  ></i><br/><br/>
                        <span style="margin-top:-10px;">200k</span>
                    </div>
                </td>
                <td >
                        <div class="raised-label-container">
                            <button type="button" style="width: 70px; color: #262628;
                                background-color: #2ad081; border: none; border-radius: 2px;">
                                <i class="ti-instagram" style="float: left; font-size: 12px; margin-top: 3px;"></i>
                                <span style="font-size: 10px; line-height: 1.6;">High</span>
                            </button>&nbsp;
                        
                        </div>
                </td>
                <td  style="color:#262628;    text-align: left;" >
                    <div class="raised-label-container">
                        <div class="raised-label">
                          <i class="ti-instagram"></i>$7k - $15k
                        </div>&nbsp;
                        <div class="raised-label">
                            <i class="ti-facebook"></i>$7k - $15k
                        </div>&nbsp;
                        <div class="raised-label">
                            <i class="ti-youtube"></i>$7k - $15k
                        </div>
                    </div>
                </td>
                <td>
                        <div class="badge badge-outline-success badge-pill" style="border-color: black; color:black;">
                                interested
                            </div>
                            <div class="badge badge-outline-success badge-pill" style="border-color: black; color:black;">
                                interested
                            </div>     
                </td>
                <td>
                    <div class="badge badge-outline-success badge-pill" style="border-color: black; color:black;">
                        female
                    </div>
                </td>
            </tr>

            <tr id="tr_3" for="check1">
                    <td class="col1" >
                        <div class="form-check">
                            <label class="form-check-label">
                                <input id="tr_check_1" onClick="getCheckedValuefromtr(1)" type="checkbox" class="form-check-input" id="check1">
                            </label>
                        </div>
                    </td>
                    <td class="">
                        <div class="d-flex align-items-center">
                            <img src="{{url('users')}}/images/faces/face1.jpg" alt="profile">
                            <div class="ml-3">
                                <p style="margin-top:10px; color:black;">Name</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="icon">
                                <i class="ti-facebook"  ></i>
                                <i class="ti-instagram"  ></i>
                                <i class="ti-youtube"  ></i><br/><br/>
                            <span style="margin-top:-10px;">200k</span>
                        </div>
                    </td>
                    <td >
                            <div class="raised-label-container">
                                <button type="button" style="width: 70px; color: #262628;
                                    background-color: #2ad081; border: none; border-radius: 2px;">
                                    <i class="ti-instagram" style="float: left; font-size: 12px; margin-top: 3px;"></i>
                                    <span style="font-size: 10px; line-height: 1.6;">High</span>
                                </button>&nbsp;
                            
                            </div>
                    </td>
                    <td  style="color:#262628;    text-align: left;" >
                        <div class="raised-label-container">
                            <div class="raised-label">
                              <i class="ti-instagram"></i>$7k - $15k
                            </div>&nbsp;
                            <div class="raised-label">
                                <i class="ti-facebook"></i>$7k - $15k
                            </div>&nbsp;
                            <div class="raised-label">
                                <i class="ti-youtube"></i>$7k - $15k
                            </div>
                        </div>
                    
                    </td>
                    <td>
                            <div class="badge badge-outline-success badge-pill" style="border-color: black; color:black;">
                                    interested
                                </div>
                                <div class="badge badge-outline-success badge-pill" style="border-color: black; color:black;">
                                    interested
                                </div>
                            
                    </td>
                    <td>
                        <div class="badge badge-outline-success badge-pill" style="border-color: black; color:black;">
                            female
                        </div>
                    </td>
        
                </tr>


                <tr id="tr_4" for="check1">
                        <td class="col1" >
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input id="tr_check_1" onClick="getCheckedValuefromtr(1)" type="checkbox" class="form-check-input" id="check1">
                                </label>
                            </div>
                        </td>
                        <td class="">
                            <div class="d-flex align-items-center">
                                <img src="{{url('users')}}/images/faces/face1.jpg" alt="profile">
                                <div class="ml-3">
                                    <p style="margin-top:10px; color:black;">
                                    Asutosh Bikram
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="icon">
                                    <i class="ti-facebook"  ></i>
                                    <i class="ti-instagram"  ></i>
                                    <i class="ti-youtube"  ></i><br/><br/>
                                <span style="margin-top:-10px;">200k</span>
                            </div>
                        </td>
                        <td >
                                <div class="raised-label-container">
                                    <button type="button" style="width: 70px; color: #262628;
                                        background-color: #2ad081; border: none; border-radius: 2px;">
                                        <i class="ti-instagram" style="float: left; font-size: 12px; margin-top: 3px;"></i>
                                        <span style="font-size: 10px; line-height: 1.6;">High</span>
                                    </button>&nbsp;
                                
                                </div>
                        </td>
                        <td  style="color:#262628;    text-align: left;" >
                            <div class="raised-label-container">
                                <div class="raised-label">
                                  <i class="ti-instagram"></i>$7k - $15k
                                </div>&nbsp;
                                <div class="raised-label">
                                    <i class="ti-facebook"></i>$7k - $15k
                                </div>&nbsp;
                                <div class="raised-label">
                                    <i class="ti-youtube"></i>$7k - $15k
                                </div>
                            </div>
                        
                        </td>
                        <td>
                                <div class="badge badge-outline-success badge-pill" style="border-color: black; color:black;">
                                        interested
                                </div>
                                <div class="badge badge-outline-success badge-pill" style="border-color: black; color:black;">
                                        interested
                                </div>
                               
                        </td>
                        <td>
                            <div class="badge badge-outline-success badge-pill" style="border-color: black; color:black;">
                                male
                            </div>
                        </td>
            
                    </tr>


       
        </tbody>
    </table>
</div>

    <div style="
    height: 55px;
    position: sticky;
    background: #f5f6f7;
    bottom: 0;
    line-height: 55px;
    padding-left: 13px;
    padding-right: 13px;
    color: #2b2b2b;
">

    <span style="float:left">Campaign Total Budget: <span style="font-size: 18px;font-weight: bold;" id="total_campaign_amount"></span>
    </span>

    <span style="float:right; color:red" id="total_over_amount"> </span>
    </span>

    </div>
    {{--Recommended Influencers end--}}
</fieldset>
