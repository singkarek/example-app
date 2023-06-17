@extends('layouts.main')

@section('isi')
    <div class="container">
        <div class="grid grid-auto-rows justify-self-center">
            <div class="col-md-8">
                <h1 class="text-3xl font-semibold mb-2">{{ $posts->title }}</h1>
                <p class="text-xl mb-4">By : <a href="/blog?username={{ $posts->user->username }}"
                        class="text-red-700 hover:text-red-800">{{ $posts->user->name }}</a> in <a
                        href="/blog?category={{ $posts->category->slug }}"
                        class="hover:text-red-800 text-red-700">{{ $posts->category->name }}</a></p>
                <img src="https://source.unsplash.com/1200x600/?{{ $posts->category->name }}"
                    alt="{{ $posts->category->name }}" class="img-fluid">
                <article class="my-4">
                    {!! $posts->body !!}
                </article>
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            </div>
            <a href="/blog" class="text-red-700 hover:text-red-800">Back to Blog</a>
        </div>
    </div>
@endsection
