<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    public function index(){
        $post = Post::where('user_id', auth()->user()->id)->get();
        return view('dashboard.posts.index', [
            'title' => 'Dashboard',
            'posts' => $post
        ]);
    }
    public function show(Post $post){
        return view('dashboard.posts.show', [
            'posts' => $post
        ]);
    }

    public function create(){
        $category = Category::all();
        return view ('dashboard.posts.create', [
            'categories' => $category
        ]);
    }

    public function store(Request $request){
        return $request;
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
