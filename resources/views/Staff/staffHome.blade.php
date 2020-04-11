@extends('layouts.customStaff-app')

@section('custom-title') Home - {{Auth::user()->firstName}}&nbsp;{{Auth::user()->lastName}}@endsection

@section('options')
<a class="dropdown-item" href="{{url('/staff')}}">
	Home
</a>
<a class="dropdown-item" href="{{route('staff.edit', Auth::user()->id)}}">
	Edit Profile
</a>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<div class="modal-header">
				<h5 class="mt-2">Profile Info</h5>
				<a class="btn-link link" href="{{route('staff.edit', Auth::user()->id)}}">
					<button class="mt-1 btn btn-sm btn-primary">Edit Profile</button>
				</a>
			</div>
			@if(session('success'))
			<div class="alert alert-success alert-dismissible fade show">
			<button class="close" data-dismiss="alert">&times;</button>
				{{session('success')}}
			</div>
			@endif
			<div class="modal-body">
				<div class="row mt-2">
					<div class="col-md-3">
						<img src="/img/staff/{{Auth::user()->avatar}}" class="img-responsive img-thumbnail"><br>
					</div>
					<div class="col-md-8 mt-3">
						<div class="row">
							<div class="col-md-4 form-group">
								<label for="created" class="font-weight-bold">Created :</label>
								<div class="">{{\Carbon\Carbon::parse(Auth::user()->created_at)->format('d-M-Y, (H:i T)')}}</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="updated" class="font-weight-bold">Updated :</label>
								<div class="">{{\Carbon\Carbon::parse(Auth::user()->updated_at)->format('d-M-Y, (H:i T)')}}</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 form-group">
								<label for="username" class="font-weight-bold">Username :</label>
								<div class="">{{Auth::user()->username}}</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="fullName" class="font-weight-bold">Full name :</label>
								<div class="">{{Auth::user()->firstName}}&nbsp;{{Auth::user()->lastName}}</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="email" class="font-weight-bold">Email address :</label>
								<div class="">{{Auth::user()->email}}</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 form-group">
								<label for="course" class="font-weight-bold">Prof. :</label>
								<div class="text-capitalize">{{Auth::user()->branch}}&nbsp;{{Auth::user()->stream}}</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="contact1" class="font-weight-bold">Primary contact :</label>
								<div class="">{{Auth::user()->contact1}}</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="contact2" class="font-weight-bold">Another contact :</label>
								<div class="">{{Auth::user()->contact2}}</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 form-group">
								<label for="course" class="font-weight-bold">Teaching :</label>
								<div class="text-capitalize">{{Auth::user()->teaching}}</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="birth" class="font-weight-bold">Birthdate :</label>
								<div class="">{{\Carbon\Carbon::parse(Auth::user()->birth)->format('d-M-Y')}}, {{\Carbon\Carbon::parse(Auth::user()->birth)->diffInYears()}} years</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="gender" class="font-weight-bold">Gender :</label>
								<div class="text-capitalize">{{Auth::user()->gender}}&nbsp;<i class="fa fa-{{Auth::user()->gender}}"></i></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 form-group">
								<label for="address" class="font-weight-bold">Residential Address :</label>
								<div class="text-capitalize">{{Auth::user()->address}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection
