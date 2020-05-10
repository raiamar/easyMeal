@extends('layouts.header')

@section('content')


<div class="tab">
  <button id="home" class="tablinks" onclick="openPage(event, 'home')" style="color: #0000FF; font-weight: 500; font-size: 15px;"><i class="fa fa-home fa-fw" style="color:  #0000FF"></i><strong style="margin-left: 1em;">Home</strong></button>
  <button class="tablinks" onclick="openPage(event, 'menu')" style="color: white; font-weight: 500; font-size: 15px;"><i class="fa fa-microchip fa-fw" ></i><strong style="margin-left: 1em;">Menu</strong></button>
  <button class="tablinks" onclick="openPage(event, 'event')" style="color: white; font-weight: 500; font-size: 15px;"><i class="fa fa-calendar fa-fw" ></i><strong style="margin-left: 1em;">Event Request</strong> </button>
  <button class="tablinks" onclick="openPage(event, 'order')" style="color: white; font-weight: 500; font-size: 15px;"><i class="fa fa-coffee fa-fw" ></i><strong style="margin-left: 1em;">Order</strong> </button>
  <button class="tablinks" onclick="openPage(event, 'horder')" style="color: white; font-weight: 500; font-size: 15px;"><i class="fa fa-motorcycle fa-fw" ></i><strong style="margin-left: 1em;">Home Delivery</strong> </button>
</div>

<div id="home" class="tabcontent" style="display: block;">

  @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <i class="fa fa-check mx-2"></i>
            {{ Session::get('success') }}
        </div>
    @endif

 <div class="listInfo">
  <span style="background-color: #00FF00"><h3>Category list Information</h3> </span>
   <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Veg Katti Roll
    <span class="badge badge-primary badge-pill">1</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Panner Katti Roll
    <span class="badge badge-primary badge-pill">2</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Fish Katti Roll
    <span class="badge badge-primary badge-pill">3</span>
  </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
    Chicken Katti Roll
    <span class="badge badge-primary badge-pill">4</span>
  </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
    Egg Katti Roll
    <span class="badge badge-primary badge-pill">5</span>
  </li>
</ul>
 </div> 

<div class="additem">
<span style="background-color: #00FF00"><h3>Add new item to your menu</h3> </span>
<form method="post" action="/addMenu">
  {{csrf_field()}}
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Product Name</label>
    <div class="col-sm-10">
      <input type="text" name="name" required class="form-control-plaintext" placeholder="exampleFoodHouse" style="width: 50%; padding: 8px;">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="text" name="price" required class="form-control-plaintext" placeholder="000.00" style="width: 50%; padding: 8px;">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Category_Id</label>
    <div class="col-sm-10">
      <input type="text" name="cat_id" required class="form-control-plaintext" placeholder="1,2,3........." style="width: 50%; padding: 8px;">
    </div>
  </div>


<div style="margin-left: 250px">
    <div style="display: inline-block; margin-right: 5px">
    <button class="btn btn-success" type="submit">Add New </button>
  </div>


<p style="display: inline-block;">
  <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#edit" aria-expanded="false" aria-controls="collapseExample">
    Edit
  </button>
</p>

</div>
 </form>
</div>
</div>


<!--edit -->


<div class="collapse" id="edit">
  <div class="card card-body">
   
   <div class="edititem">
<form method="post" action="/update">
<p>thi it </p>
</form>
  </div>
<!--this is where update ends-->
  </div>
</div>
<!--home ends here-->

</div>

<div id="event" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p>
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
  

     
 <!--code for menu display-->    
<div id="menu" class="tabcontent" >
<div id="vegKattiRolls">
<h2>Veg Katti Roll</h2>
@foreach(App\syanMenu::with('childs')->where('cat_id', 1)->get () as $syanMenu)
  <table class="table borderless" style="width: 100%;  height: 10px; margin-bottom: 0px; padding-bottom: 0px;">
  <tbody>
    <tr>
    <td style="width: 550px;">{{$syanMenu ['name']}}</td>
    <td style="width: 110px;">{{$syanMenu ['price']}}</td>
    <td style="width: 5px;">
    <a href="{{action('restaurantController@editSyan', $syanMenu['id'])}}" class="btn btn-warning" role="button">Edit</a>
    </tr>
  </tbody>
