@extends('layouts.app')

@section('top-nav')
<li class="nav-item dropdown">
    <a class="nav-link text-white dropdown-toggle" data-toggle="dropdown" href="">Student</a>
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
        <div class="col-md-8 container">
            <h3>Edit Record for {{$students->firstname}}&nbsp;{{$students->lastname}}
                <div class="pull-right">
                    <a href="{{url('student')}}"><button class="btn btn-sm btn-primary"><i class="fa fa-home"></i>&nbsp;Home</button></a>
                </div>
            </h3>
            <form class="form" method="post" action="{{action('StudentController@update', $id)}}">
            @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group form-inline">
                    <input type="text" name="firstname" class="col-md-4  mr-1 form-control" placeholder="First Name" value="{{$students->firstname}}">
                    <input type="text" name="lastname" class="col-md-5 form-control" placeholder="Last Name" value="{{$students->lastname}}">
                </div>
                <div class="form-group">
                    <input type="text" name="address" class="form-control col-md-9" placeholder="Address Line 1" value="{{$students->address}}">
                </div>
                <div class="form-group form-inline">
                    <input type="text" name="landmark" class="col-md-3 mr-1 form-control" placeholder="Landmark" value="{{$students->landmark}}">
                    <input type="text" name="city" class="col-md-3 mr-1 form-control" placeholder="City" value="{{$students->city}}">
                    <input type="text" name="pincode" class="col-md-3 form-control" placeholder="Pincode" value="{{$students->pincode}}">
                </div>
                <div class="form-group form-inline">
                    <input type="text" name="contact" class="col-md-5 mr-1 form-control" placeholder="Contact Number" value="{{$students->contact}}">
                    <select name="year" class="col-md-4 form-control">
                        <option value="">-- Year --</option>
                        <option value="F.E" @if($students->year=='F.E') selected @endif>First Year</option>
                        <option value="S.E" @if($students->year=='S.E') selected @endif>Second Year</option>
                        <option value="T.E" @if($students->year=='T.E') selected @endif>Third Year</option>
                        <option value="B.E" @if($students->year=='B.E') selected @endif>Final Year</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success">
                    <input type="reset" class="btn btn-danger">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
