@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4"><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA- Compatible" content="IE=edge">
<title>AdminLTE 3 | Log in (v2)</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="{{asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<!-- Theme style-->
<link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Login</b>Page</a>
</div>
<!-- /.Login-Logo -->
<div class="card">
    <div class="card-body login card-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{{route('postlogin')}}" method="post">
        {{ csrf_field() }}
    <div class="input-group mb-3">
    <input type="email" class="form-control" name="email" placeholder="Email">
    <div class="input-group-append">
    <div class="input-group-text">
    <span class="fas fa-envelope"></span>
    </div>
    </div>
    </div>
    <div class="input-group mb-3">
    <input type="password" class="form-control" name="password" placeholder="Password">
    <div class="input-group-append">
    <div class="input-group-text">
    <span class="fas fa-lock"></span>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-8">
    <div class="icheck-primary">
    <input type="checkbox" id="remember">
    <label for="remember">
    Remember Me
    </label>
    </div>
    </div>
    <!-- /.col -->
    <div class="col-4">
    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
    </div>
    <!-- /.col -->
    </div>
</form>

<div class="social-auth-links text-center mt-2 mb-3">
<a href="#" class="btn btn-block btn-primary">
<i class="fab fa-facebook mr-2"></i> Sign in using Facebook
</a>
<a href="#" class="btn btn-block btn-danger">
<i class="fab fa-google-plus mr-2"></i> Sign in using Google+
</a>
</div>
<!-- /.social-outh-Links -->
<p class="mb-1">
<a href="forgot-password.html">I forgot my password</a>
</p>
<p class="mb-0">
<a href="register.html" class="text-center">Register a new membership</a>
</p>
</div>
<!-- /.Login-card-body -->
</div>
</div>
<!-- /.Login-box -->

<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
</body>
</html>


    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}

        @endif

        @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{session('loginError')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button> 
</div>
 @endif

<main class="form-signin">
<h1 class="h3 mb-3 fw-normal" text-center> Please login</h1>
<form action="/login" method="post">
    @csrf
<div class="form-floating">
    <input type="email" name="email" class="form-control @error('email') is-invalid
     @enderror" id="email" placeholder="name@example.com" autofocus required required value="{{ old ('email')}}">
    <label for="email"> Email address</label>
    @error('email')
    <div class="invalid-feedback">
        {{message}}
    </div>
    @enderror
</div>
<div class="form-floating">
    <input type="password" name="password" class="form-control" id="password" 
    placeholder="Password" required>
    <label for="password">Password</label>
</div>

<buttom class="w-100 btn btn-lg btn-primary" type="sumbit">Login</button>
</form>
<small class="d- block text-center mt-3">Not registered? <a href="/
register">Register Now!</a></small>
</main>
</div>
</div>


@endsection