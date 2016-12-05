@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
      <!-- Blog Post Content Column -->
      <div class="col-lg-8">
         <h3><a href="">Add Blog</a></h3>
         <hr>           
         <form>
           <div class="form-group">
             <label for="email">Blog title</label>
             <input type="email" class="form-control" id="email">
           </div>
           <div class="form-group">
             <label for="pwd">Post</label>
             <textarea rows="6" class="form-control"></textarea>
           </div>
           <div class="form-group">
             <label for="email">Categories</label>
             <select multiple class="form-control js-example-basic-multiple">
               <option>HTML</option>   
               <option>CSS</option>   
               <option>Javascript</option>   
             </select>
           </div>      
           <div class="form-group">
             <label for="email">Status</label>
             <select class="form-control">
               <option>Publish</option>   
               <option>Draft</option>   
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