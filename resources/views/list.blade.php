@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-lg-8">
         @if(Session::has('message'))
         <p class="alert alert-success">{{ Session::get('message') }}</p>
         @endif
         @if(isset($page_title))
         <p class="info" style="font-weight: bold;">{{$page_title}}</p>
         <hr class="info">
         @endIf
         @if(count($posts))
            @foreach($posts as $post_array)
            <h3><a href="{{url('blog/'.$post_array->id)}}">{{$post_array->title}}</a></h3>
            <p><span class="glyphicon glyphicon-time"></span> <i>Posted on {{date('F d, Y',strtotime($post_array->created_at))}} by <a href="{{url('blog/user/'.$post_array->user->id)}}">{{$post_array->user->name}}</a></i></p>
            <p>
               @if(strlen($post_array->post) > 500)
               {!! nl2br(e(str_limit($post_array->post, $limit = 250, $end = '...'))) !!}
               <a href="{{url('blog/'.$post_array->id)}}">Read more</a>
               @else
               {!! nl2br(e($post_array->post)) !!}
               @endIf
            </p>
            @foreach($post_array->categories as $category_array)
            <a href="{{url('blog/category/'.$category_array->id)}}" class="btn btn-default btn-xs">{{$category_array->category}}</a>
            @endforeach
            <hr>
            @endforeach
            <div align="center">
               @if(isset($sword))
               {{$posts->appends(['q' => $sword])->links()}}
               @else
               {{$posts->links()}}
               @endIF
            </div>
         @else
            <div class="no-records"><i><h5>No records found.</h5></i></div>
         @endIf   
      </div>
      <div class="col-md-4 right-sidebar">
         @include('sidebar')
      </div>
   </div>
</div>
</div>
@endsection