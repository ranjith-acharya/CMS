@extends('layouts.custom-app')

@section('custom-title')
- Edit Info for {{$student->firstName}}@endsection

@section('content')
<div class="container">
	@if(session('success'))
		<div class="alert alert-success alert-dismissible fade show">
		<button class="close" data-dismiss="alert">&times;</button>
			{{session('success')}}
		</div>
	@endif
	@if(session('error'))
		<div class="alert alert-danger alert-dismissible fade show">
		<button class="close" data-dismiss="alert">&times;</button>
			{{session('error')}}
		</div>
	@endif
	<div class="col-md-12">
		<h5 class="modal-header font-weight-bold mb-4">
			<a href="{{action('StudentController@show', $student->id)}}" class="link">{{$student->firstName}} {{$student->lastName}}</a>
			<span class="float-right">{{$student->admissionNo}}</span>
		</h5>
		<form class="form" method="post" action="{{action('StudentController@update', $student->id)}}" enctype="multipart/form-data">
			@csrf <input type="hidden" name="_method" value="PATCH">
			<div class="row">
				<div class="form-group col-md-3">
					<label for="firstName" class="font-weight-bold">First Name :</label>
					<input type="text" name="firstName" class="form-control" value="{{$student->firstName}}">
				</div>
				<div class="form-group col-md-3">
					<label for="fatherName" class="font-weight-bold">Father Name :</label>
					<input type="text" name="fatherName" class="form-control" value="{{$student->fatherName}}">
				</div>
				<div class="form-group col-md-3">
					<label for="motherName" class="font-weight-bold">Mother Name :</label>
					<input type="text" name="motherName" class="form-control" value="{{$student->motherName}}">
				</div>
				<div class="form-group col-md-3">
					<label for="lastName" class="font-weight-bold">Last Name :</label>
					<input type="text" name="lastName" class="form-control" value="{{$student->lastName}}">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-12">
					<label for="address" class="font-weight-bold">Full Address :</label>
					<textarea name="address" class="form-control" value="{{$student->address}}">{{$student->address}}</textarea>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="contact1" class="font-weight-bold">Primary Contact :</label>
					<input type="text" name="contact1" class="form-control" value="{{$student->contact1}}">
				</div>
				<div class="form-group col-md-4">
					<label for="contact2" class="font-weight-bold">Another Contact :</label>
					<input type="text" name="contact2" class="form-control" value="{{$student->contact2}}">
				</div>
				<div class="form-group col-md-4">
					<label for="avatar" class="font-weight-bold">Avatar :</label>
					<input type="file" name="avatar" class="form-control" value="{{$student->avatar}}" accept="image/*">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="branch" class="font-weight-bold">Branch :</label>
					<select name="branch" class="form-control">
						<option value="">-- Select branch --</option>
						<option value="automobile engineering" @if($student->branch == "automobile engineering")selected @endif >Automobile Engineering</option>
						<option value="computer engineering" @if($student->branch == "computer engineering")selected @endif >Computer Engineering</option>
						<option value="electronics engineering" @if($student->branch == "electronics engineering")selected @endif >Electronics Engineering</option>
						<option value="electronics & telecommunication" @if($student->branch == "electronics & telecommunication")selected @endif >Electronics & Telecommunication</option>
						<option value="information technology" @if($student->branch == "information technology")selected @endif >Information Technology</option>
						<option value="mechanical engineering" @if($student->branch == "mechanical engineering")selected @endif >Mechanical Engineering</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="year" class="font-weight-bold">Year :</label>
					<select class="form-control" name="year">
						<option value="">-- Select year --</option>
						<option value="F.E" @if($student->year == "F.E")selected @endif >First Year(F.E)</option>
						<option value="S.E" @if($student->year == "S.E")selected @endif >Second Year(S.E)</option>
						<option value="T.E" @if($student->year == "T.E")selected @endif >Third Year(T.E)</option>
						<option value="B.E" @if($student->year == "B.E")selected @endif >Final Year(B.E)</option>
					</select>
				</div>
				<div class="form-group col-md-4"><br>
					<input type="submit" value="Save Changes" class="btn btn-success btn-sm">
					<input type="reset" value="Reset" class="btn btn-danger btn-sm">
					<a href="{{action('StudentController@show', $student->id)}}"><input type="button" value="Back" class="btn btn-primary btn-sm"></a>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection