<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\BlogCategory;
use Illuminate\Support\Str;


use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.blog.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post();
        $categories = BlogCategory::all();
        return view('admin.blog.posts.create', compact('post', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug("$request->title", '-');
        $data = $request->all();
        if ($request->hasfile('imagelink')) {
            $extension = $request->imagelink->getClientOriginalExtension();
            $nameFile = "$slug.{$extension}";
            $request->imagelink->storeAs('public/img/blog', $nameFile);
            $data['imagelink'] = $nameFile;
        } else {
            unset($data['imagelink']);
        }
        $data['slug'] = $slug;
        Post::create($data);
        return redirect()->route('posts.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $categories = BlogCategory::all();
        return view('admin.blog.posts.show', compact('post', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = BlogCategory::all();
        return view('admin.blog.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $slug = Str::slug("$request->title", '-');
        $data = $request->all();
        if ($request->hasfile('imagelink')) {
            $extension = $request->imagelink->getClientOriginalExtension();
            $nameFile = "$slug.{$extension}";
            $request->imagelink->storeAs('public/img/blog', $nameFile);
            $data['imagelink'] = $nameFile;
        } else {
            unset($data['imagelink']);
        }
        $data['slug'] = $slug;
        $post->update($data);
        return redirect()->route('posts.index')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', true);
    }
}
