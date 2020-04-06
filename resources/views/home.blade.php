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
					<strong>Staffs :</strong>
						<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">
							Actions
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Link 1</a>
							<a class="dropdown-item" href="#">Link 2</a>
							<a class="dropdown-item" href="#">Link 3</a>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection
