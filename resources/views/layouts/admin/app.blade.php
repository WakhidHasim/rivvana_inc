<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>@yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('admin/assets/img/icon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('admin/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: [`{{ asset('admin/assets/css/fonts.min.css') }}`]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    @include('layouts.admin.style')
</head>

<body>
    <div class="wrapper">
        @include('layouts.admin.navbar')

        @include('layouts.admin.sidebar')

        <div class="main-panel">
            @yield('content')

            @include('layouts.admin.footer')
        </div>
    </div>
    @include('layouts.admin.script')
</body>

</html>
