@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <!-- Blog Post Content Column -->
    <div class="col-lg-8">
      <h3><a href="">My Blog Posts</a></h3>
      <hr>
      <table class="table">
        <thead>
          <tr>
            <th width="70%">Title</th>
            <th>Created date</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody>
        @foreach($posts as $post_array)
          <tr>
            <td>{{$post_array->title}}</td>
            <td>{{date('d M Y',strtotime($post_array->created_at))}}</td>
            <td><a href="{{url("blog/$post_array->id/edit")}}">Edit</a></td>
          </tr>
        @endForeach  
        <tr>
           <td align="center" colspan="3">{{$posts->links()}} </td>
        </tr>
        </tbody>
      </table>
    </div>
    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-4 right-sidebar">
      @include('sidebar')
    </div>
  </div>
</div>
</div>
@endsection