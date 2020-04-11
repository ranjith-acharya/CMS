@extends('layouts.custom-app')

@section('custom-title') Profile - {{$student->firstName}}&nbsp;{{$student->lastName}} @endsection

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
				<h5 class="mt-2">Results - {{$student->admissionNo}}</h5>
				<a class="btn-link link mt-1" href="{{route('students.show', $student->id)}}">
					<button type="button" class="btn btn-sm btn-primary float-right">View</button>
				</a>
			</div>
		</div>
	</div>
</div>
@endsection