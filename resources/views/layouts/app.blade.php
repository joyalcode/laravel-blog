<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <link href="{{ url('/') }}/css/bootstrap.min.css" rel="stylesheet">
      <link href="{{ url('/') }}/css/styles.css" rel="stylesheet">
      <link href="{{ url('/') }}/css/select2.css" rel="stylesheet">
   </head>
   <body>
      <nav class="navbar navbar-default navbar-static-top">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
               <span class="sr-only">Toggle Navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'Laravel') }}
               </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
               <!-- Left Side Of Navbar -->
               <ul class="nav navbar-nav">
                  <li><a href="{{ url('/') }}">Home</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  @if (Auth::guest())
                  <li><a href="{{ url('/login') }}">Login</a></li>
                  <li><a href="{{ url('/register') }}">Register</a></li>
                  @else
                  <li><a href="{{ url('/blog/create') }}">Add Post</a></li>  
                  <li><a href="{{ url('/blog/manage') }}">Manage My Posts</a></li>                                  
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                     </a>
                     <ul class="dropdown-menu" role="menu">
                        <li>
                           <a href="{{ url('/logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              Logout
                           </a>
                           <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                           </form>
                        </li>
                     </ul>
                  </li>
                  @endif
               </ul>
            </div>
         </div>
      </nav>
      @yield('content')
      <hr>
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
               </div>
            </div>
         </div>
      </footer>
      <!-- Scripts -->
      <!-- <script src="{{ url('/') }}/js/app.js"></script> -->
      <script src="{{ url('/') }}/js/jquery.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="{{ url('/') }}/js/bootstrap.min.js"></script>
      <script src="{{ url('/') }}/js/select2.min.js"></script>
      <script type="text/javascript">
         $(".js-example-basic-multiple").select2({
            placeholder: "Select one more categories"
         });
      </script>      
   </body>
</html>