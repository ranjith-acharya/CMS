@extends('layouts.app')

@section('top-nav')
<li class="nav-item dropdown">
    <a class="nav-link text-white dropdown-toggle" data-toggle="dropdown">Student</a>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('student.create')}}">New Record</a>
        <a class="dropdown-item" href="{{route('student.index')}}">View all</a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link text-white dropdown-toggle" data-toggle="dropdown">Staff</a>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('staff.create')}}">New Record</a>
        <a class="dropdown-item" href="{{route('staff.index')}}">View all</a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link text-white dropdown-toggle" data-toggle="dropdown">Search</a>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="">Staff Record</a>
        <a class="dropdown-item" href="">Student Record</a>
    </div>
</li>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                Name : <h3>{{Auth::user()->name}}</h3>
                Email : <h4>{{Auth::user()->email}}</h4>
                Created at : <h5>{{Auth::user()->created_at}}</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body">
            Total Staff : <h1 class="text-center">{{$staffsCount}}</h1>
            <span class="form-inline"><a href="{{url('staff')}}"><button class="btn btn-sm btn-primary mr-2">View Staff</button></a>
            <a href="{{route('staff.create')}}"><button class="btn btn-sm btn-primary">Create Staff</button></a></span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body">
                Total Student : <h1 class="text-center">{{$studentsCount}}</h1>
                <span class="form-inline"><a href="{{url('student')}}"><button class="btn btn-sm btn-primary mr-2">View Student</button></a>
                <a href="{{route('student.create')}}"><button class="btn btn-sm btn-primary">Create Student</button></a></span>
            </div>
        </div>
    </div>
</div>
@endsection
