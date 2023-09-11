@extends('layouts.dashboard-main')

@section('isi')
    <h1 class="text-center text-2xl">Edit Post</h1>
    <div class="w-full">
        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium">Title</label>
                <input type="text" id="title" name="title"
                    class="bg-gray-50 border text-sm rounded-lg block w-full p-2.5" value="{{ old('title', $post->title) }}"
                    placeholder="title" autofocus>
                @error('title')
                    <div class="invalid-feedback text-red-600">
                        <small>{{ $message }}</small>
                    </div>
                @enderror
            </div>
            <div class="mb-6">
                <label for="slug" class="block text-sm font-medium">Slug</label>
                <input type="text" id="slug" name="slug"
                    class="bg-gray-50 border text-sm rounded-lg block w-full p-2.5" value="{{ old('slug', $post->slug) }}"
                    readonly placeholder="slug">
                @error('title')
                    <div class="invalid-feedback text-red-600">
                        <small>{{ $message }}</small>
                    </div>
                @enderror
            </div>
            <div class="mb-6">
                <label for="category" class="block text-sm font-medium">Category</label>
                <select id="category" name="category_id" value="{{ old('category_id') }}"
                    class="text-sm rounded-lg block w-full p-2.5">
                    <option selected>Choose Category</option>
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}" @if ($post->category_id === $category->id) selected @endif>
                                {{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium" for="image">Post Image</label>
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-preview mb-6 max-w-sm">
                @else
                    <img class="img-preview mb-6 max-w-sm">
                @endif
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                    id="image" type="file" name="image" onchange="imagePreview()">
                @error('image')
                    <div class="invalid-feedback text-red-600">
                        <small>{{ $message }}</small>
                    </div>
                @enderror
            </div>
            <div class="mb-6">
                <label for="body" class="block text-sm font-medium">Body</label>
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <div class="invalid-feedback text-red-600">
                        <small>{{ $message }}</small>
                    </div>
                @enderror
            </div>
    </div>
    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-centerdark:focus:ring-blue-800">Submit</button>
    </form>
    <a href="/dashboard/posts"
        class=" bg-red-700 hover:bg-red-800 focus:outline-none text-white px-5 font-medium text-sm py-2.5 rounded-lg absolute right-2">Back</a>
    </div>
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        function imagePreview() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
