<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Category;
use App\Post;
use App\Comment;

class SidebarComposer
{
   /**
   * Bind data to the view.
   *
   * @param  View  $view
   * @return void
   */

   public function compose(View $view)
   {
   	$posts = Post::orderBy('created_at','desc')->limit(5)->get();
    	$categories = Category::orderBy('category')->get();
      $comments = Comment::orderBy('created_at','desc')->limit(5)->get();
   	$view->with('categories', $categories)->with('posts',$posts)->with('comments',$comments);
   }
}