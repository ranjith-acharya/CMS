@extends('layouts.custom-app')

@section('custom-title') Sem1 Result - {{$student->admissionNo}} @endsection

@section('options')
<a class="dropdown-item" href="{{url('/home')}}">
	Home
</a>
<a class="dropdown-item" href="{{action('HomeController@show', Auth::user()->id)}}">
	Profile
</a>
@endsection

@section('content')
<div class="container pb-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<div class="modal-header">
				<h5 class="mt-2">Sem1 - {{$student->admissionNo}}</h5>
				<div class="dropdown mt-1">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{route('students.show', $student->id)}}">View</a>
						<a class="dropdown-item" href="{{route('results.index', $student->id)}}">Results Index</a>
					</div>
				</div>
			</div>
			@if(session('success'))
			<div class="alert alert-success alert-dismissible fade show">
			<button class="close" data-dismiss="alert">&times;</button>
				{{session('success')}}
			</div>
			@endif
			<div class="modal-body card-body">
				<ul class="nav nav-tabs nav-tabs-sm">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#sem1Int">Internal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#sem1Ext">External</a>
					</li>
				</ul>
				<div class="tab tab-content justify-content-center">
					<div class="tab-pane active mt-4" id="sem1Int">
						<h5 class="mb-4">Sem 1 Internal {{$student->branch}}</h5>
						<form method="post" class="form" action="{{action('Sem1\StudentAdminSem1Int@store')}}">
							@csrf<input type="text" name="admissionNo" class="form-control" value="{{$student->admissionNo}}" hidden>
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="int1">Subj 1 :</label>
											<select name="int1" class="custom-select form-control">
												<option value="">-- Select Internal Subj. --</option>
												<optgroup label="Common Year">
													<option value="Applied Chemistry - 1">Applied Chemistry - 1 (AC-1)</option>
													<option value="Applied Mathematics - 1">Applied Mathematics - 1 (AM-1)</option>
													<option value="Applied Physics - 1">Applied Physics - 1 (AP-1)</option>
													<option value="Basic Electrical Engg.">Basic Electrical Engg. (BEE)</option>
													<option value="Engg. Mechanics">Enginnering Mechanics (EM)</option>
													<option value="Environmental Studies">Environmental Studies (EVS)</option>
												</optgroup>
											</select>
											@error('int1')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int1mark">Subj 1 Mark :</label>
											<input type="text" name="int1mark" id="int1mark" class="form-control key" placeholder="Enter subject 1 mark">
											@error('int1mark')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="int2">Subj 2 :</label>
											<select name="int2" class="custom-select form-control">
												<option value="">-- Select Internal Subj. --</option>
												<optgroup label="Common Year">
													<option value="Applied Chemistry - 1">Applied Chemistry - 1 (AC-1)</option>
													<option value="Applied Mathematics - 1">Applied Mathematics - 1 (AM-1)</option>
													<option value="Applied Physics - 1">Applied Physics - 1 (AP-1)</option>
													<option value="Basic Electrical Engg.">Basic Electrical Engg. (BEE)</option>
													<option value="Engg. Mechanics">Enginnering Mechanics (EM)</option>
													<option value="Environmental Studies">Environmental Studies (EVS)</option>
												</optgroup>
											</select>
											@error('int2')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int2mark">Subj 2 Mark :</label>
											<input type="text" name="int2mark" id="int2mark" class="form-control key" placeholder="Enter subject 2 mark">
											@error('int2mark')
												<span class="text-danger">{{$message}}</span>
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
												<option value="">-- Select Internal Subj. --</option>
												<optgroup label="Common Year">
													<option value="Applied Chemistry - 1">Applied Chemistry - 1 (AC-1)</option>
													<option value="Applied Mathematics - 1">Applied Mathematics - 1 (AM-1)</option>
													<option value="Applied Physics - 1">Applied Physics - 1 (AP-1)</option>
													<option value="Basic Electrical Engg.">Basic Electrical Engg. (BEE)</option>
													<option value="Engg. Mechanics">Enginnering Mechanics (EM)</option>
													<option value="Environmental Studies">Environmental Studies (EVS)</option>
												</optgroup>
											</select>
											@error('int3')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int3mark">Subj 3 Mark :</label>
											<input type="text" name="int3mark" id="int3mark" class="form-control key" placeholder="Enter subject 3 mark">
											@error('int3mark')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="int4">Subj 4 :</label>
											<select name="int4" class="custom-select form-control">
												<option value="">-- Select Internal Subj. --</option>
												<optgroup label="Common Year">
													<option value="Applied Chemistry - 1">Applied Chemistry - 1 (AC-1)</option>
													<option value="Applied Mathematics - 1">Applied Mathematics - 1 (AM-1)</option>
													<option value="Applied Physics - 1">Applied Physics - 1 (AP-1)</option>
													<option value="Basic Electrical Engg.">Basic Electrical Engg. (BEE)</option>
													<option value="Engg. Mechanics">Enginnering Mechanics (EM)</option>
													<option value="Environmental Studies">Environmental Studies (EVS)</option>
												</optgroup>
											</select>
											@error('int4')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int4mark">Subj 4 Mark :</label>
											<input type="text" name="int4mark" id="int4mark" class="form-control key" placeholder="Enter subject 4 mark">
											@error('int4mark')
												<span class="text-danger">{{$message}}</span>
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
												<option value="">-- Select Internal Subj. --</option>
												<optgroup label="Common Year">
													<option value="Applied Chemistry - 1">Applied Chemistry - 1 (AC-1)</option>
													<option value="Applied Mathematics - 1">Applied Mathematics - 1 (AM-1)</option>
													<option value="Applied Physics - 1">Applied Physics - 1 (AP-1)</option>
													<option value="Basic Electrical Engg.">Basic Electrical Engg. (BEE)</option>
													<option value="Engg. Mechanics">Enginnering Mechanics (EM)</option>
													<option value="Environmental Studies">Environmental Studies (EVS)</option>
												</optgroup>
											</select>
											@error('int5')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int5mark">Subj 5 Mark :</label>
											<input type="text" name="int5mark" id="int5mark" class="form-control key" placeholder="Enter subject 5 mark">
											@error('int5mark')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="int6">Subj 6 :</label>
											<select name="int6" class="custom-select form-control">
												<option value="">-- Select Internal Subj. --</option>
												<optgroup label="Common Year">
													<option value="Applied Chemistry - 1">Applied Chemistry - 1 (AC-1)</option>
													<option value="Applied Mathematics - 1">Applied Mathematics - 1 (AM-1)</option>
													<option value="Applied Physics - 1">Applied Physics - 1 (AP-1)</option>
													<option value="Basic Electrical Engg.">Basic Electrical Engg. (BEE)</option>
													<option value="Engg. Mechanics">Enginnering Mechanics (EM)</option>
													<option value="Environmental Studies">Environmental Studies (EVS)</option>
												</optgroup>
											</select>
											@error('int6')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int6mark">Subj 6 Mark :</label>
											<input type="text" name="int6mark" id="int6mark" class="form-control key" placeholder="Enter subject 6 mark">
											@error('int6mark')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<input type="text" name="totalIntMark" id="totalIntMark" class="form-control" readonly>
								</div>
								<div class="col-md-3">
									<select class="custom-select" name="outOfInt">
										<option value="">-- Select Total no. of Subj. --</option>
										<option value="120">06</option>
									</select>
									@error('outOfInt')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-3">
									<select class="custom-select" name="remarkInt">
										<option value="">-- Remark --</option>
										<option value="Fail">Fail</option>
										<option value="Pass">Pass</option>
									</select>
									@error('remarkInt')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-3 mt-2">
									<input type="submit" class="btn btn-sm btn-success" value="Save">
									<input type="reset" class="btn btn-sm btn-danger" value="Cancel">
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane fade mt-4" id="sem1Ext">
						<h5 class="mb-4">Sem 1 External {{$student->branch}}</h5>
						<form method="post" class="form" action="{{action('Sem1\StudentAdminSem1Ext@store')}}">
							@csrf<input type="text" name="admissionNo" class="form-control" value="{{$student->admissionNo}}" hidden>
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="ext1">Subj 1 :</label>
											<select name="ext1" class="custom-select form-control">
												<option value="">-- Select External Subj. --</option>
												<optgroup label="Common Year">
													<option value="Applied Chemistry - 1">Applied Chemistry - 1 (AC-1)</option>
													<option value="Applied Mathematics - 1">Applied Mathematics - 1 (AM-1)</option>
													<option value="Applied Physics - 1">Applied Physics - 1 (AP-1)</option>
													<option value="Basic Electrical Engg.">Basic Electrical Engg. (BEE)</option>
													<option value="Engg. Mechanics">Enginnering Mechanics (EM)</option>
													<option value="Environmental Studies">Environmental Studies (EVS)</option>
												</optgroup>
											</select>
											@error('ext1')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="ext1mark">Subj 1 Mark :</label>
											<input type="text" name="ext1mark" id="ext1mark" class="form-control key" placeholder="Enter subject 1 mark">
											@error('ext1mark')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="ext2">Subj 2 :</label>
											<select name="ext2" class="custom-select form-control">
												<option value="">-- Select External Subj. --</option>
												<optgroup label="Common Year">
													<option value="Applied Chemistry - 1">Applied Chemistry - 1 (AC-1)</option>
													<option value="Applied Mathematics - 1">Applied Mathematics - 1 (AM-1)</option>
													<option value="Applied Physics - 1">Applied Physics - 1 (AP-1)</option>
													<option value="Basic Electrical Engg.">Basic Electrical Engg. (BEE)</option>
													<option value="Engg. Mechanics">Enginnering Mechanics (EM)</option>
													<option value="Environmental Studies">Environmental Studies (EVS)</option>
												</optgroup>
											</select>
											@error('ext2')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="ext2mark">Subj 2 Mark :</label>
											<input type="text" name="ext2mark" id="ext2mark" class="form-control key" placeholder="Enter subject 2 mark">
											@error('ext2mark')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="ext3">Subj 3 :</label>
											<select name="ext3" class="custom-select form-control">
												<option value="">-- Select External Subj. --</option>
												<optgroup label="Common Year">
													<option value="Applied Chemistry - 1">Applied Chemistry - 1 (AC-1)</option>
													<option value="Applied Mathematics - 1">Applied Mathematics - 1 (AM-1)</option>
													<option value="Applied Physics - 1">Applied Physics - 1 (AP-1)</option>
													<option value="Basic Electrical Engg.">Basic Electrical Engg. (BEE)</option>
													<option value="Engg. Mechanics">Enginnering Mechanics (EM)</option>
													<option value="Environmental Studies">Environmental Studies (EVS)</option>
												</optgroup>
											</select>
											@error('ext3')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="ext3mark">Subj 3 Mark :</label>
											<input type="text" name="ext3mark" id="ext3mark" class="form-control key" placeholder="Enter subject 3 mark">
											@error('ext3mark')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="ext4">Subj 4 :</label>
											<select name="ext4" class="custom-select form-control">
												<option value="">-- Select External Subj. --</option>
												<optgroup label="Common Year">
													<option value="Applied Chemistry - 1">Applied Chemistry - 1 (AC-1)</option>
													<option value="Applied Mathematics - 1">Applied Mathematics - 1 (AM-1)</option>
													<option value="Applied Physics - 1">Applied Physics - 1 (AP-1)</option>
													<option value="Basic Electrical Engg.">Basic Electrical Engg. (BEE)</option>
													<option value="Engg. Mechanics">Enginnering Mechanics (EM)</option>
													<option value="Environmental Studies">Environmental Studies (EVS)</option>
												</optgroup>
											</select>
											@error('ext4')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="ext4mark">Subj 4 Mark :</label>
											<input type="text" name="ext4mark" id="ext4mark" class="form-control key" placeholder="Enter subject 4 mark">
											@error('ext4mark')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="ext5">Subj 5 :</label>
											<select name="ext5" class="custom-select form-control">
												<option value="">-- Select External Subj. --</option>
												<optgroup label="Common Year">
													<option value="Applied Chemistry - 1">Applied Chemistry - 1 (AC-1)</option>
													<option value="Applied Mathematics - 1">Applied Mathematics - 1 (AM-1)</option>
													<option value="Applied Physics - 1">Applied Physics - 1 (AP-1)</option>
													<option value="Basic Electrical Engg.">Basic Electrical Engg. (BEE)</option>
													<option value="Engg. Mechanics">Enginnering Mechanics (EM)</option>
													<option value="Environmental Studies">Environmental Studies (EVS)</option>
												</optgroup>
											</select>
											@error('ext5')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="ext5mark">Subj 5 Mark :</label>
											<input type="text" name="ext5mark" id="ext5mark" class="form-control key" placeholder="Enter subject 5 mark">
											@error('ext5mark')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="ext6">Subj 6 :</label>
											<select name="ext6" class="custom-select form-control">
												<option value="">-- Select External Subj. --</option>
												<optgroup label="Common Year">
													<option value="Applied Chemistry - 1">Applied Chemistry - 1 (AC-1)</option>
													<option value="Applied Mathematics - 1">Applied Mathematics - 1 (AM-1)</option>
													<option value="Applied Physics - 1">Applied Physics - 1 (AP-1)</option>
													<option value="Basic Electrical Engg.">Basic Electrical Engg. (BEE)</option>
													<option value="Engg. Mechanics">Enginnering Mechanics (EM)</option>
													<option value="Environmental Studies">Environmental Studies (EVS)</option>
												</optgroup>
											</select>
											@error('ext6')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="ext6mark">Subj 6 Mark :</label>
											<input type="text" name="ext6mark" id="ext6mark" class="form-control key" placeholder="Enter subject 6 mark">
											@error('ext6mark')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<input type="text" name="totalExtMark" id="totalExtMark" class="form-control" readonly>
								</div>
								<div class="col-md-3">
									<select class="custom-select" name="outOfExt">
										<option value="">-- Select Total no. of Subj. --</option>
										<option value="480">06</option>
									</select>
									@error('outOfExt')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-3">
									<select class="custom-select" name="remarkExt">
										<option value="">-- Remark --</option>
										<option value="Fail">Fail</option>
										<option value="Pass">Pass</option>
									</select>
									@error('remarkExt')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-3 mt-2">
									<input type="submit" class="btn btn-sm btn-success" value="Save">
									<input type="reset" class="btn btn-sm btn-danger" value="Cancel">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('custom-js')
