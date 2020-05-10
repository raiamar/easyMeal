@extends('layouts.app')
        

@section('content')

    <div style="margin-top: 0px; margin-bottom: 0px;">
      <img class="d-block w-100" src="image/slide/1.jpg" style="height: 450px">
    </div>



<!--find restaurent from here-->
<h1 style="text-align: center; font-family: sans-serif;">Find Restaurent</h1>
<div class="restaurants" style="margin-left: 30px; margin-top: 2px; padding-left: 100px;"> 


<div class="res1" style="display: inline-block; margin-left: 13px">
  <img src="image/2.jpg">
  <div class="card-body">
    <a href="#">KL Fast Food and Cafe</a>
    <p><i class="fa fa-map-marker fa-fw" style="color: red"></i>Kupondole, Lalitpur</p>
  </div>
</div>

<div class="res5" style="display: inline-block;">
  <img src="image/resLogo/marpha.png" style="border: 1px solid black;">
  <div class="card-body">
    <a href="#">Marpha Restaurant & Bar</a>
    <p><i class="fa fa-map-marker fa-fw" style="color: red"></i>Kunphen Marga, Paknajol, Thamel</p>
  </div>
</div>

<div class="res3" style="display: inline-block;">
  <img src="/image/Res/syanRolls.jpg">
  <div class="card-body">
    <a href="/sayankoRolls">Sayanko Katti Rolls</a>
    <p><i class="fa fa-map-marker fa-fw" style="color: red"></i>Red Cross Marg, Kathmandu</p>
  </div>
</div>

<div class="res4" style="display: inline-block;">
  <img src="image/resLogo/arushi.jpg" style="border: 1px solid black;">
  <div class="card-body">
    <a href="#">Arushi Boutique Hotel</a>
    <p><i class="fa fa-map-marker fa-fw" style="color: red"></i>Kunfen Marg, Paknajol, Kathmandu</p>
  </div>
</div>

<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#all" role="button" aria-expanded="false" style="color: white; background-color: red; text-align: center; border-color: none;">View all</a>
</p>

<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="all">
      <div class="card card-body">

        <div id="restaurants"> 
        

<div class="res2" style="display: inline-block;">
  <img src="image/crustPizza.jpg">
  <div class="card-body">
    <a href="#">Crust Pizza</a>
    <p><i class="fa fa-map-marker fa-fw" style="color: red"></i>Panchakumari Marg, Kathmandu</p>
  </div>
</div>

<div class="res6" style="display: inline-block;">
  <img src="image/resLogo/universal.jpg">
  <div class="card-body">
    <a href="#">Universal Cafe</a>
    <p><i class="fa fa-map-marker fa-fw" style="color: red"></i>Bhaktapur Sallaghari</p>
  </div>
</div>


<!--add new res
<div class="res7" style="display: inline-block;">
  <img src="image/2.jpg">
  <div class="card-body">
    <a href="#">Universal Cafe</a>
    <p><i class="fa fa-map-marker fa-fw" style="color: red"></i>Sallaghari, Bhaktapur</p>
  </div>
</div>



<div class="res8" style="display: inline-block;">
  <img src="image/2.jpg">
  <div class="card-body">
    <a href="#">Universal Cafe</a>
    <p><i class="fa fa-map-marker fa-fw" style="color: red"></i>Sallaghari, Bhaktapur</p>
  </div>
</div>

-->

 

</div>

      </div>
    </div>
  </div>
  </div>

</div>







 <!--.for our team starts here-->


 <h1 class="text-center">easyMeal.com Team and support</h1>

    
    <div class="container">
    <div class="row">
    
    <!--team-1-->
    <div class="col-lg-4">
    <div class="our-team-main">
    
    <div class="team-front">
    <img src="image/team/3.jpg" >
    <h3>Dipen Chamling</h3>
    <p>Management Head</p>
    </div>
    
    <div class="team-back">
    <span>
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
    natoque penatibus et magnis dis parturient montes,
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
    natoque.
    </span>
    </div>
    
    </div>
    </div>
    <!--team-1-->
    
    <!--team-2-->
    <div class="col-lg-4">
    <div class="our-team-main">
    
    <div class="team-front">
    <img src="image/team/1.jpg">
    <h3>Amar Bahing</h3>
    <p>Technical Support
