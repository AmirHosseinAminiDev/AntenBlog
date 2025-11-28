<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>پنل مدیریت - وبلاگ آنتن</title>

    <link rel="stylesheet" href="{{ asset('admin/assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/boxicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    @stack('css')

</head>
<body class="nav-fixed">

@include('admin.layouts.topNav')

<div id="layoutSidenav">
    @include('admin.layouts.sidebarNav')
    <div id="layoutSidenav_content">
        @yield('content')
        @include('admin.layouts.footer')
    </div>
</div>


<script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}" ></script>
<script src="{{ asset('admin/assets/js/scripts.js') }}"></script>
<script src="{{ asset('admin/assets/js/jquery.js') }}"></script>
@stack('js')

</body>

</html>
