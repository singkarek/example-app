@extends('layouts.main')

@section('isi')
<div class="grid grid-rows-none justify-items-center">
    <div class="columns-md">
        <form class="border-2 p-5 rounded-lg border-red-300" action="/register" method="POST">
          @csrf
            <h2 class="text-center text-3xl font-semibold mb-3">Register</h2>
            <div class="mb-6">
              <label for="name" class="block mb-2 text-sm font-medium text-grey-900 dark:text-white">Your name</label>
              <input type="text" name="name" class="bg-red-50 border border-red-300 text-grey-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="name" value="{{ old('name') }}" required>
              @error('name')
              <div class="invalid-feedback text-red-600">
                <small>{{ $message }}</small>
              </div>  
              @enderror
            </div>
            <div class="mb-6">
              <label for="username" class="block mb-2 text-sm font-medium text-grey-900 dark:text-white">Your username</label>
              <input type="text" name="username" class="bg-red-50 border border-red-300 text-grey-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="fireflies14" value="{{ old('username') }}" required>
              @error('username')
              <div class="invalid-feedback text-red-600">
                <small>{{ $message }}</small>
              </div>  
              @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-grey-900 dark:text-white">Your email</label>
                <input type="email" name="email" class="bg-red-50 border border-red-300 text-grey-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="joko@gmail.com" value="{{ old('email') }}" required>
                @error('email')
              <div class="invalid-feedback text-red-600">
                <small>{{ $message }}</small>
              </div>  
              @enderror
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-grey-900 dark:text-white">Your password</label>
                <input type="password" name="password" class="bg-red-50 border border-red-300 text-grey-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" value="{{ old('password') }}" required>
                @error('password')
              <div class="invalid-feedback text-red-600">
                <small>{{ $message }}</small>
              </div>  
              @enderror
              </div>
            <div class="flex items-start mb-6">
              <div class="flex items-center h-5">
                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-red-300 rounded bg-red-50 focus:ring-3 focus:ring-red-300 dark:bg-red-700 dark:border-red-600 dark:focus:ring-red-600 dark:ring-offset-red-800 dark:focus:ring-offset-red-800" required>
              </div>
              <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-red-700 hover:text-red-800 dark:text-red-500">terms and conditions</a></label>
            </div>
            <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Submit</button>
          </form>
          <small class="block text-center">Already have account? Login <a href="/login" class="text-red-700 hover:text-red-800">here.</a></small>
    </div>
</div>
@endsection