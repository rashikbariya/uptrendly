@extends('layouts.admin')
@section('admin-content')
<body class="light">
	<!-- Pre loader -->

	@include('partials/admin/pre-loader')

	<!-- pre loader end -->



		<!--Sidebar End-->

		<div class="page has-sidebar-left height-full">
			<header class="blue accent-3 relative nav-sticky">
				<div class="container-fluid text-white">
					<div class="row p-t-b-10 ">
						<div class="col">
							<h4>
								<i class="icon-box"></i>
								Dashboard
							</h4>
						</div>
					</div>

				</div>
			</header>

		</div>
		<!-- Right Sidebar -->

		<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
	immediately after the control sidebar -->
	<div class="control-sidebar-bg shadow white fixed"></div>

</body>
@stop()
