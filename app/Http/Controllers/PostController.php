<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // show all blog posts
        //$posts = Post::all();
        $posts = Post::select('posts.*')
            ->orderBy('posts.created_at', 'desc')
            ->paginate(5);
        $posts->withPath('/blog');

        return view('blog.index', [
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        //show form to create a blog post
        return view('blog.create');
    }

    public function store(Request $request)
    {
        //store a new post
        $newPost = Post::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'content' => $request->input('content'),
        ]);
        return redirect('blog/' . $newPost->id);
    }

    public function show(Post $post)
    {
        //show a blog post
        return view('blog.show', [
            'post' => $post,
        ]);
    }


    public function edit(Post $post)
    {
        //show form to edit the post
        return view('blog.edit', [
            'post' => $post,
        ]);
    }


    public function update(Request $request, Post $post)
    {
        //save the edited post
        $post->update([
            'title' => $request->title,
            'content' => $request->input('content'),
        ]);
        return redirect('/blog/' . $post->id);
    }


    public function destroy(Post $post)
    {
        //delete a post
        $post->delete();
        return redirect('/blog');
    }
}
