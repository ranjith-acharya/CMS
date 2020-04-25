@extends('layouts.custom-app')

@section('custom-title') Sem 5 Internal Marks @endsection

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
				<h5 class="mt-2">Sem 5 Internal Marks</h5>
				<div class="dropdown mt-1">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{action('StudentAdminResultController@sem5Int')}}">Home</a>
						<a class="dropdown-item" href="{{route('staffs.index')}}">Staff Index</a>
						<a class="dropdown-item" href="{{route('students.index')}}">Student Index</a>
						<a class="dropdown-item" href="{{route('sem5Int.show', $sem5Internal->id)}}">View</a>
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
					{{$sem5Internal  ->firstName}}&nbsp;{{$sem5Internal  ->lastName}},&nbsp;<span class="text-primary">{{$sem5Internal  ->admissionNo}}</span><br>
					<span class="text-capitalize">{{$sem5Internal  ->branch}}&nbsp;Engg.</span><br>
				</div>
				<form method="post" class="form mt-4" action="{{route('sem5Int.update', $sem5Internal  ->id)}}">
					@csrf<input type="hidden" name="_method" value="PATCH">
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="int1">Subj 1 :</label>
									<select name="int1" class="custom-select form-control">
										<option value="">-- Select Internal Subj. --</option>
										<optgroup label="Automobile">
											<option value="Automotive System" @if($sem5Internal->int1 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5Internal->int1 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int1 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5Internal->int1 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5Internal->int1 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int1 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5Internal->int1 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5Internal->int1 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5Internal->int1 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5Internal->int1 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5Internal->int1 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5Internal->int1 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5Internal->int1 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5Internal->int1 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5Internal->int1 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5Internal->int1 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5Internal->int1 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5Internal->int1 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5Internal->int1 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5Internal->int1 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5Internal->int1 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5Internal->int1 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5Internal->int1 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5Internal->int1 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5Internal->int1 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5Internal->int1 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5Internal->int1 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5Internal->int1 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5Internal->int1 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5Internal->int1 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5Internal->int1 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5Internal->int1 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5Internal->int1 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5Internal->int1 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5Internal->int1 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5Internal->int1 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5Internal->int1 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5Internal->int1 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5Internal->int1 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5Internal->int1 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int1 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5Internal->int1 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5Internal->int1 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5Internal->int1 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int1 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('int1')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int1mark">Subj 1 Mark :</label>
									<input type="text" name="int1mark" id="int1mark" class="form-control key" placeholder="Enter subject 1 mark" value="{{$sem5Internal->int1mark}}">
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
											<option value="Automotive System" @if($sem5Internal->int2 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5Internal->int2 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int2 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5Internal->int2 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5Internal->int2 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int2 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5Internal->int2 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5Internal->int2 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5Internal->int2 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5Internal->int2 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5Internal->int2 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5Internal->int2 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5Internal->int2 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5Internal->int2 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5Internal->int2 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5Internal->int2 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5Internal->int2 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5Internal->int2 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5Internal->int2 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5Internal->int2 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5Internal->int2 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5Internal->int2 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5Internal->int2 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5Internal->int2 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5Internal->int2 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5Internal->int2 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5Internal->int2 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5Internal->int2 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5Internal->int2 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5Internal->int2 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5Internal->int2 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5Internal->int2 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5Internal->int2 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5Internal->int2 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5Internal->int2 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5Internal->int2 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5Internal->int2 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5Internal->int2 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5Internal->int2 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5Internal->int2 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int2 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5Internal->int2 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5Internal->int2 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5Internal->int2 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int2 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('int2')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int2mark">Subj 2 Mark :</label>
									<input type="text" name="int2mark" id="int2mark" class="form-control key" placeholder="Enter subject 2 mark" value="{{$sem5Internal->int2mark}}">
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
											<option value="Automotive System" @if($sem5Internal->int3 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5Internal->int3 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int3 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5Internal->int3 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5Internal->int3 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int3 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5Internal->int3 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5Internal->int3 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5Internal->int3 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5Internal->int3 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5Internal->int3 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5Internal->int3 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5Internal->int3 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5Internal->int3 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5Internal->int3 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5Internal->int3 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5Internal->int3 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5Internal->int3 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5Internal->int3 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5Internal->int3 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5Internal->int3 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5Internal->int3 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5Internal->int3 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5Internal->int3 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5Internal->int3 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5Internal->int3 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5Internal->int3 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5Internal->int3 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5Internal->int3 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5Internal->int3 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5Internal->int3 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5Internal->int3 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5Internal->int3 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5Internal->int3 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5Internal->int3 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5Internal->int3 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5Internal->int3 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5Internal->int3 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5Internal->int3 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5Internal->int3 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int3 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5Internal->int3 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5Internal->int3 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5Internal->int3 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int3 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('int3')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int3mark">Subj 3 Mark :</label>
									<input type="text" name="int3mark" id="int3mark" class="form-control key" placeholder="Enter subject 3 mark" value="{{$sem5Internal->int3mark}}">
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
											<option value="Automotive System" @if($sem5Internal->int4 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5Internal->int4 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int4 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5Internal->int4 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5Internal->int4 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int4 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5Internal->int4 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5Internal->int4 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5Internal->int4 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5Internal->int4 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5Internal->int4 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5Internal->int4 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5Internal->int4 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5Internal->int4 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5Internal->int4 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5Internal->int4 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5Internal->int4 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5Internal->int4 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5Internal->int4 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5Internal->int4 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5Internal->int4 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5Internal->int4 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5Internal->int4 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5Internal->int4 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5Internal->int4 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5Internal->int4 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5Internal->int4 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5Internal->int4 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5Internal->int4 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5Internal->int4 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5Internal->int4 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5Internal->int4 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5Internal->int4 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5Internal->int4 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5Internal->int4 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5Internal->int4 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5Internal->int4 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5Internal->int4 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5Internal->int4 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5Internal->int4 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int4 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5Internal->int4 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5Internal->int4 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5Internal->int4 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int4 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('int4')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int4mark">Subj 4 Mark :</label>
									<input type="text" name="int4mark" id="int4mark" class="form-control key" placeholder="Enter subject 4 mark" value="{{$sem5Internal->int4mark}}">
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
											<option value="Automotive System" @if($sem5Internal->int5 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5Internal->int5 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int5 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5Internal->int5 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5Internal->int5 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int5 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5Internal->int5 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5Internal->int5 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5Internal->int5 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5Internal->int5 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5Internal->int5 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5Internal->int5 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5Internal->int5 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5Internal->int5 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5Internal->int5 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5Internal->int5 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5Internal->int5 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5Internal->int5 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5Internal->int5 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5Internal->int5 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5Internal->int5 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5Internal->int5 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5Internal->int5 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5Internal->int5 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5Internal->int5 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5Internal->int5 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5Internal->int5 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5Internal->int5 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5Internal->int5 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5Internal->int5 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5Internal->int5 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5Internal->int5 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5Internal->int5 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5Internal->int5 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5Internal->int5 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5Internal->int5 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5Internal->int5 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5Internal->int5 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5Internal->int5 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5Internal->int5 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int5 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5Internal->int5 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5Internal->int5 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5Internal->int5 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int5 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('int5')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int5mark">Subj 5 Mark :</label>
									<input type="text" name="int5mark" id="int5mark" class="form-control key" placeholder="Enter subject 5 mark" value="{{$sem5Internal->int5mark}}">
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
										<option value="">-- Select Internal Subj. --</option>
										<optgroup label="Automobile">
											<option value="Automotive System" @if($sem5Internal->int6 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5Internal->int6 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int6 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5Internal->int6 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5Internal->int6 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int6 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5Internal->int6 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5Internal->int6 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5Internal->int6 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5Internal->int6 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5Internal->int6 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5Internal->int6 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5Internal->int6 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5Internal->int6 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5Internal->int6 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5Internal->int6 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5Internal->int6 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5Internal->int6 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5Internal->int6 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5Internal->int6 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5Internal->int6 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5Internal->int6 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5Internal->int6 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5Internal->int6 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5Internal->int6 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5Internal->int6 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5Internal->int6 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5Internal->int6 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5Internal->int6 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5Internal->int6 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5Internal->int6 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5Internal->int6 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5Internal->int6 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5Internal->int6 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5Internal->int6 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5Internal->int6 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5Internal->int6 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5Internal->int6 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5Internal->int6 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5Internal->int6 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int6 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5Internal->int6 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5Internal->int6 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5Internal->int6 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int6 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('int6')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int6mark">Subj 6 Mark :</label>
									<input type="text" name="int6mark" id="int6mark" class="form-control key" placeholder="Enter subject 6 mark" value="{{$sem5Internal->int6mark}}">
									@error('int6mark')
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
									<label for="int7">Subj 7 :</label>
									<select name="int7" class="custom-select form-control">
										<option value="">-- Select Internal Subj. --</option>
										<optgroup label="Automobile">
											<option value="Automotive System" @if($sem5Internal->int7 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5Internal->int7 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int7 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5Internal->int7 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5Internal->int7 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int7 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5Internal->int7 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5Internal->int7 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5Internal->int7 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5Internal->int7 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5Internal->int7 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5Internal->int7 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5Internal->int7 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5Internal->int7 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5Internal->int7 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5Internal->int7 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5Internal->int7 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5Internal->int7 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5Internal->int7 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5Internal->int7 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5Internal->int7 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5Internal->int7 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5Internal->int7 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5Internal->int7 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5Internal->int7 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5Internal->int7 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5Internal->int7 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5Internal->int7 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5Internal->int7 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5Internal->int7 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5Internal->int7 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5Internal->int7 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5Internal->int7 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5Internal->int7 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5Internal->int7 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5Internal->int7 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5Internal->int7 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5Internal->int7 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5Internal->int7 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5Internal->int7 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int7 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5Internal->int7 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5Internal->int7 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5Internal->int7 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int7 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('int7')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int7mark">Subj 7 Mark :</label>
									<input type="text" name="int7mark" id="int7mark" class="form-control key" placeholder="Enter subject 7 mark" value="{{$sem5Internal->int7mark}}">
									@error('int7mark')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="int8">Subj 8 :</label>
									<select name="int8" class="custom-select form-control">
										<option value="">-- Select Internal Subj. --</option>
										<optgroup label="Automobile">
											<option value="Automotive System" @if($sem5Internal->int8 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5Internal->int8 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int8 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5Internal->int8 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5Internal->int8 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int8 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5Internal->int8 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5Internal->int8 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5Internal->int8 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5Internal->int8 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5Internal->int8 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5Internal->int8 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5Internal->int8 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5Internal->int8 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5Internal->int8 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5Internal->int8 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5Internal->int8 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5Internal->int8 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5Internal->int8 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5Internal->int8 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5Internal->int8 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5Internal->int8 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5Internal->int8 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5Internal->int8 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5Internal->int8 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5Internal->int8 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5Internal->int8 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5Internal->int8 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5Internal->int8 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5Internal->int8 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5Internal->int8 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5Internal->int8 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5Internal->int8 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5Internal->int8 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5Internal->int8 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5Internal->int8 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5Internal->int8 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5Internal->int8 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5Internal->int8 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5Internal->int8 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int8 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5Internal->int8 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5Internal->int8 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5Internal->int8 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int8 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('int8')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int8mark">Subj 8 Mark :</label>
									<input type="text" name="int8mark" id="int8mark" class="form-control key" placeholder="Enter subject 8 mark" value="{{$sem5Internal->int8mark}}">
									@error('int8mark')
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
									<label for="int9">Subj 9 :</label>
									<select name="int9" class="custom-select form-control">
										<option value="">-- Select Internal Subj. --</option>
										<optgroup label="Automobile">
											<option value="Automotive System" @if($sem5Internal->int9 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5Internal->int9 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int9 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5Internal->int9 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5Internal->int9 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int9 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5Internal->int9 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5Internal->int9 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5Internal->int9 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5Internal->int9 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5Internal->int9 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5Internal->int9 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5Internal->int9 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5Internal->int9 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5Internal->int9 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5Internal->int9 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5Internal->int9 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5Internal->int9 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5Internal->int9 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5Internal->int9 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5Internal->int9 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5Internal->int9 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5Internal->int9 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5Internal->int9 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5Internal->int9 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5Internal->int9 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5Internal->int9 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5Internal->int9 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5Internal->int9 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5Internal->int9 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5Internal->int9 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5Internal->int9 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5Internal->int9 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5Internal->int9 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5Internal->int9 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5Internal->int9 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5Internal->int9 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5Internal->int9 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5Internal->int9 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5Internal->int9 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5Internal->int9 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5Internal->int9 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5Internal->int9 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5Internal->int9 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5Internal->int9 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('int9')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="int9mark">Subj 9 Mark :</label>
									<input type="text" name="int9mark" id="int9mark" class="form-control key" placeholder="Enter subject 9 mark" value="{{$sem5Internal->int9mark}}">
									@error('int9mark')
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
								<option value="100"@if($sem5Internal->outOf == '100') selected @endif>05</option>
								<option value="120"@if($sem5Internal->outOf == '120') selected @endif>06</option>
								<option value="140"@if($sem5Internal->outOf == '140') selected @endif>07</option>
								<option value="160"@if($sem5Internal->outOf == '160') selected @endif>08</option>
								<option value="180"@if($sem5Internal->outOf == '180') selected @endif>09</option>
							</select>
							@error('outOfInt')
								<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
						<div class="col-md-3">
							<select class="custom-select" name="remarkInt">
								<option value="">-- Remark --</option>
								<option value="Fail"@if($sem5Internal->remark == 'Fail') selected @endif>Fail</option>
								<option value="Pass"@if($sem5Internal->remark == 'Pass') selected @endif>Pass</option>
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
		var $int7mark = ($.trim($("#int7mark").val()) != "" && !isNaN($("#int7mark").val())) ? parseInt($("#int7mark").val()) : 0;
		var $int8mark = ($.trim($("#int8mark").val()) != "" && !isNaN($("#int8mark").val())) ? parseInt($("#int8mark").val()) : 0;
		var $int9mark = ($.trim($("#int9mark").val()) != "" && !isNaN($("#int9mark").val())) ? parseInt($("#int9mark").val()) : 0;
		$total = $int1mark + $int2mark + $int3mark + $int4mark + $int5mark + $int6mark + $int7mark + $int8mark + $int9mark;
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
		var $ext7mark = ($.trim($("#ext7mark").val()) != "" && !isNaN($("#ext7mark").val())) ? parseInt($("#ext7mark").val()) : 0;
		var $ext8mark = ($.trim($("#ext8mark").val()) != "" && !isNaN($("#ext8mark").val())) ? parseInt($("#ext8mark").val()) : 0;
		var $ext9mark = ($.trim($("#ext9mark").val()) != "" && !isNaN($("#ext9mark").val())) ? parseInt($("#ext9mark").val()) : 0;
		$total = $ext1mark + $ext2mark + $ext3mark + $ext4mark + $ext5mark + $ext6mark + $ext7mark + $ext8mark + $ext9mark;
		$("#totalExtMark").val($total);
	}
	$(".key").keyup(function(){
		extCalc();
	});
	
});
</script>
@endsection