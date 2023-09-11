@extends('layouts.dashboard-main')

@section('isi')
    @if (session()->has('success'))
        <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif
    <div class="container mx-auto">
        <div class="my-4">
            <h2 class="text-3xl mb-1">Posts Categories</h2>
            <a href="/dashboard/categories/create" class="p-2 bg-green-400 hover:bg-green-500 rounded-xl">Add Category</a>
        </div>
        <div class="grid grid-cols-4">
            @foreach ($categories as $category)
                <figure class="max-w-sm mr-4 transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="/blog?category={{ $category->slug }}">
                        <img class="rounded-t-lg" src="https://source.unsplash.com/400x400/?{{ $category->name }}"
                            alt="{{ $category->name }}">
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-10 bg-red-800/75">
                        <p>{{ $category->name }}</p>
                    </figcaption>
                    <div class="grid grid-cols-3">
                        <a href="/blog?category={{ $category->slug }}" class="text-center rounded-bl-xl text-white bg-green-500 hover:bg-green-600">Show</a>
                        <a href="#" class="text-center text-white bg-yellow-500 hover:bg-yellow-600">Edit</a>
                        <a href="#" class="text-center rounded-br-xl text-white bg-red-500 hover:bg-red-600">Delete</a>
                    </div>
                </figure>
            @endforeach
        </div>
    </div>
@endsection
