@extends('layouts.custom-app')

@section('custom-title')
- Add Results @endsection

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
		<h5 class="modal-header font-weight-bold">
			<a href="{{action('StudentController@show', $student->id)}}">{{$student->firstName}} {{$student->lastName}}</a>
			<span class="float-right text-uppercase">{{$student->admissionNo}}</span>
		</h5>
		<h5 class="mb-3"><span class="font-weight-bold">Current Year</span> : {{$student->year}} <span class="text-capitalize">{{$student->branch}}</span></h5>
		<h6 class="font-weight-bold">
			<q>Here, in these Section you can select Semester to add Results in it for the above Student.</q>
		</h6><br>
		<form class="form" method="post" action="{{action('Sem\Sem3Controller@store')}}">
		<div class="form-group" style="display:none;"><input type="text" name="admissionNo" value="{{$student->admissionNo}}" readonly class="form-control"></div>
		@csrf<div class="row">
			<div class="col-md-4 form-group">
				<label for="external1" class="font-weight-bold">Select Subj 1</label>
				<select class="form-control mb-2" name="extSub1" required>
					<option value="">-- Select Subject --</option>
					<optgroup label="Computer" value="">
						<option value="Applied Mathematics - 3">Applied Mathematics - 3</option>
						<option value="Objected Oriented Programming Methodology">Objected Oriented Programming Methodology</option>
						<option value="Data Structures">Data Structures</option>
						<option value="Digital Logic Design & Analysis">Digital Logic Design & Analysis</option>
						<option value="Discrete Structures">Discrete Structures</option>
						<option value="Electronic Circuits & Communication Fundamentals">Electronic Circuits & Communication Fundamentals</option>
					</optgroup>
				</select>
			</div>
			<div class="col-md-4 form-group">
				<label for="external1" class="font-weight-bold">External Marks</label>
				<input type="text" name="extSubMark1" class="form-control" placeholder="Marks Obtained" maxlength="2" required>
			</div>
			<div class="col-md-4 form-group">
				<label for="internal1" class="font-weight-bold">Internal Marks</label>
				<input type="text" name="intSubMark1" class="form-control" placeholder="Marks Obtained" maxlength="2" required>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4 form-group">
				<label for="external2" class="font-weight-bold">Select Subj 2</label>
				<select class="form-control mb-2" name="extSub2" required>
					<option value="">-- Select Subject --</option>
					<optgroup label="Computer" value="">
						<option value="Applied Mathematics - 3">Applied Mathematics - 3</option>
						<option value="Objected Oriented Programming Methodology">Objected Oriented Programming Methodology</option>
						<option value="Data Structures">Data Structures</option>
						<option value="Digital Logic Design & Analysis">Digital Logic Design & Analysis</option>
						<option value="Discrete Structures">Discrete Structures</option>
						<option value="Electronic Circuits & Communication Fundamentals">Electronic Circuits & Communication Fundamentals</option>
					</optgroup>
				</select>
			</div>
			<div class="col-md-4 form-group">
				<label for="external2" class="font-weight-bold">External Marks</label>
				<input type="text" name="extSubMark2" class="form-control" placeholder="Marks Obtained" maxlength="2" required>
			</div>
			<div class="col-md-4 form-group">
				<label for="internal2" class="font-weight-bold">Internal Marks</label>
				<input type="text" name="intSubMark2" class="form-control" placeholder="Marks Obtained" maxlength="2" required>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4 form-group">
				<label for="external3" class="font-weight-bold">Select Subj 3</label>
				<select class="form-control mb-2" name="extSub3" required>
					<option value="">-- Select Subject --</option>
					<optgroup label="Computer" value="">
						<option value="Applied Mathematics - 3">Applied Mathematics - 3</option>
						<option value="Objected Oriented Programming Methodology">Objected Oriented Programming Methodology</option>
						<option value="Data Structures">Data Structures</option>
						<option value="Digital Logic Design & Analysis">Digital Logic Design & Analysis</option>
						<option value="Discrete Structures">Discrete Structures</option>
						<option value="Electronic Circuits & Communication Fundamentals">Electronic Circuits & Communication Fundamentals</option>
					</optgroup>
				</select>
			</div>
			<div class="col-md-4 form-group">
				<label for="external3" class="font-weight-bold">External Marks</label>
				<input type="text" name="extSubMark3" class="form-control" placeholder="Marks Obtained" maxlength="2" required>
			</div>
			<div class="col-md-4 form-group">
				<label for="internal1" class="font-weight-bold">Internal Marks</label>
				<input type="text" name="intSubMark3" class="form-control" placeholder="Marks Obtained" maxlength="2" required>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4 form-group">
				<label for="external4" class="font-weight-bold">Select Subj 4</label>
				<select class="form-control mb-2" name="extSub4" required>
					<option value="">-- Select Subject --</option>
					<optgroup label="Computer" value="">
						<option value="Applied Mathematics - 3">Applied Mathematics - 3</option>
						<option value="Objected Oriented Programming Methodology">Objected Oriented Programming Methodology</option>
						<option value="Data Structures">Data Structures</option>
						<option value="Digital Logic Design & Analysis">Digital Logic Design & Analysis</option>
						<option value="Discrete Structures">Discrete Structures</option>
						<option value="Electronic Circuits & Communication Fundamentals">Electronic Circuits & Communication Fundamentals</option>
					</optgroup>
				</select>
			</div>
			<div class="col-md-4 form-group">
				<label for="external4" class="font-weight-bold">External Marks</label>
				<input type="text" name="extSubMark4" class="form-control" placeholder="Marks Obtained" maxlength="2" required>
			</div>
			<div class="col-md-4 form-group">
				<label for="internal4" class="font-weight-bold">Internal Marks</label>
				<input type="text" name="intSubMark4" class="form-control" placeholder="Marks Obtained" maxlength="2" required>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4 form-group">
				<label for="external5" class="font-weight-bold">Select Subj 5</label>
				<select class="form-control mb-2" name="extSub5" required>
					<option value="">-- Select Subject --</option>
					<optgroup label="Computer" value="">
						<option value="Applied Mathematics - 3">Applied Mathematics - 3</option>
						<option value="Objected Oriented Programming Methodology">Objected Oriented Programming Methodology</option>
						<option value="Data Structures">Data Structures</option>
						<option value="Digital Logic Design & Analysis">Digital Logic Design & Analysis</option>
						<option value="Discrete Structures">Discrete Structures</option>
						<option value="Electronic Circuits & Communication Fundamentals">Electronic Circuits & Communication Fundamentals</option>
					</optgroup>
				</select>
			</div>
			<div class="col-md-4 form-group">
				<label for="external5" class="font-weight-bold">External Marks</label>
				<input type="text" name="extSubMark5" class="form-control" placeholder="Marks Obtained" maxlength="2" required>
			</div>
			<div class="col-md-4 form-group">
				<label for="internal5" class="font-weight-bold">Internal Marks</label>
				<input type="text" name="intSubMark5" class="form-control" placeholder="Marks Obtained" maxlength="2" required>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4 form-group">
				<label for="external6" class="font-weight-bold">Select Subj 6</label>
				<select class="form-control mb-2" name="extSub6" required>
					<option value="">-- Select Subject --</option>
					<optgroup label="Computer" value="">
						<option value="Applied Mathematics - 3">Applied Mathematics - 3</option>
						<option value="Objected Oriented Programming Methodology">Objected Oriented Programming Methodology</option>
						<option value="Data Structures">Data Structures</option>
						<option value="Digital Logic Design & Analysis">Digital Logic Design & Analysis</option>
						<option value="Discrete Structures">Discrete Structures</option>
						<option value="Electronic Circuits & Communication Fundamentals">Electronic Circuits & Communication Fundamentals</option>
					</optgroup>
				</select>
			</div>
			<div class="col-md-4 form-group">
				<label for="external6" class="font-weight-bold">External Marks</label>
				<input type="text" name="extSubMark6" class="form-control" placeholder="Marks Obtained" maxlength="2" required>
			</div>
			<div class="col-md-4 form-group">
				<label for="internal6" class="font-weight-bold">Internal Marks</label>
				<input type="text" name="intSubMark6" class="form-control" placeholder="Marks Obtained" maxlength="2" required>
			</div>
		</div>
		<div class="form-group float-right">
			<input type="submit" class="btn btn-sm btn-success" value="Save">
			<input type="reset" class="btn btn-sm btn-danger" value="Cancel">
		</div>
		</form>
	</div>
</div>
@endsection