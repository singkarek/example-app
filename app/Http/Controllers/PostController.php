<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::latest(); //latest -> urutkan dari yg paling baru
        // if (request('search')) {
        //     return $posts->where('title', 'like', '%' . request('search') . '%')
        //         ->orWhere('body', 'like', '%' . request('search') . '%');
        // }
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('user')){
            $user = User::firstWhere('username', request('user'));
            $title = ' by ' . $user->name;
        }

        return view('blog', [
            "title" => "All Blog" . $title,
            "active" => "blog",
            "posts" => Post::filter(request(['search', 'category', 'user']))->latest()->paginate(4)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Post",
            "active" => "blog",
            "posts" => $post
        ]);
    }
}
