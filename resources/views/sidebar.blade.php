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
                  @foreach($categories as $category_array)
                     <a href="{{url('blog/category/'.$category_array->id)}}" class="btn btn-default btn-xs categories">{{$category_array->category}}</a>
                  @endforeach
               </div>
            </div>
         </div>
         <div class="well">
            <h4>Recent Posts</h4>
            <ul class="list-group">
               @foreach($posts as $post_array)
                  <li class="list-group-item"> <a href="{{url('blog/'.$post_array->id)}}">{{$post_array->title}}</a></li>
               @endforeach               
            </ul>
         </div>
         <div class="well">
            <h4>Recent Comments</h4>
            <ul class="list-group">
               @foreach($comments as $comment_array)
               <li class="list-group-item"> {{$comment_array->comment}} <a href="{{url('blog/user/'.$comment_array->user->id)}}"><i>{{$comment_array->user->name}}<i></a> </li>
               @endforeach               
            </ul>
         </div>
