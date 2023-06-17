@extends('layouts.main')

@section('isi')
    <h2 class="text-3xl mb-4">Posts Categories</h2>
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="columns-sm">
                @foreach ($categories as $category)
                    <figure
                        class="max-w-sm transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
                        <a href="/blog?category={{ $category->slug }}">
                            <img class="rounded-lg" src="https://source.unsplash.com/400x400/?{{ $category->name }}"
                                alt="{{ $category->name }}">
                        </a>
                        <figcaption class="absolute px-4 text-lg text-white bottom-6 bg-red-800/75">
                            <p>{{ $category->name }}</p>
                        </figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
    </div>
@endsection
