@extends('layouts.custom-app')

@section('custom-title') Results - {{$student->admissionNo}}@endsection

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
				<h5 class="mt-2">Results - {{$student->admissionNo}}</h5>
				<a class="btn-link link mt-1" href="{{route('students.show', $student->id)}}">
					<button type="button" class="btn btn-sm btn-primary float-right">View</button>
				</a>
			</div>
			<div class="modal-body card-body">
				<div class="row mb-4">
					<div class="col-md-6">
						{{$student->firstName}}&nbsp;{{$student->lastName}}<br>
						<a href="mailto:{{$student->email}}" class="link">{{$student->email}}</a><br>
						{{$student->year}}&nbsp;{{$student->branch}}&nbsp;{{$student->stream}}
					</div>
					<div class="col-md-6">
						<!--<div class="dropdown dropdown-sm">
							<button class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">Internal</button>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="{{route('students.sem1Int.index', $student->id)}}">Sem 1</a>
							</div>
						</div>-->
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<tbody class="text-center">
							<tr>
								<th colspan="2">First Year (F.E)</th>
								<th colspan="2">Second Year (S.E)</th>
							</tr>
							<tr>
								<td><a class="link" href="{{action('Sem1\StudentAdminSem1Controller@index', $student->id)}}">Sem 1</a></td>
								<td><a class="link" href="{{action('Sem2\StudentAdminSem2Controller@index', $student->id)}}">Sem 2</a></td>
								<td><a class="link" href="{{action('Sem3\StudentAdminSem3Controller@index', $student->id)}}">Sem 3</a></td>
								<td><a class="link" href="{{action('Sem4\StudentAdminSem4Controller@index', $student->id)}}">Sem 4</a></td>
							</tr>
							<tr>
								<th colspan="2">Third Year (T.E)</th>
								<th colspan="2">Final Year (B.E)</th>
							</tr>
							<tr>
								<td><a class="link" href="{{action('Sem5\StudentAdminSem5Controller@index', $student->id)}}">Sem 5</a></td>
								<td><a class="link" href="{{action('Sem6\StudentAdminSem6Controller@index', $student->id)}}">Sem 6</a></td>
								<td><a class="link" href="{{action('Sem7\StudentAdminSem7Controller@index', $student->id)}}">Sem 7</a></td>
								<td><a class="link" href="{{action('Sem8\StudentAdminSem8Controller@index', $student->id)}}">Sem 8</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection