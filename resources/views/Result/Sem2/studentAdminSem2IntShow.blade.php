@extends('layouts.custom-app')

@section('custom-title') Sem 2 Internal Marks @endsection

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
				<h5 class="mt-2">Sem 2 Internal Marks</h5>
				<div class="dropdown mt-1">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{action('StudentAdminResultController@sem2Int')}}">Home</a>
						<a class="dropdown-item" href="{{route('staffs.index')}}">Staff Index</a>
						<a class="dropdown-item" href="{{route('students.index')}}">Student Index</a>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<div class="col-md-6">
					{{$sem2Internal->firstName}}&nbsp;{{$sem2Internal->lastName}},&nbsp;<span class="text-primary">{{$sem2Internal->admissionNo}}</span><br>
					<span class="text-capitalize">{{$sem2Internal->branch}}&nbsp;Engg.</span><br>
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
								<td>{{$sem2Internal->int1}}</td>
								<td>{{$sem2Internal->int1mark}}</td>
							</tr>
							<tr>
								<td>{{$sem2Internal->int2}}</td>
								<td>{{$sem2Internal->int2mark}}</td>
							</tr>
							<tr>
								<td>{{$sem2Internal->int3}}</td>
								<td>{{$sem2Internal->int3mark}}</td>
							</tr>
							<tr>
								<td>{{$sem2Internal->int4}}</td>
								<td>{{$sem2Internal->int4mark}}</td>
							</tr>
							<tr>
								<td>{{$sem2Internal->int5}}</td>
								<td>{{$sem2Internal->int5mark}}</td>
							</tr>
							<tr>
								<td>{{$sem2Internal->int6}}</td>
								<td>{{$sem2Internal->int6mark}}</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>Total</th>
								<th>{{$sem2Internal->total}}</th>
							</tr>
							<tr>
								@if($sem2Internal->remark == 'Pass')
									<th colspan="2" class="text-center text-success">{{$sem2Internal->remark}} <span id="cgpaInt"></span></th>
								@endif
								@if($sem2Internal->remark == 'Fail')
									<th colspan="2" class="text-center text-danger">{{$sem2Internal->remark}} <span>0.0</span></th>
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
	//alert('{{$sem2Internal->admissionNo}}');
	var total = {{$sem2Internal->total}};
	//alert(total);
	var outOfInt = {{$sem2Internal->outOf}};
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