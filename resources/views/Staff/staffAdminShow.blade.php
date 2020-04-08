@extends('layouts.custom-app')

@section('custom-title') Profile - {{$staff->firstName}}&nbsp;{{$staff->lastName}} @endsection

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
				<h5 class="mt-2">Profile Info</h5>
				<div class="dropdown mt-1">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{route('staffs.index')}}">Home</a>
						<a class="dropdown-item" href="{{route('staffs.edit', $staff->id)}}">Edit</a>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<div class="row mt-2">
					<div class="col-md-3">
						<img src="/img/staff/{{$staff->avatar}}" class="img-responsive img-thumbnail"><br>
						<a class="btn-link link" href="{{route('staffs.edit', $staff->id)}}"><button class="mt-3 btn btn-sm btn-primary">Edit Profile</button></a>
					</div>
					<div class="col-md-8 mt-3">
						<div class="row">
							<div class="col-md-4 form-group">
								<label for="created" class="font-weight-bold">Created :</label>
								<div class="">{{\Carbon\Carbon::parse($staff->created_at)->format('d-M-Y, (H:i T)')}}</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="updated" class="font-weight-bold">Updated :</label>
								<div class="">{{\Carbon\Carbon::parse($staff->updated_at)->format('d-M-Y, (H:i T)')}}</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 form-group">
								<label for="Username" class="font-weight-bold">Username :</label>
								<div class="">{{$staff->username}}</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="fullName" class="font-weight-bold">Full name :</label>
								<div class="">{{$staff->firstName}}&nbsp;{{$staff->lastName}}</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="email" class="font-weight-bold">Email address :</label>
								<div class=""><a class="link" href="mailto:{{$staff->email}}">{{$staff->email}}</a></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 form-group">
								<label for="Prof" class="font-weight-bold">Prof. :</label>
								<div class="text-capitalize">{{$staff->branch}}&nbsp;{{$staff->stream}}</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="contact1" class="font-weight-bold">Primary contact :</label>
								<div class=""><a class="link" href="tel:+91{{$staff->contact1}}">{{$staff->contact1}}</a></div>
							</div>
							<div class="col-md-4 form-group">
								<label for="contact2" class="font-weight-bold">Another contact :</label>
								<div class=""><a class="link" href="tel:+91{{$staff->contact2}}">{{$staff->contact2}}</a></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 form-group">
								<label for="teaching" class="font-weight-bold">Teaching :</label>
								<div class="text-capitalize">{{$staff->teaching}}</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="birth" class="font-weight-bold">Birthdate :</label>
								<div class="">{{\Carbon\Carbon::parse($staff->birth)->format('d-M-Y')}}, {{\Carbon\Carbon::parse($staff->birth)->diffInYears()}} years</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="gender" class="font-weight-bold">Gender :</label>
								<div class="text-capitalize">{{$staff->gender}}&nbsp;<i class="fa fa-{{$staff->gender}}"></i></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 form-group">
								<label for="address" class="font-weight-bold">Residential Address :</label>
								<div class="text-capitalize">{{$staff->address}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection
