@extends('layouts.empty')

@section('content')
<div class="container" style="margin-top: 60px; width: 50%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

<!--emali-->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user fa-1x"></i></span>
                         </div>
                                 <input type="text" id="email" class="form-control" placeholder="Email-address" value="{{ old('email') }}" name="email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

<!--password-->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-key fa-1x"></i></span>
                        </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

<!--social media-->
             <div class="social-login">
                <!--
                <button class="btn facebook-btn social-btn" type="button" style="background-color:#3C589C; color: white"><span><i class="fab fa-google-plus-g"></i> Sign in with Facebook</span> </button>
                -->
                <button class="btn google-btn social-btn" type="button" style="background-color:#DF4B3B; color: white"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
            </div> 



                        <div class="form-group row">
                            <div style="margin: 15px">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif


                                <button type="submit" class="btn btn-primary" style="margin-left: 30px; display: inline-block;">
                                    {{ __('Login') }}
                                </button>

                                <a href="/"><button type="button" class="btn btn-primary" style="margin-left: 10px; display: inline-block;">Back</button></a>
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
background-image: url('image/2.jpg');
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