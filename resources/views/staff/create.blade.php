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
            <h3>New Record for Staff</h3>
            <form class="form" method="post" action="{{url('staff')}}" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <input type="text" name="username" class="form-control col-md-9" placeholder="User Name">
                </div>
                <div class="form-group form-inline">
                    <input type="text" name="firstname" class="col-md-4  mr-1 form-control" placeholder="First Name">
                    <input type="text" name="lastname" class="col-md-5 form-control" placeholder="Last Name">
                </div>
                <div class="form-group form-inline">
                    <input type="text" name="email" class="col-md-5 mr-1 form-control" placeholder="E-Mail Address">
                    <input type="password" name="password" class="col-md-4 form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="text" name="address" class="form-control col-md-9" placeholder="Address Line 1">
                </div>
                <div class="form-group form-inline">
                    <input type="text" name="landmark" class="col-md-3 mr-1 form-control" placeholder="Landmark">
                    <input type="text" name="city" class="col-md-3 mr-1 form-control" placeholder="City">
                    <input type="text" name="pincode" class="col-md-3 form-control" placeholder="Pincode">
                </div>
                <div class="form-group form-inline">
                    <input type="date" name="birth" class="col-md-5  mr-1 form-control" placeholder="Date of Birth">
                    <input type="text" name="contact" class="col-md-4 mr-1 form-control" placeholder="Contact Number">
                </div>
                <div class="form-group form-inline">
                    <select name="branch" class="col-md-3 mr-1 form-control">
                        <option value="">-- Branch --</option>
                        <option value="Automobile Engineering">Automobile Engineering</option>
			            <option value="Computer Engineering">Computer Engineering</option>
			            <option value="Electronics Engineering">Electronics Engineering</option>
			            <option value="Electronics & Telecommunication">Electronics & Telecommunication</option>
			            <option value="Information Technology">Information Technology</option>
    			        <option value="Mechanical Engineering">Mechanical Engineering</option>
                    </select>
                    <select name="gender" class="col-md-3 form-control">
                        <option value="">-- Gender --</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                    <input type="file" name="avatar" class="col-md-3" placeholder="Avatar" style="outline:none;" accept="image/*">
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
