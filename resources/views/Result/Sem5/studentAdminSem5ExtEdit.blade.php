@extends('layouts.custom-app')

@section('custom-title') Sem 5 External Marks @endsection

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
				<h5 class="mt-2">Sem 5 External Marks</h5>
				<div class="dropdown mt-1">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{action('StudentAdminResultController@sem5Ext')}}">Home</a>
						<a class="dropdown-item" href="{{route('staffs.index')}}">Staff Index</a>
						<a class="dropdown-item" href="{{route('students.index')}}">Student Index</a>
						<a class="dropdown-item" href="{{route('sem5Ext.show', $sem5External->id)}}">View</a>
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
					{{$sem5External  ->firstName}}&nbsp;{{$sem5External  ->lastName}},&nbsp;<span class="text-primary">{{$sem5External  ->admissionNo}}</span><br>
					<span class="text-capitalize">{{$sem5External  ->branch}}&nbsp;Engg.</span><br>
				</div>
				<form method="post" class="form mt-4" action="{{route('sem5Ext.update', $sem5External  ->id)}}">
					@csrf<input type="hidden" name="_method" value="PATCH">
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="ext1">Subj 1 :</label>
									<select name="ext1" class="custom-select form-control">
										<option value="">-- Select External Subj. --</option>
										<optgroup label="Automobile">
											<option value="Automotive System" @if($sem5External->ext1 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5External->ext1 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext1 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5External->ext1 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5External->ext1 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext1 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5External->ext1 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5External->ext1 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5External->ext1 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5External->ext1 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5External->ext1 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5External->ext1 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5External->ext1 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5External->ext1 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5External->ext1 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5External->ext1 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5External->ext1 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5External->ext1 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5External->ext1 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5External->ext1 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5External->ext1 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5External->ext1 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5External->ext1 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5External->ext1 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5External->ext1 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5External->ext1 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5External->ext1 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5External->ext1 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5External->ext1 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5External->ext1 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5External->ext1 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5External->ext1 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5External->ext1 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5External->ext1 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5External->ext1 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5External->ext1 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5External->ext1 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5External->ext1 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5External->ext1 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5External->ext1 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext1 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5External->ext1 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5External->ext1 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5External->ext1 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext1 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('ext1')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext1mark">Subj 1 Mark :</label>
									<input type="text" name="ext1mark" id="ext1mark" class="form-control key" placeholder="Enter subject 1 mark" value="{{$sem5External->ext1mark}}">
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
											<option value="Automotive System" @if($sem5External->ext2 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5External->ext2 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext2 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5External->ext2 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5External->ext2 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext2 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5External->ext2 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5External->ext2 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5External->ext2 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5External->ext2 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5External->ext2 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5External->ext2 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5External->ext2 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5External->ext2 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5External->ext2 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5External->ext2 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5External->ext2 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5External->ext2 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5External->ext2 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5External->ext2 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5External->ext2 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5External->ext2 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5External->ext2 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5External->ext2 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5External->ext2 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5External->ext2 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5External->ext2 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5External->ext2 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5External->ext2 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5External->ext2 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5External->ext2 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5External->ext2 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5External->ext2 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5External->ext2 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5External->ext2 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5External->ext2 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5External->ext2 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5External->ext2 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5External->ext2 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5External->ext2 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext2 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5External->ext2 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5External->ext2 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5External->ext2 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext2 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('ext2')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext2mark">Subj 2 Mark :</label>
									<input type="text" name="ext2mark" id="ext2mark" class="form-control key" placeholder="Enter subject 2 mark" value="{{$sem5External->ext2mark}}">
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
											<option value="Automotive System" @if($sem5External->ext3 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5External->ext3 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext3 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5External->ext3 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5External->ext3 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext3 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5External->ext3 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5External->ext3 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5External->ext3 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5External->ext3 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5External->ext3 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5External->ext3 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5External->ext3 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5External->ext3 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5External->ext3 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5External->ext3 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5External->ext3 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5External->ext3 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5External->ext3 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5External->ext3 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5External->ext3 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5External->ext3 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5External->ext3 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5External->ext3 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5External->ext3 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5External->ext3 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5External->ext3 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5External->ext3 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5External->ext3 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5External->ext3 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5External->ext3 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5External->ext3 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5External->ext3 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5External->ext3 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5External->ext3 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5External->ext3 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5External->ext3 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5External->ext3 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5External->ext3 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5External->ext3 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext3 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5External->ext3 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5External->ext3 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5External->ext3 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext3 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('ext3')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext3mark">Subj 3 Mark :</label>
									<input type="text" name="ext3mark" id="ext3mark" class="form-control key" placeholder="Enter subject 3 mark" value="{{$sem5External->ext3mark}}">
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
											<option value="Automotive System" @if($sem5External->ext4 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5External->ext4 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext4 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5External->ext4 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5External->ext4 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext4 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5External->ext4 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5External->ext4 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5External->ext4 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5External->ext4 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5External->ext4 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5External->ext4 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5External->ext4 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5External->ext4 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5External->ext4 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5External->ext4 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5External->ext4 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5External->ext4 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5External->ext4 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5External->ext4 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5External->ext4 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5External->ext4 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5External->ext4 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5External->ext4 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5External->ext4 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5External->ext4 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5External->ext4 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5External->ext4 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5External->ext4 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5External->ext4 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5External->ext4 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5External->ext4 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5External->ext4 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5External->ext4 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5External->ext4 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5External->ext4 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5External->ext4 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5External->ext4 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5External->ext4 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5External->ext4 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext4 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5External->ext4 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5External->ext4 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5External->ext4 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext4 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('ext4')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext4mark">Subj 4 Mark :</label>
									<input type="text" name="ext4mark" id="ext4mark" class="form-control key" placeholder="Enter subject 4 mark" value="{{$sem5External->ext4mark}}">
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
											<option value="Automotive System" @if($sem5External->ext5 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5External->ext5 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext5 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5External->ext5 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5External->ext5 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext5 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5External->ext5 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5External->ext5 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5External->ext5 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5External->ext5 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5External->ext5 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5External->ext5 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5External->ext5 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5External->ext5 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5External->ext5 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5External->ext5 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5External->ext5 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5External->ext5 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5External->ext5 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5External->ext5 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5External->ext5 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5External->ext5 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5External->ext5 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5External->ext5 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5External->ext5 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5External->ext5 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5External->ext5 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5External->ext5 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5External->ext5 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5External->ext5 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5External->ext5 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5External->ext5 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5External->ext5 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5External->ext5 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5External->ext5 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5External->ext5 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5External->ext5 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5External->ext5 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5External->ext5 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5External->ext5 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext5 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5External->ext5 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5External->ext5 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5External->ext5 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext5 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('ext5')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext5mark">Subj 5 Mark :</label>
									<input type="text" name="ext5mark" id="ext5mark" class="form-control key" placeholder="Enter subject 5 mark" value="{{$sem5External->ext5mark}}">
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
											<option value="Automotive System" @if($sem5External->ext6 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5External->ext6 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext6 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5External->ext6 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5External->ext6 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext6 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5External->ext6 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5External->ext6 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5External->ext6 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5External->ext6 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5External->ext6 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5External->ext6 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5External->ext6 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5External->ext6 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5External->ext6 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5External->ext6 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5External->ext6 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5External->ext6 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5External->ext6 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5External->ext6 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5External->ext6 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5External->ext6 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5External->ext6 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5External->ext6 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5External->ext6 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5External->ext6 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5External->ext6 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5External->ext6 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5External->ext6 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5External->ext6 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5External->ext6 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5External->ext6 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5External->ext6 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5External->ext6 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5External->ext6 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5External->ext6 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5External->ext6 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5External->ext6 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5External->ext6 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5External->ext6 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext6 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5External->ext6 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5External->ext6 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5External->ext6 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext6 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('ext6')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext6mark">Subj 6 Mark :</label>
									<input type="text" name="ext6mark" id="ext6mark" class="form-control key" placeholder="Enter subject 6 mark" value="{{$sem5External->ext6mark}}">
									@error('ext6mark')
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
									<label for="ext7">Subj 7 :</label>
									<select name="ext7" class="custom-select form-control">
										<option value="">-- Select External Subj. --</option>
										<optgroup label="Automobile">
											<option value="Automotive System" @if($sem5External->ext7 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5External->ext7 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext7 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5External->ext7 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5External->ext7 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext7 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5External->ext7 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5External->ext7 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5External->ext7 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5External->ext7 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5External->ext7 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5External->ext7 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5External->ext7 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5External->ext7 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5External->ext7 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5External->ext7 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5External->ext7 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5External->ext7 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5External->ext7 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5External->ext7 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5External->ext7 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5External->ext7 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5External->ext7 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5External->ext7 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5External->ext7 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5External->ext7 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5External->ext7 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5External->ext7 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5External->ext7 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5External->ext7 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5External->ext7 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5External->ext7 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5External->ext7 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5External->ext7 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5External->ext7 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5External->ext7 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5External->ext7 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5External->ext7 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5External->ext7 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5External->ext7 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext7 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5External->ext7 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5External->ext7 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5External->ext7 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext7 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('ext7')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext7mark">Subj 7 Mark :</label>
									<input type="text" name="ext7mark" id="ext7mark" class="form-control key" placeholder="Enter subject 7 mark" value="{{$sem5External->ext7mark}}">
									@error('ext7mark')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="ext8">Subj 8 :</label>
									<select name="ext8" class="custom-select form-control">
										<option value="">-- Select External Subj. --</option>
										<optgroup label="Automobile">
											<option value="Automotive System" @if($sem5External->ext8 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5External->ext8 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext8 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5External->ext8 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5External->ext8 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext8 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5External->ext8 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5External->ext8 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5External->ext8 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5External->ext8 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5External->ext8 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5External->ext8 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5External->ext8 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5External->ext8 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5External->ext8 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5External->ext8 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5External->ext8 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5External->ext8 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5External->ext8 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5External->ext8 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5External->ext8 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5External->ext8 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5External->ext8 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5External->ext8 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5External->ext8 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5External->ext8 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5External->ext8 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5External->ext8 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5External->ext8 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5External->ext8 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5External->ext8 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5External->ext8 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5External->ext8 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5External->ext8 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5External->ext8 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5External->ext8 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5External->ext8 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5External->ext8 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5External->ext8 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5External->ext8 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext8 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5External->ext8 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5External->ext8 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5External->ext8 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext8 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('ext8')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext8mark">Subj 8 Mark :</label>
									<input type="text" name="ext8mark" id="ext8mark" class="form-control key" placeholder="Enter subject 8 mark" value="{{$sem5External->ext8mark}}">
									@error('ext8mark')
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
									<label for="ext9">Subj 9 :</label>
									<select name="ext9" class="custom-select form-control">
										<option value="">-- Select External Subj. --</option>
										<optgroup label="Automobile">
											<option value="Automotive System" @if($sem5External->ext9 == 'Automotive System') selected @endif>Automotive System (AS)</option>
											<option value="Heat Transfer" @if($sem5External->ext9 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext9 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Mechanical Measurement & Control" @if($sem5External->ext9 == 'Mechanical Measurement & Control') selected @endif>Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Mechining Sciences & Tool Design" @if($sem5External->ext9 == 'DLOC - I Mechining Sciences & Tool Design') selected @endif> DLOC - I Mechining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext9 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Computer Networks" @if($sem5External->ext9 == 'Computer Networks') selected @endif>Computer Networks (CN)</option>
											<option value="Database Management System" @if($sem5External->ext9 == 'Database Management System') selected @endif>Database Management System (DBMS)</option>
											<option value="Microprocessor" @if($sem5External->ext9 == 'Microprocessor') selected @endif>Microprocessor (MP)</option>
											<option value="Theory of Computer Science" @if($sem5External->ext9 == 'Theory of Computer Science') selected @endif>Theory of Computer Science (TCS)</option>
											<option value="Elective - I Advance Algorithm" @if($sem5External->ext9 == 'Elective - I Advance Algorithm') selected @endif>Elective - I Advance Algorithm (AA)</option>
											<option value="Elective - I Advance Operating System" @if($sem5External->ext9 == 'Elective - I Advance Operating System') selected @endif>Elective - I Advance Operating System (AOS)</option>
											<option value="Elective - I Multimedia System" @if($sem5External->ext9 == 'Elective - I Multimedia System') selected @endif>Elective - I Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Design with Linear Int. Cir." @if($sem5External->ext9 == 'Design with Linear Int. Cir.') selected @endif>Design with Linear Int. Cir. (DLIC)</option>
											<option value="Digital Communication" @if($sem5External->ext9 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Engineering Electromagnetics" @if($sem5External->ext9 == 'Engineering Electromagnetics') selected @endif>Engineering Electromagnetics (EE)</option>
											<option value="Micro-Controller & Application" @if($sem5External->ext9 == 'Micro-Controller & Application') selected @endif>Micro-Controller & Application</option>
											<option value="DLOC - I ASIC Verification" @if($sem5External->ext9 == 'DLOC - I ASIC Verification') selected @endif>DLOC - I ASIC Verification (ASIC)</option>
											<option value="DLOC - I Biomedical Instrumentation" @if($sem5External->ext9 == 'DLOC - I Biomedical Instrumentation') selected @endif>DLOC - I Biomedical Instrumentation (BI)</option>
											<option value="DLOC - I Database Management System" @if($sem5External->ext9 == 'DLOC - I Database Management System') selected @endif>DLOC - I Database Management System (DBMS)</option>
											<option value="DLOC - I Digital Control System" @if($sem5External->ext9 == 'DLOC - I Digital Control System') selected @endif>DLOC - I Digital Control System (DCS)</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Digital Communication" @if($sem5External->ext9 == 'Digital Communication') selected @endif>Digital Communication (DC)</option>
											<option value="Discrete Time Signal Processing" @if($sem5External->ext9 == 'Discrete Time Signal Processing') selected @endif>Discrete Time Signal Processing (DTSP)</option>
											<option value="Electromagnetic Engineering" @if($sem5External->ext9 == 'Electromagnetic Engineering') selected @endif>Electromagnetic Engg. (EE)</option>
											<option value="Microprocessor & Peripherals Interfacing" @if($sem5External->ext9 == 'Microprocessor & Peripherals Interfacing') selected @endif>Microprocessor & Peripherals Interfacing (MPI)</option>
											<option value="DLOC - I Data Compress & Encryption" @if($sem5External->ext9 == 'DLOC - I Data Compress & Encryption') selected @endif>DLOC - I Data Compress & Encryption (DCE)</option>
											<option value="DLOC - I Finite Automata Theory" @if($sem5External->ext9 == 'DLOC - I Finite Automata Theory') selected @endif>DLOC - I Finite Automata Theory</option>
											<option value="DLOC - I Microelectronics" @if($sem5External->ext9 == 'DLOC - I Microelectronics') selected @endif>DLOC - I Microelectronics</option>
											<option value="DLOC - I TV & Video Engineering" @if($sem5External->ext9 == 'DLOC - I TV & Video Engineering') selected @endif>DLOC - I TV & Video Engineering</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Adv. Datamanagement Technology" @if($sem5External->ext9 == 'Adv. Datamanagement Technology') selected @endif>Adv. Datamanagement Technology (ADMT)</option>
											<option value="Cryptography & Network Security" @if($sem5External->ext9 == 'Cryptography & Network Security') selected @endif>Cryptography & Network Security (CNS)</option>
											<option value="Internet Programming" @if($sem5External->ext9 == 'Internet Programming') selected @endif>Internet Programming (INP)</option>
											<option value="Micro-Controller & Embedded Prog." @if($sem5External->ext9 == 'Micro-Controller & Embedded Prog.') selected @endif>Micro-Controller & Embedded Prog. (MEP)</option>
											<option value="DLOC - I Adv. Data Structures & Analy. of Algo." @if($sem5External->ext9 == 'DLOC - I Adv. Data Structures & Analy. of Algo.') selected @endif>DLOC - I Adv. Data Structures & Analy. of Algo.</option>
											<option value="DLOC - I Computer Graphics & Virtual Reality" @if($sem5External->ext9 == 'DLOC - I Computer Graphics & Virtual Reality') selected @endif>DLOC - I Computer Graphics & Virtual Reality (CGVR)</option>
											<option value="DLOC - I E-Commerce & E-Business" @if($sem5External->ext9 == 'DLOC - I E-Commerce & E-Business') selected @endif>DLOC - I E-Commerce & E-Business (ECEB)</option>
											<option value="DLOC - I Image Processing" @if($sem5External->ext9 == 'DLOC - I Image Processing') selected @endif>DLOC - I Image Processing (IP)</option>
											<option value="DLOC - I IT Enabled Services" @if($sem5External->ext9 == 'DLOC - I IT Enabled Services') selected @endif>DLOC - I IT Enabled Services</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Dynamics of Machinery" @if($sem5External->ext9 == 'Dynamics of Machinery') selected @endif>Dynamics of Machinery (DOM)</option>
											<option value="Heat Transfer" @if($sem5External->ext9 == 'Heat Transfer') selected @endif>Heat Transfer (HT)</option>
											<option value="Internal Combustion Engine" @if($sem5External->ext9 == 'Internal Combustion Engine') selected @endif>Internal Combustion Engine (ICE)</option>
											<option value="Machining Sciences & Tool Design" @if($sem5External->ext9 == 'Machining Sciences & Tool Design') selected @endif>Machining Sciences & Tool Design (MSTD)</option>
											<option value="DLOC - I Design of Jigs & Fixtures" @if($sem5External->ext9 == 'DLOC - I Design of Jigs & Fixtures') selected @endif>DLOC - I Design of Jigs & Fixtures (DOJF)</option>
											<option value="DLOC - I Mechanical Measurement & Control" @if($sem5External->ext9 == 'DLOC - I Mechanical Measurement & Control') selected @endif>DLOC - I Mechanical Measurement & Control (MMC)</option>
											<option value="DLOC - I Press Tool Design" @if($sem5External->ext9 == 'DLOC - I Press Tool Design') selected @endif>DLOC - I Press Tool Design (PTD)</option>
										</optgroup>
									</select>
									@error('ext9')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext9mark">Subj 9 Mark :</label>
									<input type="text" name="ext9mark" id="ext9mark" class="form-control key" placeholder="Enter subject 9 mark" value="{{$sem5External->ext9mark}}">
									@error('ext9mark')
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
								<option value="400"@if($sem5External->outOf == '400') selected @endif>05</option>
								<option value="480"@if($sem5External->outOf == '480') selected @endif>06</option>
								<option value="560"@if($sem5External->outOf == '560') selected @endif>07</option>
								<option value="640"@if($sem5External->outOf == '640') selected @endif>08</option>
								<option value="720"@if($sem5External->outOf == '720') selected @endif>09</option>
							</select>
							@error('outOfExt')
								<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
						<div class="col-md-3">
							<select class="custom-select" name="remarkExt">
								<option value="">-- Remark --</option>
								<option value="Fail"@if($sem5External->remark == 'Fail') selected @endif>Fail</option>
								<option value="Pass"@if($sem5External->remark == 'Pass') selected @endif>Pass</option>
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