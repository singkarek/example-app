@extends('layouts.main')

@section('isi')
    <div class="container mx-auto">
        <h2 class="text-3xl mb-4">Posts Categories</h2>
        <div class="flex">
            @foreach ($categories as $category)
                <figure class="max-w-sm mr-4 transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="/blog?category={{ $category->slug }}">
                        <img class="rounded-lg" src="https://source.unsplash.com/400x400/?{{ $category->name }}"
                            alt="{{ $category->name }}">
                    </a>
                    <figcaption class="relative px-4 text-lg text-white bottom-10 bg-red-800/75">
                        <p>{{ $category->name }}</p>
                    </figcaption>
                </figure>
            @endforeach
        </div>
    </div>
@endsection
