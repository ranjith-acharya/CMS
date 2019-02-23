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
        <div class="col-md-8">
            <div class="card card-body">
                <input type="text" id="myInput" class="form-control col-md-6" onkeyup="myFunction()" placeholder="Search for names...">
                <br><table id="myTable" class="table table-bordered">
                    <thead class="bg-dark text-white"><tr>
                        <th>Admission No</th>
                        <th>Name</th>
                        <th>Branch</th>
                        <th>Action</th>
                    </thead></tr><tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student->admission}}</td>
                            <td>{{$student->firstname}}&nbsp;{{$student->lastname}}</td>
                            <td>{{$student->branch}}</td>
                            <td>
                                <div class="dropdown text-center">
                                    <button class="btn btn-white dropdown-toggler" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{action('StudentController@edit', $student->id)}}">Edit</a>
                                        <a class="dropdown-item" href="{{action('StudentController@show', $student->id)}}">View</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach</tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('bottom-js')
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
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