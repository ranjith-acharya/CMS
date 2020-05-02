@extends('layouts.customCompany-app')

@section('custom-title') Job - {{$job->title}} @endsection

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
				<h5 class="mt-2">{{$job->title}}</h5>
				<div class="dropdown mt-2">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
						Actions
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{route('companies.job.index', Auth::user()->id)}}">All Jobs</a>
						<a class="dropdown-item" href="{{route('job.edit', $job->id)}}">Edit</a>
					</div>
				</div>
			</div>
			@if(session('success'))
			<div class="alert alert-success alert-dismissible fade show">
			<button class="close" data-dismiss="alert">&times;</button>
				{{session('success')}}
			</div>
			@endif
			<div class="modal-body">
				<div class="row container">
					<div class="form-group col-md-6">
						<label for="stipend">Stipend :</label>
						<div>&#8377;&nbsp;{{$job->stipend}}</div>
					</div>
					<div class="form-group col-md-6">
						<label for="stipend">Min Pointer :</label>
						<div>{{$job->minPointer}}</div>
					</div>
				</div>
				<div class="row container">
					<div class="form-group col-md-12">
						<label for="stipend">Description :</label>
						<div>{{$job->description}}</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection
