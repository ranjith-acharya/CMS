@extends('layouts.customStudent-app')

@section('custom-title') Home - {{Auth::user()->firstName}}&nbsp;{{Auth::user()->lastName}}@endsection

@section('options')
<a class="dropdown-item" href="{{url('/student')}}">
	Home
</a>
<a class="dropdown-item" href="{{route('student.edit', Auth::user()->id)}}">
	Edit Profile
</a>
<a class="dropdown-item" href="{{route('student.result.index', Auth::user()->id)}}">
	Results
</a>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<div class="modal-header">
				<h5 class="mt-2">Result</h5>
				<a class="btn-link link" href="{{url('/student')}}">
					<button class="mt-1 btn btn-sm btn-primary">Home</button>
				</a>
			</div>
			@if(session('success'))
			<div class="alert alert-success alert-dismissible fade show">
			<button class="close" data-dismiss="alert">&times;</button>
				{{session('success')}}
			</div>
			@endif
			<div class="modal-body">
				<div class="mb-4">
				{{Auth::user()->admissionNo}}</br>
				{{Auth::user()->firstName}}&nbsp;{{Auth::user()->lastName}}</br>
				<a href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</a></br>
				</div>
				<div class="row mt-2">
					<div class="table-responsive table-striped">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th colspan="2">First Year (F.E)</th>
									<th colspan="2">Second Year (S.E)</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<tr>
									<td><a class="link" href="{{route('student.result.sem1')}}">Sem 1</a></td>
									<td><a class="link" href="{{route('student.result.sem2')}}">Sem 2</a></td>
									<td><a class="link" href="{{route('student.result.sem3')}}">Sem 3</a></td>
									<td><a class="link" href="{{route('student.result.sem4')}}">Sem 4</a></td>
								</tr>
							</tbody>
							<thead>
								<tr>
									<th colspan="2">Third Year (T.E)</th>
									<th colspan="2">Final Year (B.E)</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<tr>
									<td><a class="link" href="{{route('student.result.sem5')}}">Sem 5</a></td>
									<td><a class="link" href="{{route('student.result.sem6')}}">Sem 6</a></td>
									<td><a class="link" href="#">Sem 7</a></td>
									<td><a class="link" href="#">Sem 8</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="container mb-4">
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<th>Sem 1</th>
							<th>Sem 2</th>
							<th>Sem 3</th>
							<th>Sem 4</th>
						</thead>
						<tbody>
							<tr>
								<td>
								@if($sem1Internal->count() == 0 || $sem1External->count() == 0)
									<h6 class="font-weight-bold">Sem1 Results not Published.!!</h6>
								@else
									@foreach($sem1Internal as $sem1Int)
										@foreach($sem1External as $sem1Ext)
											<!--[ {{$sem1Int->total}}, {{$sem1Ext->total}} | {{$sem1Int->outOf}}, {{$sem1Ext->outOf}} ]-->
											@if($sem1Int->remark == 'Pass' && $sem1Ext->remark == 'Pass')
												<div id="cgpaSem1"></div>
											@endif
											@if($sem1Int->remark == 'Fail' && $sem1Ext->remark == 'Fail')
												<div class="text-danger" id="cgpaSem1">Failed</div>
											@endif
											@if($sem1Int->remark == 'Fail' && $sem1Ext->remark == 'Pass')
												<div class="text-danger" id="cgpaSem1">Failed</div>
											@endif
											@if($sem1Int->remark == 'Pass' && $sem1Ext->remark == 'Fail')
												<div class="text-danger" id="cgpaSem1">Failed</div>
											@endif
											<script>
												var sem1IntRemark = '{{$sem1Int->remark}}';
												var sem1ExtRemark = '{{$sem1Ext->remark}}';
												var sem1IntTotal = {{$sem1Int->total}};
												var sem1ExtTotal = {{$sem1Ext->total}};
												var sem1IntOutOf = {{$sem1Int->outOf}};
												var sem1ExtOutOf = {{$sem1Ext->outOf}};
												var total = sem1IntTotal + sem1ExtTotal;
												var outOf = sem1IntOutOf + sem1ExtOutOf;
												var percentage = total*100 / outOf;
												//alert(percentage);
												var cgpaSem1 = percentage / 9.5;
												//alert(cgpaSem1);
												var cgpa = cgpaSem1.toFixed(2);
												//alert(cgpa);
												if(sem1IntRemark == 'Pass' && sem1ExtRemark == 'Pass'){
													document.getElementById('cgpaSem1').innerHTML = cgpa;
												}
												if(sem1IntRemark == 'Fail' && sem1ExtRemark == 'Fail'){
													document.getElementById('cgpaSem1').innerHTML = 0.00;
												}
												if(sem1IntRemark == 'Fail' && sem1ExtRemark == 'Pass'){
													document.getElementById('cgpaSem1').innerHTML = 0.00;
												}
												if(sem1IntRemark == 'Pass' && sem1ExtRemark == 'Fail'){
													document.getElementById('cgpaSem1').innerHTML = 0.00;
												}
											</script>
										@endforeach
									@endforeach
								@endif
								</td>
								<td>
								@if($sem2Internal->count() == 0 || $sem2External->count() == 0)
									<h6 class="font-weight-bold">Sem2 Results not Published.!!</h6>
								@else
									@foreach($sem2Internal as $sem2Int)
										@foreach($sem2External as $sem2Ext)
											<!--[ {{$sem2Int->total}}, {{$sem2Ext->total}} | {{$sem2Int->outOf}}, {{$sem2Ext->outOf}} ]-->
											@if($sem2Int->remark == 'Pass' && $sem2Ext->remark == 'Pass')
												<div id="cgpaSem2"></div>
											@endif
											@if($sem2Int->remark == 'Fail' && $sem2Ext->remark == 'Fail')
												<div class="text-danger" id="cgpaSem2">Failed</div>
											@endif
											@if($sem2Int->remark == 'Fail' && $sem2Ext->remark == 'Pass')
												<div class="text-danger" id="cgpaSem2">Failed</div>
											@endif
											@if($sem2Int->remark == 'Pass' && $sem2Ext->remark == 'Fail')
												<div class="text-danger" id="cgpaSem2">Failed</div>
											@endif
											<script>
												var sem2IntRemark = '{{$sem2Int->remark}}';
												var sem2ExtRemark = '{{$sem2Ext->remark}}';
												var sem2IntTotal = {{$sem2Int->total}};
												var sem2ExtTotal = {{$sem2Ext->total}};
												var sem2IntOutOf = {{$sem2Int->outOf}};
												var sem2ExtOutOf = {{$sem2Ext->outOf}};
												var total = sem2IntTotal + sem2ExtTotal;
												var outOf = sem2IntOutOf + sem2ExtOutOf;
												var percentage = total*100 / outOf;
												//alert(percentage);
												var cgpaSem2 = percentage / 9.5;
												//alert(cgpaSem2);
												var cgpa = cgpaSem2.toFixed(2);
												//alert(cgpa);
												if(sem2IntRemark == 'Pass' && sem2ExtRemark == 'Pass'){
													document.getElementById('cgpaSem2').innerHTML = cgpa;
												}
												if(sem2IntRemark == 'Fail' && sem2ExtRemark == 'Fail'){
													document.getElementById('cgpaSem2').innerHTML = 0.00;
												}
												if(sem2IntRemark == 'Fail' && sem2ExtRemark == 'Pass'){
													document.getElementById('cgpaSem2').innerHTML = 0.00;
												}
												if(sem2IntRemark == 'Pass' && sem2ExtRemark == 'Fail'){
													document.getElementById('cgpaSem2').innerHTML = 0.00;
												}
											</script>
										@endforeach
									@endforeach
								@endif
								</td>
								<td>
								@if($sem3Internal->count() == 0 || $sem3External->count() == 0)
									<h6 class="font-weight-bold">Sem3 Results not Published.!!</h6>
								@else
									@foreach($sem3Internal as $sem3Int)
										@foreach($sem3External as $sem3Ext)
											<!--[ {{$sem3Int->total}}, {{$sem3Ext->total}} | {{$sem3Int->outOf}}, {{$sem3Ext->outOf}} ]-->
											@if($sem3Int->remark == 'Pass' && $sem3Ext->remark == 'Pass')
												<div id="cgpaSem3"></div>
											@endif
											@if($sem3Int->remark == 'Fail' && $sem3Ext->remark == 'Fail')
												<div class="text-danger" id="cgpaSem3">Failed</div>
											@endif
											@if($sem3Int->remark == 'Fail' && $sem3Ext->remark == 'Pass')
												<div class="text-danger" id="cgpaSem3">Failed</div>
											@endif
											@if($sem3Int->remark == 'Pass' && $sem3Ext->remark == 'Fail')
												<div class="text-danger" id="cgpaSem3">Failed</div>
											@endif
											<script>
												var sem3IntRemark = '{{$sem3Int->remark}}';
												var sem3ExtRemark = '{{$sem3Ext->remark}}';
												var sem3IntTotal = {{$sem3Int->total}};
												var sem3ExtTotal = {{$sem3Ext->total}};
												var sem3IntOutOf = {{$sem3Int->outOf}};
												var sem3ExtOutOf = {{$sem3Ext->outOf}};
												var total = sem3IntTotal + sem3ExtTotal;
												var outOf = sem3IntOutOf + sem3ExtOutOf;
												var percentage = total*100 / outOf;
												//alert(percentage);
												var cgpaSem3 = percentage / 9.5;
												//alert(cgpaSem3);
												var cgpa = cgpaSem3.toFixed(2);
												//alert(cgpa);
												if(sem3IntRemark == 'Pass' && sem3ExtRemark == 'Pass'){
													document.getElementById('cgpaSem3').innerHTML = cgpa;
												}
												if(sem3IntRemark == 'Fail' && sem3ExtRemark == 'Fail'){
													document.getElementById('cgpaSem3').innerHTML = 0.00;
												}
												if(sem3IntRemark == 'Fail' && sem3ExtRemark == 'Pass'){
													document.getElementById('cgpaSem3').innerHTML = 0.00;
												}
												if(sem3IntRemark == 'Pass' && sem3ExtRemark == 'Fail'){
													document.getElementById('cgpaSem3').innerHTML = 0.00;
												}
											</script>
										@endforeach
									@endforeach
								@endif
								</td>
								<td>
								@if($sem4Internal->count() == 0 || $sem4External->count() == 0)
									<h6 class="font-weight-bold">Sem4 Results not Published.!!</h6>
								@else
									@foreach($sem4Internal as $sem4Int)
										@foreach($sem4External as $sem4Ext)
											<!--[ {{$sem4Int->total}}, {{$sem4Ext->total}} | {{$sem4Int->outOf}}, {{$sem4Ext->outOf}} ]-->
											@if($sem4Int->remark == 'Pass' && $sem4Ext->remark == 'Pass')
												<div id="cgpaSem4"></div>
											@endif
											@if($sem4Int->remark == 'Fail' && $sem4Ext->remark == 'Fail')
												<div class="text-danger" id="cgpaSem4">Failed</div>
											@endif
											@if($sem4Int->remark == 'Fail' && $sem4Ext->remark == 'Pass')
												<div class="text-danger" id="cgpaSem4">Failed</div>
											@endif
											@if($sem4Int->remark == 'Pass' && $sem4Ext->remark == 'Fail')
												<div class="text-danger" id="cgpaSem4">Failed</div>
											@endif
											<script>
												var sem4IntRemark = '{{$sem4Int->remark}}';
												var sem4ExtRemark = '{{$sem4Ext->remark}}';
												var sem4IntTotal = {{$sem4Int->total}};
												var sem4ExtTotal = {{$sem4Ext->total}};
												var sem4IntOutOf = {{$sem4Int->outOf}};
												var sem4ExtOutOf = {{$sem4Ext->outOf}};
												var total = sem4IntTotal + sem4ExtTotal;
												var outOf = sem4IntOutOf + sem4ExtOutOf;
												var percentage = total*100 / outOf;
												//alert(percentage);
												var cgpaSem4 = percentage / 9.5;
												//alert(cgpaSem4);
												var cgpa = cgpaSem4.toFixed(2);
												//alert(cgpa);
												if(sem4IntRemark == 'Pass' && sem4ExtRemark == 'Pass'){
													document.getElementById('cgpaSem4').innerHTML = cgpa;
												}
												if(sem4IntRemark == 'Fail' && sem4ExtRemark == 'Fail'){
													document.getElementById('cgpaSem4').innerHTML = 0.00;
												}
												if(sem4IntRemark == 'Fail' && sem4ExtRemark == 'Pass'){
													document.getElementById('cgpaSem4').innerHTML = 0.00;
												}
												if(sem4IntRemark == 'Pass' && sem4ExtRemark == 'Fail'){
													document.getElementById('cgpaSem4').innerHTML = 0.00;
												}
											</script>
										@endforeach
									@endforeach
								@endif
								</td>
							</tr>
						</tbody>
						<thead>
							<th>Sem 5</th>
							<th>Sem 6</th>
							<th>Sem 7</th>
							<th>Sem 8</th>
						</thead>
						<tbody>
							<tr>
								<td>
								@if($sem5Internal->count() == 0 || $sem5External->count() == 0)
									<h6 class="font-weight-bold">Sem5 Results not Published.!!</h6>
								@else
									@foreach($sem5Internal as $sem5Int)
										@foreach($sem5External as $sem5Ext)
											<!--[ {{$sem5Int->total}}, {{$sem5Ext->total}} | {{$sem5Int->outOf}}, {{$sem5Ext->outOf}} ]-->
											@if($sem5Int->remark == 'Pass' && $sem5Ext->remark == 'Pass')
												<div id="cgpaSem5"></div>
											@endif
											@if($sem5Int->remark == 'Fail' && $sem5Ext->remark == 'Fail')
												<div class="text-danger" id="cgpaSem5">0.00</div>
											@endif
											@if($sem5Int->remark == 'Fail' && $sem5Ext->remark == 'Pass')
												<div class="text-danger" id="cgpaSem5">0.00</div>
											@endif
											@if($sem5Int->remark == 'Pass' && $sem5Ext->remark == 'Fail')
												<div class="text-danger" id="cgpaSem5">0.00</div>
											@endif
											<script>
												var sem5IntRemark = '{{$sem5Int->remark}}';
												var sem5ExtRemark = '{{$sem5Ext->remark}}';
												var sem5IntTotal = {{$sem5Int->total}};
												var sem5ExtTotal = {{$sem5Ext->total}};
												var sem5IntOutOf = {{$sem5Int->outOf}};
												var sem5ExtOutOf = {{$sem5Ext->outOf}};
												var total = sem5IntTotal + sem5ExtTotal;
												var outOf = sem5IntOutOf + sem5ExtOutOf;
												var percentage = total*100 / outOf;
												//alert(percentage);
												var cgpaSem5 = percentage / 9.5;
												//alert(cgpaSem5);
												var cgpa = cgpaSem5.toFixed(2);
												//alert(cgpa);
												if(sem5IntRemark == 'Pass' && sem5ExtRemark == 'Pass'){
													document.getElementById('cgpaSem5').innerHTML = cgpa;
												}
												if(sem5IntRemark == 'Fail' && sem5ExtRemark == 'Fail'){
													document.getElementById('cgpaSem5').innerHTML = 0.00;
												}
												if(sem5IntRemark == 'Fail' && sem5ExtRemark == 'Pass'){
													document.getElementById('cgpaSem5').innerHTML = 0.00;
												}
												if(sem5IntRemark == 'Pass' && sem5ExtRemark == 'Fail'){
													document.getElementById('cgpaSem5').innerHTML = 0.00;
												}
											</script>
										@endforeach
									@endforeach
								@endif
								</td>
								<td>
								@if($sem6Internal->count() == 0 || $sem6External->count() == 0)
									<h6 class="font-weight-bold">Sem6 Results not Published.!!</h6>
								@else
									@foreach($sem6Internal as $sem6Int)
										@foreach($sem6External as $sem6Ext)
											<!--[ {{$sem6Int->total}}, {{$sem6Ext->total}} | {{$sem6Int->outOf}}, {{$sem6Ext->outOf}} ]-->
											@if($sem6Int->remark == 'Pass' && $sem6Ext->remark == 'Pass')
												<div id="cgpaSem6"></div>
											@endif
											@if($sem6Int->remark == 'Fail' && $sem6Ext->remark == 'Fail')
												<div class="text-danger" id="cgpaSem6">Failed</div>
											@endif
											@if($sem6Int->remark == 'Fail' && $sem6Ext->remark == 'Pass')
												<div class="text-danger" id="cgpaSem6">Failed</div>
											@endif
											@if($sem6Int->remark == 'Pass' && $sem6Ext->remark == 'Fail')
												<div class="text-danger" id="cgpaSem6">Failed</div>
											@endif
											<script>
												var sem6IntRemark = '{{$sem6Int->remark}}';
												var sem6ExtRemark = '{{$sem6Ext->remark}}';
												var sem6IntTotal = {{$sem6Int->total}};
												var sem6ExtTotal = {{$sem6Ext->total}};
												var sem6IntOutOf = {{$sem6Int->outOf}};
												var sem6ExtOutOf = {{$sem6Ext->outOf}};
												var total = sem6IntTotal + sem6ExtTotal;
												var outOf = sem6IntOutOf + sem6ExtOutOf;
												var percentage = total*100 / outOf;
												//alert(percentage);
												var cgpaSem6 = percentage / 9.5;
												//alert(cgpaSem6);
												var cgpa = cgpaSem6.toFixed(2);
												//alert(cgpa);
												if(sem6IntRemark == 'Pass' && sem6ExtRemark == 'Pass'){
													document.getElementById('cgpaSem6').innerHTML = cgpa;
												}
												if(sem6IntRemark == 'Fail' && sem6ExtRemark == 'Fail'){
													document.getElementById('cgpaSem6').innerHTML = 0.00;
												}
												if(sem6IntRemark == 'Fail' && sem6ExtRemark == 'Pass'){
													document.getElementById('cgpaSem6').innerHTML = 0.00;
												}
												if(sem6IntRemark == 'Pass' && sem6ExtRemark == 'Fail'){
													document.getElementById('cgpaSem6').innerHTML = 0.00;
												}
											</script>
										@endforeach
									@endforeach
								@endif
								</td>
								<td>
								@if($sem7Internal->count() == 0 || $sem7External->count() == 0)
									<h6 class="font-weight-bold">Sem7 Results not Published.!!</h6>
								@else
									@foreach($sem7Internal as $sem7Int)
										@foreach($sem7External as $sem7Ext)
											<!--[ {{$sem7Int->total}}, {{$sem7Ext->total}} | {{$sem7Int->outOf}}, {{$sem7Ext->outOf}} ]-->
											@if($sem7Int->remark == 'Pass' && $sem7Ext->remark == 'Pass')
												<div id="cgpaSem7"></div>
											@endif
											@if($sem7Int->remark == 'Fail' && $sem7Ext->remark == 'Fail')
												<div class="text-danger" id="cgpaSem7">Failed</div>
											@endif
											@if($sem7Int->remark == 'Fail' && $sem7Ext->remark == 'Pass')
												<div class="text-danger" id="cgpaSem7">Failed</div>
											@endif
											@if($sem7Int->remark == 'Pass' && $sem7Ext->remark == 'Fail')
												<div class="text-danger" id="cgpaSem7">Failed</div>
											@endif
											<script>
												var sem7IntRemark = '{{$sem7Int->remark}}';
												var sem7ExtRemark = '{{$sem7Ext->remark}}';
												var sem7IntTotal = {{$sem7Int->total}};
												var sem7ExtTotal = {{$sem7Ext->total}};
												var sem7IntOutOf = {{$sem7Int->outOf}};
												var sem7ExtOutOf = {{$sem7Ext->outOf}};
												var total = sem7IntTotal + sem7ExtTotal;
												var outOf = sem7IntOutOf + sem7ExtOutOf;
												var percentage = total*100 / outOf;
												//alert(percentage);
												var cgpaSem7 = percentage / 9.5;
												//alert(cgpaSem7);
												var cgpa = cgpaSem7.toFixed(2);
												//alert(cgpa);
												if(sem7IntRemark == 'Pass' && sem7ExtRemark == 'Pass'){
													document.getElementById('cgpaSem7').innerHTML = cgpa;
												}
												if(sem7IntRemark == 'Fail' && sem7ExtRemark == 'Fail'){
													document.getElementById('cgpaSem7').innerHTML = 0.00;
												}
												if(sem7IntRemark == 'Fail' && sem7ExtRemark == 'Pass'){
													document.getElementById('cgpaSem7').innerHTML = 0.00;
												}
												if(sem7IntRemark == 'Pass' && sem7ExtRemark == 'Fail'){
													document.getElementById('cgpaSem7').innerHTML = 0.00;
												}
											</script>
										@endforeach
									@endforeach
								@endif
								</td>
								<td>
								@if($sem8Internal->count() == 0 || $sem8External->count() == 0)
									<h6 class="font-weight-bold">Sem8 Results not Published.!!</h6>
								@else
									@foreach($sem8Internal as $sem8Int)
										@foreach($sem8External as $sem8Ext)
											<!--[ {{$sem8Int->total}}, {{$sem8Ext->total}} | {{$sem8Int->outOf}}, {{$sem8Ext->outOf}} ]-->
											@if($sem8Int->remark == 'Pass' && $sem8Ext->remark == 'Pass')
												<div id="cgpaSem8"></div>
											@endif
											@if($sem8Int->remark == 'Fail' && $sem8Ext->remark == 'Fail')
												<div class="text-danger" id="cgpaSem8">Failed</div>
											@endif
											@if($sem8Int->remark == 'Fail' && $sem8Ext->remark == 'Pass')
												<div class="text-danger" id="cgpaSem8">Failed</div>
											@endif
											@if($sem8Int->remark == 'Pass' && $sem8Ext->remark == 'Fail')
												<div class="text-danger" id="cgpaSem8">Failed</div>
											@endif
											<script>
												var sem8IntRemark = '{{$sem8Int->remark}}';
												var sem8ExtRemark = '{{$sem8Ext->remark}}';
												var sem8IntTotal = {{$sem8Int->total}};
												var sem8ExtTotal = {{$sem8Ext->total}};
												var sem8IntOutOf = {{$sem8Int->outOf}};
												var sem8ExtOutOf = {{$sem8Ext->outOf}};
												var total = sem8IntTotal + sem8ExtTotal;
												var outOf = sem8IntOutOf + sem8ExtOutOf;
												var percentage = total*100 / outOf;
												//alert(percentage);
												var cgpaSem8 = percentage / 9.5;
												//alert(cgpaSem8);
												var cgpa = cgpaSem8.toFixed(2);
												//alert(cgpa);
												if(sem8IntRemark == 'Pass' && sem8ExtRemark == 'Pass'){
													document.getElementById('cgpaSem8').innerHTML = cgpa;
												}
												if(sem8IntRemark == 'Fail' && sem8ExtRemark == 'Fail'){
													document.getElementById('cgpaSem8').innerHTML = 0.00;
												}
												if(sem8IntRemark == 'Fail' && sem8ExtRemark == 'Pass'){
													document.getElementById('cgpaSem8').innerHTML = 0.00;
												}
												if(sem8IntRemark == 'Pass' && sem8ExtRemark == 'Fail'){
													document.getElementById('cgpaSem8').innerHTML = 0.00;
												}
											</script>
										@endforeach
									@endforeach
								@endif
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection

