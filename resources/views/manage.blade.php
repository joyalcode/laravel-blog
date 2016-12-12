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