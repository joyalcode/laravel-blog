@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
      <!-- Blog Post Content Column -->
      <div class="col-lg-8">
         <h3><a href="">{{$blog->title}}</a></h3>
         <p><span class="glyphicon glyphicon-time"></span> <i>Posted on August 24, 2013 by <a href="#">Start Bootstrap</a></i></p>
         {{$blog->post}}
         <br>
         
            @foreach($blog->categories as $category_array)
            <a href="{{url('blog/category/'.$category_array->id)}}" class="btn btn-default btn-xs">{{$category_array->category}}</a>
            @endforeach
         <hr>
         <div class="well">
            <h4>Leave a Comment:</h4>
            <form role="form">
               <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
         <div class="well">
            <h4>Leave a Comment:</h4>
            <form role="form">
               <div class="form-group">
                  <textarea class="form-control" disabled rows="3" placeholder="Please login or register to post commenets."></textarea>
               </div>
               <a href="" class="btn btn-primary">Login</a>
               <a href="" class="btn btn-primary">Register</a>
            </form>
         </div>

         <div class="media">
            <div class="media-body">
               <h4 class="media-heading">Start Bootstrap
               <small>August 25, 2014 at 9:30 PM</small>
               </h4>
               Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
         </div>


         <div class="media">
            <div class="media-body">
               <h4 class="media-heading">Start Bootstrap
               <small>August 25, 2014 at 9:30 PM</small>
               </h4>
               Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
         </div>

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