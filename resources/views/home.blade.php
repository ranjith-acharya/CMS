@extends('layouts.custom-app')

@section('custom-title')
- Home @endsection

@section('content')
<div class="container">
	<div class="col-md-12">
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
		<div class="row">
			<div class="col-md-6">
				<div class="card card-body mb-2" style="box-shadow:0px 8px 8px rgba(0,0,0,0.1);">
					<h5 class="modal-header">Student <span class="badge badge-success">{{$studentsCount}}</span></h5>
					<div class="col-md-12 container modal-body">
						<a href="{{action('StudentController@create')}}"><button class="btn btn-primary btn-sm mr-2">Add</button></a>
						<a href="{{action('StudentController@index')}}"><button class="btn btn-primary btn-sm">View</button></a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card card-body mb-2" style="box-shadow:0px 8px 8px rgba(0,0,0,0.1);">
					<h5 class="modal-header">Staff</h5>
					<div class="col-md-12 container modal-body">
						<button class="btn btn-primary btn-sm mr-2">Add</button>
						<button class="btn btn-primary btn-sm">View</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-4 form-group">
					<label for="AdminName" class="font-weight-bold">Name :</label>
					<h4>{{Auth::user()->name}}</h4>
				</div>
				<div class="col-md-4 form-group">
					<label for="AdminEmail" class="font-weight-bold">Email :</label>
					<h4>{{Auth::user()->email}}</h4>
				</div>
				<div class="col-md-4 form-group">
					<label for="AdminCreatedAt" class="font-weight-bold">Joined at :</label>
					<h4>{{Auth::user()->created_at}}</h4>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
