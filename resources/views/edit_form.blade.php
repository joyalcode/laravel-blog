@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
      <!-- Blog Post Content Column -->
      <div class="col-lg-8">
         <h3><a href="">Edit Blog</a></h3>
         <hr>           
         <form name="form1" method="POST" action="{{url('blog/'.$post->id)}}">
          <input name="_method" type="hidden" value="PATCH">
           {{ csrf_field() }}
           <div class="form-group">
             <label for="title">Blog title</label>
             <input type="text" name="title" value="{{$post->title}}" class="form-control" id="title">
           </div>
           <div class="form-group">
             <label for="post">Post</label>
             <textarea rows="6" name="post" class="form-control">{{$post->post}}</textarea>
           </div>
           <div class="form-group">
             <label for="categories">Categories</label>
             <select multiple class="form-control js-example-basic-multiple" name="categories[]" id="categories">
               @foreach($categories as $category_array)
               <option @if(in_array($category_array->id,$post_categories)) selected @endif value="{{$category_array->id}}">{{$category_array->category}}</option>   
               @endForeach
             </select>
           </div>      
           <div class="form-group">
             <label for="status">Status</label>
             <select class="form-control" id="status" name="status">
               <option value="1">Publish</option>   
               <option value="0">Draft</option>   
             </select>
           </div>                     
           <button type="submit" class="btn btn-primary">Submit</button>
         </form>         

      </div>
      <!-- Blog Sidebar Widgets Column -->
      <div class="col-md-4 right-sidebar">
         <!-- Blog Search Well -->
         <div class="well">
            <h4>Search</h4>
            <div class="input-group">
               <input type="text" class="form-control">
               <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">Search</button>
               </span>
            </div>
         </div>
         <div class="well">
            <h4>Categories</h4>
            <div class="row">
               <div class="col-lg-12">
                  <a href="" class="btn btn-default btn-xs categories">HTML</a>
                  <a href="" class="btn btn-default btn-xs categories">CSS</a>
                  <a href="" class="btn btn-default btn-xs categories">jQuery</a>
                  <a href="" class="btn btn-default btn-xs categories">Laravel</a>
                  <a href="" class="btn btn-default btn-xs categories">Javascript</a>
                  <a href="" class="btn btn-default btn-xs categories">SQL</a>
               </div>
            </div>
         </div>
         <div class="well">
            <h4>Recent Posts</h4>
            <ul class="list-group">
               <li class="list-group-item"> <a href="">sds sjdfk sdfk</a></li>
               <li class="list-group-item"> <a href="">sds sjdfk sdfk</a></li>
               <li class="list-group-item"> <a href="">sds sjdfk sdfk</a></li>
               <li class="list-group-item"> <a href="">sds sjdfk sdfk</a></li>
               <li class="list-group-item"> <a href="">sds sjdfk sdfk</a></li>
               <li class="list-group-item"> <a href="">sds sjdfk sdfk</a></li>
            </ul>
         </div>
         <div class="well">
            <h4>Recent Comments</h4>
            <ul class="list-group">
               <li class="list-group-item"> libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in  <a href=""><i>thomas issace<i></a> </li>
               <li class="list-group-item"> libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in  <a href=""><i>thomas issace<i></a> </li>
               <li class="list-group-item"> libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in  <a href=""><i>thomas issace<i></a> </li>
            </ul>
         </div>
      </div>
   </div>
</div>
</div>
@endsection