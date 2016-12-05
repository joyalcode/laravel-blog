@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
      <!-- Blog Post Content Column -->
      <div class="col-lg-8">

         @if(Session::has('message'))
         <p class="alert alert-success">{{ Session::get('message') }}</p>
         @endif

         <h3><a href="">Blog Post Title</a></h3>
         <p><span class="glyphicon glyphicon-time"></span> <i>Posted on August 24, 2013 by <a href="#">Start Bootstrap</a></i></p>
         <!-- <hr> -->
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
         <a href="" class="btn btn-default btn-xs">HTML</a>
         <a href="" class="btn btn-default btn-xs">CSS</a>
         <a href="" class="btn btn-default btn-xs">jQuery</a>
         <hr>
         <h3><a href="">Blog Post Title</a></h3>
         <span class="glyphicon glyphicon-time"></span><i> Posted on August 24, 2013 by </i><a href="#"></i>Start Bootstrap</i></a></p>
         <!-- <hr> -->
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.dicta earum fugiat. Temporibus, voluptatibus.</p>
         <a href="" class="btn btn-default btn-xs">HTML</a>
         <a href="" class="btn btn-default btn-xs">CSS</a>
         <a href="" class="btn btn-default btn-xs">jQuery</a>
         <hr>
         <h3><a href="">Blog Post Title</a></h3>
         <p><span class="glyphicon glyphicon-time"></span> <i> Posted on August 24, 2013 by <a href="#">Start Bootstrap</a></i></p>
         <!-- <hr> -->
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
         <hr>
         <h3><a href="">Blog Post Title</a></h3>
         <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 by <a href="#">Start Bootstrap</a></p>
         <!-- <hr> -->
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut,Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
         <hr>
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