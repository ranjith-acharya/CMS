@extends('layouts.custom-app')

@section('custom-title') Sem 3 Internal Marks @endsection

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
				<h5 class="mt-2">Sem 3 Internal Marks</h5>
				<div class="dropdown mt-1">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{action('StudentAdminResultController@sem3Int')}}">Home</a>
						<a class="dropdown-item" href="{{route('staffs.index')}}">Staff Index</a>
						<a class="dropdown-item" href="{{route('students.index')}}">Student Index</a>
						<a class="dropdown-item" href="{{route('sem3Int.show', $sem3Internal->id)}}">View</a>
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
					{{$sem3Internal->firstName}}&nbsp;{{$sem3Internal->lastName}},&nbsp;<span class="text-primary">{{$sem3Internal->admissionNo}}</span><br>
					<span class="text-capitalize">{{$sem3Internal->branch}}&nbsp;Engg.</span><br>
				</div>
				<form class="form mt-4" method="post" action="{{route('sem3Int.update', $sem3Internal->id)}}">
				@csrf<input type="hidden" name="_method" value="PATCH">
				<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="int1">Subj 1 :</label>
									<select name="int1" class="custom-select form-control">
										<option value="">-- Select Internal Subj. --</option>
										<optgroup label="Automobile">
											<option value="Applied Maths - 3" @if($sem3Internal->int1 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3Internal->int1 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production process - 1" @if($sem3Internal->int1 == 'Production process - 1') selected @endif >Production process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3Internal->int1 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics"  @if($sem3Internal->int1 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Applied Maths - 3" @if($sem3Internal->int1 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures" @if($sem3Internal->int1 == 'Data Structures') selected @endif >Data Structures (DS)</option>
											<option value="Digital Logic Design & Analysis" @if($sem3Internal->int1 == 'Digital Logic Design & Analysis') selected @endif >Digital Logic Design & Analysis (DLDA)</option>
											<option value="Discrete Structures" @if($sem3Internal->int1 == 'Discrete Structures') selected @endif >Discrete Structures (DST)</option>
											<option value="Electronic Circuit & Comm. Fundamentals" @if($sem3Internal->int1 == 'Electronic Circuit & Comm. Fundamentals') selected @endif >Electronic Circuit & Comm. Fundamentals (ECCF)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 3" @if($sem3Internal->int1 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Digital Circuit Design" @if($sem3Internal->int1 == 'Digital Circuit Design') selected @endif >Digital Circuit Design</option>
											<option value="Electrical Network Analysis & Synthesis" @if($sem3Internal->int1 == 'Electrical Network Analysis & Synthesis') selected @endif >Electrical Network Analysis & Synthesis</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3Internal->int1 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrument & Measurement" @if($sem3Internal->int1 == 'Electronic Instrument & Measurement') selected @endif >Electronic Instrument & Measurement</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 3" @if($sem3Internal->int1 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Circuit Theory & Networks" @if($sem3Internal->int1 == 'Circuit Theory & Networks') selected @endif >Circuit Theory & Networks</option>
											<option value="Digital System Design" @if($sem3Internal->int1 == 'Digital System Design') selected @endif >Digital System Design</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3Internal->int1 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrumentation & Controls" @if($sem3Internal->int1 == 'Electronic Instrumentation & Controls') selected @endif >Electronic Instrumentation & Controls</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 3" @if($sem3Internal->int1 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures & Analysis" @if($sem3Internal->int1 == 'Data Structures & Analysis') selected @endif >Data Structures & Analysis</option>
											<option value="Database Management System" @if($sem3Internal->int1 == 'Database Management System') selected @endif >Database Management System (DBMS)</option>
											<option value="Logic Design" @if($sem3Internal->int1 == 'Logic Design') selected @endif >Logic Design</option>
											<option value="Principle of Communication" @if($sem3Internal->int1 == 'Principle of Communication') selected @endif >Principle of Communication</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 3" @if($sem3Internal->int1 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3Internal->int1 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production Process - 1" @if($sem3Internal->int1 == 'Production Process - 1') selected @endif >Production Process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3Internal->int1 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics" @if($sem3Internal->int1 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
									</select>
									@error('int1')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int1mark">Subj 1 Mark :</label>
									<input type="text" name="int1mark" id="int1mark" class="form-control key" placeholder="Enter subject 1 mark" value="{{$sem3Internal->int1mark}}">
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
											<option value="Applied Maths - 3" @if($sem3Internal->int2 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3Internal->int2 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production process - 1" @if($sem3Internal->int2 == 'Production process - 1') selected @endif >Production process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3Internal->int2 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics"  @if($sem3Internal->int2 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Applied Maths - 3" @if($sem3Internal->int2 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures" @if($sem3Internal->int2 == 'Data Structures') selected @endif >Data Structures (DS)</option>
											<option value="Digital Logic Design & Analysis" @if($sem3Internal->int2 == 'Digital Logic Design & Analysis') selected @endif >Digital Logic Design & Analysis (DLDA)</option>
											<option value="Discrete Structures" @if($sem3Internal->int2 == 'Discrete Structures') selected @endif >Discrete Structures (DST)</option>
											<option value="Electronic Circuit & Comm. Fundamentals" @if($sem3Internal->int2 == 'Electronic Circuit & Comm. Fundamentals') selected @endif >Electronic Circuit & Comm. Fundamentals (ECCF)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 3" @if($sem3Internal->int2 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Digital Circuit Design" @if($sem3Internal->int2 == 'Digital Circuit Design') selected @endif >Digital Circuit Design</option>
											<option value="Electrical Network Analysis & Synthesis" @if($sem3Internal->int2 == 'Electrical Network Analysis & Synthesis') selected @endif >Electrical Network Analysis & Synthesis</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3Internal->int2 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrument & Measurement" @if($sem3Internal->int2 == 'Electronic Instrument & Measurement') selected @endif >Electronic Instrument & Measurement</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 3" @if($sem3Internal->int2 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Circuit Theory & Networks" @if($sem3Internal->int2 == 'Circuit Theory & Networks') selected @endif >Circuit Theory & Networks</option>
											<option value="Digital System Design" @if($sem3Internal->int2 == 'Digital System Design') selected @endif >Digital System Design</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3Internal->int2 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrumentation & Controls" @if($sem3Internal->int2 == 'Electronic Instrumentation & Controls') selected @endif >Electronic Instrumentation & Controls</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 3" @if($sem3Internal->int2 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures & Analysis" @if($sem3Internal->int2 == 'Data Structures & Analysis') selected @endif >Data Structures & Analysis</option>
											<option value="Database Management System" @if($sem3Internal->int2 == 'Database Management System') selected @endif >Database Management System (DBMS)</option>
											<option value="Logic Design" @if($sem3Internal->int2 == 'Logic Design') selected @endif >Logic Design</option>
											<option value="Principle of Communication" @if($sem3Internal->int2 == 'Principle of Communication') selected @endif >Principle of Communication</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 3" @if($sem3Internal->int2 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3Internal->int2 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production Process - 1" @if($sem3Internal->int2 == 'Production Process - 1') selected @endif >Production Process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3Internal->int2 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics" @if($sem3Internal->int2 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
									</select>
									@error('int2')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int2mark">Subj 2 Mark :</label>
									<input type="text" name="int2mark" id="int2mark" class="form-control key" placeholder="Enter subject 2 mark" value="{{$sem3Internal->int2mark}}">
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
										<option value="">-- Select Internal Subj. --</option>
										<optgroup label="Automobile">
											<option value="Applied Maths - 3" @if($sem3Internal->int3 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3Internal->int3 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production process - 1" @if($sem3Internal->int3 == 'Production process - 1') selected @endif >Production process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3Internal->int3 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics"  @if($sem3Internal->int3 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Applied Maths - 3" @if($sem3Internal->int3 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures" @if($sem3Internal->int3 == 'Data Structures') selected @endif >Data Structures (DS)</option>
											<option value="Digital Logic Design & Analysis" @if($sem3Internal->int3 == 'Digital Logic Design & Analysis') selected @endif >Digital Logic Design & Analysis (DLDA)</option>
											<option value="Discrete Structures" @if($sem3Internal->int3 == 'Discrete Structures') selected @endif >Discrete Structures (DST)</option>
											<option value="Electronic Circuit & Comm. Fundamentals" @if($sem3Internal->int3 == 'Electronic Circuit & Comm. Fundamentals') selected @endif >Electronic Circuit & Comm. Fundamentals (ECCF)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 3" @if($sem3Internal->int3 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Digital Circuit Design" @if($sem3Internal->int3 == 'Digital Circuit Design') selected @endif >Digital Circuit Design</option>
											<option value="Electrical Network Analysis & Synthesis" @if($sem3Internal->int3 == 'Electrical Network Analysis & Synthesis') selected @endif >Electrical Network Analysis & Synthesis</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3Internal->int3 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrument & Measurement" @if($sem3Internal->int3 == 'Electronic Instrument & Measurement') selected @endif >Electronic Instrument & Measurement</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 3" @if($sem3Internal->int3 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Circuit Theory & Networks" @if($sem3Internal->int3 == 'Circuit Theory & Networks') selected @endif >Circuit Theory & Networks</option>
											<option value="Digital System Design" @if($sem3Internal->int3 == 'Digital System Design') selected @endif >Digital System Design</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3Internal->int3 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrumentation & Controls" @if($sem3Internal->int3 == 'Electronic Instrumentation & Controls') selected @endif >Electronic Instrumentation & Controls</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 3" @if($sem3Internal->int3 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures & Analysis" @if($sem3Internal->int3 == 'Data Structures & Analysis') selected @endif >Data Structures & Analysis</option>
											<option value="Database Management System" @if($sem3Internal->int3 == 'Database Management System') selected @endif >Database Management System (DBMS)</option>
											<option value="Logic Design" @if($sem3Internal->int3 == 'Logic Design') selected @endif >Logic Design</option>
											<option value="Principle of Communication" @if($sem3Internal->int3 == 'Principle of Communication') selected @endif >Principle of Communication</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 3" @if($sem3Internal->int3 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3Internal->int3 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production Process - 1" @if($sem3Internal->int3 == 'Production Process - 1') selected @endif >Production Process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3Internal->int3 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics" @if($sem3Internal->int3 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
									</select>
									@error('int3')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int3mark">Subj 3 Mark :</label>
									<input type="text" name="int3mark" id="int3mark" class="form-control key" placeholder="Enter subject 3 mark" value="{{$sem3Internal->int3mark}}">
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
										<option value="">-- Select Internal Subj. --</option>
										<optgroup label="Automobile">
											<option value="Applied Maths - 3" @if($sem3Internal->int4 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3Internal->int4 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production process - 1" @if($sem3Internal->int4 == 'Production process - 1') selected @endif >Production process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3Internal->int4 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics"  @if($sem3Internal->int4 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Applied Maths - 3" @if($sem3Internal->int4 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures" @if($sem3Internal->int4 == 'Data Structures') selected @endif >Data Structures (DS)</option>
											<option value="Digital Logic Design & Analysis" @if($sem3Internal->int4 == 'Digital Logic Design & Analysis') selected @endif >Digital Logic Design & Analysis (DLDA)</option>
											<option value="Discrete Structures" @if($sem3Internal->int4 == 'Discrete Structures') selected @endif >Discrete Structures (DST)</option>
											<option value="Electronic Circuit & Comm. Fundamentals" @if($sem3Internal->int4 == 'Electronic Circuit & Comm. Fundamentals') selected @endif >Electronic Circuit & Comm. Fundamentals (ECCF)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 3" @if($sem3Internal->int4 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Digital Circuit Design" @if($sem3Internal->int4 == 'Digital Circuit Design') selected @endif >Digital Circuit Design</option>
											<option value="Electrical Network Analysis & Synthesis" @if($sem3Internal->int4 == 'Electrical Network Analysis & Synthesis') selected @endif >Electrical Network Analysis & Synthesis</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3Internal->int4 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrument & Measurement" @if($sem3Internal->int4 == 'Electronic Instrument & Measurement') selected @endif >Electronic Instrument & Measurement</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 3" @if($sem3Internal->int4 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Circuit Theory & Networks" @if($sem3Internal->int4 == 'Circuit Theory & Networks') selected @endif >Circuit Theory & Networks</option>
											<option value="Digital System Design" @if($sem3Internal->int4 == 'Digital System Design') selected @endif >Digital System Design</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3Internal->int4 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrumentation & Controls" @if($sem3Internal->int4 == 'Electronic Instrumentation & Controls') selected @endif >Electronic Instrumentation & Controls</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 3" @if($sem3Internal->int4 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures & Analysis" @if($sem3Internal->int4 == 'Data Structures & Analysis') selected @endif >Data Structures & Analysis</option>
											<option value="Database Management System" @if($sem3Internal->int4 == 'Database Management System') selected @endif >Database Management System (DBMS)</option>
											<option value="Logic Design" @if($sem3Internal->int4 == 'Logic Design') selected @endif >Logic Design</option>
											<option value="Principle of Communication" @if($sem3Internal->int4 == 'Principle of Communication') selected @endif >Principle of Communication</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 3" @if($sem3Internal->int4 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3Internal->int4 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production Process - 1" @if($sem3Internal->int4 == 'Production Process - 1') selected @endif >Production Process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3Internal->int4 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics" @if($sem3Internal->int4 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
									</select>
									@error('int4')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int4mark">Subj 4 Mark :</label>
									<input type="text" name="int4mark" id="int4mark" class="form-control key" placeholder="Enter subject 4 mark" value="{{$sem3Internal->int4mark}}">
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
										<option value="">-- Select Internal Subj. --</option>
										<optgroup label="Automobile">
											<option value="Applied Maths - 3" @if($sem3Internal->int5 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3Internal->int5 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production process - 1" @if($sem3Internal->int5 == 'Production process - 1') selected @endif >Production process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3Internal->int5 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics"  @if($sem3Internal->int5 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Applied Maths - 3" @if($sem3Internal->int5 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures" @if($sem3Internal->int5 == 'Data Structures') selected @endif >Data Structures (DS)</option>
											<option value="Digital Logic Design & Analysis" @if($sem3Internal->int5 == 'Digital Logic Design & Analysis') selected @endif >Digital Logic Design & Analysis (DLDA)</option>
											<option value="Discrete Structures" @if($sem3Internal->int5 == 'Discrete Structures') selected @endif >Discrete Structures (DST)</option>
											<option value="Electronic Circuit & Comm. Fundamentals" @if($sem3Internal->int5 == 'Electronic Circuit & Comm. Fundamentals') selected @endif >Electronic Circuit & Comm. Fundamentals (ECCF)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Applied Maths - 3" @if($sem3Internal->int5 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Digital Circuit Design" @if($sem3Internal->int5 == 'Digital Circuit Design') selected @endif >Digital Circuit Design</option>
											<option value="Electrical Network Analysis & Synthesis" @if($sem3Internal->int5 == 'Electrical Network Analysis & Synthesis') selected @endif >Electrical Network Analysis & Synthesis</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3Internal->int5 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrument & Measurement" @if($sem3Internal->int5 == 'Electronic Instrument & Measurement') selected @endif >Electronic Instrument & Measurement</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Applied Maths - 3" @if($sem3Internal->int5 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Circuit Theory & Networks" @if($sem3Internal->int5 == 'Circuit Theory & Networks') selected @endif >Circuit Theory & Networks</option>
											<option value="Digital System Design" @if($sem3Internal->int5 == 'Digital System Design') selected @endif >Digital System Design</option>
											<option value="Electronic Devices & Circuit - 1" @if($sem3Internal->int5 == 'Electronic Devices & Circuit - 1') selected @endif >Electronic Devices & Circuit - 1</option>
											<option value="Electronic Instrumentation & Controls" @if($sem3Internal->int5 == 'Electronic Instrumentation & Controls') selected @endif >Electronic Instrumentation & Controls</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Applied Maths - 3" @if($sem3Internal->int5 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Data Structures & Analysis" @if($sem3Internal->int5 == 'Data Structures & Analysis') selected @endif >Data Structures & Analysis</option>
											<option value="Database Management System" @if($sem3Internal->int5 == 'Database Management System') selected @endif >Database Management System (DBMS)</option>
											<option value="Logic Design" @if($sem3Internal->int5 == 'Logic Design') selected @endif >Logic Design</option>
											<option value="Principle of Communication" @if($sem3Internal->int5 == 'Principle of Communication') selected @endif >Principle of Communication</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Applied Maths - 3" @if($sem3Internal->int5 == 'Applied Maths - 3') selected @endif >Applied Maths - 3 (AM-3)</option>
											<option value="Material Technology" @if($sem3Internal->int5 == 'Material Technology') selected @endif >Material Technology</option>
											<option value="Production Process - 1" @if($sem3Internal->int5 == 'Production Process - 1') selected @endif >Production Process - 1 (PP-1)</option>
											<option value="Strength of Materials" @if($sem3Internal->int5 == 'Strength of Materials') selected @endif >Strength of Materials</option>
											<option value="Thermodynamics" @if($sem3Internal->int5 == 'Thermodynamics') selected @endif >Thermodynamics</option>
										</optgroup>
									</select>
									@error('int5')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int5mark">Subj 5 Mark :</label>
									<input type="text" name="int5mark" id="int5mark" class="form-control key" placeholder="Enter subject 5 mark" value="{{$sem3Internal->int5mark}}">
									@error('int5mark')
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
								<option value="100" @if($sem3Internal->outOf == '100') selected @endif>05</option>
							</select>
							@error('outOfInt')
								<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
						<div class="col-md-3">
							<select class="custom-select" name="remarkInt">
								<option value="">-- Remark --</option>
								<option value="Fail" @if($sem3Internal->remark == 'Fail') selected @endif>Fail</option>
								<option value="Pass" @if($sem3Internal->remark == 'Pass') selected @endif>Pass</option>
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