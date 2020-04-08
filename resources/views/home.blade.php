@extends('layouts.custom-app')

@section('custom-title') Home @endsection

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
				<h5 class="mt-2">Home - (<strong>{{Auth::user()->name}}</strong>)</h5>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-5 card card-body mt-4 mr-1">
					<div class="dropdown">
					<strong>Students :</strong> <i class="fa fa-users"></i> {{$studentCount}}
						<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">
							Actions
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{route('students.index')}}">All Record</a>
							<a class="dropdown-item" href="{{route('students.create')}}">New Record</a>
						</div>
					</div>
				</div>
				<div class="col-md-5 card card-body mt-4 mr-1">
					<div class="dropdown">
					<strong>Staffs :</strong> <i class="fa fa-users"></i> {{$staffCount}}
						<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">
							Actions
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{route('staffs.index')}}">All Record</a>
							<a class="dropdown-item" href="{{route('staffs.create')}}">New Record</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container col-md-10 modal-body">
				<div class="row mt-2">
					<div class="col-md-3">
						<img src="/img/{{Auth::user()->avatar}}" class="img-responsive img-thumbnail"><br>
						<div class="dropdown mt-2">
						<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
							Actions
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{route('home.edit', Auth::user()->id)}}">Edit</a>
							<a class="dropdown-item" href="{{route('home.show', Auth::user()->id)}}">View</a>
						</div>
					</div>
					</div>
					<div class="col-md-8 mt-3">
						<div class="row">
							<div class="col-md-6 form-group">
								<label for="created" class="font-weight-bold">Created :</label>
								<div class="">{{\Carbon\Carbon::parse(Auth::user()->created_at)->format('d-M-Y, (H:i T)')}}</div>
							</div>
							<div class="col-md-6 form-group">
								<label for="updated" class="font-weight-bold">Updated :</label>
								<div class="">{{\Carbon\Carbon::parse(Auth::user()->updated_at)->format('d-M-Y, (H:i T)')}}</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-group">
								<label for="name" class="font-weight-bold">Full name :</label>
								<div class="">{{Auth::user()->name}}</div>
							</div>
							<div class="col-md-6 form-group">
								<label for="email" class="font-weight-bold">Email address :</label>
								<div class="">{{Auth::user()->email}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection
