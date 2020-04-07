@extends('layouts.custom-app')

@section('custom-title') New Record for Student @endsection

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
				<h5 class="mt-2">All - Student</h5>
				<a class="btn-link link mt-1" href="{{route('home.index')}}">
					<button type="button" class="btn btn-sm btn-primary float-right">Home</button>
				</a>
			</div>
			<div class="table-responsive container mt-4">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>Admission No</th>
							<th>Name</th>
							<th>Email</th>
							<th>Branch</th>
							<th>Created at</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($students as $student)
						<tr>
							<td>{{$student->admissionNo}}</td>
							<td>{{$student->firstName}}&nbsp;{{$student->lastName}}</td>
							<td>{{$student->email}}</td>
							<td>{{$student->branch}}</td>
							<td>{{\Carbon\Carbon::parse($student->created_at)->format('d-M-Y, H:i, T')}}</td>
							<td>
								<div class="dropdown dropright">
									<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="{{route('students.edit', $student->id)}}">Edit</a>
										<a class="dropdown-item" href="{{route('students.show', $student->id)}}">View</a>
									</div>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>Admission No</th>
							<th>Name</th>
							<th>Email</th>
							<th>Branch</th>
							<th>Created at</th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection

@section('custom-js')
	<script>$(document).ready(function() {$('#example').DataTable();} );</script>
@endsection