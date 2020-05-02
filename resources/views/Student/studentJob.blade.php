@extends('layouts.customStudent-app')

@section('custom-title') Home - {{Auth::user()->firstName}}&nbsp;{{Auth::user()->lastName}}@endsection

@section('options')
<a class="dropdown-item" href="{{url('/student')}}">
	Home
</a>
<a class="dropdown-item" href="{{route('student.edit', Auth::user()->id)}}">
	Edit Profile
</a>
<a class="dropdown-item" href="{{route('student.job.index')}}">
	Jobs
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
				<h5 class="mt-2">All Jobs</h5>
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
			@if($jobs->count() == 0)
				<h5 class="font-weight-bold text-center">No Jobs Available.!!</h5>
			@elseif($jobs->count() > 0)
				<div class="table-responsive container mt-4">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>Job Name</th>
							<th>Company Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($jobs as $job)
						<tr>
							<td>{{$job->title}}</td>
							<td class="text-capitalize">{{$job->companyName}}</td>
							<td>
								<div class="dropdown">
									<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="{{route('job.edit', $job->id)}}">Edit</a>
										<a class="dropdown-item" href="{{route('job.show', $job->id)}}">View</a>
									</div>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>Job Name</th>
							<th>Company Name</th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
			@endif
			</div>
		</div>
	</div>
</div>
@endsection

@section('custom-js')
	<script>$(document).ready(function() {$('#example').DataTable();} );</script>
@endsection