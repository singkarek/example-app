@extends('layouts.dashboard-main')

@section('isi')
    <div class="container px-3">
        <div class="grid grid-auto-rows justify-self-center">
            <div class="col-md-8">
                <h1 class="text-3xl font-semibold">{{ $posts->title }}</h1>
                <div class="flex flex-wrap items-center gap-2 my-4">
                    <a href="{{ url('/dashboard/posts') }}"
                        class="flex p-2 bg-green-400 hover:bg-green-500 rounded-md font-medium text-sm">
                        <svg class="w-4 h-4 my-auto mr-1 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 5H1m0 0 4 4M1 5l4-4" />
                        </svg>
                        Back
                    </a>
                    <a href="/dashboard/posts/{{ $posts->slug }}/edit"
                        class="flex p-2 bg-yellow-400 hover:bg-yellow-500 rounded-md font-medium text-sm">
                        <svg class="w-4 h-4 my-auto mr-1 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path
                                d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z" />
                            <path
                                d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z" />
                        </svg>
                        Edit
                    </a>
                    <form action="/dashboard/posts/{{ $posts->slug }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="flex p-2 bg-red-400 hover:bg-red-500 rounded-md font-medium text-sm"
                            onclick="return confirm('Are you sure?')">
                            <svg class="w-4 h-4 my-auto mr-1 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path
                                    d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                            </svg>
                            <span>Delete</span>
                        </button>
                    </form>
                </div>
                @if ($posts->image)
                <img src="{{ asset('storage/'. $posts->image) }}" alt="{{ $posts->category->name }}" class="w-full h-96">
                @else
                    <img src="https://source.unsplash.com/800x600/?{{ $posts->category->name }}" class="w-full h-96"
                        alt="{{ $posts->category->name }}">
                @endif
                <article class="my-4">
                    {!! $posts->body !!}
                </article>
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            </div>
        </div>
    </div>
@endsection
