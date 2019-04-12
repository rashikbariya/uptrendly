<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.header')
</head>
<body>
	<div class="main-wrapper home-4">
		<!-- =========== Navigation Start ============ -->
		@include('partials/admin/side-nav')

		<div class="has-sidebar-left">
			<div class="pos-f-t">
				<div class="collapse" id="navbarToggleExternalContent">
					<div class="bg-dark pt-2 pb-2 pl-4 pr-2">
						<div class="search-bar">
							<input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
							placeholder="start typing...">
						</div>
						<a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
						aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
					</div>
				</div>
			</div>
			<div class="sticky">
				<div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
					<div class="relative">
						<a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
							<i></i>
						</a>
					</div>
					<!--Top Menu Start -->
					@include('partials.admin.top-nav')
					<!-- top menu end -->
				</div>
			</div>
		</div>
		<!-- =========== Navigation End ============ -->
		@yield('admin-content')

	</div>

	<!-- Main JS Files -->
    @include('partials.jscript')
</body>
</html>
