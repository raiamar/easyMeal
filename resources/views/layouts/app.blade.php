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
      <a class="navbar-brand" href="{{ url('/') }}" style="color: white">easyMeal</a>
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

    <!--footer starts from here-->
<footer class="footer">
<div class="container bottom_border">
<div class="row">
<div class=" col-sm-4 col-md col-sm-4  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">About us</h5>
<!--headin5_amrc-->
<p class="mb10">Too busy to cook? Working up late ? The word easyMeal means craving for food . Anytime you feel the hunger or crave for a tasty meal. Do remember us for our delicious food, ready to be delivered at your door step. We are happy to searve our customer.</p>
<p><i class="fa fa-location-arrow fa-fw"></i>Lokanthali, Bhaktapur</p>
<p><i class="fa fa-phone fa-fw"></i>  +977-9869778832 </p>
<p><i class="fa fa fa-envelope fa-fw"></i> easyMeal@info.com  </p>

</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Our service</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="http://webenlance.com">Service: 10AM-10PM</a></li>
<li><a href="http://webenlance.com">Food variety</a></li>
<li><a href="http://webenlance.com">Multi Causine resturent</a></li>
<li><a href="http://webenlance.com">Delivery wihin 1 Hr</a></li>
<li><a href="http://webenlance.com">Table Booking</a></li>
<li><a href="http://webenlance.com">Event orginizer</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Others</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="http://webenlance.com">Tearms and Condition</a></li>
<li><a href="http://webenlance.com">Privacy Policy</a></li>
<li><a href="http://webenlance.com">FAQ</a></li>
<li><a href="http://webenlance.com">Carrer</a></li>
<li><a href="http://webenlance.com">Become our partner</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Follow us on</h5>
<!--headin5_amrc ends here-->

<ul class="footer_ul2_amrc">
<li><a href="#"><i class="fab fa-facebook fleft padding-right"></i> </a><p><a href="#">https://www.facebook.com/easyMeal</a></p></li>
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p><a href="#">https://twitter.com/easyMeal</a></p></li>
<li><a href="#"><i class="fab fa-instagram fleft padding-right" style="color: #f16d"></i> </a><p><a href="#">https://www.instagram.com/easyMeal</a></p></li>
</ul>
<!--footer_ul2_amrc ends here-->
</div>
</div>
</div>


<div class="container">
<ul class="foote_bottom_ul_amrc">
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Services</a></li>
<li><a href="#feedback">Feedback</a></li>
<li><a href="#contact">Contact</a></li>
</ul>
<!--foote_bottom_ul_amrc ends here-->
<p class="text-center">Copyright © 2020 <a href="#">easyMeal.com</a></p>

<!--
//if needed can use this social media icoene social media 
<ul class="social_footer_ul">
<li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
</ul>
-->
</div>

</footer>
</body>
</html>





<style>

    /*footer*/
.col_white_amrc { color:#FFF;}
footer { width:100%; background-color:#263238; min-height:250px; padding:10px 0px 25px 0px ;}
.pt2 { padding-top:40px ; margin-bottom:20px ;}
footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;}
.mb10 { padding-bottom:15px ;}
.footer_ul_amrc { margin:0px ; list-style-type:none ; font-size:14px; padding:0px 0px 10px 0px ; }
.footer_ul_amrc li {padding:0px 0px 5px 0px;}
.footer_ul_amrc li a{ color:#CCC;}
.footer_ul_amrc li a:hover{ color:#fff; text-decoration:none;}
.fleft { float:left;}
.padding-right { padding-right:10px; }

.footer_ul2_amrc {margin:0px; list-style-type:none; padding:0px;}
.footer_ul2_amrc li p { display:table; }
.footer_ul2_amrc li a:hover { text-decoration:none;}
.footer_ul2_amrc li i { margin-top:5px;}

.bottom_border { border-bottom:1px solid #323f45; padding-bottom:20px;}
.foote_bottom_ul_amrc {
    list-style-type:none;
    padding:0px;
    display:table;
    margin-top: 10px;
    margin-right: auto;
    margin-bottom: 10px;
    margin-left: auto;
}
.foote_bottom_ul_amrc li { display:inline;}
.foote_bottom_ul_amrc li a { color:#999; margin:0 12px;}


/*style for socaial media footer if requirec can use 
.social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
.social_footer_ul li { padding-left:20px; padding-top:10px; float:left; }
.social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
.social_footer_ul li i {  width:20px; height:20px; text-align:center;}
*/



/*style for search bar*/
.topnav input[type=text] {
  padding: 6px;
  border: none;
  margin: 5px;
  margin-left: 8px;
  font-size: 17px;
  width: 100%;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally 
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    margin: 0;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
*/

</style>

