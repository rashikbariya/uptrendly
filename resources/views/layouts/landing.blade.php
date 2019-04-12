<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.landing.header')
</head>
<body>
	<div class="main-wrapper">
		<!-- =========== Navigation Start ============ -->
		@include('partials.landing.top_nav')
		<!-- =========== Navigation End ============ -->
		@yield('landing-content')
        @include('partials.landing.footer');

	</div>

	<!-- Main JS Files -->
	<script src="{{url('frontend/js')}}/app.min.js"></script>
	<!--  <script type="text/javascript">
		$("#slideshow > div:gt(0)").hide();

		setInterval(function() {
			$('#slideshow > div:first')
			.fadeOut(100)
			.next()
			.fadeIn(100)
			.end()
			.appendTo('#slideshow');
		},  3000);
	</script> -->

</body>
</html>
