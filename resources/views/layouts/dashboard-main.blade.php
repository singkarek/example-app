<!doctype html>
<html lang="en">
<!-- Ikan apa yang abadi? I Kan't stop loving you <3 -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UrWeb | {{ auth()->user()->name }}</title>
    <link rel="icon" href="/favicon.png" type="image/png" sizes="32x32">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
        }
    </style>
</head>

<body>
    @include('partial.dashboard-navbar')
    @include('partial.sidebar')
    <div class="items-center justify-between mx-2 md:ml-60 sm:ml-60 pt-20 pb-2" id="content">
        @yield('isi')
    </div>
</body>

</html>
