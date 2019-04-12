<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.users.header')
</head>
<body>

    <!-- =========== Navigation Start ============ -->
    @include('partials.users.top_header')
    <!-- =========== Navigation End ============ -->
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            @yield('brand-content')
            @include('partials.users.footer')
        </div>

    </div>




<!-- Main JS Files -->
@include('partials.users.javascript')
</body>
</html>
