<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.users.header')
</head>
<body>
<div class="main-wrapper home-4">
    <!-- =========== Navigation Start ============ -->
@include('partials.users.influencer_top_header')
<!-- =========== Navigation End ============ -->
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            @yield('influencer-content')
            @include('partials.users.footer')
        </div>

    </div>


</div>

<!-- Main JS Files -->
@include('partials.users.javascript')
</body>
</html>
