@extends('layouts.customCompany-app')

@section('custom-title') Edit Profile - {{Auth::user()->name}} @endsection

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
				<h5 class="mt-2">Profile Info</h5>
				<a class="btn-link link mt-1" href="{{route('company.index')}}">
					<button type="button" class="btn btn-sm btn-primary float-right">Home</button>
				</a>
			</div>
			@if(session('success'))
			<div class="alert alert-success alert-dismissible fade show">
			<button class="close" data-dismiss="alert">&times;</button>
				{{session('success')}}
			</div>
			@endif
			<div class="modal-body">
				<div class="row mt-2">
					<div class="col-md-3">
						<img src="/img/company/{{Auth::user()->avatar}}" class="img-responsive img-thumbnail"><br>
						<a class="btn-link link" href="{{route('company.index')}}"><button class="mt-3 btn btn-sm btn-primary">Home</button></a>
					</div>
					<div class="col-md-8 mt-3">
						<form class="form" method="POST" enctype="multipart/form-data" action="{{action('CompanyController@update', Auth::user()->id)}}">
						@csrf<input type="hidden" name="_method" value="PATCH">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="name" class="font-weight-bold">Full name :</label>
									<input type="text" name="name" id="name" value="{{Auth::user()->name}}" class="form-control">
									@error('name')
										<span class="text-danger">
											{{$message}}
										</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="avatar" class="font-weight-bold">Avatar :</label>
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="customFile" name="avatar" value="{{Auth::user()->avatar}}" accept="image/*">
										<label class="custom-file-label" for="customFile" value="{{Auth::user()->avatar}}">Choose file</label>
									</div>
									@error('avatar')
									<span class="text-danger">
										{{$message}}
									</span>
									@enderror
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<input type="submit" class="btn btn-sm btn-success" value="Save">
									<input type="reset" class="btn btn-sm btn-danger" value="Cancel">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection
