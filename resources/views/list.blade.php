@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
      <!-- Blog Post Content Column -->
      <div class="col-lg-8">

         @if(Session::has('message'))
         <p class="alert alert-success">{{ Session::get('message') }}</p>
         @endif

         @foreach($posts as $post_array)
         <h3><a href="{{url('blog/'.$post_array->id)}}">{{$post_array->title}}</a></h3>
         <p><span class="glyphicon glyphicon-time"></span> <i>Posted on {{date('F d, Y',strtotime($post_array->created_at))}} by <a href="{{url('blog/user/'.$post_array->user->id)}}">{{$post_array->user->name}}</a></i></p>
         <p>{{$post_array->post}}</p>
            @foreach($post_array->categories as $category_array)
            <a href="{{url('blog/category/'.$category_array->id)}}" class="btn btn-default btn-xs">{{$category_array->category}}</a>
            @endforeach   
         <hr>
         @endforeach  
         <div align="center"> 
            {{$posts->links()}} 
         </div>      
      </div>
      <div class="col-md-4 right-sidebar">
         @include('sidebar')
      </div>
   </div>
</div>
</div>
@endsection