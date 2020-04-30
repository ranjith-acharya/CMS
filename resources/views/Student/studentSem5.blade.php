@extends('layouts.customStudent-app')

@section('custom-title') Home - {{Auth::user()->firstName}}&nbsp;{{Auth::user()->lastName}}@endsection

@section('options')
<a class="dropdown-item" href="{{url('/student')}}">
	Home
</a>
<a class="dropdown-item" href="{{route('student.edit', Auth::user()->id)}}">
	Edit Profile
</a>
<a class="dropdown-item" href="{{route('student.result.index', Auth::user()->id)}}">
	Results
</a>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<div class="modal-header">
				<h5 class="mt-2">Result</h5>
				<a class="btn-link link" href="{{url('/student')}}">
					<button class="mt-1 btn btn-sm btn-primary">Home</button>
				</a>
			</div>
			@if(session('success'))
			<div class="alert alert-success alert-dismissible fade show">
			<button class="close" data-dismiss="alert">&times;</button>
				{{session('success')}}
			</div>
			@endif
			<div class="modal-body">
				<div class="mb-4">
				{{Auth::user()->admissionNo}}</br>
				{{Auth::user()->firstName}}&nbsp;{{Auth::user()->lastName}}</br>
				<a href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</a></br>
				</div>
				<div class="row">
					<div class="table-responsive">
					@if($sem5Internal->count() == 0 || $sem5External->count() == 0)
						<h4 class="text-center lead">Results not yet Published.!!</h4>
					@endif
					@if($sem5Internal->count() > 0 && $sem5External->count() > 0)
					@foreach($sem5Internal as $sem5Int)
						@foreach($sem5External as $sem5Ext)
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Subjects</th>
									<th>Internal</th>
									<th>External</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{$sem5Int->int1}}</td>
									<td>{{$sem5Int->int1mark}}</td>
									<td>{{$sem5Ext->ext1mark}}</td>
								</tr>
								<tr>
									<td>{{$sem5Int->int2}}</td>
									<td>{{$sem5Int->int2mark}}</td>
									<td>{{$sem5Ext->ext2mark}}</td>
								</tr>
								<tr>
									<td>{{$sem5Int->int3}}</td>
									<td>{{$sem5Int->int3mark}}</td>
									<td>{{$sem5Ext->ext3mark}}</td>
								</tr>
								<tr>
									<td>{{$sem5Int->int4}}</td>
									<td>{{$sem5Int->int4mark}}</td>
									<td>{{$sem5Ext->ext4mark}}</td>
								</tr>
								<tr>
									<td>{{$sem5Int->int5}}</td>
									<td>{{$sem5Int->int5mark}}</td>
									<td>{{$sem5Ext->ext5mark}}</td>
								</tr>
								<tr @if($sem5Int->int6 == '') hidden @endif>
									<td>{{$sem5Int->int6}}</td>
									<td>{{$sem5Int->int6mark}}</td>
									<td>{{$sem5Ext->ext6mark}}</td>
								</tr>
								<tr @if($sem5Int->int7 == '') hidden @endif>
									<td>{{$sem5Int->int7}}</td>
									<td>{{$sem5Int->int7mark}}</td>
									<td>{{$sem5Ext->ext7mark}}</td>
								</tr>
								<tr @if($sem5Int->int8 == '') hidden @endif>
									<td>{{$sem5Int->int8}}</td>
									<td>{{$sem5Int->int8mark}}</td>
									<td>{{$sem5Ext->ext8mark}}</td>
								</tr>
								<tr @if($sem5Int->int9 == '') hidden @endif>
									<td>{{$sem5Int->int9}}</td>
									<td>{{$sem5Int->int9mark}}</td>
									<td>{{$sem5Ext->ext9mark}}</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>Total</th>
									<th colspan="2">
									@if($sem5Int->remark == 'Pass' && $sem5Ext->remark == 'Pass')
										<span id="totalSem5"></span>
										&nbsp;-&nbsp;<span id="cgpaSem5" class="text-success"></span>
									@endif
									@if($sem5Int->remark == 'Fail' && $sem5Ext->remark == 'Fail')
										<span class="text-danger">Failed</span>
									@endif
									@if($sem5Int->remark == 'Pass' && $sem5Ext->remark == 'Fail')
										<span class="text-danger">Failed</span>
									@endif
									@if($sem5Int->remark == 'Fail' && $sem5Ext->remark == 'Pass')
										<span class="text-danger">Failed</span>
									@endif
									</th>
								</tr>
							</tfoot>
						</table>
						@endforeach
					@endforeach
					@endif
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
	var intTotal = {{$sem5Int->total}};
	var intOutof = {{$sem5Int->outOf}};
	var extOutof = {{$sem5Ext->outOf}};
	//alert(intOutof);
	var extTotal = {{$sem5Ext->total}};
	var total = intTotal + extTotal;
	var outOf = intOutof + extOutof;
	//alert(total);
	document.getElementById('totalSem5').innerHTML = total+" / "+outOf;
	var perc = total*100/outOf;
	var cgpa = perc/9.5;
	document.getElementById('cgpaSem5').innerHTML = cgpa.toFixed(2);
	console.log(cgpa);
});
</script>
@endsection