@section('custom-js')
<script>
var sem1Cgpa = parseFloat(document.getElementById('cgpaSem1').innerHTML);
var sem2Cgpa = parseFloat(document.getElementById('cgpaSem2').innerHTML);
var sem3Cgpa = parseFloat(document.getElementById('cgpaSem3').innerHTML);
var sem4Cgpa = parseFloat(document.getElementById('cgpaSem4').innerHTML);
var sem5Cgpa = parseFloat(document.getElementById('cgpaSem5').innerHTML);
var sem6Cgpa = parseFloat(document.getElementById('cgpaSem6').innerHTML);
//var sem7Cgpa = document.getElementById('cgpaSem7').innerHTML;
//var sem8Cgpa = document.getElementById('cgpaSem8').innerHTML;
//alert(sem1Cgpa);
// alert(sem2Cgpa);
// alert(sem3Cgpa);
// alert(sem4Cgpa);
// alert(sem5Cgpa);
// alert(sem6Cgpa);
	var totalCgpa = (sem1Cgpa + sem2Cgpa + sem3Cgpa + sem4Cgpa + sem5Cgpa + sem6Cgpa).toFixed(2);
	alert(totalCgpa);
	var averageCgpa = totalCgpa / 6;
	var avgCgpa = (averageCgpa).toFixed(2);
	alert(avgCgpa);
	var cgpa = avgCgpa * 7.1 + 12;
	alert(cgpa);
// if(sem1Cgpa < 7.00 && sem2Cgpa < 7.00 && sem3Cgpa < 7.00 && sem4Cgpa < 7.00 &&sem5Cgpa < 7.00 &sem6Cgpa < 7.00){
	// alert(totalCgpa);
// }
</script>
@endsection