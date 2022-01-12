<!doctype html>
<html lang=”{{ app()->getLocale() }}”>
<head>
<meta charset=”utf-8">
<meta http-equiv=”X-UA-Compatible” content=”IE=edge”>
<meta name=”viewport” content=”width=device-width, initial-scale=1">
<title>Laravel</title>
<! — Fonts →
<link href=”https://fonts.googleapis.com/css?family=Raleway:100,600" rel=”stylesheet” type=”text/css”>
<link rel=”stylesheet” href= https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src=”js/app.js”></script>
<script src=”https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<body>
<div class=”flex-center position-ref full-height”>
@if (Route::has('login'))
<div class=”top-right links”>
@auth
<a href=”{{ url('/home') }}”>Home</a>
@else
<a href=”{{ route('login') }}”>Login</a>
<a href=”{{ route('register') }}”>Register</a>
@endauth
</div>
@endif
<div class=”content”>
<div class=”title m-b-md”>
Laravel
</div>
<! — Include this after the sweet alert js file →
@include('sweet::alert')
<div class=”links”>
<a href=”{{ route('alert','message')}}”>message</a>
<a href=”{{ route('alert','success')}}”>success alert</a>
<a href=”{{ route('alert','warning')}}”>warning alert</a>
<a href=”{{ route('alert','info')}}”>info alert</a>
<a href=”{{ route('alert','error')}}”>error</a>
</div>
</div>
</div>
</body>
</html>
