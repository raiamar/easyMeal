@extends('layouts.empty')

@section('content')
<div class="container" style="margin-top: 60px; width: 40%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                <div class="form-group row" style="width: 100%; padding-left: 25px">
                            
                            <div class="form-group input-group" >
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Username" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

    <!-- form-group// -->
                    <div class="form-group input-group">
                    <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="example@example.com" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


<!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
         </div>
        <input name="location" class="form-control" placeholder="Your current location" type="text" value="{{ old('location') }}" required autocomplete="location" autofocus>
    </div> 


    <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
        </div>
        <select class="custom-select" style="max-width: 80px;">
            <option selected="">+011</option>
            <option selected="">+977</option>
        </select>
        <input name="phone" class="form-control" placeholder="Phone number" type="text" value="{{ old('phone') }}">
    </div>

         <!-- form-group end.// -->
                <div class="form-group input-group">
                <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="create password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

<!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
                                <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                        <div class="form-group row mb-0">
                            <div style="margin-left: 15px; display: inline-block;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>

                                <a href="/"><button type="button" class="btn btn-primary" style="margin-left: 10px; display: inline-block;">Back</button></a>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<style>

html,body{
background-image: url('image/1.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}


.input-group-prepend span{
width: 40px;
background-color: #3BFD68;
color: white;
border:0 !important;
}
  


</style>