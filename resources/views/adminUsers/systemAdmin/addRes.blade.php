@extends('layouts.app')
        

@section('content')


 <div class="container">    
  <br />
  <h3 align="center">Insert Image into Mysql Database in Laravel 6</h3>
    <br />
    @if($errors->any())
    <div class="alert alert-danger">
           <ul>
           @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
           @endforeach
           </ul>
        </div>
    @endif

    @if(session()->has('success'))
     <div class="alert alert-success">
     {{ session()->get('success') }}
     </div>
    @endif
    <br />

    <div class="panel panel-default">
         <div class="panel-heading">
             <h3 class="panel-title">User Form</h3>
         </div>
         <div class="panel-body">
         <br />
         <form method="post" action="{{route('addRes')}}"  enctype="multipart/form-data">
          @csrf
          <div class="form-group">
          <div class="row">
           <label class="col-md-4" align="right">Enter Name</label>
           <div class="col-md-8">
            <input type="text" name="name" class="form-control" />
           </div>
          </div>
         </div>


          <div class="form-group">
          <div class="row">
           <label class="col-md-4" align="right">Enter location</label>
           <div class="col-md-8">
            <input type="text" name="location" class="form-control" />
           </div>
          </div>
         </div>

         <div class="form-group">
          <div class="row">
           <label class="col-md-4" align="right">Select Profile Image</label>
           <div class="col-md-8">
            <input type="file" name="image" />
           </div>
          </div>
         </div>
         <div class="form-group" align="center">
          <br />
          <br />
          <input type="submit" name="store_image" class="btn btn-primary" value="Save" />
         </div>
         </form>
      </div>
     </div>
     <div class="panel panel-default">
         <div class="panel-heading">
             <h3 class="panel-title">User Data</h3>
         </div>
     </div>
    </div>


@endsection