@extends('layouts.custom-app')

@section('custom-title') Sem 4 Internal Marks @endsection

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
				<h5 class="mt-2">Sem 4 Internal Marks</h5>
				<div class="dropdown mt-1">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{action('StudentAdminResultController@sem4Int')}}">Home</a>
						<a class="dropdown-item" href="{{route('staffs.index')}}">Staff Index</a>
						<a class="dropdown-item" href="{{route('students.index')}}">Student Index</a>
						<a class="dropdown-item" href="{{route('sem4Int.show', $sem4Internal->id)}}">View</a>
					</div>
				</div>
			</div>
			@if(session('success'))
			<div class="alert alert-success alert-dismissible fade show">
			<button class="close" data-dismiss="alert">&times;</button>
				{{session('success')}}
			</div>
			@endif
			<div class="modal-body">
				<div class="col-md-6">
					{{$sem4Internal  ->firstName}}&nbsp;{{$sem4Internal  ->lastName}},&nbsp;<span class="text-primary">{{$sem4Internal  ->admissionNo}}</span><br>
					<span class="text-capitalize">{{$sem4Internal  ->branch}}&nbsp;Engg.</span><br>
				</div>
				<form class="form mt-4" method="post" action="{{route('sem4Int.update', $sem4Internal  ->id)}}">
				@csrf<input type="hidden" name="_method" value="PATCH">
				<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="int1">Subj 1 :</label>
									<select name="int1" class="custom-select form-control">
										<option value="">-- Select Internal Subj. --</option>
										<optgroup label="Automobile">
											<option value="Applied Maths - 4" @if($sem4Internal ->int1 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4Internal ->int1 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4Internal ->int1 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4Internal ->int1 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production process - 2" @if($sem4Internal ->int1 == 'Production process - 2') selected @endif>Production process - 2 (PP-2)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Analysis of Algorithm" @if($sem4Internal ->int1 == 'Analysis of Algorithm') selected @endif>Analysis of Algo. (AOA)</option>
											<option value="Applied Maths - 4" @if($sem4Internal ->int1 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Computer Graphics" @if($sem4Internal ->int1 == 'Computer Graphics') selected @endif>Computer Graphics (CG)</option>
											<option value="Computer Org. & Arch." @if($sem4Internal ->int1 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4Internal ->int1 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 4" @if($sem4Internal ->int1 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Digital System Design" @if($sem4Internal ->int1 == 'Digital System Design') selected @endif>Digital System Design</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4Internal ->int1 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Control System" @if($sem4Internal ->int1 == 'Linear Control System') selected @endif>Linear Control System</option>
											<option value="Microprocessor & Application" @if($sem4Internal ->int1 == 'Microprocessor & Application') selected @endif>Microprocessor & Application</option>
											<option value="Principle of Comm. Engg." @if($sem4Internal ->int1 == 'Principle of Comm. Engg.') selected @endif>Principle of Comm. Engg.</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 4" @if($sem4Internal ->int1 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4Internal ->int1 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Integrated Circuits" @if($sem4Internal ->int1 == 'Linear Integrated Circuits') selected @endif>Linear Integrated Circuits</option>
											<option value="Principle of Comm. Engg." @if($sem4Internal ->int1 == 'Principle') selected @endif>Principle of Comm. Engg.</option>
											<option value="Signals & System" @if($sem4Internal ->int1 == 'Signals & System') selected @endif>Signals & System</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 4" @if($sem4Internal ->int1 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Automata Theory" @if($sem4Internal ->int1 == 'Automata Theory') selected @endif>Automata Theory</option>
											<option value="Computer Networks" @if($sem4Internal ->int1 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Computer Org. & Arch." @if($sem4Internal ->int1 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4Internal ->int1 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 4" @if($sem4Internal ->int1 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4Internal ->int1 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4Internal ->int1 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4Internal ->int1 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production Process - 2" @if($sem4Internal ->int1 == 'Production Process - 2') selected @endif>Production Process - 2 (PP-2)</option>
										</optgroup>
									</select>
									@error('int1')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int1mark">Subj 1 Mark :</label>
									<input type="text" name="int1mark" id="int1mark" class="form-control key" placeholder="Enter subject 1 mark" value="{{$sem4Internal  ->int1mark}}">
									@error('int1mark')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="int2">Subj 2 :</label>
									<select name="int2" class="custom-select form-control">
										<option value="">-- Select Internal Subj. --</option>
										<optgroup label="Automobile">
											<option value="Applied Maths - 4" @if($sem4Internal ->int2 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4Internal ->int2 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4Internal ->int2 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4Internal ->int2 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production process - 2" @if($sem4Internal ->int2 == 'Production process - 2') selected @endif>Production process - 2 (PP-2)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Analysis of Algorithm" @if($sem4Internal ->int2 == 'Analysis of Algorithm') selected @endif>Analysis of Algo. (AOA)</option>
											<option value="Applied Maths - 4" @if($sem4Internal ->int2 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Computer Graphics" @if($sem4Internal ->int2 == 'Computer Graphics') selected @endif>Computer Graphics (CG)</option>
											<option value="Computer Org. & Arch." @if($sem4Internal ->int2 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4Internal ->int2 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 4" @if($sem4Internal ->int2 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Digital System Design" @if($sem4Internal ->int2 == 'Digital System Design') selected @endif>Digital System Design</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4Internal ->int2 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Control System" @if($sem4Internal ->int2 == 'Linear Control System') selected @endif>Linear Control System</option>
											<option value="Microprocessor & Application" @if($sem4Internal ->int2 == 'Microprocessor & Application') selected @endif>Microprocessor & Application</option>
											<option value="Principle of Comm. Engg." @if($sem4Internal ->int2 == 'Principle of Comm. Engg.') selected @endif>Principle of Comm. Engg.</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 4" @if($sem4Internal ->int2 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4Internal ->int2 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Integrated Circuits" @if($sem4Internal ->int2 == 'Linear Integrated Circuits') selected @endif>Linear Integrated Circuits</option>
											<option value="Principle of Comm. Engg." @if($sem4Internal ->int2 == 'Principle') selected @endif>Principle of Comm. Engg.</option>
											<option value="Signals & System" @if($sem4Internal ->int2 == 'Signals & System') selected @endif>Signals & System</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 4" @if($sem4Internal ->int2 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Automata Theory" @if($sem4Internal ->int2 == 'Automata Theory') selected @endif>Automata Theory</option>
											<option value="Computer Networks" @if($sem4Internal ->int2 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Computer Org. & Arch." @if($sem4Internal ->int2 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4Internal ->int2 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 4" @if($sem4Internal ->int2 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4Internal ->int2 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4Internal ->int2 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4Internal ->int2 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production Process - 2" @if($sem4Internal ->int2 == 'Production Process - 2') selected @endif>Production Process - 2 (PP-2)</option>
										</optgroup>
									</select>
									@error('int2')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int2mark">Subj 2 Mark :</label>
									<input type="text" name="int2mark" id="int2mark" class="form-control key" placeholder="Enter subject 2 mark" value="{{$sem4Internal  ->int2mark}}">
									@error('int2mark')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="int3">Subj 3 :</label>
									<select name="int3" class="custom-select form-control">
										<option value="">-- Select External Subj. --</option>
										<optgroup label="Automobile">
											<option value="Applied Maths - 4" @if($sem4Internal ->int3 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4Internal ->int3 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4Internal ->int3 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4Internal ->int3 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production process - 2" @if($sem4Internal ->int3 == 'Production process - 2') selected @endif>Production process - 2 (PP-2)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Analysis of Algorithm" @if($sem4Internal ->int3 == 'Analysis of Algorithm') selected @endif>Analysis of Algo. (AOA)</option>
											<option value="Applied Maths - 4" @if($sem4Internal ->int3 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Computer Graphics" @if($sem4Internal ->int3 == 'Computer Graphics') selected @endif>Computer Graphics (CG)</option>
											<option value="Computer Org. & Arch." @if($sem4Internal ->int3 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4Internal ->int3 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 4" @if($sem4Internal ->int3 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Digital System Design" @if($sem4Internal ->int3 == 'Digital System Design') selected @endif>Digital System Design</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4Internal ->int3 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Control System" @if($sem4Internal ->int3 == 'Linear Control System') selected @endif>Linear Control System</option>
											<option value="Microprocessor & Application" @if($sem4Internal ->int3 == 'Microprocessor & Application') selected @endif>Microprocessor & Application</option>
											<option value="Principle of Comm. Engg." @if($sem4Internal ->int3 == 'Principle of Comm. Engg.') selected @endif>Principle of Comm. Engg.</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 4" @if($sem4Internal ->int3 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4Internal ->int3 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Integrated Circuits" @if($sem4Internal ->int3 == 'Linear Integrated Circuits') selected @endif>Linear Integrated Circuits</option>
											<option value="Principle of Comm. Engg." @if($sem4Internal ->int3 == 'Principle') selected @endif>Principle of Comm. Engg.</option>
											<option value="Signals & System" @if($sem4Internal ->int3 == 'Signals & System') selected @endif>Signals & System</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 4" @if($sem4Internal ->int3 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Automata Theory" @if($sem4Internal ->int3 == 'Automata Theory') selected @endif>Automata Theory</option>
											<option value="Computer Networks" @if($sem4Internal ->int3 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Computer Org. & Arch." @if($sem4Internal ->int3 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4Internal ->int3 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 4" @if($sem4Internal ->int3 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4Internal ->int3 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4Internal ->int3 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4Internal ->int3 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production Process - 2" @if($sem4Internal ->int3 == 'Production Process - 2') selected @endif>Production Process - 2 (PP-2)</option>
										</optgroup>
									</select>
									@error('int3')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int3mark">Subj 3 Mark :</label>
									<input type="text" name="int3mark" id="int3mark" class="form-control key" placeholder="Enter subject 3 mark" value="{{$sem4Internal  ->int3mark}}">
									@error('int3mark')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="int4">Subj 4 :</label>
									<select name="int4" class="custom-select form-control">
										<option value="">-- Select External Subj. --</option>
										<optgroup label="Automobile">
											<option value="Applied Maths - 4" @if($sem4Internal ->int4 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4Internal ->int4 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4Internal ->int4 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4Internal ->int4 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production process - 2" @if($sem4Internal ->int4 == 'Production process - 2') selected @endif>Production process - 2 (PP-2)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Analysis of Algorithm" @if($sem4Internal ->int4 == 'Analysis of Algorithm') selected @endif>Analysis of Algo. (AOA)</option>
											<option value="Applied Maths - 4" @if($sem4Internal ->int4 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Computer Graphics" @if($sem4Internal ->int4 == 'Computer Graphics') selected @endif>Computer Graphics (CG)</option>
											<option value="Computer Org. & Arch." @if($sem4Internal ->int4 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4Internal ->int4 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 4" @if($sem4Internal ->int4 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Digital System Design" @if($sem4Internal ->int4 == 'Digital System Design') selected @endif>Digital System Design</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4Internal ->int4 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Control System" @if($sem4Internal ->int4 == 'Linear Control System') selected @endif>Linear Control System</option>
											<option value="Microprocessor & Application" @if($sem4Internal ->int4 == 'Microprocessor & Application') selected @endif>Microprocessor & Application</option>
											<option value="Principle of Comm. Engg." @if($sem4Internal ->int4 == 'Principle of Comm. Engg.') selected @endif>Principle of Comm. Engg.</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 4" @if($sem4Internal ->int4 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4Internal ->int4 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Integrated Circuits" @if($sem4Internal ->int4 == 'Linear Integrated Circuits') selected @endif>Linear Integrated Circuits</option>
											<option value="Principle of Comm. Engg." @if($sem4Internal ->int4 == 'Principle') selected @endif>Principle of Comm. Engg.</option>
											<option value="Signals & System" @if($sem4Internal ->int4 == 'Signals & System') selected @endif>Signals & System</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 4" @if($sem4Internal ->int4 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Automata Theory" @if($sem4Internal ->int4 == 'Automata Theory') selected @endif>Automata Theory</option>
											<option value="Computer Networks" @if($sem4Internal ->int4 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Computer Org. & Arch." @if($sem4Internal ->int4 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4Internal ->int4 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 4" @if($sem4Internal ->int4 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4Internal ->int4 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4Internal ->int4 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4Internal ->int4 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production Process - 2" @if($sem4Internal ->int4 == 'Production Process - 2') selected @endif>Production Process - 2 (PP-2)</option>
										</optgroup>
									</select>
									@error('int4')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int4mark">Subj 4 Mark :</label>
									<input type="text" name="int4mark" id="int4mark" class="form-control key" placeholder="Enter subject 4 mark" value="{{$sem4Internal  ->int4mark}}">
									@error('int4mark')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="int5">Subj 5 :</label>
									<select name="int5" class="custom-select form-control">
										<option value="">-- Select External Subj. --</option>
										<optgroup label="Automobile">
											<option value="Applied Maths - 4" @if($sem4Internal ->int5 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4Internal ->int5 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4Internal ->int5 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4Internal ->int5 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production process - 2" @if($sem4Internal ->int5 == 'Production process - 2') selected @endif>Production process - 2 (PP-2)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Analysis of Algorithm" @if($sem4Internal ->int5 == 'Analysis of Algorithm') selected @endif>Analysis of Algo. (AOA)</option>
											<option value="Applied Maths - 4" @if($sem4Internal ->int5 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Computer Graphics" @if($sem4Internal ->int5 == 'Computer Graphics') selected @endif>Computer Graphics (CG)</option>
											<option value="Computer Org. & Arch." @if($sem4Internal ->int5 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4Internal ->int5 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 4" @if($sem4Internal ->int5 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Digital System Design" @if($sem4Internal ->int5 == 'Digital System Design') selected @endif>Digital System Design</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4Internal ->int5 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Control System" @if($sem4Internal ->int5 == 'Linear Control System') selected @endif>Linear Control System</option>
											<option value="Microprocessor & Application" @if($sem4Internal ->int5 == 'Microprocessor & Application') selected @endif>Microprocessor & Application</option>
											<option value="Principle of Comm. Engg." @if($sem4Internal ->int5 == 'Principle of Comm. Engg.') selected @endif>Principle of Comm. Engg.</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 4" @if($sem4Internal ->int5 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4Internal ->int5 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Integrated Circuits" @if($sem4Internal ->int5 == 'Linear Integrated Circuits') selected @endif>Linear Integrated Circuits</option>
											<option value="Principle of Comm. Engg." @if($sem4Internal ->int5 == 'Principle') selected @endif>Principle of Comm. Engg.</option>
											<option value="Signals & System" @if($sem4Internal ->int5 == 'Signals & System') selected @endif>Signals & System</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 4" @if($sem4Internal ->int5 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Automata Theory" @if($sem4Internal ->int5 == 'Automata Theory') selected @endif>Automata Theory</option>
											<option value="Computer Networks" @if($sem4Internal ->int5 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Computer Org. & Arch." @if($sem4Internal ->int5 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4Internal ->int5 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 4" @if($sem4Internal ->int5 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4Internal ->int5 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4Internal ->int5 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4Internal ->int5 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production Process - 2" @if($sem4Internal ->int5 == 'Production Process - 2') selected @endif>Production Process - 2 (PP-2)</option>
										</optgroup>
									</select>
									@error('int5')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int5mark">Subj 5 Mark :</label>
									<input type="text" name="int5mark" id="int5mark" class="form-control key" placeholder="Enter subject 5 mark" value="{{$sem4Internal  ->int5mark}}">
									@error('int5mark')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="int6">Subj 6 :</label>
									<select name="int6" class="custom-select form-control">
										<option value="">-- Select External Subj. --</option>
										<optgroup label="Automobile">
											<option value="Applied Maths - 4" @if($sem4Internal ->int6 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4Internal ->int6 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4Internal ->int6 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4Internal ->int6 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production process - 2" @if($sem4Internal ->int6 == 'Production process - 2') selected @endif>Production process - 2 (PP-2)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Analysis of Algorithm" @if($sem4Internal ->int6 == 'Analysis of Algorithm') selected @endif>Analysis of Algo. (AOA)</option>
											<option value="Applied Maths - 4" @if($sem4Internal ->int6 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Computer Graphics" @if($sem4Internal ->int6 == 'Computer Graphics') selected @endif>Computer Graphics (CG)</option>
											<option value="Computer Org. & Arch." @if($sem4Internal ->int6 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4Internal ->int6 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 4" @if($sem4Internal ->int6 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Digital System Design" @if($sem4Internal ->int6 == 'Digital System Design') selected @endif>Digital System Design</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4Internal ->int6 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Control System" @if($sem4Internal ->int6 == 'Linear Control System') selected @endif>Linear Control System</option>
											<option value="Microprocessor & Application" @if($sem4Internal ->int6 == 'Microprocessor & Application') selected @endif>Microprocessor & Application</option>
											<option value="Principle of Comm. Engg." @if($sem4Internal ->int6 == 'Principle of Comm. Engg.') selected @endif>Principle of Comm. Engg.</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 4" @if($sem4Internal ->int6 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4Internal ->int6 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Integrated Circuits" @if($sem4Internal ->int6 == 'Linear Integrated Circuits') selected @endif>Linear Integrated Circuits</option>
											<option value="Principle of Comm. Engg." @if($sem4Internal ->int6 == 'Principle') selected @endif>Principle of Comm. Engg.</option>
											<option value="Signals & System" @if($sem4Internal ->int6 == 'Signals & System') selected @endif>Signals & System</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 4" @if($sem4Internal ->int6 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Automata Theory" @if($sem4Internal ->int6 == 'Automata Theory') selected @endif>Automata Theory</option>
											<option value="Computer Networks" @if($sem4Internal ->int6 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Computer Org. & Arch." @if($sem4Internal ->int6 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4Internal ->int6 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 4" @if($sem4Internal ->int6 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4Internal ->int6 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4Internal ->int6 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4Internal ->int6 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production Process - 2" @if($sem4Internal ->int6 == 'Production Process - 2') selected @endif>Production Process - 2 (PP-2)</option>
										</optgroup>
									</select>
									@error('int6')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int6mark">Subj 6 Mark :</label>
									<input type="text" name="int6mark" id="int6mark" class="form-control key" placeholder="Enter subject 6 mark" value="{{$sem4Internal  ->int6mark}}">
									@error('int6mark')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<input type="text" name="totalIntMark" id="totalIntMark" class="form-control" readonly>
						</div>
						<div class="col-md-3">
							<select class="custom-select" name="outOfInt">
								<option value="">-- Select Total no. of Subj. --</option>
								<option value="100" @if($sem4Internal->outOf == '100') selected @endif>05</option>
								<option value="120" @if($sem4Internal->outOf == '120') selected @endif>06</option>
							</select>
							@error('outOfInt')
								<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
						<div class="col-md-3">
							<select class="custom-select" name="remarkInt">
								<option value="">-- Remark --</option>
								<option value="Fail" @if($sem4Internal  ->remark == 'Fail') selected @endif>Fail</option>
								<option value="Pass" @if($sem4Internal  ->remark == 'Pass') selected @endif>Pass</option>
							</select>
							@error('remarkInt')
								<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
						<div class="col-md-3 mt-2">
							<input type="submit" class="btn btn-sm btn-success" value="Save">
							<input type="reset" class="btn btn-sm btn-danger" value="Cancel">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('custom-js')
<script>
$(document).ready(function(){
	function intCalc(){
		var $int1mark = ($.trim($("#int1mark").val()) != "" && !isNaN($("#int1mark").val())) ? parseInt($("#int1mark").val()) : 0;
		var $int2mark = ($.trim($("#int2mark").val()) != "" && !isNaN($("#int2mark").val())) ? parseInt($("#int2mark").val()) : 0;
		var $int3mark = ($.trim($("#int3mark").val()) != "" && !isNaN($("#int3mark").val())) ? parseInt($("#int3mark").val()) : 0;
		var $int4mark = ($.trim($("#int4mark").val()) != "" && !isNaN($("#int4mark").val())) ? parseInt($("#int4mark").val()) : 0;
		var $int5mark = ($.trim($("#int5mark").val()) != "" && !isNaN($("#int5mark").val())) ? parseInt($("#int5mark").val()) : 0;
		var $int6mark = ($.trim($("#int6mark").val()) != "" && !isNaN($("#int6mark").val())) ? parseInt($("#int6mark").val()) : 0;
		$total = $int1mark + $int2mark + $int3mark + $int4mark + $int5mark + $int6mark;
		$("#totalIntMark").val($total);
	}
	$(".key").keyup(function(){
		intCalc();
	});
	
	function extCalc(){
		var $ext1mark = ($.trim($("#ext1mark").val()) != "" && !isNaN($("#ext1mark").val())) ? parseInt($("#ext1mark").val()) : 0;
		var $ext2mark = ($.trim($("#ext2mark").val()) != "" && !isNaN($("#ext2mark").val())) ? parseInt($("#ext2mark").val()) : 0;
		var $ext3mark = ($.trim($("#ext3mark").val()) != "" && !isNaN($("#ext3mark").val())) ? parseInt($("#ext3mark").val()) : 0;
		var $ext4mark = ($.trim($("#ext4mark").val()) != "" && !isNaN($("#ext4mark").val())) ? parseInt($("#ext4mark").val()) : 0;
		var $ext5mark = ($.trim($("#ext5mark").val()) != "" && !isNaN($("#ext5mark").val())) ? parseInt($("#ext5mark").val()) : 0;
		var $ext6mark = ($.trim($("#ext6mark").val()) != "" && !isNaN($("#ext6mark").val())) ? parseInt($("#ext6mark").val()) : 0;
		$total = $ext1mark + $ext2mark + $ext3mark + $ext4mark + $ext5mark + $ext6mark;
		$("#totalExtMark").val($total);
	}
	$(".key").keyup(function(){
		extCalc();
	});
	
});
</script>
@endsection