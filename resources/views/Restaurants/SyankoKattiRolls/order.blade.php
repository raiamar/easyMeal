@extends('layouts.empty')     
@section('content')


<div class="container">
<div align="right">
   <a href="/sayankoRolls"><i class="fa fa-caret-left" style="color: black"></i></a><span>Back</span>
</div>
<form method="post" action="/syanOrder">
	{{csrf_field()}}
	
    <div>
    <label>Customer Name</label>
    <input type="text" name="name" placeholder="Your name..">
    </div>

    <div>
    <label>Contact</label>
    <input type="text" name="Contact" placeholder="Your last name..">
    </div>

    <label for="Order">Order Type</label>
    <select  name="orderType" onchange="yesnoCheck(this);">
      <option value="normal">Restaurant Order</option>
      <option value="other">Home Delivery</option>
    </select>

    <div id="ifYes" style="display: none;">
    <label>Address</label>
    <input type="text" name="" placeholder="">

	</div>
	<label>Address</label>
    <input type="text" name="" placeholder=""><div>	
	</div>


    <label for="table">Table Number</label>
    <input type="text" name="table" placeholder="Only for customer who are making order within Restaurant">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
<div style="margin-top: 15px">
	 <input type="submit" value="Submit">
</div>
   
</form>
</div>
@endSection


<style>
	/* Style inputs with type="text", select elements and textareas */
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
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 55%;
}


}
</style>


<script>
function yesnoCheck(that) {
    if (that.value == "other") {
  alert("check");
        document.getElementById("ifYes").style.display = "block";
    } 
    else {
        document.getElementById("ifYes").style.display = "none";
    }
}
</script>