@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
      <!-- Blog Post Content Column -->
      <div class="col-lg-8">
         <h3><a href="">Add Blog</a></h3>
         <hr>
         @if (count($errors) > 0)
         <div class="alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
         @endif
         <form name="form1" method="POST" action="{{url('blog')}}">
            {{ csrf_field() }}
            <div class="form-group">
               <label for="title">Blog title</label>
               <input type="text" name="title" class="form-control" value="{{old('title')}}" id="title">
            </div>
            <div class="form-group">
               <label for="post">Post</label>
               <textarea rows="6" name="post" class="form-control">{{old('post')}}</textarea>
            </div>
            <div class="form-group">
               <label for="categories">Categories</label>
               <select multiple class="form-control js-example-basic-multiple" name="categories[]" id="categories">
                  @foreach($categories as $category_array)
                  <option @if(is_array(old('categories')) && in_array($category_array->id, old('categories'))) selected  @endIF value="{{$category_array->id}}">{{$category_array->category}}</option>
                  @endForeach
               </select>
            </div>
            <div class="form-group">
               <label for="status">Status</label>
               <select class="form-control" id="status" name="status">
                  <option @if(old('status') === '1') selected @endIF value="1">Publish</option>
                  <option @if(old('status') === '0') selected @endIF value="0">Draft</option>
               </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
      </div>
      <!-- Blog Sidebar Widgets Column -->
      <div class="col-md-4 right-sidebar">
         @include('sidebar')
      </div>
   </div>
</div>
</div>
@endsection