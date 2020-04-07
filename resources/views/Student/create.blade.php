@extends('layouts.custom-app')

@section('custom-title') New Record for Student @endsection

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
				<h5 class="mt-2">New - Student</h5>
				<a class="btn-link link" href="{{route('home.index')}}">
					<button type="button" class="btn btn-sm btn-primary float-right">Home</button>
				</a>
			</div>
			@if(session('success'))
			<div class="alert alert-success alert-dismissible fade show">
			<button class="close" data-dismiss="alert">&times;</button>
				{{session('success')}}
			</div>
			@endif
			<div class="card-body">
				<form class="form" method="POST" enctype="multipart/form-data" action="{{route('students.store')}}">
					@csrf<div class="row">
						<div class="col-md-4 form-group">
							<label for="admissionNo" class="font-weight-bold">Admission no :</label>
							<input type="text" name="admissionNo" id="admissionNo" placeholder="Admission number" class="form-control" value="{{old('admissionNo')}}">
							@error('admissionNo')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
						<div class="col-md-4 form-group">
							<label for="firstName" class="font-weight-bold">First name :</label>
							<input type="text" name="firstName" id="firstName" placeholder="First name" class="form-control" value="{{old('firstName')}}">
							@error('firstName')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
						<div class="col-md-4 form-group">
							<label for="lastName" class="font-weight-bold">Last name :</label>
							<input type="text" name="lastName" id="lastName" placeholder="Last name" class="form-control" value="{{old('lastName')}}">
							@error('lastName')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 form-group">
							<label for="email" class="font-weight-bold">Email address :</label>
							<input type="email" name="email" id="email" placeholder="Email address" class="form-control" value="{{old('email')}}">
							@error('email')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
						<div class="col-md-3 form-group">
							<label for="contact1" class="font-weight-bold">Primary contact :</label>
							<input type="text" name="contact1" id="contact1" placeholder="Primary contact" class="form-control" maxlength="10"  value="{{old('contact1')}}">
							@error('contact1')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
						<div class="col-md-3 form-group">
							<label for="contact2" class="font-weight-bold">Another contact :</label>
							<input type="text" name="contact2" id="contact2" placeholder="Another contact" class="form-control" maxlength="10" value="{{old('contact2')}}">
							@error('contact2')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
						<div class="col-md-3 form-group">
							<label for="gender" class="font-weight-bold">Gender :</label>
							<select name="gender" id="gender" class="form-control custom-select">
								<option value="">-- Select gender --</option>
								<option value="female">Female</option>
								<option value="male">Male</option>
							</select>
							@error('gender')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 form-group">
							<label for="birth" class="font-weight-bold">Birthdate :</label>
							<input type="date" name="birth" id="birth" class="form-control">
							@error('birth')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
						<div class="col-md-4 form-group">
							<label for="branch" class="font-weight-bold">Branch :</label>
							<select name="branch" id="branch" class="form-control custom-select">
								<option value="">-- Select branch --</option>
								<option value="automobile">Automobile</option>
								<option value="computer">Computer</option>
								<option value="electronics & telecommunication">Electronics & Telecommunication</option>
								<option value="electronics">Electronics</option>
								<option value="information">Information</option>
								<option value="mechanical">Mechanical</option>
							</select>
							@error('branch')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
						<div class="col-md-4 form-group">
							<label for="year" class="font-weight-bold">Year :</label>
							<select name="year" id="year" class="form-control custom-select">
								<option value="">-- Select year --</option>
								<option value="F.E.">First year</option>
								<option value="S.E.">Second year</option>
								<option value="T.E.">Third year</option>
								<option value="B.E.">Final year</option>
							</select>
							@error('year')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 form-group">
							<label for="address" class="font-weight-bold">Address :</label>
							<textarea type="text" name="address" id="address" placeholder="Address" class="form-control" value="{{old('address')}}">{{old('address')}}</textarea>
							@error('address')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
						<div class="col-md-4 form-group">
							<label for="avatar" class="font-weight-bold">Avatar :</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="customFile" name="avatar" accept="image/*">
								<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
							@error('avatar')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
						<div class="col-md-4 form-group">
							<input type="submit" id="submit" class="mt-4 btn btn-sm btn-success" value="Save">
							<input type="reset" id="reset" class="mt-4 btn btn-sm btn-danger" value="Cancel">
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
</div>
@endsection
