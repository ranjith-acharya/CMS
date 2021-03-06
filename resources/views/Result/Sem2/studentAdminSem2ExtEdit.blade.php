@extends('layouts.custom-app')

@section('custom-title') Sem 2 External Marks @endsection

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
				<h5 class="mt-2">Sem 2 External Marks</h5>
				<div class="dropdown mt-1">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{action('StudentAdminResultController@sem2Ext')}}">Home</a>
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
					{{$sem2External->firstName}}&nbsp;{{$sem2External->lastName}},&nbsp;<span class="text-primary">{{$sem2External->admissionNo}}</span><br>
					<span class="text-capitalize">{{$sem2External->branch}}&nbsp;Engg.</span><br>
				</div>
				<form class="form mt-4" method="post" action="{{route('sem2Ext.update', $sem2External->id)}}">
				@csrf<input type="hidden" name="_method" value="PATCH">
				<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="ext1">Subj 1 :</label>
									<select name="ext1" class="custom-select form-control">
										<option value="">-- Select External Subj. --</option>
										<optgroup label="Common Year">
											<option value="Applied Chemistry - 2" @if($sem2External->ext1 == 'Applied Chemistry - 2') selected @endif>Applied Chemistry - 2 (AC-2)</option>
											<option value="Applied Mathematics - 2" @if($sem2External->ext1 == 'Applied Mathematics - 2') selected @endif>Applied Mathematics - 2 (AM-2)</option>
											<option value="Applied Physics - 2" @if($sem2External->ext1 == 'Applied Physics - 2') selected @endif>Applied Physics - 2 (AP-2)</option>
											<option value="Communication Skills." @if($sem2External->ext1 == 'Communication Skills.') selected @endif>Communication Skills (CS)</option>
											<option value="Engg. Drawing" @if($sem2External->ext1 == 'Engg. Drawing') selected @endif>Enginnering Drawing (ED)</option>
											<option value="Structured Programming Approach"  @if($sem2External->ext1 == 'Structured Programming Approach') selected @endif>Structured Programming Approach (SPA)</option>
										</optgroup>
									</select>
									@error('ext1')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext1mark">Subj 1 Mark :</label>
									<input type="text" name="ext1mark" id="ext1mark" class="form-control key" placeholder="Enter subject 1 mark" value="{{$sem2External->ext1mark}}">
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
											<option value="Applied Chemistry - 2" @if($sem2External->ext2 == 'Applied Chemistry - 2') selected @endif>Applied Chemistry - 2 (AC-2)</option>
											<option value="Applied Mathematics - 2" @if($sem2External->ext2 == 'Applied Mathematics - 2') selected @endif>Applied Mathematics - 2 (AM-2)</option>
											<option value="Applied Physics - 2" @if($sem2External->ext2 == 'Applied Physics - 2') selected @endif>Applied Physics - 2 (AP-2)</option>
											<option value="Communication Skills." @if($sem2External->ext2 == 'Communication Skills.') selected @endif>Communication Skills (CS)</option>
											<option value="Engg. Drawing" @if($sem2External->ext2 == 'Engg. Drawing') selected @endif>Enginnering Drawing (ED)</option>
											<option value="Structured Programming Approach"  @if($sem2External->ext2 == 'Structured Programming Approach') selected @endif>Structured Programming Approach (SPA)</option>
										</optgroup>
									</select>
									@error('ext2')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext2mark">Subj 2 Mark :</label>
									<input type="text" name="ext2mark" id="ext2mark" class="form-control key" placeholder="Enter subject 2 mark" value="{{$sem2External->ext2mark}}">
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
											<option value="Applied Chemistry - 2" @if($sem2External->ext3 == 'Applied Chemistry - 2') selected @endif>Applied Chemistry - 2 (AC-2)</option>
											<option value="Applied Mathematics - 2" @if($sem2External->ext3 == 'Applied Mathematics - 2') selected @endif>Applied Mathematics - 2 (AM-2)</option>
											<option value="Applied Physics - 2" @if($sem2External->ext3 == 'Applied Physics - 2') selected @endif>Applied Physics - 2 (AP-2)</option>
											<option value="Communication Skills." @if($sem2External->ext3 == 'Communication Skills.') selected @endif>Communication Skills (CS)</option>
											<option value="Engg. Drawing" @if($sem2External->ext3 == 'Engg. Drawing') selected @endif>Enginnering Drawing (ED)</option>
											<option value="Structured Programming Approach"  @if($sem2External->ext3 == 'Structured Programming Approach') selected @endif>Structured Programming Approach (SPA)</option>
										</optgroup>
									</select>
									@error('ext3')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext3mark">Subj 3 Mark :</label>
									<input type="text" name="ext3mark" id="ext3mark" class="form-control key" placeholder="Enter subject 3 mark" value="{{$sem2External->ext3mark}}">
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
											<option value="Applied Chemistry - 2" @if($sem2External->ext4 == 'Applied Chemistry - 2') selected @endif>Applied Chemistry - 2 (AC-2)</option>
											<option value="Applied Mathematics - 2" @if($sem2External->ext4 == 'Applied Mathematics - 2') selected @endif>Applied Mathematics - 2 (AM-2)</option>
											<option value="Applied Physics - 2" @if($sem2External->ext4 == 'Applied Physics - 2') selected @endif>Applied Physics - 2 (AP-2)</option>
											<option value="Communication Skills." @if($sem2External->ext4 == 'Communication Skills.') selected @endif>Communication Skills (CS)</option>
											<option value="Engg. Drawing" @if($sem2External->ext4 == 'Engg. Drawing') selected @endif>Enginnering Drawing (ED)</option>
											<option value="Structured Programming Approach"  @if($sem2External->ext4 == 'Structured Programming Approach') selected @endif>Structured Programming Approach (SPA)</option>
										</optgroup>
									</select>
									@error('ext4')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext4mark">Subj 4 Mark :</label>
									<input type="text" name="ext4mark" id="ext4mark" class="form-control key" placeholder="Enter subject 4 mark" value="{{$sem2External->ext4mark}}">
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
											<option value="Applied Chemistry - 2" @if($sem2External->ext5 == 'Applied Chemistry - 2') selected @endif>Applied Chemistry - 2 (AC-2)</option>
											<option value="Applied Mathematics - 2" @if($sem2External->ext5 == 'Applied Mathematics - 2') selected @endif>Applied Mathematics - 2 (AM-2)</option>
											<option value="Applied Physics - 2" @if($sem2External->ext5 == 'Applied Physics - 2') selected @endif>Applied Physics - 2 (AP-2)</option>
											<option value="Communication Skills." @if($sem2External->ext5 == 'Communication Skills.') selected @endif>Communication Skills (CS)</option>
											<option value="Engg. Drawing" @if($sem2External->ext5 == 'Engg. Drawing') selected @endif>Enginnering Drawing (ED)</option>
											<option value="Structured Programming Approach"  @if($sem2External->ext5 == 'Structured Programming Approach') selected @endif>Structured Programming Approach (SPA)</option>
										</optgroup>
									</select>
									@error('ext5')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext5mark">Subj 5 Mark :</label>
									<input type="text" name="ext5mark" id="ext5mark" class="form-control key" placeholder="Enter subject 5 mark" value="{{$sem2External->ext5mark}}">
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
											<option value="Applied Chemistry - 2" @if($sem2External->ext6 == 'Applied Chemistry - 2') selected @endif>Applied Chemistry - 2 (AC-2)</option>
											<option value="Applied Mathematics - 2" @if($sem2External->ext6 == 'Applied Mathematics - 2') selected @endif>Applied Mathematics - 2 (AM-2)</option>
											<option value="Applied Physics - 2" @if($sem2External->ext6 == 'Applied Physics - 2') selected @endif>Applied Physics - 2 (AP-2)</option>
											<option value="Communication Skills." @if($sem2External->ext6 == 'Communication Skills.') selected @endif>Communication Skills (CS)</option>
											<option value="Engg. Drawing" @if($sem2External->ext6 == 'Engg. Drawing') selected @endif>Enginnering Drawing (ED)</option>
											<option value="Structured Programming Approach"  @if($sem2External->ext6 == 'Structured Programming Approach') selected @endif>Structured Programming Approach (SPA)</option>
										</optgroup>
									</select>
									@error('ext6')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext6mark">Subj 6 Mark :</label>
									<input type="text" name="ext6mark" id="ext6mark" class="form-control key" placeholder="Enter subject 6 mark" value="{{$sem2External->ext6mark}}">
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
								<option value="380" @if($sem2External->outOf == '380') selected @endif>06</option>
							</select>
							@error('outOfExt')
								<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
						<div class="col-md-3">
							<select class="custom-select" name="remarkExt">
								<option value="">-- Remark --</option>
								<option value="Fail" @if($sem2External->remark == 'Fail') selected @endif>Fail</option>
								<option value="Pass" @if($sem2External->remark == 'Pass') selected @endif>Pass</option>
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