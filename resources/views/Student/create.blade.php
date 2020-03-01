@extends('layouts.custom-app')

@section('custom-title')
- Add New Student @endsection

@section('content')
<div class="container">
	<div class="col-md-12">
		<h5 class="modal-header">Add New Student</h5><br>
		<form class="form" method="post" enctype="multipart/form-data" action="{{action('StudentController@store')}}">
			@csrf<div class="row">
				<div class="col-md-3 form-group">
					<label for="firstName" class="font-weight-bold">First name</label>
					<input type="text" name="firstName" placeholder="First name" class="form-control" required>
				</div>
				<div class="col-md-3 form-group">
					<label for="fatherName" class="font-weight-bold">Father name</label>
					<input type="text" name="fatherName" placeholder="Father name" class="form-control" required>
				</div>
				<div class="col-md-3 form-group">
					<label for="motherName" class="font-weight-bold">Mother name</label>
					<input type="text" name="motherName" placeholder="Mother name" class="form-control" required>
				</div>
				<div class="col-md-3 form-group">
					<label for="lastName" class="font-weight-bold">Last name</label>
					<input type="text" name="lastName" placeholder="Last name" class="form-control" required>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group">
					<label for="admissionNo" class="font-weight-bold">Admission No.</label>
					<input type="text" name="admissionNo" placeholder="Admission No." class="form-control" required>
				</div>
				<div class="col-md-6 form-group">
					<label for="email" class="font-weight-bold">Email address</label>
					<input type="email" name="email" placeholder="Email address" class="form-control" required>
				</div>
				<!--<div class="col-md-4 form-group">
					<label for="password" class="font-weight-bold">New password</label>
					<input type="password" name="password" placeholder="New password" class="form-control" required>
				</div>-->
			</div>
			<div class="row">
				<div class="col-md-12 form-group">
					<label for="address" class="font-weight-bold">Address</label>
					<textarea name="address" placeholder="Address" class="form-control" required></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 form-group">
					<label for="contact1" class="font-weight-bold">Primary contact</label>
					<input type="text" name="contact1" placeholder="Primary contact" class="form-control" maxlength="10" required>
				</div>
				<div class="col-md-3 form-group">
					<label for="contact2" class="font-weight-bold">Another contact</label>
					<input type="text" name="contact2" placeholder="Another contact" class="form-control" maxlength="10" required>
				</div>
				<div class="col-md-3 form-group">
					<label for="birth" class="font-weight-bold">Birthdate</label>
					<input type="date" name="birth" placeholder="Birthdate" class="form-control" required>
				</div>
				<div class="col-md-3 form-group">
					<label for="gender" class="font-weight-bold">Gender</label>
					<select class="form-control" name="gender" required>
						<option value="">-- Select gender --</option>
						<option value="Female">Female</option>
						<option value="Male">Male</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 form-group">
					<label for="branch" class="font-weight-bold">Branch</label>
					<select class="form-control" name="branch" required>
						<option value="">-- Select branch --</option>
						<option value="automobile engineering">Automobile Engineering</option>
						<option value="computer engineering">Computer Engineering</option>
						<option value="electronics engineering">Electronics Engineering</option>
						<option value="electronics & telecommunication">Electronics & Telecommunication</option>
						<option value="information technology">Information Technology</option>
						<option value="mechanical engineering">Mechanical Engineering</option>
					</select>
				</div>
				<div class="col-md-3 form-group">
					<label for="year" class="font-weight-bold">Year</label>
					<select class="form-control" name="year" required>
						<option value="">-- Select year --</option>
						<option value="F.E">First Year(F.E)</option>
						<option value="S.E">Second Year(S.E)</option>
						<option value="T.E">Third Year(T.E)</option>
						<option value="B.E">Final Year(B.E)</option>
					</select>
				</div>
				<div class="col-md-3 form-group">
					<label for="avatar" class="font-weight-bold">Avatar</label>
					<input type="file" name="avatar" placeholder="Avatar" class="form-control" accept="image/*" required>
				</div>
				<div class="col-md-3 form-group"><br>
					<input type="submit" class="btn btn-success" value="Save">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
