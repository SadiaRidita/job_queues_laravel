<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Jobs\ProcessPost;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description'); // Add this line
        $post->save();

        // Dispatch the job to process the post in the background
        ProcessPost::dispatch($post);

        return redirect('/posts');
    }
}
