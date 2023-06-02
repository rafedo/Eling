<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eling | Dashboard</title>
    <link rel="icon" href="{{ asset('/assets/images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('/css/dashboard/main.css') }}" />

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="/css/dashboard/trix.css">
    <script type="text/javascript" src="/js/dashboard/trix.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        @include('dashboard.layouts.navigation')

        <div class="main">
            {{-- @include('dashboard.layouts.topbar') --}}
            <hr>
            @yield('content')
        </div>
    </div>

    <!-- IONICONS CDN -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="/js/dashboard/main.js"></script>
</body>

</html>
