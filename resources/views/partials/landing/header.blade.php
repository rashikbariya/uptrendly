<meta charset="UTF-8">

<title>{{isset(Helpers::getSeoManagementData()->meta_title)?Helpers::getSeoManagementData()->meta_title:''}}</title>
<!-- Enable Zoom on Mobile Device -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="keywords" content="{{isset(Helpers::getSeoManagementData()->meta_keyword)?Helpers::getSeoManagementData()->meta_keyword:''}}">
<meta name="description" content="{{isset(Helpers::getSeoManagementData()->meta_description)?Helpers::getSeoManagementData()->meta_description:''}}">
<meta property="og:image" content="#" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="index,follow"/>

<meta name="google-site-verification" content="eQF_wkzvhKYn757NRtDGzu-1PMBkEEsflHZs3QMHu_s" />
<meta name="msvalidate.01" content="0FD73A58AA195EF7A0EC234993CBDA1E" />

<meta name="yandex-verification" content="f4f76edefaf924fe" />
<link rel="canonical" href="{{isset(Helpers::getGeneralSettingData()->site_name)?Helpers::getGeneralSettingData()->site_name:''}}" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{isset(Helpers::getSeoManagementData()->meta_title)?Helpers::getSeoManagementData()->meta_title:''}}" />

<meta property="og:description" content="{{isset(Helpers::getSeoManagementData()->meta_description)?Helpers::getSeoManagementData()->meta_description:''}}" />
<meta property="og:url" content="{{isset(Helpers::getGeneralSettingData()->site_name)?Helpers::getGeneralSettingData()->site_name:''}}" />
<meta property="og:site_name" content="Uptrendly" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="{{isset(Helpers::getSeoManagementData()->meta_description)?Helpers::getSeoManagementData()->meta_description:''}}" />
<meta name="twitter:title" content="{{isset(Helpers::getSeoManagementData()->meta_title)?Helpers::getSeoManagementData()->meta_title:''}}" />
 <!-- Favicon CSS -->
 <link rel="icon" type="image/png" sizes="32x32" href="{{isset(Helpers::getGeneralSettingData()->site_small_logo_path)?url('img/website/logo').'/'.Helpers::getGeneralSettingData()->site_small_logo_path:'error'}}">
 <!-- Fonts CSS -->
 <link href="{{url('frontend/fonts')}}/SFProDisplay.css" rel="stylesheet">
 <!-- Style CSS -->

 <link rel="stylesheet" href="{{url('frontend/css')}}/uptrendly-app.min.css">

<link rel="stylesheet" href="{{url('frontend/css')}}/main.min.css">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  

  
 <style>
     a{
         color: #585858;
     }
    ul li  a{
         color: #585858;
     }
     .login-one{
         background:url("frontend/img/bg06.png") 100% 100% no-repeat,url("frontend/img/bg07.png") 0 100% no-repeat #fff;
     }
 </style>
