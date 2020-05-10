<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'easyMeal') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

     <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">


  <!-- for nav bar only -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav style="margin-bottom: 1px; background-color:   #7CFC00; padding: 8px;">
    <!--  <div class="container-fluid" style="border: 3px solid red">-->
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}" style="color: white; ">easyMeal</a>
    </div>

<!--</div>--->

<div  class="topnav" style=" width: 25%; display: inline-block;">
      <input type="text" placeholder="Search...">
</div>

<!--<div class="inline" style="margin-left: 45%; border:3px solid red">-->
<ul class="nav navbar-nav" style="text-decoration-style: none; margin-left: 640px;padding-top: 2px;">
    @guest
    <!--class="inline" style="display: inline-block;"-->
    <div class="inline">
      <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span> {{ __('Login') }}</a></li>
    </div>
      @if (Route::has('register'))
    <div class="inline">
      <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span> {{ __('Register') }}</a></li>
    </div>
    @endif
         @else
             <li class="nav-item dropdown">
                <a  data-toggle="dropdown">
                         {{ Auth::user()->name }} 
                         <span class="caret"></span>
                </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                </form>
            </div>
                    </li>
                        @endguest
                    </ul>
                    </div>
                </div>
         </nav>



       <main>
            @yield('content')
        </main>

</body>
</html>





<style>


/*style for search bar*/
.topnav input[type=text] {
  padding: 6px;
  border: none;
  margin: 5px;
  margin-left: 8px;
  font-size: 17px;
  width: 100%;
}


</style>

