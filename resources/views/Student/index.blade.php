@extends('layouts.custom-StudentApp')

@section('custom-title')
- Welcome {{Auth::user()->firstName}} {{Auth::user()->lastName}}@endsection

@section('content')
<div class="container">
	<h5 class="modal-header font-weight-bold text-capitalize mb-4">
		Pillai College of Engineering
		<span class="float-right text-capitalize">new panvel</span>
	</h5>
	<div class="row">
		<div class="col-md-3 mb-1">
			<img src="img/avatar/student/{{Auth::user()->avatar}}" class="img-responsive img-thumbnail" height="180px" width="180px">
			<br><br><a href=""><button class="mb-1 btn btn-sm btn-primary">Update</button></a>
		</div>
		<div class="col-md-7">
			<div class="row">
				<div class="col-md-6">
					<label for="admissionNo" class="font-weight-bold">Admission No. :</label>
					<div class="form-group">{{Auth::user()->admissionNo}}</div>
				</div>
				<div class="col-md-6">
					<label for="email" class="font-weight-bold">Email Address :</label>
					<div class="form-group">{{Auth::user()->email}}</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label for="firstNLastName" class="font-weight-bold">First Name :</label>
					<div class="form-group">{{Auth::user()->firstName}} {{Auth::user()->lastName}}</div>
				</div>
				<div class="col-md-3">
					<label for="fatherName" class="font-weight-bold">Father Name :</label>
					<div class="form-group">{{Auth::user()->fatherName}}</div>
				</div>
				<div class="col-md-3">
					<label for="motherName" class="font-weight-bold">Mother Name :</label>
					<div class="form-group">{{Auth::user()->motherName}}</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label for="contact1" class="font-weight-bold">Primary Contact :</label>
					<div class="form-group">+91 {{Auth::user()->contact1}}</div>
				</div>
				<div class="col-md-6">
					<label for="contact2" class="font-weight-bold">Another Contact :</label>
					<div class="form-group">+91 {{Auth::user()->contact2}}</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label for="address" class="font-weight-bold">Residential Address :</label>
					<div class="form-group text-capitalize">{{Auth::user()->address}}</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label for="birth" class="font-weight-bold">Date of Birth :</label>
					<div class="form-group">{{ Carbon\Carbon::parse(Auth::user()->birth)->format('d-m-Y') }}, {{Auth::user()->age}} years</div>
				</div>
				<div class="col-md-6">
					<label for="gender" class="font-weight-bold">Gender :</label>
					<div class="form-group">{{Auth::user()->gender}}</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label for="year" class="font-weight-bold">Current Year :</label>
					<div class="form-group">{{Auth::user()->year}}</div>
				</div>
				<div class="col-md-6">
					<label for="branch" class="font-weight-bold">Branch :</label>
					<div class="form-group text-capitalize">{{Auth::user()->branch}}</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection