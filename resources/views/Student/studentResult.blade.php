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
				<div class="row mt-2">
					<div class="table-responsive table-striped">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th colspan="2">First Year (F.E)</th>
									<th colspan="2">Second Year (S.E)</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<tr>
									<td><a class="link" href="{{route('student.result.sem1')}}">Sem 1</a></td>
									<td>Sem 2</td>
									<td>Sem 3</td>
									<td>Sem 4</td>
								</tr>
							</tbody>
							<thead>
								<tr>
									<th colspan="2">Third Year (T.E)</th>
									<th colspan="2">Final Year (B.E)</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<tr>
									<td>Sem 5</td>
									<td>Sem 6</td>
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
</div>
@endsection