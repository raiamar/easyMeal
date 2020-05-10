@extends('layouts.empty')     
@section('content')

<div>
<form method="post" action="/update/{{$syanMenu->id}}">
	{{ method_field('PATCH') }}
	{{ csrf_field() }}
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Product Name</label>
    <div class="col-sm-10">
      <input type="text" name="name" required class="form-control-plaintext" value="{{$syanMenus->name}}">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="text" name="price" required class="form-control-plaintext" value="{{$syanMenu->price}}">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Category_Id</label>
    <div class="col-sm-10">
      <input type="text" name="cat_id" required class="form-control-plaintext" value="{{$syanMenus->cat_id}}">
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


<form method="POST" action="/syanMenus/{{$syanMenu->id}}">
	{{ method_field('Delete') }}
	{{ csrf_field() }}
		<div class="control">
			<button type="submit" class="btn-secondary">Delete</button>
		</div>
</form>
</div>
</div>


@endsection