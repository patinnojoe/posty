<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class postController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->user()->posts()->like);

        $posts = Post::paginate(20);
        return view('posts.index', [
            'posts' => $posts
        ]);
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'body' => ['required']
        ]);

        $request->user()->posts()->create([
            'body' => $request->body
        ]);

        return back();
    }
}
