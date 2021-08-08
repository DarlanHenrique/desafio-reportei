<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\BlogCategory;
use App\Models\Galery;

use Request;


class SiteController extends Controller
{
    public function home(){
        $blogCategories = BlogCategory::all();
        $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
        $galeries = Galery::all();
        return view ('main', compact('blogCategories', 'posts', 'galeries'));
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        $lastposts = Post::orderBy('created_at', 'desc')->take(1)->get();
        $recents = Post::orderBy('created_at', 'desc')->take(3)->get();
        $categories = BlogCategory::all();
        return view('blog.main', compact('posts', 'categories', 'recents', 'lastposts'));
    }

    public function blogpost(Post $post, string $slug  = null)
    {
        if ($slug === null) {
            return redirect()->route('blogpost', [
                'post' => $post->id,
                'slug' => $post->slug
            ], 301);
        }
        $recents = Post::orderBy('created_at', 'desc')->take(3)->get();
        $categories = BlogCategory::all();
        $next = Post::where('id', '>', $post->id)->first();
        $lastposts = Post::orderBy('created_at', 'desc')->take(1)->get();
        if($next){
            $next = $next->id;
        }
        return view('blog.post', compact('categories', 'recents', 'post', 'lastposts'))->with('next', $next);
    }

    public function blogsearch(){
        $recents = Post::orderBy('created_at', 'desc')->take(3)->get();
        $categories = BlogCategory::all();
        $blog_search = Request::input('blog_search');
        $lastposts = Post::orderBy('created_at', 'desc')->take(1)->get();
        $post = Post::where('title','LIKE','%'.$blog_search.'%')->orWhere('text','LIKE','%'.$blog_search.'%')->orWhere('author','LIKE','%'.$blog_search.'%')->paginate(5);
        if(count($post) > 0)
            return view('blog.search', compact('categories', 'recents', 'lastposts'))->withDetails($post)->withQuery( $blog_search );
        else
            return view ('blog.search', compact('categories', 'recents', 'lastposts'))->withMessage('Não foi achado o termo. Voltar a pesquisa.');
    }

    public function blogcategory(BlogCategory $blogcategory, string $slug  = null){
        if ($slug === null) {
            return redirect()->route('blogcategory', [
                'blogcategory' => $blogcategory->id,
                'slug' => $blogcategory->slug
            ], 301);
        }
        $posts = Post::where('category_id', $blogcategory->id)->paginate(5);
        $recents = Post::orderBy('created_at', 'desc')->take(3)->get();
        $categories = BlogCategory::all();
        $lastposts = Post::orderBy('created_at', 'desc')->take(1)->get();
        return view('blog.category',  compact('categories', 'blogcategory', 'posts', 'recents', 'lastposts'));
    }
    public function blogmonth($month){
        $posts = Post::whereMonth('created_at', $month)->paginate(5);
        $recents = Post::orderBy('created_at', 'desc')->take(3)->get();
        $categories = BlogCategory::all();
        $lastposts = Post::orderBy('created_at', 'desc')->take(1)->get();
        return view ('blog.category',  compact('categories', 'month', 'posts', 'recents','lastposts')); 
    }
}