</table>
@endforeach
</div>

<div id="PannerKattiRolls">
<h2>Panner Katti Roll</h2>
@foreach(App\syanMenu::with('childs')->where('cat_id', 2)->get () as $syanMenu)
  <table class="table borderless" style="width: 100%;  height: 10px; margin-bottom: 0px; padding-bottom: 0px;">
  <tbody>
    <tr>
    <td style="width: 550px;">{{$syanMenu ['name']}}</td>
    <td style="width: 110px;">{{$syanMenu ['price']}}</td>
    <td style="width: 5px;"><a href="#" role="button" class="btn btn-warning">Edit</a></td>
    </tr>
  </tbody>
</table>
@endforeach
</div>

<div id="FishKattiRolls">
  <h2>Fish Katti Roll</h2>
@foreach(App\syanMenu::with('childs')->where('cat_id', 3)->get () as $syanMenu)
  <table class="table borderless" style="width: 100%;  height: 10px; margin-bottom: 0px; padding-bottom: 0px;">
  <tbody>
    <tr>
    <td style="width: 550px;">{{$syanMenu ['name']}}</td>
    <td style="width: 110px;">{{$syanMenu ['price']}}</td>
    <td style="width: 5px;"><a href="#" role="button" class="btn btn-warning">Edit</a></td>
    </tr>
  </tbody>
</table>
@endforeach
</div>

<div id="ChickenKattiRolls">
  <h2>Chicken Katti Roll</h2>
@foreach(App\syanMenu::with('childs')->where('cat_id', 4)->get () as $syanMenu)
  <table class="table borderless" style="width: 100%;  height: 10px; margin-bottom: 0px; padding-bottom: 0px;">
  <tbody>
    <tr>
    <td style="width: 550px;">{{$syanMenu ['name']}}</td>
    <td style="width: 110px;">{{$syanMenu ['price']}}</td>
    <td style="width: 5px;"><a href="#" role="button" class="btn btn-warning">Edit</a></td> 
    </tr>
  </tbody>
</table>
@endforeach
</div>

<div id="EggKattiRolls">
  <h2>Egg Katti Roll</h2>
@foreach(App\syanMenu::with('childs')->where('cat_id', 5)->get () as $syanMenu)
  <table class="table borderless" style="width: 100%;  height: 10px; margin-bottom: 0px; padding-bottom: 0px;">
  <tbody>
    <tr>
    <td style="width: 550px;">{{$syanMenu ['name']}}</td>
    <td style="width: 110px;">{{$syanMenu ['price']}}</td>
    <td style="width: 5px;"><a href="#" role="button" class="btn btn-warning">Edit</a></td>
    </tr>
  </tbody>
</table>
@endforeach
</div> 
<!--this is the final div-->
</div>







</div>




@endsection




<script>
function openPage(evt, list) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(list).style.display = "block";
  evt.currentTarget.className += " active";
}

</script>

<style>
/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background: #0e1a35;
  width: 25%;
  height: 100%;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #00FF00;
  border: none;
  outline: none;
}

/* Create an active/current "tab button" class */
.tab button.active {
  border-bottom: 2px solid #00FF00;
  outline: none;
}

/* Style the tab content */
.tabcontent {
  display: none;
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
 
}

.listInfo{
   margin-top: 20px;
  width: 85%;
  margin-left: 30px;
  margin-bottom: 30px;
}

.additem {
  margin-top: 20px;
  width: 85%;
  margin-left: 30px;
}

input[type=text] {
  border: 1px solid #00FFFF;
  border-radius: 4px;
  width: 75%;
}

.edititem {
  width: 85%;
  margin-left: 30px;
}

</style>