<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CMS</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap&subset=latin-ext,vietnamese" rel="stylesheet">
	<style>html, body {background-color: #fff;color: #636b6f;font-family: 'Quicksand', sans-serif;font-weight: 200;height: 100vh;margin: 0;}.full-height {height: 100vh;}.flex-center {align-items: center;display: flex;justify-content: center;}.position-ref {position: relative;}.top-right {position: absolute;right: 10px;top: 18px;}.content {text-align: center;}.title {font-size: 44px;}.links > a {color: #636b6f;padding: 0 25px;font-size: 13px;font-weight: 600;letter-spacing: .1rem;text-decoration: none;text-transform: uppercase;}.m-b-md {margin-bottom: 30px;} .studentLogin{font-family:'Quicksand', sans-serif;border-radius:2px;padding:8px;}.staffLogin{font-family:'Quicksand', sans-serif;border-radius:2px;padding:8px;}</style>
</head>
<body>
	<div class="flex-center position-ref full-height">
		@if (Route::has('login'))
			<div class="top-right links">
		@auth
				<a href="{{ url('/home') }}">Home</a>
		@else
			<a href="{{ route('login') }}">Login</a>
			@if (Route::has('register'))
				<a href="{{ route('register') }}">Register</a>
            @endif
		@endauth
			</div>
		@endif
		<div class="content">
			<div class="title m-b-md">
			Welcome to CMS
			</div>
			<a href="{{url('student/login')}}"><button class="studentLogin">Student Login</button></a>
			<a href="{{url('staff/login')}}"><button class="staffLogin">Staff Login</button></a>
		</div>
	</div>
</body>
</html>
