@extends('layouts.custom-app')

@section('custom-title') Profile - {{$student->firstName}}&nbsp;{{$student->lastName}} @endsection

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
						<a class="dropdown-item" href="{{route('students.index')}}">Home</a>
						<a class="dropdown-item" href="{{route('students.edit', $student->id)}}">Edit</a>
						<a class="dropdown-item" href="{{route('results.index', $student->id)}}">Results</a>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<div class="row mt-2">
					<div class="col-md-3">
						<img src="/img/student/{{$student->avatar}}" class="img-responsive img-thumbnail"><br>
						<a class="btn-link link" href="{{route('students.edit', $student->id)}}"><button class="mt-3 btn btn-sm btn-primary">Edit Profile</button></a>
					</div>
					<div class="col-md-8 mt-3">
						<div class="row">
							<div class="col-md-4 form-group">
								<label for="created" class="font-weight-bold">Created :</label>
								<div class="">{{\Carbon\Carbon::parse($student->created_at)->format('d-M-Y, (H:i T)')}}</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="updated" class="font-weight-bold">Updated :</label>
								<div class="">{{\Carbon\Carbon::parse($student->updated_at)->format('d-M-Y, (H:i T)')}}</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 form-group">
								<label for="admissionNo" class="font-weight-bold">Admission no :</label>
								<div class="">{{$student->admissionNo}}</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="fullName" class="font-weight-bold">Full name :</label>
								<div class="">{{$student->firstName}}&nbsp;{{$student->lastName}}</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="email" class="font-weight-bold">Email address :</label>
								<div class=""><a class="link" href="mailto:{{$student->email}}">{{$student->email}}</a></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 form-group">
								<label for="course" class="font-weight-bold">Course :</label>
								<div class="text-capitalize">{{$student->year}}&nbsp;{{$student->branch}}&nbsp;{{$student->stream}}</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="contact1" class="font-weight-bold">Primary contact :</label>
								<div class=""><a class="link" href="tel:+91{{$student->contact1}}">{{$student->contact1}}</a></div>
							</div>
							<div class="col-md-4 form-group">
								<label for="contact2" class="font-weight-bold">Another contact :</label>
								<div class=""><a class="link" href="tel:+91{{$student->contact2}}">{{$student->contact2}}</a></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 form-group">
								<label for="birth" class="font-weight-bold">Birthdate :</label>
								<div class="">{{\Carbon\Carbon::parse($student->birth)->format('d-M-Y')}}, {{\Carbon\Carbon::parse($student->birth)->diffInYears()}} years</div>
							</div>
							<div class="col-md-4 form-group">
								<label for="gender" class="font-weight-bold">Gender :</label>
								<div class="text-capitalize">{{$student->gender}}&nbsp;<i class="fa fa-{{$student->gender}}"></i></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 form-group">
								<label for="address" class="font-weight-bold">Residential Address :</label>
								<div class="text-capitalize">{{$student->address}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection
