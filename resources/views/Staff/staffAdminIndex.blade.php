@extends('layouts.custom-app')

@section('custom-title') All Record Staff @endsection

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
				<h5 class="mt-2">All - Staff</h5>
				<div class="dropdown mt-1">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{route('home.index')}}">Home</a>
						<a class="dropdown-item" href="{{route('students.index')}}">Student Index</a>
						<a class="dropdown-item" href="{{route('staffs.create')}}">Create</a>
					</div>
				</div>
			</div>
			<div class="table-responsive container mt-4">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>Username</th>
							<th>Name</th>
							<th>Email</th>
							<th>Branch</th>
							<th>Created at</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($staffs as $staff)
						<tr>
							<td>{{$staff->username}}</td>
							<td>{{$staff->firstName}}&nbsp;{{$staff->lastName}}</td>
							<td>{{$staff->email}}</td>
							<td>{{$staff->branch}}</td>
							<td>{{\Carbon\Carbon::parse($staff->created_at)->format('d-M-Y, H:i, T')}}</td>
							<td>
								<div class="dropdown dropright">
									<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="{{route('staffs.edit', $staff->id)}}">Edit</a>
										<a class="dropdown-item" href="{{route('staffs.show', $staff->id)}}">View</a>
									</div>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>Username</th>
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