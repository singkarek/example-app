@extends('layouts.main')

@section('isi')
    <div class="container text-center max-w-screen-md mx-auto">
        <h2 class="text-3xl font-semibold">About Page</h2>
        <h4>This is about page. There is nothing in here, because no one care about this. But here's a picture of you for you to
            see.</h4>
        <img src="https://source.unsplash.com/1280x720/?monkey" alt="{{ $name }}"
            class="item-center mx-auto transition-all duration-700 mt-3 grayscale hover:grayscale-0">
    </div>
    <script src="js/script.js"></script>
@endsection
