@extends('layouts.custom-app')

@section('custom-title')
- Add Results @endsection

@section('content')
<div class="container">
	@if(session('success'))
		<div class="alert alert-success alert-dismissible fade show">
		<button class="close" data-dismiss="alert">&times;</button>
			{{session('success')}}
		</div>
	@endif
	@if(session('error'))
		<div class="alert alert-danger alert-dismissible fade show">
		<button class="close" data-dismiss="alert">&times;</button>
			{{session('error')}}
		</div>
	@endif
	<div class="col-md-12">
		<h5 class="modal-header font-weight-bold">
			<a href="{{action('StudentController@show', $student->id)}}">{{$student->firstName}} {{$student->lastName}}</a>
			<span class="float-right text-uppercase">{{$student->admissionNo}}</span>
		</h5>
		<h5 class="mb-3"><span class="font-weight-bold">Current Year</span> : {{$student->year}} <span class="text-capitalize">{{$student->branch}}</span></h5>
		<h6 class="font-weight-bold">
			<q>Here, in these Section you can select Semester to add Results in it for the above Student.</q>
		</h6><br>
		<div class="table-responsive">
			<table class="table table-info table-bordered">
				<tr class="text-center">
					<th colspan="2">First Year (F.E)</th>
					<th colspan="2">Second Year (S.E)</th>
				</tr>
				<tr class="lead">
					<td><a href="#">Sem 1</a></td>
					<td><a href="#">Sem 2</a></td>
					<td><a href="{{action('Sem\Sem3Controller@show', $student->id)}}">Sem 3</a></td>
					<td><a href="#">Sem 4</a></td>
				</tr>
				<tr class="text-center">
					<th colspan="2">Third Year (T.E)</th>
					<th colspan="2">Final Year (B.E)</th>
				</tr>
				<tr class="lead">
					<td><a href="#">Sem 5</a></td>
					<td><a href="#">Sem 6</a></td>
					<td><a href="#">Sem 7</a></td>
					<td><a href="#">Sem 8</a></td>
				</tr>
			<table>
		</div>
		<div class="modal fade" id="sem3">
			<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Sem 3 Results for {{$student->admissionNo}}</h5>
						<button class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
