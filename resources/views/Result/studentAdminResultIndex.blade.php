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
				<div class="mb-4">
					{{$student->firstName}}&nbsp;{{$student->lastName}}<br>
					<a href="mailto:{{$student->email}}" class="link">{{$student->email}}</a><br>
					{{$student->year}}&nbsp;{{$student->branch}}&nbsp;{{$student->stream}}
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<tbody class="text-center">
							<tr>
								<th colspan="2">First Year (F.E)</th>
								<th colspan="2">Second Year (S.E)</th>
							</tr>
							<tr>
								<td>Sem 1</td>
								<td>Sem 2</td>
								<td>Sem 3</td>
								<td>Sem 4</td>
							</tr>
							<tr>
								<th colspan="2">Third Year (T.E)</th>
								<th colspan="2">Final Year (B.E)</th>
							</tr>
							<tr>
								<td>Sem 5</td>
								<td><a class="link" href="{{action('Sem6\StudentAdminSem6Controller@index', $student->id)}}">Sem 6</a></td>
								<td>Sem 7</td>
								<td>Sem 8</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection