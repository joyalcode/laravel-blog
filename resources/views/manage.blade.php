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
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
          </tr>
          <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
          </tr>
          <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
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