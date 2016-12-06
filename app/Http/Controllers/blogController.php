<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at')->get();
        return view('list',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('category')->get();
        return view('add_form',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->post = $request->post;        
        $post->status = $request->status;
        $post->user_id = Auth::user()->id;
        $post->save();
        $post->categories()->attach($request->categories);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view('blog');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $blog)
    {
        $post = $blog;
        $categories = Category::orderBy('category')->get();
        $post_categories = $post->categories->pluck('id')->all();
        return view('edit_form',compact('categories','post','post_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $blog)
    {
        $blog->title = $request->title;
        $blog->post = $request->post;
        $blog->status = $request->status;
        $blog->save();
        $blog->categories()->sync($request->categories);    
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function manage()
    {
        $posts = Post::orderBy('created_at')->get();
        return view('manage',compact('posts'));
    }
}