<script>
$(document).ready(function(){
	function intCalc(){
		var $int1mark = ($.trim($("#int1mark").val()) != "" && !isNaN($("#int1mark").val())) ? parseInt($("#int1mark").val()) : 0;
		var $int2mark = ($.trim($("#int2mark").val()) != "" && !isNaN($("#int2mark").val())) ? parseInt($("#int2mark").val()) : 0;
		var $int3mark = ($.trim($("#int3mark").val()) != "" && !isNaN($("#int3mark").val())) ? parseInt($("#int3mark").val()) : 0;
		var $int4mark = ($.trim($("#int4mark").val()) != "" && !isNaN($("#int4mark").val())) ? parseInt($("#int4mark").val()) : 0;
		var $int5mark = ($.trim($("#int5mark").val()) != "" && !isNaN($("#int5mark").val())) ? parseInt($("#int5mark").val()) : 0;
		var $int6mark = ($.trim($("#int6mark").val()) != "" && !isNaN($("#int6mark").val())) ? parseInt($("#int6mark").val()) : 0;
		$total = $int1mark + $int2mark + $int3mark + $int4mark + $int5mark + $int6mark;
		$("#totalIntMark").val($total);
	}
	$(".key").keyup(function(){
		intCalc();
	});
	
	function extCalc(){
		var $ext1mark = ($.trim($("#ext1mark").val()) != "" && !isNaN($("#ext1mark").val())) ? parseInt($("#ext1mark").val()) : 0;
		var $ext2mark = ($.trim($("#ext2mark").val()) != "" && !isNaN($("#ext2mark").val())) ? parseInt($("#ext2mark").val()) : 0;
		var $ext3mark = ($.trim($("#ext3mark").val()) != "" && !isNaN($("#ext3mark").val())) ? parseInt($("#ext3mark").val()) : 0;
		var $ext4mark = ($.trim($("#ext4mark").val()) != "" && !isNaN($("#ext4mark").val())) ? parseInt($("#ext4mark").val()) : 0;
		var $ext5mark = ($.trim($("#ext5mark").val()) != "" && !isNaN($("#ext5mark").val())) ? parseInt($("#ext5mark").val()) : 0;
		var $ext6mark = ($.trim($("#ext6mark").val()) != "" && !isNaN($("#ext6mark").val())) ? parseInt($("#ext6mark").val()) : 0;
		$total = $ext1mark + $ext2mark + $ext3mark + $ext4mark + $ext5mark + $ext6mark;
		$("#totalExtMark").val($total);
	}
	$(".key").keyup(function(){
		extCalc();
	});
	
});
</script>
@endsection