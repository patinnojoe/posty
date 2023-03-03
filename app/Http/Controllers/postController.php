<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class postController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth'])->only('store', 'destroy');
    }
    public function index(Request $request)
    {
        // dd($request->user()->posts()->like);

        $posts = Post::latest()->with(['user', 'likes'])->paginate(20);
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view(
            'posts.show',
            [
                'post' => $post
            ]
        );
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
    public function destroy(Post $post, Request $request)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return back();
    }
}
?>