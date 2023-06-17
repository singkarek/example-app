@extends('layouts.main')

@section('isi')
    <h2 class="text-3xl font-semibold">Post Category : {{ $category }}</h2>
    @foreach ($posts as $post)
        <div class="container bg-red-50 rounded border border-danger mt-2">
            <article class="ml-2">
                <h2>
                    <a href="/blog/{{ $post->slug }}"
                        class="text-red-700 hover:text-red-800 text-xl">{{ $post->title }}</a>
                </h2>
                <h5 class="text-base">
                    By : <a href="/authors/{{ $post->user->id }}"
                        class="text-red-700 hover:text-red-800">{{ $post->user->name }}</a> in <a
                        href="/category/{{ $post->category->slug }}"
                        class="hover:text-red-800 text-red-700">{{ $post->category->name }}</a>
                    <h2>{{ $post->excerpt }}</h2>
            </article>
        </div>
    @endforeach
@endsection
