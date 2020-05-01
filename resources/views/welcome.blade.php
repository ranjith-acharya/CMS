@extends('layouts.app')

@section('content')
<h4 class="mt-4 modal-header">Welcome to CMS
<div class="float-right">
	<div class="dropdown dropright">
	<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
		Login
	</button>
	<div class="dropdown-menu dropdown-menu">
	<a class="dropdown-item" href="{{url('/company/login')}}">Company Login</a>
		<a class="dropdown-item" href="{{route('staff.login')}}">Staff Login</a>
		<a class="dropdown-item" href="{{route('student.login')}}">Student Login</a>
	</div>
	</div>
</div></h4>
<div class="mt-5 container card-body bg-white col-md-6" style="box-shadow:0px 0px 8px rgba(0,0,0,0.1);border-radius:5px;">
	<form class="form container pt-3 pb-4" method="POST" action="{{ route('login') }}">
		<h6 class="lead container mb-4">Login to CMS</h6>
		@csrf<div class="form-group">
			<input type="email" class="form-control-email col-md-12 mb-3" name="email" value="{{ old('email') }}" placeholder="Enter Email address">
			@error('email')
				<small class="text-danger font-weight-bold">
					{{ $message }}
				</small>
			@enderror
		</div>
		<div class="form-group">
			<input type="password" class="form-control-pass col-md-12 mb-3" name="password" value="{{ old('password') }}" placeholder="Enter Password">
			@error('password')
				<small class="text-danger font-weight-bold">
					{{ $message }}
				</small>
			@enderror
        </div>
		<div class="row">
			<div class="col-md-6">
				<button class="btn btn-sm btn-primary" type="submit" name="action">Log in</button>
			</div>
			<div class="col-md-6">
			@if (Route::has('password.request'))<a class="btn btn-link" href="{{ route('password.request') }}">
			{{ __('Forgot Your Password?') }}</a>
			@endif</div>
		</div>
	</form>
</div>
@endsection