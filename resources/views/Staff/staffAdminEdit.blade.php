@extends('layouts.custom-app')

@section('custom-title') Profile - {{$staff->firstName}}&nbsp;{{$staff->lastName}} @endsection

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
				<h5 class="mt-2">Edit Profile Info</h5>
				<a class="btn-link link mt-1" href="{{route('home.index')}}">
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
						<img src="/img/staff/{{$staff->avatar}}" class="img-responsive img-thumbnail"><br>
						<a class="btn-link link" href="{{route('staffs.show', $staff->id)}}"><button class="mt-3 btn btn-sm btn-primary">View Profile</button></a>
					</div>
					<div class="col-md-8 mt-3">
						<form class="form" method="POST" enctype="multipart/form-data" action="{{route('staffs.update', $staff->id)}}">
							@csrf<input type="hidden" name="_method" value="PATCH">
							<div class="row">
								<div class="col-md-4 form-group">
									<label for="firstName" class="font-weight-bold">First name :</label>
									<input type="text" name="firstName" id="firstName" class="form-control" value="{{$staff->firstName}}">
									@error('firstName')
									<span class="text-danger">
										{{$message}}
									</span>
									@enderror
								</div>
								<div class="col-md-4 form-group">
									<label for="lastName" class="font-weight-bold">Last name :</label>
									<input type="text" name="lastName" id="lastName" class="form-control" value="{{$staff->lastName}}">
									@error('lastName')
									<span class="text-danger">
										{{$message}}
									</span>
									@enderror
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									<label for="teaching" class="font-weight-bold">Teaching :</label>
									<input type="text" name="teaching" id="teaching" class="form-control" value="{{$staff->teaching}}">
									@error('teaching')
									<span class="text-danger">
										{{$message}}
									</span>
									@enderror
								</div>
								<div class="col-md-4 form-group">
									<label for="branch" class="font-weight-bold">Branch :</label>
									<select name="branch" id="branch" class="form-control custom-select">
										<option value="">-- Select branch --</option>
										<option value="automobile" @if($staff->branch == 'automobile') selected @endif >Automobile</option>
										<option value="computer" @if($staff->branch == 'computer') selected @endif >Computer</option>
										<option value="electronics & telecommunication" @if($staff->branch == 'electronics & telecommunication') selected @endif >Electronics & Telecommunication</option>
										<option value="electronics" @if($staff->branch == 'electronics') selected @endif >Electronics</option>
										<option value="information" @if($staff->branch == 'information') selected @endif >Information</option>
										<option value="mechanical" @if($staff->branch == 'mechanical') selected @endif >Mechanical</option>
									</select>
									@error('branch')
									<span class="text-danger">
										{{$message}}
									</span>
									@enderror
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									<label for="contact1" class="font-weight-bold">Primary contact :</label>
									<input type="text" name="contact1" id="contact1" class="form-control" value="{{$staff->contact1}}" maxlength="10">
									@error('contact1')
									<span class="text-danger">
										{{$message}}
									</span>
									@enderror
								</div>
								<div class="col-md-4 form-group">
									<label for="contact2" class="font-weight-bold">Another contact :</label>
									<input type="text" name="contact2" id="contact2" class="form-control" value="{{$staff->contact2}}" maxlength="10">
									@error('contact2')
									<span class="text-danger">
										{{$message}}
									</span>
									@enderror
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="address" class="font-weight-bold">Residential Address :</label>
									<textarea type="text" name="address" id="address" class="form-control">{{$staff->address}}</textarea>
									@error('address')
									<span class="text-danger">
										{{$message}}
									</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="avatar" class="font-weight-bold">Avatar :</label>
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="customFile" name="avatar" value="{{$staff->avatar}}" accept="image/*">
										<label class="custom-file-label" for="customFile" value="{{$staff->avatar}}">Choose file</label>
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
