@extends('layouts.app')     
@section('content')
<div class="head">
	     <div class="container" style="color: white;" align="Left">
                <div style="display: inline-block;">
                    <img src="/image/Res/syanRolls.jpg" alt="logo" style="height: 130px; width: 130px; margin-top: 50px; margin-bottom: 130px;">
                </div>
               <div style="display: inline-block; margin-top: 50px;">
               	<p style="margin-top: 220px; font-size: 30px"><b>Sayanko Katti Rolls</b></p>
                	<p><strong><i class="fa fa-map-marker fa-fw" style="color: green"></i>Red Cross Marg, Kathmandu</strong></p>
                	<p><strong><i class=" fa fa-exclamation-circle fa-fw" style="color:green;"></i> Open(8AM)-Close(8PM)</strong></p>
               </div>    
        </div>
</div>
</br>


<!--Here starts the body toogle part-->
<div class="tabs" style="display: inline-block; width: 100%;">	

<div class="nav" style=" width: 40%; margin-left: 78px; background-color: #00FF00; color: white; border-radius: 4px;">
<button class="tablink" onclick="openPage('Menu');">Menu</button>
<button class="tablink" onclick="openPage('Booking')">Booking</button>
<button class="tablink" onclick="openPage('Comments')" style="width: 19%;">Comments</button>
<button class="tablink" onclick="openPage('Other')" style="width: 25%;">Other Branch</button>
</div>

<div id="Menu" class="tabcontent" style="display: block;" >


<!--order form starts here-->
<div class="container" id="orderMenu" style="width: 40%; float: right; margin: 70px 30px 0px 5px; padding: 20px; background-color: #C0C0C0;">

  @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <i class="fa fa-check mx-2"></i>
            {{ Session::get('success') }}
        </div>
    @endif

<form method="post" action="/syanOrder">
  {{csrf_field()}}
  
    <div>
    <label>Item</label>
    <input type="text" name="item">
    </div>

    <div>
      <input type="number" name="unit" placeholder="Unit" style="width: 50px; margin-top: 6px;">
    </div>

    <label for="Order" style="margin-top: 6px;">Order Type</label>
    <select  name="orderType" onchange="yesnoCheck(this);">
      <option value="normal">Restaurant Order</option>
      <option value="other">Home Delivery</option>
    </select>

    <div id="ifYes" style="display: none;">
    <div>
      <label>Customer Name</label>
      <input type="text" name="name" placeholder="Your name..">
    </div>

    <div>
    <label>Address</label>
    <input type="text" name="address" placeholder="">
    </div>

    <div>
    <label>Contact</label>
    <input type="text" name="contact" placeholder="Your last name..">
    </div>
  </div>



    <label for="table" style="margin-top: 6px;">Table Number</label>
    <input type="text" name="table" placeholder="Only for customer who are making order within Restaurant">

    <label for="subject">Suggention</label>
    <textarea id="subject" name="subject" placeholder="Do you have any Suggention regrading Your order? let us know if any." style="height:200px"></textarea>
<div style="margin-top: 15px">
   <input type="submit" value="Submit">
</div>
   
</form>
</div>
<!--order form ends here-->


<div style="display: block; margin-left: 60px; width: 50%;">
<div id="vegKattiRolls">
  <h2>Veg Katti Roll</h2>
@foreach(App\syanMenu::with('childs')->where('cat_id', 1)->get () as $syanMenu)
  <table class="table borderless" style="width: 100%;  height: 10px; margin-bottom: 0px; padding-bottom: 0px;">
  <tbody>
    <tr>
    <td style="width: 550px;">{{$syanMenu ['name']}}</td>
    <td style="width: 110px;">{{$syanMenu ['price']}}</td>
    <td style="width: 5px;"><p><a href="action(#orderMenu, $syanMenus['name'])}}"><i class="fa fa-plus-circle fa-fw" style="color: green"></i></a></p></td> 
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
    <td style="width: 5px;"><p><a href="#orderMenu"><i class="fa fa-plus-circle fa-fw" style="color: green"></i></a></p></td> 
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
    <td style="width: 5px;"><p><a href="#orderMenu"><i class="fa fa-plus-circle fa-fw" style="color: green"></i></a></p></td> 
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
    <td style="width: 5px;"><p><a href="#orderMenu"><i class="fa fa-plus-circle fa-fw" style="color: green"></i></a></p></td> 
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
    <td style="width: 5px;"><p><a href="#orderMenu"><i class="fa fa-plus-circle fa-fw" style="color: green"></i></a></p></td> 
    </tr>
  </tbody>
