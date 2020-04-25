@extends('layouts.custom-app')

@section('custom-title') Sem 4 External Marks @endsection

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
				<h5 class="mt-2">Sem 4 External Marks</h5>
				<div class="dropdown mt-1">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{action('StudentAdminResultController@sem4Ext')}}">Home</a>
						<a class="dropdown-item" href="{{route('staffs.index')}}">Staff Index</a>
						<a class="dropdown-item" href="{{route('students.index')}}">Student Index</a>
						<a class="dropdown-item" href="{{route('sem4Ext.show', $sem4External->id)}}">View</a>
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
					{{$sem4External ->firstName}}&nbsp;{{$sem4External ->lastName}},&nbsp;<span class="text-primary">{{$sem4External ->admissionNo}}</span><br>
					<span class="text-capitalize">{{$sem4External ->branch}}&nbsp;Engg.</span><br>
				</div>
				<form class="form mt-4" method="post" action="{{route('sem4Ext.update', $sem4External ->id)}}">
				@csrf<input type="hidden" name="_method" value="PATCH">
				<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="ext1">Subj 1 :</label>
									<select name="ext1" class="custom-select form-control">
										<option value="">-- Select External Subj. --</option>
										<optgroup label="Automobile">
											<option value="Applied Maths - 4" @if($sem4External->ext1 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4External->ext1 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4External->ext1 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4External->ext1 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production process - 2" @if($sem4External->ext1 == 'Production process - 2') selected @endif>Production process - 2 (PP-2)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Analysis of Algorithm" @if($sem4External->ext1 == 'Analysis of Algorithm') selected @endif>Analysis of Algo. (AOA)</option>
											<option value="Applied Maths - 4" @if($sem4External->ext1 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Computer Graphics" @if($sem4External->ext1 == 'Computer Graphics') selected @endif>Computer Graphics (CG)</option>
											<option value="Computer Org. & Arch." @if($sem4External->ext1 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4External->ext1 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 4" @if($sem4External->ext1 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Digital System Design" @if($sem4External->ext1 == 'Digital System Design') selected @endif>Digital System Design</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4External->ext1 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Control System" @if($sem4External->ext1 == 'Linear Control System') selected @endif>Linear Control System</option>
											<option value="Microprocessor & Application" @if($sem4External->ext1 == 'Microprocessor & Application') selected @endif>Microprocessor & Application</option>
											<option value="Principle of Comm. Engg." @if($sem4External->ext1 == 'Principle of Comm. Engg.') selected @endif>Principle of Comm. Engg.</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 4" @if($sem4External->ext1 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4External->ext1 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Integrated Circuits" @if($sem4External->ext1 == 'Linear Integrated Circuits') selected @endif>Linear Integrated Circuits</option>
											<option value="Principle of Comm. Engg." @if($sem4External->ext1 == 'Principle') selected @endif>Principle of Comm. Engg.</option>
											<option value="Signals & System" @if($sem4External->ext1 == 'Signals & System') selected @endif>Signals & System</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 4" @if($sem4External->ext1 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Automata Theory" @if($sem4External->ext1 == 'Automata Theory') selected @endif>Automata Theory</option>
											<option value="Computer Networks" @if($sem4External->ext1 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Computer Org. & Arch." @if($sem4External->ext1 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4External->ext1 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 4" @if($sem4External->ext1 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4External->ext1 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4External->ext1 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4External->ext1 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production Process - 2" @if($sem4External->ext1 == 'Production Process - 2') selected @endif>Production Process - 2 (PP-2)</option>
										</optgroup>
									</select>
									@error('ext1')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext1mark">Subj 1 Mark :</label>
									<input type="text" name="ext1mark" id="ext1mark" class="form-control key" placeholder="Enter subject 1 mark" value="{{$sem4External ->ext1mark}}">
									@error('ext1mark')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="ext2">Subj 2 :</label>
									<select name="ext2" class="custom-select form-control">
										<option value="">-- Select External Subj. --</option>
										<optgroup label="Automobile">
											<option value="Applied Maths - 4" @if($sem4External->ext2 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4External->ext2 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4External->ext2 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4External->ext2 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production process - 2" @if($sem4External->ext2 == 'Production process - 2') selected @endif>Production process - 2 (PP-2)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Analysis of Algorithm" @if($sem4External->ext2 == 'Analysis of Algorithm') selected @endif>Analysis of Algo. (AOA)</option>
											<option value="Applied Maths - 4" @if($sem4External->ext2 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Computer Graphics" @if($sem4External->ext2 == 'Computer Graphics') selected @endif>Computer Graphics (CG)</option>
											<option value="Computer Org. & Arch." @if($sem4External->ext2 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4External->ext2 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 4" @if($sem4External->ext2 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Digital System Design" @if($sem4External->ext2 == 'Digital System Design') selected @endif>Digital System Design</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4External->ext2 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Control System" @if($sem4External->ext2 == 'Linear Control System') selected @endif>Linear Control System</option>
											<option value="Microprocessor & Application" @if($sem4External->ext2 == 'Microprocessor & Application') selected @endif>Microprocessor & Application</option>
											<option value="Principle of Comm. Engg." @if($sem4External->ext2 == 'Principle of Comm. Engg.') selected @endif>Principle of Comm. Engg.</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 4" @if($sem4External->ext2 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4External->ext2 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Integrated Circuits" @if($sem4External->ext2 == 'Linear Integrated Circuits') selected @endif>Linear Integrated Circuits</option>
											<option value="Principle of Comm. Engg." @if($sem4External->ext2 == 'Principle') selected @endif>Principle of Comm. Engg.</option>
											<option value="Signals & System" @if($sem4External->ext2 == 'Signals & System') selected @endif>Signals & System</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 4" @if($sem4External->ext2 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Automata Theory" @if($sem4External->ext2 == 'Automata Theory') selected @endif>Automata Theory</option>
											<option value="Computer Networks" @if($sem4External->ext2 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Computer Org. & Arch." @if($sem4External->ext2 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4External->ext2 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 4" @if($sem4External->ext2 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4External->ext2 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4External->ext2 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4External->ext2 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production Process - 2" @if($sem4External->ext2 == 'Production Process - 2') selected @endif>Production Process - 2 (PP-2)</option>
										</optgroup>
									</select>
									@error('ext2')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext2mark">Subj 2 Mark :</label>
									<input type="text" name="ext2mark" id="ext2mark" class="form-control key" placeholder="Enter subject 2 mark" value="{{$sem4External ->ext2mark}}">
									@error('ext2mark')
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
									<label for="ext3">Subj 3 :</label>
									<select name="ext3" class="custom-select form-control">
										<option value="">-- Select External Subj. --</option>
										<optgroup label="Automobile">
											<option value="Applied Maths - 4" @if($sem4External->ext3 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4External->ext3 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4External->ext3 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4External->ext3 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production process - 2" @if($sem4External->ext3 == 'Production process - 2') selected @endif>Production process - 2 (PP-2)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Analysis of Algorithm" @if($sem4External->ext3 == 'Analysis of Algorithm') selected @endif>Analysis of Algo. (AOA)</option>
											<option value="Applied Maths - 4" @if($sem4External->ext3 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Computer Graphics" @if($sem4External->ext3 == 'Computer Graphics') selected @endif>Computer Graphics (CG)</option>
											<option value="Computer Org. & Arch." @if($sem4External->ext3 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4External->ext3 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 4" @if($sem4External->ext3 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Digital System Design" @if($sem4External->ext3 == 'Digital System Design') selected @endif>Digital System Design</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4External->ext3 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Control System" @if($sem4External->ext3 == 'Linear Control System') selected @endif>Linear Control System</option>
											<option value="Microprocessor & Application" @if($sem4External->ext3 == 'Microprocessor & Application') selected @endif>Microprocessor & Application</option>
											<option value="Principle of Comm. Engg." @if($sem4External->ext3 == 'Principle of Comm. Engg.') selected @endif>Principle of Comm. Engg.</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 4" @if($sem4External->ext3 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4External->ext3 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Integrated Circuits" @if($sem4External->ext3 == 'Linear Integrated Circuits') selected @endif>Linear Integrated Circuits</option>
											<option value="Principle of Comm. Engg." @if($sem4External->ext3 == 'Principle') selected @endif>Principle of Comm. Engg.</option>
											<option value="Signals & System" @if($sem4External->ext3 == 'Signals & System') selected @endif>Signals & System</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 4" @if($sem4External->ext3 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Automata Theory" @if($sem4External->ext3 == 'Automata Theory') selected @endif>Automata Theory</option>
											<option value="Computer Networks" @if($sem4External->ext3 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Computer Org. & Arch." @if($sem4External->ext3 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4External->ext3 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 4" @if($sem4External->ext3 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4External->ext3 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4External->ext3 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4External->ext3 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production Process - 2" @if($sem4External->ext3 == 'Production Process - 2') selected @endif>Production Process - 2 (PP-2)</option>
										</optgroup>
									</select>
									@error('ext3')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext3mark">Subj 3 Mark :</label>
									<input type="text" name="ext3mark" id="ext3mark" class="form-control key" placeholder="Enter subject 3 mark" value="{{$sem4External ->ext3mark}}">
									@error('ext3mark')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="ext4">Subj 4 :</label>
									<select name="ext4" class="custom-select form-control">
										<option value="">-- Select External Subj. --</option>
										<optgroup label="Automobile">
											<option value="Applied Maths - 4" @if($sem4External->ext4 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4External->ext4 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4External->ext4 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4External->ext4 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production process - 2" @if($sem4External->ext4 == 'Production process - 2') selected @endif>Production process - 2 (PP-2)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Analysis of Algorithm" @if($sem4External->ext4 == 'Analysis of Algorithm') selected @endif>Analysis of Algo. (AOA)</option>
											<option value="Applied Maths - 4" @if($sem4External->ext4 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Computer Graphics" @if($sem4External->ext4 == 'Computer Graphics') selected @endif>Computer Graphics (CG)</option>
											<option value="Computer Org. & Arch." @if($sem4External->ext4 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4External->ext4 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 4" @if($sem4External->ext4 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Digital System Design" @if($sem4External->ext4 == 'Digital System Design') selected @endif>Digital System Design</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4External->ext4 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Control System" @if($sem4External->ext4 == 'Linear Control System') selected @endif>Linear Control System</option>
											<option value="Microprocessor & Application" @if($sem4External->ext4 == 'Microprocessor & Application') selected @endif>Microprocessor & Application</option>
											<option value="Principle of Comm. Engg." @if($sem4External->ext4 == 'Principle of Comm. Engg.') selected @endif>Principle of Comm. Engg.</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 4" @if($sem4External->ext4 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4External->ext4 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Integrated Circuits" @if($sem4External->ext4 == 'Linear Integrated Circuits') selected @endif>Linear Integrated Circuits</option>
											<option value="Principle of Comm. Engg." @if($sem4External->ext4 == 'Principle') selected @endif>Principle of Comm. Engg.</option>
											<option value="Signals & System" @if($sem4External->ext4 == 'Signals & System') selected @endif>Signals & System</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 4" @if($sem4External->ext4 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Automata Theory" @if($sem4External->ext4 == 'Automata Theory') selected @endif>Automata Theory</option>
											<option value="Computer Networks" @if($sem4External->ext4 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Computer Org. & Arch." @if($sem4External->ext4 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4External->ext4 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 4" @if($sem4External->ext4 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4External->ext4 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4External->ext4 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4External->ext4 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production Process - 2" @if($sem4External->ext4 == 'Production Process - 2') selected @endif>Production Process - 2 (PP-2)</option>
										</optgroup>
									</select>
									@error('ext4')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext4mark">Subj 4 Mark :</label>
									<input type="text" name="ext4mark" id="ext4mark" class="form-control key" placeholder="Enter subject 4 mark" value="{{$sem4External ->ext4mark}}">
									@error('ext4mark')
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
									<label for="ext5">Subj 5 :</label>
									<select name="ext5" class="custom-select form-control">
										<option value="">-- Select External Subj. --</option>
										<optgroup label="Automobile">
											<option value="Applied Maths - 4" @if($sem4External->ext5 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4External->ext5 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4External->ext5 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4External->ext5 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production process - 2" @if($sem4External->ext5 == 'Production process - 2') selected @endif>Production process - 2 (PP-2)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Analysis of Algorithm" @if($sem4External->ext5 == 'Analysis of Algorithm') selected @endif>Analysis of Algo. (AOA)</option>
											<option value="Applied Maths - 4" @if($sem4External->ext5 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Computer Graphics" @if($sem4External->ext5 == 'Computer Graphics') selected @endif>Computer Graphics (CG)</option>
											<option value="Computer Org. & Arch." @if($sem4External->ext5 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4External->ext5 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 4" @if($sem4External->ext5 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Digital System Design" @if($sem4External->ext5 == 'Digital System Design') selected @endif>Digital System Design</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4External->ext5 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Control System" @if($sem4External->ext5 == 'Linear Control System') selected @endif>Linear Control System</option>
											<option value="Microprocessor & Application" @if($sem4External->ext5 == 'Microprocessor & Application') selected @endif>Microprocessor & Application</option>
											<option value="Principle of Comm. Engg." @if($sem4External->ext5 == 'Principle of Comm. Engg.') selected @endif>Principle of Comm. Engg.</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 4" @if($sem4External->ext5 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4External->ext5 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Integrated Circuits" @if($sem4External->ext5 == 'Linear Integrated Circuits') selected @endif>Linear Integrated Circuits</option>
											<option value="Principle of Comm. Engg." @if($sem4External->ext5 == 'Principle') selected @endif>Principle of Comm. Engg.</option>
											<option value="Signals & System" @if($sem4External->ext5 == 'Signals & System') selected @endif>Signals & System</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 4" @if($sem4External->ext5 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Automata Theory" @if($sem4External->ext5 == 'Automata Theory') selected @endif>Automata Theory</option>
											<option value="Computer Networks" @if($sem4External->ext5 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Computer Org. & Arch." @if($sem4External->ext5 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4External->ext5 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 4" @if($sem4External->ext5 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4External->ext5 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4External->ext5 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4External->ext5 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production Process - 2" @if($sem4External->ext5 == 'Production Process - 2') selected @endif>Production Process - 2 (PP-2)</option>
										</optgroup>
									</select>
									@error('ext5')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext5mark">Subj 5 Mark :</label>
									<input type="text" name="ext5mark" id="ext5mark" class="form-control key" placeholder="Enter subject 5 mark" value="{{$sem4External ->ext5mark}}">
									@error('ext5mark')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="ext6">Subj 6 :</label>
									<select name="ext6" class="custom-select form-control">
										<option value="">-- Select External Subj. --</option>
										<optgroup label="Automobile">
											<option value="Applied Maths - 4" @if($sem4External->ext6 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4External->ext6 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4External->ext6 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4External->ext6 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production process - 2" @if($sem4External->ext6 == 'Production process - 2') selected @endif>Production process - 2 (PP-2)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Analysis of Algorithm" @if($sem4External->ext6 == 'Analysis of Algorithm') selected @endif>Analysis of Algo. (AOA)</option>
											<option value="Applied Maths - 4" @if($sem4External->ext6 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Computer Graphics" @if($sem4External->ext6 == 'Computer Graphics') selected @endif>Computer Graphics (CG)</option>
											<option value="Computer Org. & Arch." @if($sem4External->ext6 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4External->ext6 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 4" @if($sem4External->ext6 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Digital System Design" @if($sem4External->ext6 == 'Digital System Design') selected @endif>Digital System Design</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4External->ext6 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Control System" @if($sem4External->ext6 == 'Linear Control System') selected @endif>Linear Control System</option>
											<option value="Microprocessor & Application" @if($sem4External->ext6 == 'Microprocessor & Application') selected @endif>Microprocessor & Application</option>
											<option value="Principle of Comm. Engg." @if($sem4External->ext6 == 'Principle of Comm. Engg.') selected @endif>Principle of Comm. Engg.</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 4" @if($sem4External->ext6 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Electronic Devices & Circuit - 2" @if($sem4External->ext6 == 'Electronic Devices & Circuit - 2') selected @endif>Electronic Devices & Circuit - 2</option>
											<option value="Linear Integrated Circuits" @if($sem4External->ext6 == 'Linear Integrated Circuits') selected @endif>Linear Integrated Circuits</option>
											<option value="Principle of Comm. Engg." @if($sem4External->ext6 == 'Principle') selected @endif>Principle of Comm. Engg.</option>
											<option value="Signals & System" @if($sem4External->ext6 == 'Signals & System') selected @endif>Signals & System</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 4" @if($sem4External->ext6 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Automata Theory" @if($sem4External->ext6 == 'Automata Theory') selected @endif>Automata Theory</option>
											<option value="Computer Networks" @if($sem4External->ext6 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Computer Org. & Arch." @if($sem4External->ext6 == 'Computer Org. & Arch.') selected @endif>Computer Org. & Arch. (COA)</option>
											<option value="Operating System" @if($sem4External->ext6 == 'Operating System') selected @endif>Operating System (OS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 4" @if($sem4External->ext6 == 'Applied Maths - 4') selected @endif>Applied Maths - 4 (AM-4)</option>
											<option value="Fluid Mechanics" @if($sem4External->ext6 == 'Fluid Mechanics') selected @endif>Fluid Mechanics</option>
											<option value="Industrial Electronics" @if($sem4External->ext6 == 'Industrial Electronics') selected @endif>Industrial Electronics</option>
											<option value="Kinematics of Machinery" @if($sem4External->ext6 == 'Kinematics of Machinery') selected @endif>Kinematics of Machinery</option>
											<option value="Production Process - 2" @if($sem4External->ext6 == 'Production Process - 2') selected @endif>Production Process - 2 (PP-2)</option>
										</optgroup>
									</select>
									@error('ext6')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext6mark">Subj 6 Mark :</label>
									<input type="text" name="ext6mark" id="ext6mark" class="form-control key" placeholder="Enter subject 6 mark" value="{{$sem4External ->ext6mark}}">
									@error('ext6mark')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<input type="text" name="totalExtMark" id="totalExtMark" class="form-control" readonly>
						</div>
						<div class="col-md-3">
							<select class="custom-select" name="outOfExt">
								<option value="">-- Select Total no. of Subj. --</option>
								<option value="400" @if($sem4External ->outOf == '400') selected @endif>05</option>
							</select>
							@error('outOfExt')
								<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
						<div class="col-md-3">
							<select class="custom-select" name="remarkExt">
								<option value="">-- Remark --</option>
								<option value="Fail" @if($sem4External ->remark == 'Fail') selected @endif>Fail</option>
								<option value="Pass" @if($sem4External ->remark == 'Pass') selected @endif>Pass</option>
							</select>
							@error('remarkExt')
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