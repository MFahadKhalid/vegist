<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegist - Multipurpose eCommerce</title>
    @include('include.style')
</head>
<body class="home-1">
    @include('include.nav_index')
    @yield('content')
    @include('include.footer_index')
    @include('include.script')
</body>
</html>