@extends('layouts.custom-app')

@section('custom-title')
- View all Staff @endsection

@section('content')
<div class="container">
	@if(session('success'))
		<div class="alert alert-success alert-dismissible fade show">
		<button class="close" data-dismiss="alert">&times;</button>
			{{session('success')}}
		</div>
	@endif
	@if(session('error'))
		<div class="alert alert-danger alert-dismissible fade show">
		<button class="close" data-dismiss="alert">&times;</button>
			{{session('error')}}
		</div>
	@endif
	<div class="col-md-12">
		<h5 class="modal-header">Search Staff <span class="badge badge-success">Total Staff : {{$staffsCount}}</span></h5>
		<br><input type="text" id="myInput" class="form-control col-md-6 float-right" onkeyup="myFunction()" placeholder="Search using Staff name..."><br>
		<br><br><div class="table table-responsive">
			<table id="myTable" class="table table-bordered table-info">
			<tr>
				<th>Name</th>
				<th>Father Name</th>
				<th>Surname</th>
				<th>Action</th>
			</tr>
			@foreach($staffs as $staff)
			<tr>
				<td>{{$staff->firstName}}</td>
				<td>{{$staff->fatherName}}</td>
				<td>{{$staff->lastName}}</td>
				<td>
					<div class="float-right">
						<a href="{{action('StaffController@edit', $staff->id)}}"><button type="button" class="btn btn-primary btn-sm">EDIT</button></a>
						<a href="{{action('StaffController@show', $staff->id)}}"><button type="button" class="btn btn-primary btn-sm">VIEW</button></a>
					</div>
				</td>
			</tr>
			@endforeach
		</div>
	</div>
</div>
@endsection

@section('custom-js')
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
@endsection