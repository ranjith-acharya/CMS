@extends('layouts.customCompany-app')

@section('custom-title') Add New Job - {{Auth::user()->name}} @endsection

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
				<h5 class="mt-2">New Job</h5>
				<a class="btn-link link mt-1" href="{{route('companies.job.index', Auth::user()->id)}}">
					<button type="button" class="btn btn-sm btn-primary float-right">All Jobs</button>
				</a>
			</div>
			@if(session('success'))
			<div class="alert alert-success alert-dismissible fade show">
			<button class="close" data-dismiss="alert">&times;</button>
				{{session('success')}}
			</div>
			@endif
			<div class="modal-body">
				<form class="form" action="{{route('companies.job.store', Auth::user()->id)}}" method="post">
					@csrf<div class="row">
						<div class="col-md-4 form-group">
							<label for="title" class="font-weight-bold">Job Title :</label>
							<input type="text" name="title" id="title" placeholder="Job Title" class="form-control" value="{{old('title')}}">
							@error('title')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
						<div class="col-md-4 form-group">
							<label for="stipend" class="font-weight-bold">Job Package :</label>
							<input type="text" name="stipend" id="stipend" placeholder="Job Package" class="form-control" value="{{old('stipend')}}">
							@error('stipend')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
						<div class="col-md-4 form-group">
							<label for="minPointer" class="font-weight-bold">Pointer :</label>
							<input type="text" name="minPointer" id="minPointer" placeholder="Pointer" class="form-control" value="{{old('minPointer')}}">
							@error('minPointer')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="description" class="font-weight-bold">Job Description :</label>
							<textarea name="description" id="description" placeholder="Job Description" class="form-control" value="{{old('description')}}"></textarea>
							@error('description')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 form-group">
							<input type="submit" id="submit" class="mt-4 btn btn-sm btn-success" value="Save">
							<input type="reset" id="reset" class="mt-4 btn btn-sm btn-danger" value="Cancel">
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
</div>
@endsection
