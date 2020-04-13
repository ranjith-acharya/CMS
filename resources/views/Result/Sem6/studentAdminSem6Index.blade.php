@extends('layouts.custom-app')

@section('custom-title') Results Sem6 - {{$student->firstName}}&nbsp;{{$student->lastName}} @endsection

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
				<h5 class="mt-2">Sem6 - {{$student->admissionNo}}</h5>
				<a class="btn-link link mt-1" href="{{route('students.show', $student->id)}}">
					<button type="button" class="btn btn-sm btn-primary float-right">View</button>
				</a>
			</div>
			<div class="modal-body card-body">
				<ul class="nav nav-tabs nav-tabs-sm">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#sem6Int">Internal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#sem6Ext">External</a>
					</li>
				</ul>
				<div class="tab tab-content justify-content-center">
					<div class="tab-pane active mt-4" id="sem6Int">
						<h5 class="mb-4">Sem 6 </h5>
						<form method="post" class="form" action="">
							@csrf<input type="text" name="admissionNo" class="form-control" value="{{$student->admissionNo}}" hidden>
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="int1">Subj 1 :</label>
											<select name="int1" class="custom-select form-control">
												<optgroup label="Automobile">
													<option value="CBE">Chassis & Body Engg.</option>
													<option value="MD-1">Machine Design - 1</option>
													<option value="FEA">Finite Element Analysis</option>
													<option value="MV">Mechanical Vibrations</option>
												</optgroup>
												<optgroup label="Computer" selected>
													<option value="CSS">CSS</option>
													<option value="ACN">ACN</option>
												</optgroup>
											</select>
											@error('int1')
												{{$message}}
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int1mark">Subj 1 Mark :</label>
											<input type="text" name="int1mark" class="form-control">
											@error('int1mark')
												{{$message}}
											@enderror
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="int2">Subj 2 :</label>
											<select name="int2" class="custom-select form-control">
												<optgroup for="Computer">
													<option value="CSS">CSS</option>
													<option value="ACN">ACN</option>
												</optgroup>
											</select>
											@error('int2')
												{{$message}}
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int2mark">Subj 2 Mark :</label>
											<input type="text" name="int2mark" class="form-control">
											@error('int2mark')
												{{$message}}
											@enderror
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="int3">Subj 3 :</label>
											<select name="int3" class="custom-select form-control">
												<optgroup for="Computer">
													<option value="CSS">CSS</option>
													<option value="ACN">ACN</option>
												</optgroup>
											</select>
											@error('int3')
												{{$message}}
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int3mark">Subj 3 Mark :</label>
											<input type="text" name="int3mark" class="form-control">
											@error('int3mark')
												{{$message}}
											@enderror
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="int4">Subj 4 :</label>
											<select name="int4" class="custom-select form-control">
												<optgroup for="Computer">
													<option value="CSS">CSS</option>
													<option value="ACN">ACN</option>
												</optgroup>
											</select>
											@error('int4')
												{{$message}}
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int4mark">Subj 4 Mark :</label>
											<input type="text" name="int4mark" class="form-control">
											@error('int4mark')
												{{$message}}
											@enderror
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="int5">Subj 5 :</label>
											<select name="int5" class="custom-select form-control">
												<optgroup for="Computer">
													<option value="CSS">CSS</option>
													<option value="ACN">ACN</option>
												</optgroup>
											</select>
											@error('int5')
												{{$message}}
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int5mark">Subj 5 Mark :</label>
											<input type="text" name="int5mark" class="form-control">
											@error('int5mark')
												{{$message}}
											@enderror
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="int6">Subj 6 :</label>
											<select name="int6" class="custom-select form-control">
												<optgroup for="Computer">
													<option value="CSS">CSS</option>
													<option value="ACN">ACN</option>
												</optgroup>
											</select>
											@error('int6')
												{{$message}}
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int6mark">Subj 6 Mark :</label>
											<input type="text" name="int6mark" class="form-control">
											@error('int6mark')
												{{$message}}
											@enderror
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-sm btn-success" value="Save">
								<input type="reset" class="btn btn-sm btn-danger" value="Cancel">
							</div>
						</form>
					</div>
					<div class="tab-pane container fade" id="sem6Ext">
						daksjdhas
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection