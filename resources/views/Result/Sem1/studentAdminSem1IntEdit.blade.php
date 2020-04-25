@extends('layouts.custom-app')

@section('custom-title') Sem 1 Internal Marks @endsection

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
				<h5 class="mt-2">Sem 1 Internal Marks</h5>
				<div class="dropdown mt-1">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{action('StudentAdminResultController@sem1Int')}}">Home</a>
						<a class="dropdown-item" href="{{route('staffs.index')}}">Staff Index</a>
						<a class="dropdown-item" href="{{route('students.index')}}">Student Index</a>
					</div>
				</div>
			</div>
			@if(session('success'))
			<div class="alert alert-success alert-dismissible fade show">
			<button class="close" data-dismiss="alert">&times;</button>
				{{session('success')}}
			</div>
			@endif
			<div class="modal-body">
				<div class="col-md-6">
					{{$sem1Internal->firstName}}&nbsp;{{$sem1Internal->lastName}},&nbsp;<span class="text-primary">{{$sem1Internal->admissionNo}}</span><br>
					<span class="text-capitalize">{{$sem1Internal->branch}}&nbsp;Engg.</span><br>
				</div>
				<form class="form mt-4" method="post" action="{{route('sem1Int.update', $sem1Internal->id)}}">
				@csrf<input type="hidden" name="_method" value="PATCH">
				<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="int1">Subj 1 :</label>
									<select name="int1" class="custom-select form-control">
										<option value="">-- Select Internal Subj. --</option>
										<optgroup label="Common Year">
											<option value="Applied Chemistry - 1" @if($sem1Internal->int1 == 'Applied Chemistry - 1') selected @endif>Applied Chemistry - 1 (AC-1)</option>
											<option value="Applied Mathematics - 1" @if($sem1Internal->int1 == 'Applied Mathematics - 1') selected @endif>Applied Mathematics - 1 (AM-1)</option>
											<option value="Applied Physics - 1"@if($sem1Internal->int1 == 'Applied Physics - 1') selected @endif>Applied Physics - 1 (AP-1)</option>
											<option value="Basic Electrical Engg." @if($sem1Internal->int1 == 'Basic Electrical Engg.') selected @endif>Basic Electrical Engg. (BEE)</option>
											<option value="Engg. Mechanics" @if($sem1Internal->int1 == 'Engg. Mechanics') selected @endif>Enginnering Mechanics (EM)</option>
											<option value="Environmental Studies" @if($sem1Internal->int1 == 'Environmental Studies') selected @endif>Environmental Studies (EVS)</option>
										</optgroup>
									</select>
									@error('int1')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int1mark">Subj 1 Mark :</label>
									<input type="text" name="int1mark" id="int1mark" class="form-control key" placeholder="Enter subject 1 mark" value="{{$sem1Internal->int1mark}}">
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
											<option value="Applied Chemistry - 1" @if($sem1Internal->int2 == 'Applied Chemistry - 1') selected @endif>Applied Chemistry - 1 (AC-1)</option>
											<option value="Applied Mathematics - 1" @if($sem1Internal->int2 == 'Applied Mathematics - 1') selected @endif>Applied Mathematics - 1 (AM-1)</option>
											<option value="Applied Physics - 1"@if($sem1Internal->int2 == 'Applied Physics - 1') selected @endif>Applied Physics - 1 (AP-1)</option>
											<option value="Basic Electrical Engg." @if($sem1Internal->int2 == 'Basic Electrical Engg.') selected @endif>Basic Electrical Engg. (BEE)</option>
											<option value="Engg. Mechanics" @if($sem1Internal->int2 == 'Engg. Mechanics') selected @endif>Enginnering Mechanics (EM)</option>
											<option value="Environmental Studies" @if($sem1Internal->int2 == 'Environmental Studies') selected @endif>Environmental Studies (EVS)</option>
										</optgroup>
									</select>
									@error('int2')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int2mark">Subj 2 Mark :</label>
									<input type="text" name="int2mark" id="int2mark" class="form-control key" placeholder="Enter subject 2 mark" value="{{$sem1Internal->int2mark}}">
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
											<option value="Applied Chemistry - 1" @if($sem1Internal->int3 == 'Applied Chemistry - 1') selected @endif>Applied Chemistry - 1 (AC-1)</option>
											<option value="Applied Mathematics - 1" @if($sem1Internal->int3 == 'Applied Mathematics - 1') selected @endif>Applied Mathematics - 1 (AM-1)</option>
											<option value="Applied Physics - 1"@if($sem1Internal->int3 == 'Applied Physics - 1') selected @endif>Applied Physics - 1 (AP-1)</option>
											<option value="Basic Electrical Engg." @if($sem1Internal->int3 == 'Basic Electrical Engg.') selected @endif>Basic Electrical Engg. (BEE)</option>
											<option value="Engg. Mechanics" @if($sem1Internal->int3 == 'Engg. Mechanics') selected @endif>Enginnering Mechanics (EM)</option>
											<option value="Environmental Studies" @if($sem1Internal->int3 == 'Environmental Studies') selected @endif>Environmental Studies (EVS)</option>
										</optgroup>
									</select>
									@error('int3')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int3mark">Subj 3 Mark :</label>
									<input type="text" name="int3mark" id="int3mark" class="form-control key" placeholder="Enter subject 3 mark" value="{{$sem1Internal->int3mark}}">
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
											<option value="Applied Chemistry - 1" @if($sem1Internal->int4 == 'Applied Chemistry - 1') selected @endif>Applied Chemistry - 1 (AC-1)</option>
											<option value="Applied Mathematics - 1" @if($sem1Internal->int4 == 'Applied Mathematics - 1') selected @endif>Applied Mathematics - 1 (AM-1)</option>
											<option value="Applied Physics - 1"@if($sem1Internal->int4 == 'Applied Physics - 1') selected @endif>Applied Physics - 1 (AP-1)</option>
											<option value="Basic Electrical Engg." @if($sem1Internal->int4 == 'Basic Electrical Engg.') selected @endif>Basic Electrical Engg. (BEE)</option>
											<option value="Engg. Mechanics" @if($sem1Internal->int4 == 'Engg. Mechanics') selected @endif>Enginnering Mechanics (EM)</option>
											<option value="Environmental Studies" @if($sem1Internal->int4 == 'Environmental Studies') selected @endif>Environmental Studies (EVS)</option>
										</optgroup>
									</select>
									@error('int4')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int4mark">Subj 4 Mark :</label>
									<input type="text" name="int4mark" id="int4mark" class="form-control key" placeholder="Enter subject 4 mark" value="{{$sem1Internal->int4mark}}">
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
											<option value="Applied Chemistry - 1" @if($sem1Internal->int5 == 'Applied Chemistry - 1') selected @endif>Applied Chemistry - 1 (AC-1)</option>
											<option value="Applied Mathematics - 1" @if($sem1Internal->int5 == 'Applied Mathematics - 1') selected @endif>Applied Mathematics - 1 (AM-1)</option>
											<option value="Applied Physics - 1"@if($sem1Internal->int5 == 'Applied Physics - 1') selected @endif>Applied Physics - 1 (AP-1)</option>
											<option value="Basic Electrical Engg." @if($sem1Internal->int5 == 'Basic Electrical Engg.') selected @endif>Basic Electrical Engg. (BEE)</option>
											<option value="Engg. Mechanics" @if($sem1Internal->int5 == 'Engg. Mechanics') selected @endif>Enginnering Mechanics (EM)</option>
											<option value="Environmental Studies" @if($sem1Internal->int5 == 'Environmental Studies') selected @endif>Environmental Studies (EVS)</option>
										</optgroup>
									</select>
									@error('int5')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int5mark">Subj 5 Mark :</label>
									<input type="text" name="int5mark" id="int5mark" class="form-control key" placeholder="Enter subject 5 mark" value="{{$sem1Internal->int5mark}}">
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
											<option value="Applied Chemistry - 1" @if($sem1Internal->int6 == 'Applied Chemistry - 1') selected @endif>Applied Chemistry - 1 (AC-1)</option>
											<option value="Applied Mathematics - 1" @if($sem1Internal->int6 == 'Applied Mathematics - 1') selected @endif>Applied Mathematics - 1 (AM-1)</option>
											<option value="Applied Physics - 1"@if($sem1Internal->int6 == 'Applied Physics - 1') selected @endif>Applied Physics - 1 (AP-1)</option>
											<option value="Basic Electrical Engg." @if($sem1Internal->int6 == 'Basic Electrical Engg.') selected @endif>Basic Electrical Engg. (BEE)</option>
											<option value="Engg. Mechanics" @if($sem1Internal->int6 == 'Engg. Mechanics') selected @endif>Enginnering Mechanics (EM)</option>
											<option value="Environmental Studies" @if($sem1Internal->int6 == 'Environmental Studies') selected @endif>Environmental Studies (EVS)</option>
										</optgroup>
									</select>
									@error('int6')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int6mark">Subj 6 Mark :</label>
									<input type="text" name="int6mark" id="int6mark" class="form-control key" placeholder="Enter subject 6 mark" value="{{$sem1Internal->int6mark}}">
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
								<option value="150" @if($sem1Internal->outOf == '150') selected @endif>06</option>
							</select>
							@error('outOfInt')
								<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
						<div class="col-md-3">
							<select class="custom-select" name="remarkInt">
								<option value="">-- Remark --</option>
								<option value="Fail" @if($sem1Internal->remark == 'Fail') selected @endif>Fail</option>
								<option value="Pass" @if($sem1Internal->remark == 'Pass') selected @endif>Pass</option>
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