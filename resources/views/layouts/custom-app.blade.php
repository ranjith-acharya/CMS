<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	<div class="container">
		<a class="navbar-brand" href="{{url('/home')}}">{{config('app.name')}}</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="fa fa-bars"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav mr-auto">
			
			</ul>
			<ul class="navbar-nav ml-auto">
			@guest
				<li class="nav-item">
					<a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
				</li>
			@if (Route::has('register'))
				<li class="nav-item">
					<a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
				</li>
			@endif
			@else
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>
					<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						@yield('options')
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
					</ul>
				</li>
			@endguest
			</ul>
		</div>
	</div>
</nav>	
<div class="container">
@yield('content')
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>