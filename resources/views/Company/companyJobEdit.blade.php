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
						<a class="dropdown-item" href="{{route('job.show', $job->id)}}">View</a>
					</div>
				</div>
			</div>
			@if(session('success'))
			<div class="alert alert-success alert-dismissible fade show">
			<button class="close" data-dismiss="alert">&times;</button>
				{{session('success')}}
			</div>
			@endif
			<div class="modal-body ">
				<form class="form" method="post" action="{{route('job.update', $job->id)}}">
				@csrf<input type="hidden" value="PATCH" name="_method">
					<div class="row">
						<div class="col-md-4 form-group">
							<label for="title" class="font-weight-bold">Job Title :</label>
							<input type="text" name="title" id="title" placeholder="Job Title" class="form-control" value="{{$job->title}}">
							@error('title')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
						<div class="col-md-4 form-group">
							<label for="stipend" class="font-weight-bold">Job Stipend :</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">&#8377;</span>
								</div>
								<input type="text" name="stipend" id="stipend" placeholder="Job Stipend" class="form-control" value="{{$job->stipend}}">
								@error('stipend')
									<span class="text-danger">
										{{$message}}
									</span>
								@enderror
							</div>
						</div>
						<div class="col-md-4 form-group">
							<label for="minPointer" class="font-weight-bold">Min Pointer :</label>
							<input type="text" name="minPointer" id="minPointer" placeholder="Min Pointer" class="form-control" value="{{$job->minPointer}}">
							@error('minPointer')
								<span class="text-danger">
									{{$message}}
								</span>
							@enderror
						</div>
						<div class="col-md-12 form-group">
							<label for="description" class="font-weight-bold">Job Description :</label>
							<textarea name="description" id="description" placeholder="Job Description" class="form-control" rows="10">{{$job->description}}</textarea>
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