</table>
@endforeach 
<!--this is the final div for class=orderMenu-->
</div>
<!--end menu-->
 </div>
</div>


<div id="Booking" class="tabcontent" style="margin-left: 60px;">
  <h3>New Booking</h3>
 
  <!--Booking form starts here-->
<div class="container" id="orderMenu" style="width: 40%; margin: 10px 30px 10px 5px; padding: 20px; background-color: #C0C0C0; float: right;" >


<form method="post" action="/syanEvent">
  {{csrf_field()}}
  
    <div>
    <label>Your Name:</label>
    <input type="text" name="name">
    </div>

    <div>
      <label>Contact:</label>
      <input type="number" name="contact" placeholder="98xxxxxxxx" style="width: 100%; padding: 12px;">
    </div>

<div style="margin-bottom: 10px;">
  <label style="margin-top: 6px;">Choose Your Booking</label>
    <select>
      <option>Birthday Celebration</option>
      <option>Holiday Gathering</option>
    <!--    <option>Anniversary Parties</option>
      <option>Conference</option>
      <option>Business Meeting</option>-->
    </select>
</div>
    

<!--
    <label style="margin-top: 6px;">Order Type</label>
    <select  name="res" onchange="yesnoCheck(this);">
      <option value="normal">Restaurant Order</option>
      <option value="other">Home Delivery</option>
    </select>

    <div id="ifYes" style="display: none;">
    <div>
      <label>Customer Name</label>
      <input type="text" name="name" placeholder="Your name..">
    </div>
-->

    <div style="margin-bottom: 10px;">
      <label>Number of people attending</label>
      <input type="number" name="attendance" style="width: 50%; padding: 8px; margin-left: 10px">
    </div>

    <textarea id="subject" name="subject" placeholder="Do you have any Suggention or special request? let us know if any." style="height:200px"></textarea>
<div style="margin-top: 15px">
   <input type="submit" value="Submit">
</div>
   
</form>
</div>
<!--Booking form ends here-->
<div style="margin-top: 10px; float: left;">
  <img src="image/Res/syanEvent2.jpg" style=" width: 610px; height: 320px;">
</div>
 <div style="float: left">
    <img src="image/Res/syanEvent1.jpg" style=" width: 610px; height: 320px; margin: 2px 0px 10px 0px;">
  </div>

</div>







<div id="Comments" class="tabcontent">
<p>this is me</p>
</div>

<div id="Other" class="tabcontent" style="margin-left: 110px">
  <h3>Information on Other Branch</h3>
  <p style="color: red;">No other branches are available for this member.</p>
</div>

</div>
</div>
@endsection
<br>

<style>
	.head{
		background-image: url(/image/resLogo/syankoBack.jpg);
		width: 100%;
    height: 465px;
    background-size: cover;
	}

.nav button{
  background-color: #00FF00;
  margin-right: 40px;
  width: 15%;
  margin-right: 1px;
}

.nav button {
  display: block;
  outline: none;
  cursor: pointer;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.nav button:hover {
  background-color: black;
  border: none;
  outline: none;
}

/* Create an active/current "tab button" class */
.nav button.active {
  outline: none;
}

/*style for fulpage tab */
.tabs{
	width: 55%;
  height: auto;
}

.tablink {
  /*margin-top: 10px;*/
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 4px 6px;
  font-size: 17px;
  width: 8%;
}
/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  display: none;
  padding: 20px 20px;
  height: auto;
}

/* Style for order */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */


</style>


<script>
  //javaScript for order 
  function yesnoCheck(that) {
    if (that.value == "other") {
  alert("Are you placing home Delivery order?");
        document.getElementById("ifYes").style.display = "block";
    } 
    else {
        document.getElementById("ifYes").style.display = "none";
    }
}



	function openPage(pageName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  /* Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  */
  
 // Show the specific tab content
  document.getElementById(pageName).style.display = "block";

 // Add the specific color to the button used to open the tab content
  elmnt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



</script>