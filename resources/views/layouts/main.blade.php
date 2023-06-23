<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UrWeb | {{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @auth
    @include('partial.navbar')
    @include('partial.sidebar')
    <div class="items-center justify-between mx-2 md:ml-60 sm:ml-60 pt-20">
        @yield('isi')
    </div>
    @else
    @include('partial.navbar')
    <div class="items-center justify-between max-w-screen-xl mx-auto pt-20">
        @yield('isi')
    </div>
    @endauth
    {{-- @include('partial.navbar')
    @include('partial.sidebar')
    <div class="items-center justify-between max-w-screen-xl mx-auto ml-60 pt-20">
        @yield('isi')
    </div> --}}

</body>

</html>
