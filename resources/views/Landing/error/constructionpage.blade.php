@extends('layouts.landing')

 @section('landing-content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>
        
        body {
            background-color: rgb(251,252,250);
            }
    
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 130px;
            width: 70%;
            height: auto;
        }
        .middle {
            text-align:center; font-weight: 400; letter-spacing: 6px;
        }
        .setting {
            height: 30px;
            width: 30px;
        }
        .button {
            text-align: center;
            margin:0 auto;
        }
        a { 
            color: #65cadb;
        }
        .clip{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50px;
            height: 50px;
        }
        
    </style>
</head>
<body>  
   
        <img src="img/influencer.png" alt="influencer" class="center">
        <h2 class="middle">Under Maintenance</h2>
        <img  class="setting clip" src="img/underConstruction.png" alt="construction">
     <div class="button">
        <a href="{{url('/')}}">&lt; &lt; &lt; skip &gt; &gt; &gt;</a>
        </div>
        
  
   
    
</body>
</html>
@stop