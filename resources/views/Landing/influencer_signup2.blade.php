@extends('layouts.landing')
@section('landing-content')

<div class="login-one">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="login-table reveal" data-sr-id="10"
                         style=" visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; transition: transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; ">
                        <div class="login-header">
                            <h4>Influencer Sign Up phase 2</h4><hr/>
                            
                        </div>


                        <form method="POST">
                            @csrf()
                            <div>
                                  <h3> </span><span class="w-circle">
                                    <i class="ti-check" data-toggle="tooltip" data-placement="bottom" data-original-title="Audience & Budget"></i></span> <span class="title">Audience & Budget</span>
                            </h3>
                            <fieldset>
                                <h5  >Target Audience</h5>
                                <span >Define the audience you’d like to connect with by choosing specific audience demographics below.</span>
                                <hr/>
                                {{--Audience Gender start--}}
                                <label style="color: #2b2b2b;">Audience Gender <i style="font-size: 10px;" class="icon-question"></i>*</label>
                                <ul style="list-style-type: none">
                                    <li style="margin-right: 40px;display:  inline-block;">
                                        <div class="form-check" class="">
                                            <label style="margin-left:25px" class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1"
                                                    value="" checked>
                                                All
                                            </label>

                                        </div>
                                    </li>
                                    <li style="margin-right: 40px;display:  inline-block;">
                                        <div class="form-check">
                                            <label style="margin-left:25px" class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2"
                                                    value="option2" >
                                                Female </label>

                                        </div>
                                    </li>
                                    <li style="margin-right: 40px;display:  inline-block;">
                                        <div class="form-check">
                                            <label style="margin-left:25px" class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3"
                                                    value="option3">
                                                Male </label>

                                        </div>
                                    </li>
                                </ul>
                                {{--Audience Gender end--}}


                                {{--Audience Age start--}}
                                <label  style="color: #2b2b2b;">Audience Age <i style="font-size: 10px;"></i>*</label>
                               <table>
                                <ul style="list-style-type: none"> 
                                <tr><td>
                                    <li style="margin-right: 40px;display:  inline-block;">
                                        <div class="form-check">
                                            <label style="margin-left:25px" class="form-check-label">
                                                <input type="checkbox" class="form-check-input" checked>
                                                All
                                            </label>

                                        </div>
                                    </li></td>
                                   <td> <li style="margin-right: 40px;display:  inline-block;">
                                        <div class="form-check">
                                            <label style="margin-left:25px" class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                Below 10 </label>

                                        </div>
                                    </li></td>
                                   <td> <li style="margin-right: 40px;display:  inline-block;">
                                        <div class="form-check">
                                            <label style="margin-left:25px" class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                11 - 17 </label>

                                        </div>
                                    </li></td>
                                    <tr><td>
                                    <li style="margin-right: 40px;display:  inline-block;">
                                        <div class="form-check">
                                            <label style="margin-left:25px" class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                18 - 24 </label>

                                        </div>
                                    </li></td><td>
                                    <li style="margin-right: 40px;display:  inline-block;">
                                        <div class="form-check">
                                            <label style="margin-left:25px" class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                25 - 34 </label>

                                        </div>
                                    </li></td>
                                   <td> <li style="margin-right: 40px;display:  inline-block;">
                                        <div class="form-check">
                                            <label style="margin-left:25px" class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                35 - 44 </label>

                                        </div>
                                    </li></td>
                                    <tr><td>
                                    <li style="margin-right: 40px;display:  inline-block;">
                                        <div class="form-check">
                                            <label style="margin-left:25px" class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                45 - 54 </label>

                                        </div>
                                    </li></td><td>
                                    <li style="margin-right: 40px;display:  inline-block;">
                                        <div class="form-check">
                                            <label style="margin-left:25px" class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                55 - 64 </label>

                                        </div>
                                    </li></td><td>
                                    <li style="margin-right: 40px;display:  inline-block;">
                                        <div class="form-check">
                                            <label style="margin-left:25px" class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                65 + </label>

                                        </div>
                                    </li></td>
                                </ul>
                                </table><br/>
                                {{--Audience Age--}}

                                <input  style="float:right; width: 5em; height: 2.4em; line-height: 2em;" type="submit" class="db-btn db-btn__blue db-btn__type-sm" value="Sign Up" >

                            <br/>
                            </fieldset>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
