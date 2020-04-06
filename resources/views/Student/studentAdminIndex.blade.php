@extends('layouts.custom-app')

@section('custom-title') New Record for Student @endsection

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
				<h5 class="mt-2">All - Student</h5>
				<a class="btn-link link" href="{{route('home.index')}}">
					<button type="button" class="btn btn-sm btn-primary float-right">Home</button>
				</a>
			</div>
			<div class="card-body">
				@foreach($students as $student)
				{{$student->firstName}} {{$student->lastName}} - {{$student->email}} - {{$student->year}} {{$student->branch}} {{$student->stream}}
				@endforeach
			</div>
        </div>
    </div>
</div>
@endsection
