<!doctype html>
<html lang="en">
    <!-- Ikan apa yang abadi? I Kan't stop loving you <3 -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UrWeb | {{ $title }}</title>
    <link rel="icon" href="/favicon.png" type="image/png" sizes="32x32">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('partial.navbar')
    <div class="items-center justify-between max-w-screen-xl mx-auto pt-20">
        @yield('isi')
    </div>
</body>

</html>
