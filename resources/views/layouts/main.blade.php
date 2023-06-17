<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UrWeb | {{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('partial.navbar')
    <div class="items-center justify-between max-w-screen-xl mx-auto mt-3 p-5">
        @yield('isi')
    </div>

</body>

</html>
