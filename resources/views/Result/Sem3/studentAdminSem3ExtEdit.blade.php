@extends('layouts.custom-app')

@section('custom-title') Sem 3 External Marks @endsection

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
				<h5 class="mt-2">Sem 3 External Marks</h5>
				<div class="dropdown mt-1">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{action('StudentAdminResultController@sem3Ext')}}">Home</a>
						<a class="dropdown-item" href="{{route('staffs.index')}}">Staff Index</a>
						<a class="dropdown-item" href="{{route('students.index')}}">Student Index</a>
						<a class="dropdown-item" href="{{route('sem3Ext.show', $sem3External->id)}}">View</a>
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
					{{$sem3External->firstName}}&nbsp;{{$sem3External->lastName}},&nbsp;<span class="text-primary">{{$sem3External->admissionNo}}</span><br>
					<span class="text-capitalize">{{$sem3External->branch}}&nbsp;Engg.</span><br>
				</div>
				<form class="form mt-4" method="post" action="{{route('sem3Ext.update', $sem3External->id)}}">
				@csrf<input type="hidden" name="_method" value="PATCH">
				<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="ext1">Subj 1 :</label>
									<select name="ext1" class="custom-select form-control">
										<option value="">-- Select External Subj. --</option>
										<optgroup label="Automobile">
											<option value="Applied Maths - 3" @if($sem3External->ext1 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3External->ext1 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production process - 1" @if($sem3External->ext1 == 'Production process - 1') selected @endif >Production process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3External->ext1 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics"  @if($sem3External->ext1 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Applied Maths - 3" @if($sem3External->ext1 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures" @if($sem3External->ext1 == 'Data Structures') selected @endif >Data Structures (DS)</option>
											<option value="Digital Logic Design & Analysis" @if($sem3External->ext1 == 'Digital Logic Design & Analysis') selected @endif >Digital Logic Design & Analysis (DLDA)</option>
											<option value="Discrete Structures" @if($sem3External->ext1 == 'Discrete Structures') selected @endif >Discrete Structures (DST)</option>
											<option value="Electronic Circuit & Comm. Fundamentals" @if($sem3External->ext1 == 'Electronic Circuit & Comm. Fundamentals') selected @endif >Electronic Circuit & Comm. Fundamentals (ECCF)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 3" @if($sem3External->ext1 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Digital Circuit Design" @if($sem3External->ext1 == 'Digital Circuit Design') selected @endif >Digital Circuit Design</option>
											<option value="Electrical Network Analysis & Synthesis" @if($sem3External->ext1 == 'Electrical Network Analysis & Synthesis') selected @endif >Electrical Network Analysis & Synthesis</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3External->ext1 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrument & Measurement" @if($sem3External->ext1 == 'Electronic Instrument & Measurement') selected @endif >Electronic Instrument & Measurement</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 3" @if($sem3External->ext1 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Circuit Theory & Networks" @if($sem3External->ext1 == 'Circuit Theory & Networks') selected @endif >Circuit Theory & Networks</option>
											<option value="Digital System Design" @if($sem3External->ext1 == 'Digital System Design') selected @endif >Digital System Design</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3External->ext1 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrumentation & Controls" @if($sem3External->ext1 == 'Electronic Instrumentation & Controls') selected @endif >Electronic Instrumentation & Controls</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 3" @if($sem3External->ext1 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures & Analysis" @if($sem3External->ext1 == 'Data Structures & Analysis') selected @endif >Data Structures & Analysis</option>
											<option value="Database Management System" @if($sem3External->ext1 == 'Database Management System') selected @endif >Database Management System (DBMS)</option>
											<option value="Logic Design" @if($sem3External->ext1 == 'Logic Design') selected @endif >Logic Design</option>
											<option value="Principle of Communication" @if($sem3External->ext1 == 'Principle of Communication') selected @endif >Principle of Communication</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 3" @if($sem3External->ext1 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3External->ext1 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production Process - 1" @if($sem3External->ext1 == 'Production Process - 1') selected @endif >Production Process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3External->ext1 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics" @if($sem3External->ext1 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
									</select>
									@error('ext1')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext1mark">Subj 1 Mark :</label>
									<input type="text" name="ext1mark" id="ext1mark" class="form-control key" placeholder="Enter subject 1 mark" value="{{$sem3External->ext1mark}}">
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
											<option value="Applied Maths - 3" @if($sem3External->ext2 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3External->ext2 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production process - 1" @if($sem3External->ext2 == 'Production process - 1') selected @endif >Production process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3External->ext2 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics"  @if($sem3External->ext2 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Applied Maths - 3" @if($sem3External->ext2 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures" @if($sem3External->ext2 == 'Data Structures') selected @endif >Data Structures (DS)</option>
											<option value="Digital Logic Design & Analysis" @if($sem3External->ext2 == 'Digital Logic Design & Analysis') selected @endif >Digital Logic Design & Analysis (DLDA)</option>
											<option value="Discrete Structures" @if($sem3External->ext2 == 'Discrete Structures') selected @endif >Discrete Structures (DST)</option>
											<option value="Electronic Circuit & Comm. Fundamentals" @if($sem3External->ext2 == 'Electronic Circuit & Comm. Fundamentals') selected @endif >Electronic Circuit & Comm. Fundamentals (ECCF)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 3" @if($sem3External->ext2 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Digital Circuit Design" @if($sem3External->ext2 == 'Digital Circuit Design') selected @endif >Digital Circuit Design</option>
											<option value="Electrical Network Analysis & Synthesis" @if($sem3External->ext2 == 'Electrical Network Analysis & Synthesis') selected @endif >Electrical Network Analysis & Synthesis</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3External->ext2 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrument & Measurement" @if($sem3External->ext2 == 'Electronic Instrument & Measurement') selected @endif >Electronic Instrument & Measurement</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 3" @if($sem3External->ext2 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Circuit Theory & Networks" @if($sem3External->ext2 == 'Circuit Theory & Networks') selected @endif >Circuit Theory & Networks</option>
											<option value="Digital System Design" @if($sem3External->ext2 == 'Digital System Design') selected @endif >Digital System Design</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3External->ext2 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrumentation & Controls" @if($sem3External->ext2 == 'Electronic Instrumentation & Controls') selected @endif >Electronic Instrumentation & Controls</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 3" @if($sem3External->ext2 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures & Analysis" @if($sem3External->ext2 == 'Data Structures & Analysis') selected @endif >Data Structures & Analysis</option>
											<option value="Database Management System" @if($sem3External->ext2 == 'Database Management System') selected @endif >Database Management System (DBMS)</option>
											<option value="Logic Design" @if($sem3External->ext2 == 'Logic Design') selected @endif >Logic Design</option>
											<option value="Principle of Communication" @if($sem3External->ext2 == 'Principle of Communication') selected @endif >Principle of Communication</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 3" @if($sem3External->ext2 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3External->ext2 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production Process - 1" @if($sem3External->ext2 == 'Production Process - 1') selected @endif >Production Process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3External->ext2 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics" @if($sem3External->ext2 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
									</select>
									@error('ext2')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext2mark">Subj 2 Mark :</label>
									<input type="text" name="ext2mark" id="ext2mark" class="form-control key" placeholder="Enter subject 2 mark" value="{{$sem3External->ext2mark}}">
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
											<option value="Applied Maths - 3" @if($sem3External->ext3 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3External->ext3 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production process - 1" @if($sem3External->ext3 == 'Production process - 1') selected @endif >Production process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3External->ext3 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics"  @if($sem3External->ext3 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Applied Maths - 3" @if($sem3External->ext3 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures" @if($sem3External->ext3 == 'Data Structures') selected @endif >Data Structures (DS)</option>
											<option value="Digital Logic Design & Analysis" @if($sem3External->ext3 == 'Digital Logic Design & Analysis') selected @endif >Digital Logic Design & Analysis (DLDA)</option>
											<option value="Discrete Structures" @if($sem3External->ext3 == 'Discrete Structures') selected @endif >Discrete Structures (DST)</option>
											<option value="Electronic Circuit & Comm. Fundamentals" @if($sem3External->ext3 == 'Electronic Circuit & Comm. Fundamentals') selected @endif >Electronic Circuit & Comm. Fundamentals (ECCF)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 3" @if($sem3External->ext3 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Digital Circuit Design" @if($sem3External->ext3 == 'Digital Circuit Design') selected @endif >Digital Circuit Design</option>
											<option value="Electrical Network Analysis & Synthesis" @if($sem3External->ext3 == 'Electrical Network Analysis & Synthesis') selected @endif >Electrical Network Analysis & Synthesis</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3External->ext3 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrument & Measurement" @if($sem3External->ext3 == 'Electronic Instrument & Measurement') selected @endif >Electronic Instrument & Measurement</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 3" @if($sem3External->ext3 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Circuit Theory & Networks" @if($sem3External->ext3 == 'Circuit Theory & Networks') selected @endif >Circuit Theory & Networks</option>
											<option value="Digital System Design" @if($sem3External->ext3 == 'Digital System Design') selected @endif >Digital System Design</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3External->ext3 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrumentation & Controls" @if($sem3External->ext3 == 'Electronic Instrumentation & Controls') selected @endif >Electronic Instrumentation & Controls</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 3" @if($sem3External->ext3 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures & Analysis" @if($sem3External->ext3 == 'Data Structures & Analysis') selected @endif >Data Structures & Analysis</option>
											<option value="Database Management System" @if($sem3External->ext3 == 'Database Management System') selected @endif >Database Management System (DBMS)</option>
											<option value="Logic Design" @if($sem3External->ext3 == 'Logic Design') selected @endif >Logic Design</option>
											<option value="Principle of Communication" @if($sem3External->ext3 == 'Principle of Communication') selected @endif >Principle of Communication</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 3" @if($sem3External->ext3 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3External->ext3 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production Process - 1" @if($sem3External->ext3 == 'Production Process - 1') selected @endif >Production Process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3External->ext3 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics" @if($sem3External->ext3 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
									</select>
									@error('ext3')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext3mark">Subj 3 Mark :</label>
									<input type="text" name="ext3mark" id="ext3mark" class="form-control key" placeholder="Enter subject 3 mark" value="{{$sem3External->ext3mark}}">
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
											<option value="Applied Maths - 3" @if($sem3External->ext4 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3External->ext4 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production process - 1" @if($sem3External->ext4 == 'Production process - 1') selected @endif >Production process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3External->ext4 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics"  @if($sem3External->ext4 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Applied Maths - 3" @if($sem3External->ext4 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures" @if($sem3External->ext4 == 'Data Structures') selected @endif >Data Structures (DS)</option>
											<option value="Digital Logic Design & Analysis" @if($sem3External->ext4 == 'Digital Logic Design & Analysis') selected @endif >Digital Logic Design & Analysis (DLDA)</option>
											<option value="Discrete Structures" @if($sem3External->ext4 == 'Discrete Structures') selected @endif >Discrete Structures (DST)</option>
											<option value="Electronic Circuit & Comm. Fundamentals" @if($sem3External->ext4 == 'Electronic Circuit & Comm. Fundamentals') selected @endif >Electronic Circuit & Comm. Fundamentals (ECCF)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 3" @if($sem3External->ext4 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Digital Circuit Design" @if($sem3External->ext4 == 'Digital Circuit Design') selected @endif >Digital Circuit Design</option>
											<option value="Electrical Network Analysis & Synthesis" @if($sem3External->ext4 == 'Electrical Network Analysis & Synthesis') selected @endif >Electrical Network Analysis & Synthesis</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3External->ext4 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrument & Measurement" @if($sem3External->ext4 == 'Electronic Instrument & Measurement') selected @endif >Electronic Instrument & Measurement</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 3" @if($sem3External->ext4 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Circuit Theory & Networks" @if($sem3External->ext4 == 'Circuit Theory & Networks') selected @endif >Circuit Theory & Networks</option>
											<option value="Digital System Design" @if($sem3External->ext4 == 'Digital System Design') selected @endif >Digital System Design</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3External->ext4 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrumentation & Controls" @if($sem3External->ext4 == 'Electronic Instrumentation & Controls') selected @endif >Electronic Instrumentation & Controls</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 3" @if($sem3External->ext4 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures & Analysis" @if($sem3External->ext4 == 'Data Structures & Analysis') selected @endif >Data Structures & Analysis</option>
											<option value="Database Management System" @if($sem3External->ext4 == 'Database Management System') selected @endif >Database Management System (DBMS)</option>
											<option value="Logic Design" @if($sem3External->ext4 == 'Logic Design') selected @endif >Logic Design</option>
											<option value="Principle of Communication" @if($sem3External->ext4 == 'Principle of Communication') selected @endif >Principle of Communication</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 3" @if($sem3External->ext4 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3External->ext4 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production Process - 1" @if($sem3External->ext4 == 'Production Process - 1') selected @endif >Production Process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3External->ext4 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics" @if($sem3External->ext4 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
									</select>
									@error('ext4')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext4mark">Subj 4 Mark :</label>
									<input type="text" name="ext4mark" id="ext4mark" class="form-control key" placeholder="Enter subject 4 mark" value="{{$sem3External->ext4mark}}">
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
											<option value="Applied Maths - 3" @if($sem3External->ext5 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3External->ext5 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production process - 1" @if($sem3External->ext5 == 'Production process - 1') selected @endif >Production process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3External->ext5 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics"  @if($sem3External->ext5 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Applied Maths - 3" @if($sem3External->ext5 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures" @if($sem3External->ext5 == 'Data Structures') selected @endif >Data Structures (DS)</option>
											<option value="Digital Logic Design & Analysis" @if($sem3External->ext5 == 'Digital Logic Design & Analysis') selected @endif >Digital Logic Design & Analysis (DLDA)</option>
											<option value="Discrete Structures" @if($sem3External->ext5 == 'Discrete Structures') selected @endif >Discrete Structures (DST)</option>
											<option value="Electronic Circuit & Comm. Fundamentals" @if($sem3External->ext5 == 'Electronic Circuit & Comm. Fundamentals') selected @endif >Electronic Circuit & Comm. Fundamentals (ECCF)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 3" @if($sem3External->ext5 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Digital Circuit Design" @if($sem3External->ext5 == 'Digital Circuit Design') selected @endif >Digital Circuit Design</option>
											<option value="Electrical Network Analysis & Synthesis" @if($sem3External->ext5 == 'Electrical Network Analysis & Synthesis') selected @endif >Electrical Network Analysis & Synthesis</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3External->ext5 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrument & Measurement" @if($sem3External->ext5 == 'Electronic Instrument & Measurement') selected @endif >Electronic Instrument & Measurement</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 3" @if($sem3External->ext5 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Circuit Theory & Networks" @if($sem3External->ext5 == 'Circuit Theory & Networks') selected @endif >Circuit Theory & Networks</option>
											<option value="Digital System Design" @if($sem3External->ext5 == 'Digital System Design') selected @endif >Digital System Design</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3External->ext5 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrumentation & Controls" @if($sem3External->ext5 == 'Electronic Instrumentation & Controls') selected @endif >Electronic Instrumentation & Controls</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 3" @if($sem3External->ext5 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures & Analysis" @if($sem3External->ext5 == 'Data Structures & Analysis') selected @endif >Data Structures & Analysis</option>
											<option value="Database Management System" @if($sem3External->ext5 == 'Database Management System') selected @endif >Database Management System (DBMS)</option>
											<option value="Logic Design" @if($sem3External->ext5 == 'Logic Design') selected @endif >Logic Design</option>
											<option value="Principle of Communication" @if($sem3External->ext5 == 'Principle of Communication') selected @endif >Principle of Communication</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 3" @if($sem3External->ext5 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3External->ext5 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production Process - 1" @if($sem3External->ext5 == 'Production Process - 1') selected @endif >Production Process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3External->ext5 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics" @if($sem3External->ext5 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
									</select>
									@error('ext5')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext5mark">Subj 5 Mark :</label>
									<input type="text" name="ext5mark" id="ext5mark" class="form-control key" placeholder="Enter subject 5 mark" value="{{$sem3External->ext5mark}}">
									@error('ext5mark')
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
								<option value="400" @if($sem3External->outOf == '400') selected @endif>05</option>
							</select>
							@error('outOfExt')
								<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
						<div class="col-md-3">
							<select class="custom-select" name="remarkExt">
								<option value="">-- Remark --</option>
								<option value="Fail" @if($sem3External->remark == 'Fail') selected @endif>Fail</option>
								<option value="Pass" @if($sem3External->remark == 'Pass') selected @endif>Pass</option>
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