</p>
    </div>
    
    <div class="team-back">
    <span>
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
    natoque penatibus et magnis dis parturient montes,
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
    natoque.
    </span>
    </div>
    
    </div>
    </div>
    <!--team-2-->
    
    <!--team-3-->
    <div class="col-lg-4">
    <div class="our-team-main">
    
    <div class="team-front">
    <img src="image/team/2.jpg" >
    <h3>Subash Bahing</h3>
    <p>Financer</p>
    </div>
    
    <div class="team-back">
    <span>
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
    natoque penatibus et magnis dis parturient montes,
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
    natoque.
    </span>
    </div>
    
    </div>
    </div>
    <!--team-3-->
 </div>    

<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#contact" aria-expanded="false">Others</button>

<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="contact">
      <div class="card card-body">
        <ul class="list-group">
            <li class="list-group-item active">For Inquary</li>
            <li class="list-group-item">Melina Karki</li>
            <li class="list-group-item">Contact: +1234567</li>
            <li class="list-group-item">Email:MelinaK2@hotmail.com</li>
       </ul>
       <ul class="list-group">
            <li class="list-group-item active">Public Relation</li>
            <li class="list-group-item">Durga Thapa</li>
            <li class="list-group-item">Contact: +12584567</li>
            <li class="list-group-item">Email:Durga@outlook.com</li>
       </ul>
       <ul class="list-group">
            <li class="list-group-item active">Other problem</li>
            <li class="list-group-item">Kamala Shrestha</li>
            <li class="list-group-item">Contact: +92584567</li>
            <li class="list-group-item">Email:Kamla@gmail.com</li>
       </ul>
      </div>
    </div>
  </div>

    </div>
  <!--.team end-->




<!--section for feedback-->
</br>
@if (Session::has('success'))
        <div class="alert alert-success" role="alert" >
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            {{ Session::get('success') }}
        </div>
    @endif

</div>
<div class="container box">

<form method="post" action="{{ url ('sendemail/send')}}">
  {{ csrf_field() }}
  <div>
    <label>Name</label>
    <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Sender name">
  </div>

  <div class="form-group">
    <label>Feedback</label>
    <textarea name="message" placeholder="Really happy to read your feedback!!" 
    class="form-control" value="{{old('message')}}"></textarea>
  </div>
  <div class="form-group">
    <input type="submit" name="send" value="send" class="btn btn-Info">
  </div>
</form>
</div>

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li> {{ $error }} </li>
    @endforeach
  </ul>
  @endif
</div>



@endsection

<style>

/*for our restaurent*/
.restaurants{
  margin: 20px;
  padding: 10px 20px 10px 35px;

}

.restaurants img{
width: 210px;
height: 180px;
margin-right: 30px;
 }

 #restaurants img{
width: 210px;
height: 180px;
margin-right: 30px;
margin-left: 20px;
 }
 .restaurents a{
  text-decoration: none;

 }


 .restaurants img:hover {
  transform: scale(1.5); 
}
.restaurants a:hover {
  color: red; 
}
 


 /*for our team*/
 h1
{
    color:#fff;
    margin:40px 0 60px 0;
    font-weight:300;
}

.our-team-main
{
    width:100%;
    height:auto;
    border-bottom:2px #323233 solid;
    background:#fff;
    text-align:center;
    border-radius:10px;
    overflow:hidden;
    position:relative;
    transition:0.5s;
    margin-bottom:28px;
}


.our-team-main img
{
    border-radius:60%;
    margin-bottom:20px;
    width: 100px;
    height: 100px;
}

.our-team-main h3
{
    font-size:20px;
    font-weight:700;
}

.our-team-main p
{
    margin-bottom:0;
}

.team-back
{
    width:100%;
    height:auto;
    position:absolute;
    top:0;
    left:0;
    padding:5px 15px 0 15px;
    text-align:left;
    background:#fff;
    
}

.team-front
{
    width:100%;
    height:auto;
    position:relative;
    z-index:10;
    background:#fff;
    padding:15px;
    bottom:0px;
    transition: all 0.5s ease;
}

.our-team-main:hover .team-front
{
    bottom:-200px;
    transition: all 0.5s ease;
}

.our-team-main:hover
{
    border-color:#777;
    transition:0.5s;
}

/*our-team-main*/ 

      </style>