@extends('layouts.app')

@section('top-nav')
<li class="nav-item dropdown">
    <a class="nav-link text-white dropdown-toggle" data-toggle="dropdown" href="">Student</a>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('student.create')}}">New Record</a>
        <a class="dropdown-item" href="{{route('student.index')}}">View all</a>
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
            <h3>Information about {{$students->lastname}}&nbsp;{{$students->firstname}}<div class="pull-right"><a href="{{action('StudentController@edit', $id)}}"><button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</button></a></div></h3>
            <div class="row">
                <div class="col-md-3">
                    <img src="../image/{{$students->avatar}}" width="120px" height="120px" class="img-responsive rounded-circle">
                </div>
                <div class="col-md-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="lead"><span class="font-weight-bold">Admission No</span> : {{$students->admission}}</td>
                            </tr>
                            <tr>
                                <td class="lead"><span class="font-weight-bold">Branch</span> : {{$students->year}}.&nbsp;{{$students->branch}}</td>
                            </tr>
                            <tr>
                                <td class="lead"><span class="font-weight-bold">Email</span> : {{$students->email}}</td>
                            </tr>
                            <tr>
                                <td class="lead"><span class="font-weight-bold">Date of Birth</span> : {{$students->birth}}</td>
                            </tr>
                            <tr>
                                <td class="lead"><span class="font-weight-bold">Address</span> : {{$students->address}}&nbsp;{{$students->landmark}},&nbsp;{{$students->city}},&nbsp{{$students->pincode}}.</td>
                            </tr>
                            <tr>
                                <td class="lead"><span class="font-weight-bold">Contact</span> : {{$students->contact}}</td>
                            </tr>
                            <tr>
                                <td class="lead"><span class="font-weight-bold">Gender</span> : {{$students->gender}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection