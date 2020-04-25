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
			<div class="modal-body">
				<div class="col-md-6">
					{{$sem2External->firstName}}&nbsp;{{$sem2External->lastName}},&nbsp;<span class="text-primary">{{$sem2External->admissionNo}}</span><br>
					<span class="text-capitalize">{{$sem2External->branch}}&nbsp;Engg.</span><br>
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
								<td>{{$sem2External->ext1}}</td>
								<td>{{$sem2External->ext1mark}}</td>
							</tr>
							<tr>
								<td>{{$sem2External->ext2}}</td>
								<td>{{$sem2External->ext2mark}}</td>
							</tr>
							<tr>
								<td>{{$sem2External->ext3}}</td>
								<td>{{$sem2External->ext3mark}}</td>
							</tr>
							<tr>
								<td>{{$sem2External->ext4}}</td>
								<td>{{$sem2External->ext4mark}}</td>
							</tr>
							<tr>
								<td>{{$sem2External->ext5}}</td>
								<td>{{$sem2External->ext5mark}}</td>
							</tr>
							<tr>
								<td>{{$sem2External->ext6}}</td>
								<td>{{$sem2External->ext6mark}}</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>Total</th>
								<th>{{$sem2External->total}}</th>
							</tr>
							<tr>
								@if($sem2External->remark == 'Pass')
									<th colspan="2" class="text-center text-success">{{$sem2External->remark}} <span id="cgpaExt"></span></th>
								@endif
								@if($sem2External->remark == 'Fail')
									<th colspan="2" class="text-center text-danger">{{$sem2External->remark}} <span>0.0</span></th>
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
	//alert('{{$sem2External->admissionNo}}');
	var total = {{$sem2External->total}};
	//alert(total);
	var outOfExt = {{$sem2External->outOf}};
	//alert(outOfExt);
	var percentage = total*100/outOfExt;
	//alert(percentage);
	var cgpa = percentage/9.5;
	var finalCgpa = cgpa.toFixed(2);
	//alert(finalCgpa);
	document.getElementById('cgpaExt').innerHTML = finalCgpa;
});
</script>-->
@endsection