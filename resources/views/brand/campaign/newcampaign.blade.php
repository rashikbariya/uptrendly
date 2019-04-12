@extends('layouts.brand')

@section('brand-content')
    <style>

        .wizard.vertical > .content {
            height: 500px;
            left: 0px;
            overflow: auto;
            background-color: white;
            border: 1px solid #ccc;
        }

        .content .clearfix {
            overflow: auto;
        }

        .form-check-label {
            padding-left: 0px;
            font-size: 0px;

        }

        .form-check .form-check-label {
            margin-left: 0px;
        }

        .icon-eye {
            color: #2b2b2b;
            font-size: 18px;

        }

        .dark-green-badge {
            border-radius: 50%;
            width: 18px;
            height: 18px;
            background-color: #11b732;
        }

        .light-green-badge {
            border-radius: 50%;
            width: 18px;
            height: 18px;
          
        }

        .dark-yellow-badge {
            border-radius: 50%;
            width: 18px;
            height: 18px;
            background-color: darkorange;
        }

        .light-yellow-badge {
            border-radius: 50%;
            width: 18px;
            height: 18px;
            background-color: #fff8f5;
        }

        .acc {
            list-style-type: none;

        }

        .acc li {
            display: inline-block;
        }
        .form-check .form-check-label input[type="checkbox"] + .input-helper:before {
    border: solid #2b2b2b;
}
.form-check .form-check-label input[type="checkbox"] + .input-helper:before {
    border-radius: 50%;
}
.form-check .form-check-label input[type="checkbox"]:checked + .input-helper:after {
    transform: scale(1.2);
    border-radius:0;
}


    </style>

    <div class="content-wrapper">

            <div class="padded-page ">
                    <ul class="page-menu-bar menu-bar-full-width" style="margin-bottom:15px;padding-left: 0px;">
                    <li>
                      <a href="{{url('brand/campaign-list')}}" class="no-scroll">
                        Campaign List
                      </a>
                    </li>
                    
                    <li>
                      <a href="{{url('brand/campaign/addnew')}}" class="no-scroll autolink-ignore active">
                        Create a new campaign
                      </a>
                    </li>
                    
                  </ul>
                  
                  <div class="page-content" >
                   
                            <form id="example-advanced-form" action="#">
                
                                   {{--@include('brand.campaign.newcampaign.channelselection')--}}
                                    {{--@include('brand.campaign.newcampaign.productdetails')--}}
                                    {{--@include('brand.campaign.newcampaign.campaigndetails')--}}
                                    {{--@include('brand.campaign.newcampaign.audiencebudget')--}}
                                    @include('brand.campaign.newcampaign.rec_influencer')
                                    @include('brand.campaign.newcampaign.reviewsubmit')
                        
                                </form>
                    
                       
                  </div>
                  </div>


       
    </div>
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script>
    var ChannelSelection = '';
    var videotypes = '';
    var tar_aud_gender= '';
    var tar_aud_age = '';
    var total_campaign_amount = 0;
    var selected_inf_amount = 0;

    // $(function(){
    //    for(i=1;i<$('#inf_re tr').length;i++){
    //     var currentRowtable=$("#tr_"+i); 
    //      var rowcell=currentRowtable.find("td:eq(3)").text();
    //     if( $('#tr_check_'+ i).is(":checked")){
    //         selected_inf_amount = parseInt(selected_inf_amount+parseInt(rowcell));
    //     }
    //     if(selected_inf_amount<=parseInt($('#campaign_budget').val()))
    //         {
    //             $('#total_over_amount').html('').show();
                
    //             $('#total_campaign_amount').html('Nrs '+(selected_inf_amount)+'/'+$('#campaign_budget').val()).show();
    //         }
    //         else{
    //             $('#total_campaign_amount').html('<span style="color:red">Nrs ' + (selected_inf_amount)+'</span>/'+$('#campaign_budget').val()).show();
    //             $('#total_over_amount').html('Over Budget Amount: <span style="font-size: 18px;font-weight: bold;">Nrs '+(selected_inf_amount-parseInt($('#campaign_budget').val()))+'</span>').show();
    //         }
    //    }
    // });

 

    function youtubeCheckbox(){
        if($("#youtube-checkbox").is(':checked')){
            $('#afterChecedyoutube').show();
    
        }else{
            $('#afterChecedyoutube').hide();
        }
    }
    function deselectAllOptionFromAge(){
        if($('#tar_aud_gender_1').is(':checked')){
            $('#tar_aud_gender_1').prop('checked',false);
        }
    }

    function deselectAllAgeOption(){
        for(i=2;i<9;i++){
            if($('#tar_aud_gender_'+i).is(':checked')){
            $('#tar_aud_gender_'+i).prop('checked',false);
        }
        }
    }
    function getCheckedValuefromtr(id){
        var currentRow=$("#tr_"+id); 
         var a=currentRow.find("td:eq(3)").text();
       if( $('#tr_check_'+ id).is(":checked")){
            selected_inf_amount = parseInt(selected_inf_amount+parseInt(a));
        }
        else{
            selected_inf_amount = parseInt(selected_inf_amount - parseInt(a));
           
        }
         
            if(selected_inf_amount<=parseInt($('#campaign_budget').val()))
            {
                $('#total_over_amount').html('').show();
                
                $('#total_campaign_amount').html('Nrs '+(selected_inf_amount)+'/'+$('#campaign_budget').val()).show();
            }
            else{
                $('#total_campaign_amount').html('<span style="color:red">Nrs ' + (selected_inf_amount)+'</span>/'+$('#campaign_budget').val()).show();
                $('#total_over_amount').html('Over Budget Amount: <span style="font-size: 18px;font-weight: bold;">Nrs '+(selected_inf_amount-parseInt($('#campaign_budget').val()))+'</span>').show();
            }
        console.log(selected_inf_amount);
        
    }

    </script>

@stop






