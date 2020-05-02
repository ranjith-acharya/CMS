@extends('layouts.customCompany-app')

@section('custom-title') All Jobs @endsection

@section('options')
<a class="dropdown-item" href="{{url('/company')}}">
	Home
</a>
<a class="dropdown-item" href="{{route('company.edit', Auth::user()->id)}}">
	Edit Profile
</a>
<a class="dropdown-item" href="{{route('companies.job.index', Auth::user()->id)}}">
Jobs
</a>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<div class="modal-header">
				<h5 class="mt-2">All Jobs</h5>
				<div class="dropdown mt-1">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{route('company.index')}}">Home</a>
						<a class="dropdown-item" href="{{route('companies.job.create', Auth::user()->id)}}">Create</a>
					</div>
				</div>
			</div>
			<div class="table-responsive container mt-4">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>Job ID</th>
							<th>Job Name</th>
						</tr>
					</thead>
					<tbody>
						@foreach($jobs as $job)
						<tr>
							<td>{{$job->id}}</td>
							<td class="text-capitalize">{{$job->title}}</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>Job ID</th>
							<th>Job Name</th>
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