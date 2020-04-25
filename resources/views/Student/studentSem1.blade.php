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
					@if($sem1Internal->count() == 0 || $sem1External->count() == 0)
						<h4 class="text-center lead">Results not yet Published.!!</h4>
					@endif
					@if($sem1Internal->count() > 0 && $sem1External->count() > 0)
					@foreach($sem1Internal as $sem1Int)
						@foreach($sem1External as $sem1Ext)
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
									<td>{{$sem1Int->int1}}</td>
									<td>{{$sem1Int->int1mark}}</td>
									<td>{{$sem1Ext->ext1mark}}</td>
								</tr>
								<tr>
									<td>{{$sem1Int->int2}}</td>
									<td>{{$sem1Int->int2mark}}</td>
									<td>{{$sem1Ext->ext2mark}}</td>
								</tr>
								<tr>
									<td>{{$sem1Int->int3}}</td>
									<td>{{$sem1Int->int3mark}}</td>
									<td>{{$sem1Ext->ext3mark}}</td>
								</tr>
								<tr>
									<td>{{$sem1Int->int4}}</td>
									<td>{{$sem1Int->int4mark}}</td>
									<td>{{$sem1Ext->ext4mark}}</td>
								</tr>
								<tr>
									<td>{{$sem1Int->int5}}</td>
									<td>{{$sem1Int->int5mark}}</td>
									<td>{{$sem1Ext->ext5mark}}</td>
								</tr>
								<tr>
									<td>{{$sem1Int->int6}}</td>
									<td>{{$sem1Int->int6mark}}</td>
									<td>{{$sem1Ext->ext6mark}}</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>Total</th>
									<th colspan="2">
									@if($sem1Int->remark == 'Pass' && $sem1Ext->remark == 'Pass')
										<span id="totalSem1"></span>
										&nbsp;-&nbsp;<span id="cgpaSem1" class="text-success"></span>
									@endif
									@if($sem1Int->remark == 'Fail' && $sem1Ext->remark == 'Fail')
										<span class="text-danger">Failed</span>
									@endif
									@if($sem1Int->remark == 'Pass' && $sem1Ext->remark == 'Fail')
										<span class="text-danger">Failed</span>
									@endif
									@if($sem1Int->remark == 'Fail' && $sem1Ext->remark == 'Pass')
										<span class="text-danger">Failed</span>
									@endif
									</th>
								</tr>
							</tfoot>
						</table>
							<script>
							$(document).ready(function(){
								var intTotal = {{$sem1Int->total}};
								var intOutof = {{$sem1Int->outOf}};
								var extOutof = {{$sem1Ext->outOf}};
								//alert(intOutof);
								var extTotal = {{$sem1Ext->total}};
								var total = intTotal + extTotal;
								var outOf = intOutof + extOutof;
								//alert(total);
								document.getElementById('totalSem1').innerHTML = total+" / "+outOf;
								var perc = total*100/outOf;
								var cgpa = perc/9.5;
								document.getElementById('cgpaSem1').innerHTML = cgpa.toFixed(2);
								console.log(cgpa);
							});
							</script>
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