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
			<div class="modal-body">
				<div class="col-md-6">
					{{$sem1Internal->firstName}}&nbsp;{{$sem1Internal->lastName}},&nbsp;<span class="text-primary">{{$sem1Internal->admissionNo}}</span><br>
					<span class="text-capitalize">{{$sem1Internal->branch}}&nbsp;Engg.</span><br>
				</div>
				<div class="table-responsive mt-4">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Subjects</th>
								<th>Marks</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>{{$sem1Internal->int1}}</td>
								<td>{{$sem1Internal->int1mark}}</td>
							</tr>
							<tr>
								<td>{{$sem1Internal->int2}}</td>
								<td>{{$sem1Internal->int2mark}}</td>
							</tr>
							<tr>
								<td>{{$sem1Internal->int3}}</td>
								<td>{{$sem1Internal->int3mark}}</td>
							</tr>
							<tr>
								<td>{{$sem1Internal->int4}}</td>
								<td>{{$sem1Internal->int4mark}}</td>
							</tr>
							<tr>
								<td>{{$sem1Internal->int5}}</td>
								<td>{{$sem1Internal->int5mark}}</td>
							</tr>
							<tr>
								<td>{{$sem1Internal->int6}}</td>
								<td>{{$sem1Internal->int6mark}}</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>Total</th>
								<th>{{$sem1Internal->total}}</th>
							</tr>
							<tr>
								@if($sem1Internal->remark == 'Pass')
									<th colspan="2" class="text-center text-success">{{$sem1Internal->remark}} <span id="cgpaInt"></span></th>
								@endif
								@if($sem1Internal->remark == 'Fail')
									<th colspan="2" class="text-center text-danger">{{$sem1Internal->remark}} <span>0.0</span></th>
								@endif
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('custom-js')
<!--<script>
$(document).ready(function(){
	//alert('{{$sem1Internal->admissionNo}}');
	var total = {{$sem1Internal->total}};
	//alert(total);
	var outOfInt = {{$sem1Internal->outOf}};
	//alert(outOfInt);
	var percentage = total*100/outOfInt;
	//alert(percentage);
	var cgpa = percentage/9.5;
	var finalCgpa = cgpa.toFixed(2);
	//alert(finalCgpa);
	document.getElementById('cgpaInt').innerHTML = finalCgpa;
});
</script>-->
@endsection