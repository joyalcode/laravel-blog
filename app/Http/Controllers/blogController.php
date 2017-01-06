<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
use App\Comment;
use Auth;
use Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(5);
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


    public function test()
    {
        return 'hello world';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->validationRules(), $this->customErrorMessages());

        $post = new Post;
        $post->title = $request->title;
        $post->post = $request->post;        
        $post->status = $request->status;
        $post->user_id = Auth::user()->id;
        $post->save();
        $post->categories()->attach($request->categories);

        Session::flash('message', 'New post has been added successfully.');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $blog)
    {
       $comments = $blog->comments; 
       return view('view',compact('blog','comments'));
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
        if($post->user_id != Auth::user()->id)
        {
            return redirect('/');
        }
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
        $this->validate($request, $this->validationRules(), $this->customErrorMessages());

        $blog->title = $request->title;
        $blog->post = $request->post;
        $blog->status = $request->status;
        $blog->save();
        $blog->categories()->sync($request->categories);  
        Session::flash('message', 'Post has been updated successfully.');  
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
        $posts = Post::orderBy('created_at','desc')->where('user_id', Auth::user()->id)->paginate(10);
        return view('manage',compact('posts'));
    }

    public function category($id)
    {
        $category = Category::find($id);
        $page_title = "Posts of category '$category->category'";
        $posts = $category->posts()->orderBy('created_at','desc')->paginate(5);
        return view('list',compact('posts','page_title'));
    }    

    public function user($id)
    {
        $user = user::find($id);
        $page_title = "Posts by '$user->name'";
        $posts = $user->posts()->orderBy('created_at','desc')->paginate(5);
        return view('list',compact('posts','page_title'));
    }  

    public function comment(Request $request, Post $blog)
    {
        if($request->comment)
        {
            $comment = new Comment;
            $comment->comment = $request->comment;
            $comment->user_id = Auth::user()->id;
            $blog->comments()->save($comment);
            Session::flash('message', 'Member has been updated successfully.');
        }
        return back();
    }

    public function search(Request $request)
    {
        $sword = $request->q;
        $page_title = "Search '$request->q'";
        $posts = Post::where('title', 'like', '%' . $sword . '%')
                                                        ->orWhere('post', 'like', '%' . $sword . '%')
                                                        ->orderBy('created_at','desc')->paginate(5);                        
        return view('list',compact('posts','page_title','sword'));
    }


    public function validationRules()
    {
        return $rules = [
                'title' => 'required',
                'post' => 'required',
                'categories' => 'required',
            ];        
    }

    public function customErrorMessages()
    {
        return $messages = ['categories.required' => 'One or more categories required.'];
    }
}
