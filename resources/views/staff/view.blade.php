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
            <h3>Information about Prof. {{$staffs->lastname}}&nbsp;{{$staffs->firstname}}
                <div class="pull-right">
                    <a href="{{url('staff')}}"><button class="btn btn-sm btn-primary"><i class="fa fa-home"></i>&nbsp;Home</button></a>
                    <a href="{{action('StaffController@edit', $id)}}"><button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</button></a>
                </div>
            </h3>
            <div class="row">
                <div class="col-md-3">
                    <img src="../image/staff/{{$staffs->avatar}}" width="120px" height="120px" class="img-responsive rounded-circle">
                </div>
                <div class="col-md-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="lead"><span class="font-weight-bold">User Name</span> : {{$staffs->username}}</td>
                            </tr>
                            <tr>
                                <td class="lead"><span class="font-weight-bold">Branch</span> : {{$staffs->branch}}</td>
                            </tr>
                            <tr>
                                <td class="lead"><span class="font-weight-bold">Email</span> : {{$staffs->email}}</td>
                            </tr>
                            <tr>
                                <td class="lead"><span class="font-weight-bold">Date of Birth</span> : {{$staffs->birth}}</td>
                            </tr>
                            <tr>
                                <td class="lead"><span class="font-weight-bold">Address</span> : {{$staffs->address}}&nbsp;{{$staffs->landmark}},&nbsp;{{$staffs->city}},&nbsp{{$staffs->pincode}}.</td>
                            </tr>
                            <tr>
                                <td class="lead"><span class="font-weight-bold">Contact</span> : {{$staffs->contact}}</td>
                            </tr>
                            <tr>
                                <td class="lead"><span class="font-weight-bold">Gender</span> : {{$staffs->gender}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection