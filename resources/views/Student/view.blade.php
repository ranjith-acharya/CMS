@extends('layouts.custom-app')

@section('custom-title')
- {{$student->firstName}} {{$student->fatherName}} {{$student->lastName}} @endsection

@section('content')
<div class="container">
	<div class="col-md-12">
		<h5 class="modal-header font-weight-bold mb-4">{{$student->firstName}} {{$student->lastName}}
			<span class="float-right">{{$student->admissionNo}}</span>
		</h5>
		<div class="row">
			<div class="col-md-3 mb-2">
				<img src="../../../img/avatar/student/{{$student->avatar}}" class="img-thumbnail img-responsive img-fluid" width="180px" height="180px">
			</div>
			<div class="col-md-7">
				<div class="row">
					<div class="col-md-6">
						<label for="fullName" class="font-weight-bold">Full Name :</label>
						<div class="form-group lead">{{$student->firstName}} {{$student->lastName}}</div>
					</div>
					<div class="col-md-3">
						<label for="fatherName" class="font-weight-bold">Father Name :</label>
						<div class="form-group lead">{{$student->fatherName}}</div>
					</div>
					<div class="col-md-3">
						<label for="motherName" class="font-weight-bold">Mother Name :</label>
						<div class="form-group lead">{{$student->motherName}}</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="email" class="font-weight-bold">Email :</label>
						<div class="form-group lead">{{$student->email}}</div>
					</div>
					<div class="col-md-3">
						<label for="contact1" class="font-weight-bold">Primary Contact :</label>
						<div class="form-group lead">{{$student->contact1}}</div>
					</div>
					<div class="col-md-3">
						<label for="contact2" class="font-weight-bold">Another Contact :</label>
						<div class="form-group lead">{{$student->contact2}}</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="birth" class="font-weight-bold">Birthdate :</label>
						<div class="form-group lead">{{ \Carbon\Carbon::parse($student->birth)->format('d-m-Y')}}, {{$student->age}} years</div>
					</div>
					<div class="col-md-6">
						<label for="gender" class="font-weight-bold">Gender :</label>
						<div class="form-group lead">{{$student->gender}}</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="address" class="font-weight-bold">Address :</label>
						<div class="form-group lead text-capitalize">{{($student->address)}}</div>
					</div>
					<div class="col-md-6">
						<label for="course" class="font-weight-bold">Course :</label>
						<div class="form-group lead">{{$student->year}} <span class="text-capitalize">{{$student->branch}}</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection