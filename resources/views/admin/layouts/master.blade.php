<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- tabler Icon CSS files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/3.21.0/tabler-icons.min.css" />
    <!-- CSS files -->
    <link href="{{ asset('admin/assets/dist/css/tabler.min.css?1692870487') }}" rel="stylesheet" />
    {{-- <link href="{{ asset('admin/assets/dist/css/demo.min.css?1692870487') }}" rel="stylesheet" /> --}}

    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
    @stack('admin-css')
</head>

<body>
    <script src="{{ asset('admin/assets/dist/js/demo-theme.min.js?1692870487') }}"></script>
    <div class="page">
        <!-- Sidebar Start -->
        @include('admin.layouts.sidebar')
        <!-- Sidebar End -->
        <!-- Navbar Start -->
        @include('admin.layouts.header')
        <!-- Navbar End -->
        <div class="page-wrapper">
            <!-- Main Contents Start -->
            @yield('admin-content')
            <!-- Main Contents End -->

            <!-- Footer Start -->
            @include('admin.layouts.footer')
            <!-- Footer End -->
        </div>
    </div>

    <!-- Libs JS -->
    <script src="{{ asset('admin/assets/dist/libs/tinymce/tinymce.min.js') }}" defer></script>
    <!-- Tabler Core -->
    <script src="{{ asset('admin/assets/dist/js/tabler.min.js?1692870487') }}" defer></script>
    {{-- <script src="{{ asset('admin/assets/dist/js/demo.min.js?1692870487') }}" defer></script> --}}
</body>

</html>
