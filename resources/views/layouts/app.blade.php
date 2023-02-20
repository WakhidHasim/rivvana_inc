<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('landing/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('landing/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    @include('includes.style')
</head>

<body>
    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')

    @include('includes.script')
</body>

</html>
