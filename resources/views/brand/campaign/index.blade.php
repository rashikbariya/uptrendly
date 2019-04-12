@extends('layouts.brand')

@section('brand-content')
    <style>
     html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:2em;margin:0.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-appearance:textfield;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}

    </style>
    <div class="content-wrapper">

        {{--<a class="btn btn-success" style="float:  right;margin-bottom: 10px; font-size: 14px; color: white; font-weight: 500">Add New Campaign</a>--}}
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">


                    <div class="padded-page ">
                            <ul class="page-menu-bar menu-bar-full-width" style="margin-bottom:15px;padding-left: 0px;">
                            <li>
                              <a href="{{url('brand/campaign-list')}}" class="no-scroll autolink-ignore active">
                                Campaign List
                              </a>
                            </li>
                            
                            <li>
                              <a href="{{url('brand/campaign/addnew')}}" class="no-scroll">
                                Create a new campaign
                              </a>
                            </li>
                            
                          </ul>
                          
                          <div class="page-content">
                            <div class="scrunchdotcom-slide">
                              <div class="text-box">
                                <h1 style="color: #2b2b2b;">Create and manage your campaigns</h1>
                                <a href="{{url('brand/campaign/addnew')}}" class="a-pricing-btn">Create  a new campaign</a>
                              </div>
                              <div class="slide-diagram slide-diagram-content-items">
                                <img class="slide-diagram-content" src="https://dmncg4ynwsvm8.cloudfront.net/static/img/campaigns-content-01@2x.jpg?v=d1aa3">
                                <img class="slide-diagram-content" src="https://dmncg4ynwsvm8.cloudfront.net/static/img/campaigns-content-02@2x.jpg?v=30be8">
                                <img class="slide-diagram-content" src="https://dmncg4ynwsvm8.cloudfront.net/static/img/campaigns-content-03@2x.jpg?v=d6836">
                                <div class="tooltip open"><div class="tooltip-content"><i class="prefix-icon icon-heart"></i>1.2k <i class="prefix-icon icon-comment"></i>19</div></div>
                                <div class="tooltip open"><div class="tooltip-content"><i class="prefix-icon icon-heart"></i>1.2k <i class="prefix-icon icon-comment"></i>84</div></div>
                                <div class="tooltip open"><div class="tooltip-content"><i class="prefix-icon icon-heart"></i>5k <i class="prefix-icon icon-eye"></i>195k</div></div>
                              </div>
                            </div>
                          
                          </div>
                          </div>

            </div>
        </div>


    </div>



@stop


