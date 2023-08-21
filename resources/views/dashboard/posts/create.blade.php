@extends('layouts.dashboard-main')

@section('isi')
    <h1 class="text-center text-2xl">Create New Post</h1>
    <div class="w-full">
        <form action="/dashboard/posts" method="POST">
            @csrf
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium">Title</label>
                <input type="text" id="title" name="title"
                    class="bg-gray-50 border text-sm rounded-lg block w-full p-2.5" value="{{ old('title') }}" placeholder="title" required>
            </div>
            <div class="mb-6">
                <label for="slug" class="block text-sm font-medium">Slug</label>
                <input type="text" id="slug" name="slug"
                    class="bg-gray-50 border text-sm rounded-lg block w-full p-2.5" value="{{ old('slug') }}" disabled placeholder="slug" required>
            </div>
            <div class="mb-6">
                <label for="category" class="block text-sm font-medium">Category</label>
                <select id="category" name="category" value="{{ old('category') }}" class="text-sm rounded-lg block w-full p-2.5">
                    <option selected>Choose Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-6">
                <label for="body" class="block text-sm font-medium">Body</label>
                <input id="body" type="hidden" name="body">
                <trix-editor input="body" value="{{ old('body') }}"></trix-editor>
            </div>
    </div>
    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
    </div>
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        });
    </script>
@endsection
