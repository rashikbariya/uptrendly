<!--/#app -->
<script src="{{asset('js/app.js')}}"></script>


{{--  <script src="{{ asset('js/noty.min.js') }}"></script>  --}}
<script src="{{url('backend')}}/assets/js/app.js"></script>




<!--
    Footer Part - Use Jquery anywhere at page. http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
