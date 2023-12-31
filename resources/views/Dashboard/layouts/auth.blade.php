<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Demo @yeild('title')</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/feather.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/app-dark.css') }}" id="darkTheme">
</head>

<body class="dark ">
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">
            @yield('content')
        </div>
    </div>
    @yield('scripts')
</body>

</html>
</body>

</html>
