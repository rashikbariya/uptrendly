 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Uptrendly-tech">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('frontend/img')}}/fav.png">
    <meta name="csrf-token" content="{{csrf_token()}}" >
       <script>window.laravel={csrfToken:'{{csrf_token()}}'}</script>
    <title>Uptrendly-Admin</title>
    <link rel="stylesheet" href="{{url('backend')}}/assets/css/app.css">
   <link rel="" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.svg">
    <style>
        .error{

            color: #ff1d1d;


        }
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
        .disabled {
    pointer-events: none;
}
        /* Enter and leave animations can use different */
/* durations and timing functions.              */
.slide-fade-enter-active {
  transition: all .3s ease;
}
.slide-fade-leave-active {
  transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active below version 2.1.8 */ {
  transform: translateX(10px);
  opacity: 0;
}
.hide{
    display:none;
}
    </style>


    {{--  <link href="{{ asset('css/noty.css') }}" rel="stylesheet">  --}}
    <!-- Js -->
   
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>




