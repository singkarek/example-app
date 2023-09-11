<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    public function index()
    {
        $post = Post::where('user_id', auth()->user()->id)->get();
        return view('dashboard.posts.index', [
            'title' => 'Dashboard',
            'posts' => $post
        ]);
    }
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'posts' => $post
        ]);
    }

    public function create()
    {
        $category = Category::all();
        return view('dashboard.posts.create', [
            'categories' => $category
        ]);
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'image|file|max:1024', //file supaya max nya ukuran
            'category_id' => 'required',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validation['image'] = $request->file('image')->store('post-images');
        }

        $validation['user_id'] = auth()->user()->id;
        $validation['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::create($validation);

        return redirect('/dashboard/posts')->with('success', 'Your post has been posted successfully!');
    }

    public function edit(Post $post)
    {
        $category = Category::all();
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => $category
        ]);
    }

    public function update(Request $request, Post $post)
    {

        $validation = $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validation['image'] = $request->file('image')->store('post-images');
        }
        if ($request->slug == $post->slug) {
            $validation['slug'] = $post->slug;
        }

        $validation['user_id'] = auth()->user()->id;
        $validation['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $post->id)
            ->update($validation);

        return redirect('/dashboard/posts')->with('success', 'Your post has been updated successfully!');
    }

    public function destroy(Post $post)
    {
        if($post->image){
            Storage::delete($post->image);
        }
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Your post has been deleted successfully!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
