<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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
}
