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
					@if($sem4Internal->count() == 0 || $sem4External->count() == 0)
						<h4 class="text-center lead">Results not yet Published.!!</h4>
					@endif
					@if($sem4Internal->count() > 0 && $sem4External->count() > 0)
					@foreach($sem4Internal as $sem4Int)
						@foreach($sem4External as $sem4Ext)
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
									<td>{{$sem4Int->int1}}</td>
									<td>{{$sem4Int->int1mark}}</td>
									<td>{{$sem4Ext->ext1mark}}</td>
								</tr>
								<tr>
									<td>{{$sem4Int->int2}}</td>
									<td>{{$sem4Int->int2mark}}</td>
									<td>{{$sem4Ext->ext2mark}}</td>
								</tr>
								<tr>
									<td>{{$sem4Int->int3}}</td>
									<td>{{$sem4Int->int3mark}}</td>
									<td>{{$sem4Ext->ext3mark}}</td>
								</tr>
								<tr>
									<td>{{$sem4Int->int4}}</td>
									<td>{{$sem4Int->int4mark}}</td>
									<td>{{$sem4Ext->ext4mark}}</td>
								</tr>
								<tr>
									<td>{{$sem4Int->int5}}</td>
									<td>{{$sem4Int->int5mark}}</td>
									<td>{{$sem4Ext->ext5mark}}</td>
								</tr>
								<tr @if($sem4Int->int6 == '') hidden @endif>
									<td>{{$sem4Int->int6}}</td>
									<td>{{$sem4Int->int6mark}}</td>
									<td>{{$sem4Ext->ext6mark}}</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>Total</th>
									<th colspan="2">
									@if($sem4Int->remark == 'Pass' && $sem4Ext->remark == 'Pass')
										<span id="totalSem4"></span>
										&nbsp;-&nbsp;<span id="cgpaSem4" class="text-success"></span>
									@endif
									@if($sem4Int->remark == 'Fail' && $sem4Ext->remark == 'Fail')
										<span class="text-danger">Failed</span>
									@endif
									@if($sem4Int->remark == 'Pass' && $sem4Ext->remark == 'Fail')
										<span class="text-danger">Failed</span>
									@endif
									@if($sem4Int->remark == 'Fail' && $sem4Ext->remark == 'Pass')
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
	var intTotal = {{$sem4Int->total}};
	var intOutof = {{$sem4Int->outOf}};
	var extOutof = {{$sem4Ext->outOf}};
	//alert(intOutof);
	var extTotal = {{$sem4Ext->total}};
	var total = intTotal + extTotal;
	var outOf = intOutof + extOutof;
	//alert(total);
	document.getElementById('totalSem4').innerHTML = total+" / "+outOf;
	var perc = total*100/outOf;
	var cgpa = perc/9.5;
	document.getElementById('cgpaSem4').innerHTML = cgpa.toFixed(2);
	console.log(cgpa);
});
</script>
@endsection