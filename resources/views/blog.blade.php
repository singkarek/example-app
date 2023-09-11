@extends('layouts.main')

@section('isi')
    <h1 class="text-3xl font-semibold text-center">{{ $title }}</h1>
    <div class="grid grid-rows-none justify-items-center">
        <div class="columns-md">
            <!--method=get -->
            <form action="/blog" class="mt-4">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('user'))
                    <input type="hidden" name="user" value="{{ request('user') }}">
                @endif
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" name="search"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                        placeholder="Search..." value="{{ request('search') }}" required>
                    <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div
            class="text-center max-w-full mt-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                @if ($posts[0]->image)
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                        class="rounded mx-auto mt-4">
                @else
                    <img src="https://source.unsplash.com/800x600/?{{ $posts[0]->category->name }}"
                        class="rounded mx-auto mt-4" alt="{{ $posts[0]->category->name }}">
                @endif
                {{-- <img class="rounded mx-auto mt-4"
                    src="https://source.unsplash.com/1200x600/?{{ $posts[0]->category->name }}"
                    alt="{{ $posts[0]->category->name }}" /> --}}
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="font-bold text-2xl hover:text-red-800">
                        <a href="/blog/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a>
                    </h5>
                    <h5 class="text-sm mb-2 text-gray-600">
                        By : <a href="/blog?user={{ $posts[0]->user->username }}"
                            class="text-red-700 hover:text-red-800">{{ $posts[0]->user->name }}</a> in <a
                            href="/blog?category={{ $posts[0]->category->slug }}"
                            class="hover:text-red-800 text-red-700">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $posts[0]->excerpt }}</p>
                <a href="/blog/{{ $posts[0]->slug }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    Read more
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>


        <div class="container mx-auto">
            <div class="grid grid-rows-none justify-items-center">
                <div class="grid grid-cols-3">
                    @foreach ($posts->skip(1) as $post)
                        <div
                            class="mt-4 mx-2 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div>
                                <a href="/blog?category={{ $post->category->slug }}"
                                    class="absolute bg-red-800/75 text-white p-1 rounded-tl-lg">{{ $post->category->name }}</a>
                                <a href="#">
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}"
                                            alt="{{ $post->category->name }}" class="rounded-t-lg">
                                    @else
                                        <img src="https://source.unsplash.com/800x600/?{{ $post->category->name }}"
                                            class="rounded-t-lg" alt="{{ $post->category->name }}">
                                    @endif
                                    {{-- <img class="rounded-t-lg"
                                        src="https://source.unsplash.com/400x200/?{{ $post->category->name }}"
                                        alt="{{ $post->category->name }}" /> --}}
                                </a>
                            </div>
                            <div class="p-5">
                                <a href="/blog/{{ $post->slug }}">
                                    <h5
                                        class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-red-800">
                                        {{ $post->title }}</h5>
                                </a>
                                <h5 class="text-sm text-gray-600">
                                    By : <a href="/blog?user={{ $post->user->username }}"
                                        class="text-red-700 hover:text-red-800">{{ $post->user->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}
                                </h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->excerpt }}</p>
                                <a href="/blog/{{ $post->slug }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                    Read more
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <p class="text-center text-2xl">No posts yet.</p>
    @endif
    <div class="mt-2 mb-2">
        {{ $posts->links() }}
    </div>
@endsection
