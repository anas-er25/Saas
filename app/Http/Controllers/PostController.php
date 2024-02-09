<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Post::class);

        return Post::all();
    }

    public function store(Request $request)
    {
        $this->authorize('create', Post::class);

        return Post::create($request->validated());
    }

    public function show(Post $post)
    {
        $this->authorize('view', $post);

        return $post;
    }

    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);
        $post->update($request->validated());

        return $post;
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
    }

    public function search(Request $request)
    {
        $this->authorize('viewAny', Post::class);

        return Post::search($request->get('q'))->get();
    }
}
