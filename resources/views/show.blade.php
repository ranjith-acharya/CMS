@extends('layouts.custom-app')

@section('custom-title') Profile - {{Auth::user()->name}} @endsection

@section('options')
<a class="dropdown-item" href="{{url('/home')}}">
	Home
</a>
<a class="dropdown-item" href="{{action('HomeController@show', Auth::user()->id)}}">
	Profile
</a>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<div class="modal-header">
				<h5 class="mt-2">Profile Information</h5>
				<a class="btn-link link mt-1" href="{{route('home.index')}}">
					<button type="button" class="btn btn-sm btn-primary float-right">Home</button>
				</a>
			</div>
			<div class="modal-body">
				<div class="row mt-2">
					<div class="col-md-3">
						<img src="/img/{{Auth::user()->avatar}}" class="img-responsive img-thumbnail"><br>
						<a class="btn-link link" href="{{action('HomeController@edit', Auth::user()->id)}}"><button class="mt-3 btn btn-sm btn-primary">Edit Profile</button></a>
					</div>
					<div class="col-md-8 mt-3">
						<div class="row">
							<div class="col-md-6 form-group">
								<label for="created" class="font-weight-bold">Created :</label>
								<div class="">{{\Carbon\Carbon::parse(Auth::user()->created_at)->format('d-M-Y, (H:i T)')}}</div>
							</div>
							<div class="col-md-6 form-group">
								<label for="updated" class="font-weight-bold">Updated :</label>
								<div class="">{{\Carbon\Carbon::parse(Auth::user()->updated_at)->format('d-M-Y, (H:i T)')}}</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-group">
								<label for="name" class="font-weight-bold">Full name :</label>
								<div class="">{{Auth::user()->name}}</div>
							</div>
							<div class="col-md-6 form-group">
								<label for="email" class="font-weight-bold">Email address :</label>
								<div class="">{{Auth::user()->email}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection
