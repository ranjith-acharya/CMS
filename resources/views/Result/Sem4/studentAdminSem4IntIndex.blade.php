@extends('layouts.custom-app')

@section('custom-title') All Sem 4 Internal Marks @endsection

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
				<h5 class="mt-2">Sem 4 Internal Marks</h5>
				<div class="dropdown mt-1">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{route('home.index')}}">Home</a>
						<a class="dropdown-item" href="{{route('staffs.index')}}">Staff Index</a>
						<a class="dropdown-item" href="{{route('students.index')}}">Student Index</a>
					</div>
				</div>
			</div>
			<div class="table-responsive container mt-4">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>Admission No</th>
							<th>Name</th>
							<th>Branch</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($sem4Ints as $sem4Int)
						<tr>
							<td>{{$sem4Int->admissionNo}}</td>
							<td class="text-capitalize">{{$sem4Int->firstName}}&nbsp;{{$sem4Int->lastName}}</td>
							<td class="text-capitalize">{{$sem4Int->branch}}</td>
							<td class="float-right">
								<div class="dropdown">
									<button class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">Action</button>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="{{route('sem4Int.edit', $sem4Int->id)}}">Edit</a>
										<a class="dropdown-item" href="{{route('sem4Int.show', $sem4Int->id)}}">View</a>
									</div>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>Admission No</th>
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