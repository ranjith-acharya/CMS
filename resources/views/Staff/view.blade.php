@extends('layouts.custom-app')

@section('custom-title')
- {{$staff->firstName}} {{$staff->fatherName}} {{$staff->lastName}} @endsection

@section('content')
<div class="container">
	<div class="col-md-12">
		<h5 class="modal-header font-weight-bold mb-4">
			<a href="{{action('StaffController@show', $staff->id)}}" class="link">{{$staff->firstName}} {{$staff->lastName}}</a>
		</h5>
		<div class="row">
			<div class="col-md-3 mb-2">
				<img src="../../../img/avatar/staff/{{$staff->avatar}}" class="img-thumbnail img-responsive img-fluid" width="180px" height="180px">
			</div>
			<div class="col-md-7">
				<div class="row">
					<div class="col-md-6">
						<label for="fullName" class="font-weight-bold">Full Name :</label>
						<div class="form-group lead">{{$staff->firstName}} {{$staff->lastName}}</div>
					</div>
					<div class="col-md-3">
						<label for="fatherName" class="font-weight-bold">Father Name :</label>
						<div class="form-group lead">{{$staff->fatherName}}</div>
					</div>
					<div class="col-md-3">
						<label for="motherName" class="font-weight-bold">Mother Name :</label>
						<div class="form-group lead">{{$staff->motherName}}</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="email" class="font-weight-bold">Email :</label>
						<div class="form-group lead"><a href="mailto:{{$staff->email}}">{{$staff->email}}</a></div>
					</div>
					<div class="col-md-3">
						<label for="contact1" class="font-weight-bold">Primary Contact :</label>
						<div class="form-group lead"><a href="tel:+91{{$staff->contact1}}">{{$staff->contact1}}</a></div>
					</div>
					<div class="col-md-3">
						<label for="contact2" class="font-weight-bold">Another Contact :</label>
						<div class="form-group lead"><a href="tel:+91{{$staff->contact2}}">{{$staff->contact2}}</a></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="birth" class="font-weight-bold">Birthdate :</label>
						<div class="form-group lead">{{ \Carbon\Carbon::parse($staff->birth)->format('d-m-Y')}}, {{$staff->age}} years</div>
					</div>
					<div class="col-md-3">
						<label for="gender" class="font-weight-bold">Gender :</label>
						<div class="form-group lead">{{$staff->gender}}</div>
					</div>
					<div class="col-md-3">
						<label for="course" class="font-weight-bold">Teaching Sub. :</label>
						<div class="form-group lead"><span class="text-capitalize">{{$staff->subject}}</span></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="address" class="font-weight-bold">Full Address :</label>
						<div class="form-group lead text-capitalize">{{($staff->address)}}</div>
					</div>
					<div class="col-md-6">
						<label for="course" class="font-weight-bold">Teaching Branch :</label>
						<div class="form-group lead"><span class="text-capitalize">{{$staff->branch}}</span></div>
					</div>
				</div>
			</div>
		</div>
		<div class="float-right form-group lead">
			<a href="{{action('StaffController@edit', $staff->id)}}"><button type="button" class="btn btn-primary btn-sm">EDIT</button></a>
		</div>
	</div>
</div>
@endsection