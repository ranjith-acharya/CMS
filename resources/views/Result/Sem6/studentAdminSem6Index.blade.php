@extends('layouts.custom-app')

@section('custom-title') Sem6 Result - {{$student->admissionNo}} @endsection

@section('options')
<a class="dropdown-item" href="{{url('/home')}}">
	Home
</a>
<a class="dropdown-item" href="{{action('HomeController@show', Auth::user()->id)}}">
	Profile
</a>
@endsection

@section('content')
<div class="container pb-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<div class="modal-header">
				<h5 class="mt-2">Sem6 - {{$student->admissionNo}}</h5>
				<a class="btn-link link mt-1" href="{{route('students.show', $student->id)}}">
					<button type="button" class="btn btn-sm btn-primary float-right">View</button>
				</a>
			</div>
			@if(session('success'))
			<div class="alert alert-success alert-dismissible fade show">
			<button class="close" data-dismiss="alert">&times;</button>
				{{session('success')}}
			</div>
			@endif
			<div class="modal-body card-body">
				<ul class="nav nav-tabs nav-tabs-sm">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#sem6Int">Internal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#sem6Ext">External</a>
					</li>
				</ul>
				<div class="tab tab-content justify-content-center">
					<div class="tab-pane active mt-4" id="sem6Int">
						<h5 class="mb-4">Sem 6 Internal {{$student->branch}}</h5>
						<form method="post" class="form" action="{{action('Sem6\StudentAdminSem6Int@store')}}">
							@csrf<input type="text" name="admissionNo" class="form-control" value="{{$student->admissionNo}}" hidden>
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="int1">Subj 1 :</label>
											<select name="int1" class="custom-select form-control">
												<option value="">-- Select Internal Subj. --</option>
												<optgroup label="Automobile">
													<option value="Chassis & Body Engg.">Chassis & Body Engg. (CBE)</option>
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD-1)</option>
													<option value="Mechanical Vibration">Mechanical Vibration (MV)</option>
													<option value="DLOC - II Automotive Materials">DLOC - II Automotive Materials (AM)</option>
													<option value="DLOC - II Mechatronics"> DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Cryptography & System Security">Cryptography & System Security (CSS)</option>
													<option value="Data Warehouse & Mining">Data Warehouse & Mining (DWM)</option>
													<option value="Software Engg.">Software Engg. (SE)</option>
													<option value="System Prog. & Compiler Constr.">System Prog. & Compiler Constr. (SPCC)</option>
													<option value="DLOC - I Advance Computer Network">DLOC - I Advance Computer Network (ACN)</option>
													<option value="DLOC - I Advance Database"> DLOC - I Advance Database (ADS)</option>
													<option value="DLOC - I Machine Learning"> DLOC - I Machine Learning (ML)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Computer Comm. Network">Computer Comm. Network</option>
													<option value="Embedded System & RTOS">Embedded System & RTOS</option>
													<option value="Signals & System">Signals & System</option>
													<option value="VLSI Design">VLSI Design</option>
													<option value="DLOC - II Comp. Org. & Arch.">DLOC - II Comp. Org. & Arch. (COA)</option>
													<option value="DLOC - II Electronics Product Design">DLOC - II Electronics Product Design</option>
													<option value="DLOC - II Microwave Engg.">DLOC - II Microwave Engg.</option>
													<option value="DLOC - II Wireless Communication">DLOC - II Wireless Communication</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Antenna & Radio wave Propg.">Antenna & Radio wave Propg. (ARWP)</option>
													<option value="Comp. Comm. Network">Comp. Comm. Network (CCN)</option>
													<option value="Img. Proc. & Machine Vision Lab">Img. Proc. & Machine Vision Lab</option>
													<option value="Microcontr. & Appl.">Microcontr. & Appl. (MA)</option>
													<option value="DLOC - II Audio Processing">DLOC - II Audio Processing (AP)</option>
													<option value="DLOC - II Database Manag. Sys.">DLOC - II Database Manag. Sys. (DBMS)</option>
													<option value="DLOC - II Digital VLSI Design">DLOC - II Digital VLSI Design</option>
													<option value="DLOC - II Radio Engg.">DLOC - II Radio Engg.</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Cloud Computing & Services">Cloud Computing & Services</option>
													<option value="Data Mining & Business Intelligence">Data Mining & Business Intelligence (DMBI)</option>
													<option value="Software Engg. with Proj. Manag.">Software Engg. with Proj. Manag.</option>
													<option value="Wireless Network">Wireless Network (WN)</option>
													<option value="DLOC - II Advance Internet Prog.">DLOC - II Advance Internet Prog. (AIP)</option>
													<option value="DLOC - II Digital Forensic">DLOC - II Digital Forensic (DF)</option>
													<option value="DLOC - II Green IT">DLOC - II Green IT (GIT)</option>
													<option value="DLOC - II Multimedia System">DLOC - II Multimedia System (MS)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD1)</option>
													<option value="Metrology & Quality Engg.">Metrology & Quality Engg.</option>
													<option value="Refrigeration & Air Conditioning">Refrigeration & Air Conditioning (RAC)</option>
													<option value="DLOC - II Industrial Automation">DLOC - II Industrial Automation (IA)</option>
													<option value="DLOC - II Mechatronics">DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
											</select>
											@error('int1')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int1mark">Subj 1 Mark :</label>
											<input type="text" name="int1mark" id="int1mark" class="form-control key" placeholder="Enter subject 1 mark">
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
													<option value="Chassis & Body Engg.">Chassis & Body Engg. (CBE)</option>
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD-1)</option>
													<option value="Mechanical Vibration">Mechanical Vibration (MV)</option>
													<option value="DLOC - II Automotive Materials">DLOC - II Automotive Materials (AM)</option>
													<option value="DLOC - II Mechatronics"> DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Cryptography & System Security">Cryptography & System Security (CSS)</option>
													<option value="Data Warehouse & Mining">Data Warehouse & Mining (DWM)</option>
													<option value="Software Engg.">Software Engg. (SE)</option>
													<option value="System Prog. & Compiler Constr.">System Prog. & Compiler Constr. (SPCC)</option>
													<option value="DLOC - I Advance Computer Network">DLOC - I Advance Computer Network (ACN)</option>
													<option value="DLOC - I Advance Database"> DLOC - I Advance Database (ADS)</option>
													<option value="DLOC - I Machine Learning"> DLOC - I Machine Learning (ML)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Computer Comm. Network">Computer Comm. Network</option>
													<option value="Embedded System & RTOS">Embedded System & RTOS</option>
													<option value="Signals & System">Signals & System</option>
													<option value="VLSI Design">VLSI Design</option>
													<option value="DLOC - II Comp. Org. & Arch.">DLOC - II Comp. Org. & Arch. (COA)</option>
													<option value="DLOC - II Electronics Product Design">DLOC - II Electronics Product Design</option>
													<option value="DLOC - II Microwave Engg.">DLOC - II Microwave Engg.</option>
													<option value="DLOC - II Wireless Communication">DLOC - II Wireless Communication</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Antenna & Radio wave Propg.">Antenna & Radio wave Propg. (ARWP)</option>
													<option value="Comp. Comm. Network">Comp. Comm. Network (CCN)</option>
													<option value="Img. Proc. & Machine Vision Lab">Img. Proc. & Machine Vision Lab</option>
													<option value="Microcontr. & Appl.">Microcontr. & Appl. (MA)</option>
													<option value="DLOC - II Audio Processing">DLOC - II Audio Processing (AP)</option>
													<option value="DLOC - II Database Manag. Sys.">DLOC - II Database Manag. Sys. (DBMS)</option>
													<option value="DLOC - II Digital VLSI Design">DLOC - II Digital VLSI Design</option>
													<option value="DLOC - II Radio Engg.">DLOC - II Radio Engg.</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Cloud Computing & Services">Cloud Computing & Services</option>
													<option value="Data Mining & Business Intelligence">Data Mining & Business Intelligence (DMBI)</option>
													<option value="Software Engg. with Proj. Manag.">Software Engg. with Proj. Manag.</option>
													<option value="Wireless Network">Wireless Network (WN)</option>
													<option value="DLOC - II Advance Internet Prog.">DLOC - II Advance Internet Prog. (AIP)</option>
													<option value="DLOC - II Digital Forensic">DLOC - II Digital Forensic (DF)</option>
													<option value="DLOC - II Green IT">DLOC - II Green IT (GIT)</option>
													<option value="DLOC - II Multimedia System">DLOC - II Multimedia System (MS)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD1)</option>
													<option value="Metrology & Quality Engg.">Metrology & Quality Engg.</option>
													<option value="Refrigeration & Air Conditioning">Refrigeration & Air Conditioning (RAC)</option>
													<option value="DLOC - II Industrial Automation">DLOC - II Industrial Automation (IA)</option>
													<option value="DLOC - II Mechatronics">DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
											</select>
											@error('int2')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int2mark">Subj 2 Mark :</label>
											<input type="text" name="int2mark" id="int2mark" class="form-control key" placeholder="Enter subject 2 mark">
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
													<option value="Chassis & Body Engg.">Chassis & Body Engg. (CBE)</option>
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD-1)</option>
													<option value="Mechanical Vibration">Mechanical Vibration (MV)</option>
													<option value="DLOC - II Automotive Materials">DLOC - II Automotive Materials (AM)</option>
													<option value="DLOC - II Mechatronics"> DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Cryptography & System Security">Cryptography & System Security (CSS)</option>
													<option value="Data Warehouse & Mining">Data Warehouse & Mining (DWM)</option>
													<option value="Software Engg.">Software Engg. (SE)</option>
													<option value="System Prog. & Compiler Constr.">System Prog. & Compiler Constr. (SPCC)</option>
													<option value="DLOC - I Advance Computer Network">DLOC - I Advance Computer Network (ACN)</option>
													<option value="DLOC - I Advance Database"> DLOC - I Advance Database (ADS)</option>
													<option value="DLOC - I Machine Learning"> DLOC - I Machine Learning (ML)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Computer Comm. Network">Computer Comm. Network</option>
													<option value="Embedded System & RTOS">Embedded System & RTOS</option>
													<option value="Signals & System">Signals & System</option>
													<option value="VLSI Design">VLSI Design</option>
													<option value="DLOC - II Comp. Org. & Arch.">DLOC - II Comp. Org. & Arch. (COA)</option>
													<option value="DLOC - II Electronics Product Design">DLOC - II Electronics Product Design</option>
													<option value="DLOC - II Microwave Engg.">DLOC - II Microwave Engg.</option>
													<option value="DLOC - II Wireless Communication">DLOC - II Wireless Communication</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Antenna & Radio wave Propg.">Antenna & Radio wave Propg. (ARWP)</option>
													<option value="Comp. Comm. Network">Comp. Comm. Network (CCN)</option>
													<option value="Img. Proc. & Machine Vision Lab">Img. Proc. & Machine Vision Lab</option>
													<option value="Microcontr. & Appl.">Microcontr. & Appl. (MA)</option>
													<option value="DLOC - II Audio Processing">DLOC - II Audio Processing (AP)</option>
													<option value="DLOC - II Database Manag. Sys.">DLOC - II Database Manag. Sys. (DBMS)</option>
													<option value="DLOC - II Digital VLSI Design">DLOC - II Digital VLSI Design</option>
													<option value="DLOC - II Radio Engg.">DLOC - II Radio Engg.</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Cloud Computing & Services">Cloud Computing & Services</option>
													<option value="Data Mining & Business Intelligence">Data Mining & Business Intelligence (DMBI)</option>
													<option value="Software Engg. with Proj. Manag.">Software Engg. with Proj. Manag.</option>
													<option value="Wireless Network">Wireless Network (WN)</option>
													<option value="DLOC - II Advance Internet Prog.">DLOC - II Advance Internet Prog. (AIP)</option>
													<option value="DLOC - II Digital Forensic">DLOC - II Digital Forensic (DF)</option>
													<option value="DLOC - II Green IT">DLOC - II Green IT (GIT)</option>
													<option value="DLOC - II Multimedia System">DLOC - II Multimedia System (MS)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD1)</option>
													<option value="Metrology & Quality Engg.">Metrology & Quality Engg.</option>
													<option value="Refrigeration & Air Conditioning">Refrigeration & Air Conditioning (RAC)</option>
													<option value="DLOC - II Industrial Automation">DLOC - II Industrial Automation (IA)</option>
													<option value="DLOC - II Mechatronics">DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
											</select>
											@error('int3')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int3mark">Subj 3 Mark :</label>
											<input type="text" name="int3mark" id="int3mark" class="form-control key" placeholder="Enter subject 3 mark">
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
													<option value="Chassis & Body Engg.">Chassis & Body Engg. (CBE)</option>
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD-1)</option>
													<option value="Mechanical Vibration">Mechanical Vibration (MV)</option>
													<option value="DLOC - II Automotive Materials">DLOC - II Automotive Materials (AM)</option>
													<option value="DLOC - II Mechatronics"> DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Cryptography & System Security">Cryptography & System Security (CSS)</option>
													<option value="Data Warehouse & Mining">Data Warehouse & Mining (DWM)</option>
													<option value="Software Engg.">Software Engg. (SE)</option>
													<option value="System Prog. & Compiler Constr.">System Prog. & Compiler Constr. (SPCC)</option>
													<option value="DLOC - I Advance Computer Network">DLOC - I Advance Computer Network (ACN)</option>
													<option value="DLOC - I Advance Database"> DLOC - I Advance Database (ADS)</option>
													<option value="DLOC - I Machine Learning"> DLOC - I Machine Learning (ML)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Computer Comm. Network">Computer Comm. Network</option>
													<option value="Embedded System & RTOS">Embedded System & RTOS</option>
													<option value="Signals & System">Signals & System</option>
													<option value="VLSI Design">VLSI Design</option>
													<option value="DLOC - II Comp. Org. & Arch.">DLOC - II Comp. Org. & Arch. (COA)</option>
													<option value="DLOC - II Electronics Product Design">DLOC - II Electronics Product Design</option>
													<option value="DLOC - II Microwave Engg.">DLOC - II Microwave Engg.</option>
													<option value="DLOC - II Wireless Communication">DLOC - II Wireless Communication</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Antenna & Radio wave Propg.">Antenna & Radio wave Propg. (ARWP)</option>
													<option value="Comp. Comm. Network">Comp. Comm. Network (CCN)</option>
													<option value="Img. Proc. & Machine Vision Lab">Img. Proc. & Machine Vision Lab</option>
													<option value="Microcontr. & Appl.">Microcontr. & Appl. (MA)</option>
													<option value="DLOC - II Audio Processing">DLOC - II Audio Processing (AP)</option>
													<option value="DLOC - II Database Manag. Sys.">DLOC - II Database Manag. Sys. (DBMS)</option>
													<option value="DLOC - II Digital VLSI Design">DLOC - II Digital VLSI Design</option>
													<option value="DLOC - II Radio Engg.">DLOC - II Radio Engg.</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Cloud Computing & Services">Cloud Computing & Services</option>
													<option value="Data Mining & Business Intelligence">Data Mining & Business Intelligence (DMBI)</option>
													<option value="Software Engg. with Proj. Manag.">Software Engg. with Proj. Manag.</option>
													<option value="Wireless Network">Wireless Network (WN)</option>
													<option value="DLOC - II Advance Internet Prog.">DLOC - II Advance Internet Prog. (AIP)</option>
													<option value="DLOC - II Digital Forensic">DLOC - II Digital Forensic (DF)</option>
													<option value="DLOC - II Green IT">DLOC - II Green IT (GIT)</option>
													<option value="DLOC - II Multimedia System">DLOC - II Multimedia System (MS)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD1)</option>
													<option value="Metrology & Quality Engg.">Metrology & Quality Engg.</option>
													<option value="Refrigeration & Air Conditioning">Refrigeration & Air Conditioning (RAC)</option>
													<option value="DLOC - II Industrial Automation">DLOC - II Industrial Automation (IA)</option>
													<option value="DLOC - II Mechatronics">DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
											</select>
											@error('int4')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int4mark">Subj 4 Mark :</label>
											<input type="text" name="int4mark" id="int4mark" class="form-control key" placeholder="Enter subject 4 mark">
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
													<option value="Chassis & Body Engg.">Chassis & Body Engg. (CBE)</option>
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD-1)</option>
													<option value="Mechanical Vibration">Mechanical Vibration (MV)</option>
													<option value="DLOC - II Automotive Materials">DLOC - II Automotive Materials (AM)</option>
													<option value="DLOC - II Mechatronics"> DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Cryptography & System Security">Cryptography & System Security (CSS)</option>
													<option value="Data Warehouse & Mining">Data Warehouse & Mining (DWM)</option>
													<option value="Software Engg.">Software Engg. (SE)</option>
													<option value="System Prog. & Compiler Constr.">System Prog. & Compiler Constr. (SPCC)</option>
													<option value="DLOC - I Advance Computer Network">DLOC - I Advance Computer Network (ACN)</option>
													<option value="DLOC - I Advance Database"> DLOC - I Advance Database (ADS)</option>
													<option value="DLOC - I Machine Learning"> DLOC - I Machine Learning (ML)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Computer Comm. Network">Computer Comm. Network</option>
													<option value="Embedded System & RTOS">Embedded System & RTOS</option>
													<option value="Signals & System">Signals & System</option>
													<option value="VLSI Design">VLSI Design</option>
													<option value="DLOC - II Comp. Org. & Arch.">DLOC - II Comp. Org. & Arch. (COA)</option>
													<option value="DLOC - II Electronics Product Design">DLOC - II Electronics Product Design</option>
													<option value="DLOC - II Microwave Engg.">DLOC - II Microwave Engg.</option>
													<option value="DLOC - II Wireless Communication">DLOC - II Wireless Communication</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Antenna & Radio wave Propg.">Antenna & Radio wave Propg. (ARWP)</option>
													<option value="Comp. Comm. Network">Comp. Comm. Network (CCN)</option>
													<option value="Img. Proc. & Machine Vision Lab">Img. Proc. & Machine Vision Lab</option>
													<option value="Microcontr. & Appl.">Microcontr. & Appl. (MA)</option>
													<option value="DLOC - II Audio Processing">DLOC - II Audio Processing (AP)</option>
													<option value="DLOC - II Database Manag. Sys.">DLOC - II Database Manag. Sys. (DBMS)</option>
													<option value="DLOC - II Digital VLSI Design">DLOC - II Digital VLSI Design</option>
													<option value="DLOC - II Radio Engg.">DLOC - II Radio Engg.</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Cloud Computing & Services">Cloud Computing & Services</option>
													<option value="Data Mining & Business Intelligence">Data Mining & Business Intelligence (DMBI)</option>
													<option value="Software Engg. with Proj. Manag.">Software Engg. with Proj. Manag.</option>
													<option value="Wireless Network">Wireless Network (WN)</option>
													<option value="DLOC - II Advance Internet Prog.">DLOC - II Advance Internet Prog. (AIP)</option>
													<option value="DLOC - II Digital Forensic">DLOC - II Digital Forensic (DF)</option>
													<option value="DLOC - II Green IT">DLOC - II Green IT (GIT)</option>
													<option value="DLOC - II Multimedia System">DLOC - II Multimedia System (MS)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD1)</option>
													<option value="Metrology & Quality Engg.">Metrology & Quality Engg.</option>
													<option value="Refrigeration & Air Conditioning">Refrigeration & Air Conditioning (RAC)</option>
													<option value="DLOC - II Industrial Automation">DLOC - II Industrial Automation (IA)</option>
													<option value="DLOC - II Mechatronics">DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
											</select>
											@error('int5')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int5mark">Subj 5 Mark :</label>
											<input type="text" name="int5mark" id="int5mark" class="form-control key" placeholder="Enter subject 5 mark">
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
													<option value="Chassis & Body Engg.">Chassis & Body Engg. (CBE)</option>
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD-1)</option>
													<option value="Mechanical Vibration">Mechanical Vibration (MV)</option>
													<option value="DLOC - II Automotive Materials">DLOC - II Automotive Materials (AM)</option>
													<option value="DLOC - II Mechatronics"> DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Cryptography & System Security">Cryptography & System Security (CSS)</option>
													<option value="Data Warehouse & Mining">Data Warehouse & Mining (DWM)</option>
													<option value="Software Engg.">Software Engg. (SE)</option>
													<option value="System Prog. & Compiler Constr.">System Prog. & Compiler Constr. (SPCC)</option>
													<option value="DLOC - I Advance Computer Network">DLOC - I Advance Computer Network (ACN)</option>
													<option value="DLOC - I Advance Database"> DLOC - I Advance Database (ADS)</option>
													<option value="DLOC - I Machine Learning"> DLOC - I Machine Learning (ML)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Computer Comm. Network">Computer Comm. Network</option>
													<option value="Embedded System & RTOS">Embedded System & RTOS</option>
													<option value="Signals & System">Signals & System</option>
													<option value="VLSI Design">VLSI Design</option>
													<option value="DLOC - II Comp. Org. & Arch.">DLOC - II Comp. Org. & Arch. (COA)</option>
													<option value="DLOC - II Electronics Product Design">DLOC - II Electronics Product Design</option>
													<option value="DLOC - II Microwave Engg.">DLOC - II Microwave Engg.</option>
													<option value="DLOC - II Wireless Communication">DLOC - II Wireless Communication</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Antenna & Radio wave Propg.">Antenna & Radio wave Propg. (ARWP)</option>
													<option value="Comp. Comm. Network">Comp. Comm. Network (CCN)</option>
													<option value="Img. Proc. & Machine Vision Lab">Img. Proc. & Machine Vision Lab</option>
													<option value="Microcontr. & Appl.">Microcontr. & Appl. (MA)</option>
													<option value="DLOC - II Audio Processing">DLOC - II Audio Processing (AP)</option>
													<option value="DLOC - II Database Manag. Sys.">DLOC - II Database Manag. Sys. (DBMS)</option>
													<option value="DLOC - II Digital VLSI Design">DLOC - II Digital VLSI Design</option>
													<option value="DLOC - II Radio Engg.">DLOC - II Radio Engg.</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Cloud Computing & Services">Cloud Computing & Services</option>
													<option value="Data Mining & Business Intelligence">Data Mining & Business Intelligence (DMBI)</option>
													<option value="Software Engg. with Proj. Manag.">Software Engg. with Proj. Manag.</option>
													<option value="Wireless Network">Wireless Network (WN)</option>
													<option value="DLOC - II Advance Internet Prog.">DLOC - II Advance Internet Prog. (AIP)</option>
													<option value="DLOC - II Digital Forensic">DLOC - II Digital Forensic (DF)</option>
													<option value="DLOC - II Green IT">DLOC - II Green IT (GIT)</option>
													<option value="DLOC - II Multimedia System">DLOC - II Multimedia System (MS)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD1)</option>
													<option value="Metrology & Quality Engg.">Metrology & Quality Engg.</option>
													<option value="Refrigeration & Air Conditioning">Refrigeration & Air Conditioning (RAC)</option>
													<option value="DLOC - II Industrial Automation">DLOC - II Industrial Automation (IA)</option>
													<option value="DLOC - II Mechatronics">DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
											</select>
											@error('int6')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int6mark">Subj 6 Mark :</label>
											<input type="text" name="int6mark" id="int6mark" class="form-control key" placeholder="Enter subject 6 mark">
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
													<option value="Chassis & Body Engg.">Chassis & Body Engg. (CBE)</option>
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD-1)</option>
													<option value="Mechanical Vibration">Mechanical Vibration (MV)</option>
													<option value="DLOC - II Automotive Materials">DLOC - II Automotive Materials (AM)</option>
													<option value="DLOC - II Mechatronics"> DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Cryptography & System Security">Cryptography & System Security (CSS)</option>
													<option value="Data Warehouse & Mining">Data Warehouse & Mining (DWM)</option>
													<option value="Software Engg.">Software Engg. (SE)</option>
													<option value="System Prog. & Compiler Constr.">System Prog. & Compiler Constr. (SPCC)</option>
													<option value="DLOC - I Advance Computer Network">DLOC - I Advance Computer Network (ACN)</option>
													<option value="DLOC - I Advance Database"> DLOC - I Advance Database (ADS)</option>
													<option value="DLOC - I Machine Learning"> DLOC - I Machine Learning (ML)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Computer Comm. Network">Computer Comm. Network</option>
													<option value="Embedded System & RTOS">Embedded System & RTOS</option>
													<option value="Signals & System">Signals & System</option>
													<option value="VLSI Design">VLSI Design</option>
													<option value="DLOC - II Comp. Org. & Arch.">DLOC - II Comp. Org. & Arch. (COA)</option>
													<option value="DLOC - II Electronics Product Design">DLOC - II Electronics Product Design</option>
													<option value="DLOC - II Microwave Engg.">DLOC - II Microwave Engg.</option>
													<option value="DLOC - II Wireless Communication">DLOC - II Wireless Communication</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Antenna & Radio wave Propg.">Antenna & Radio wave Propg. (ARWP)</option>
													<option value="Comp. Comm. Network">Comp. Comm. Network (CCN)</option>
													<option value="Img. Proc. & Machine Vision Lab">Img. Proc. & Machine Vision Lab</option>
													<option value="Microcontr. & Appl.">Microcontr. & Appl. (MA)</option>
													<option value="DLOC - II Audio Processing">DLOC - II Audio Processing (AP)</option>
													<option value="DLOC - II Database Manag. Sys.">DLOC - II Database Manag. Sys. (DBMS)</option>
													<option value="DLOC - II Digital VLSI Design">DLOC - II Digital VLSI Design</option>
													<option value="DLOC - II Radio Engg.">DLOC - II Radio Engg.</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Cloud Computing & Services">Cloud Computing & Services</option>
													<option value="Data Mining & Business Intelligence">Data Mining & Business Intelligence (DMBI)</option>
													<option value="Software Engg. with Proj. Manag.">Software Engg. with Proj. Manag.</option>
													<option value="Wireless Network">Wireless Network (WN)</option>
													<option value="DLOC - II Advance Internet Prog.">DLOC - II Advance Internet Prog. (AIP)</option>
													<option value="DLOC - II Digital Forensic">DLOC - II Digital Forensic (DF)</option>
													<option value="DLOC - II Green IT">DLOC - II Green IT (GIT)</option>
													<option value="DLOC - II Multimedia System">DLOC - II Multimedia System (MS)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD1)</option>
													<option value="Metrology & Quality Engg.">Metrology & Quality Engg.</option>
													<option value="Refrigeration & Air Conditioning">Refrigeration & Air Conditioning (RAC)</option>
													<option value="DLOC - II Industrial Automation">DLOC - II Industrial Automation (IA)</option>
													<option value="DLOC - II Mechatronics">DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
											</select>
											@error('int7')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int7mark">Subj 7 Mark :</label>
											<input type="text" name="int7mark" id="int7mark" class="form-control key" placeholder="Enter subject 7 mark">
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
													<option value="Chassis & Body Engg.">Chassis & Body Engg. (CBE)</option>
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD-1)</option>
													<option value="Mechanical Vibration">Mechanical Vibration (MV)</option>
													<option value="DLOC - II Automotive Materials">DLOC - II Automotive Materials (AM)</option>
													<option value="DLOC - II Mechatronics"> DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Cryptography & System Security">Cryptography & System Security (CSS)</option>
													<option value="Data Warehouse & Mining">Data Warehouse & Mining (DWM)</option>
													<option value="Software Engg.">Software Engg. (SE)</option>
													<option value="System Prog. & Compiler Constr.">System Prog. & Compiler Constr. (SPCC)</option>
													<option value="DLOC - I Advance Computer Network">DLOC - I Advance Computer Network (ACN)</option>
													<option value="DLOC - I Advance Database"> DLOC - I Advance Database (ADS)</option>
													<option value="DLOC - I Machine Learning"> DLOC - I Machine Learning (ML)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Computer Comm. Network">Computer Comm. Network</option>
													<option value="Embedded System & RTOS">Embedded System & RTOS</option>
													<option value="Signals & System">Signals & System</option>
													<option value="VLSI Design">VLSI Design</option>
													<option value="DLOC - II Comp. Org. & Arch.">DLOC - II Comp. Org. & Arch. (COA)</option>
													<option value="DLOC - II Electronics Product Design">DLOC - II Electronics Product Design</option>
													<option value="DLOC - II Microwave Engg.">DLOC - II Microwave Engg.</option>
													<option value="DLOC - II Wireless Communication">DLOC - II Wireless Communication</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Antenna & Radio wave Propg.">Antenna & Radio wave Propg. (ARWP)</option>
													<option value="Comp. Comm. Network">Comp. Comm. Network (CCN)</option>
													<option value="Img. Proc. & Machine Vision Lab">Img. Proc. & Machine Vision Lab</option>
													<option value="Microcontr. & Appl.">Microcontr. & Appl. (MA)</option>
													<option value="DLOC - II Audio Processing">DLOC - II Audio Processing (AP)</option>
													<option value="DLOC - II Database Manag. Sys.">DLOC - II Database Manag. Sys. (DBMS)</option>
													<option value="DLOC - II Digital VLSI Design">DLOC - II Digital VLSI Design</option>
													<option value="DLOC - II Radio Engg.">DLOC - II Radio Engg.</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Cloud Computing & Services">Cloud Computing & Services</option>
													<option value="Data Mining & Business Intelligence">Data Mining & Business Intelligence (DMBI)</option>
													<option value="Software Engg. with Proj. Manag.">Software Engg. with Proj. Manag.</option>
													<option value="Wireless Network">Wireless Network (WN)</option>
													<option value="DLOC - II Advance Internet Prog.">DLOC - II Advance Internet Prog. (AIP)</option>
													<option value="DLOC - II Digital Forensic">DLOC - II Digital Forensic (DF)</option>
													<option value="DLOC - II Green IT">DLOC - II Green IT (GIT)</option>
													<option value="DLOC - II Multimedia System">DLOC - II Multimedia System (MS)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD1)</option>
													<option value="Metrology & Quality Engg.">Metrology & Quality Engg.</option>
													<option value="Refrigeration & Air Conditioning">Refrigeration & Air Conditioning (RAC)</option>
													<option value="DLOC - II Industrial Automation">DLOC - II Industrial Automation (IA)</option>
													<option value="DLOC - II Mechatronics">DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
											</select>
											@error('int8')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int8mark">Subj 8 Mark :</label>
											<input type="text" name="int8mark" id="int8mark" class="form-control key" placeholder="Enter subject 8 mark">
											@error('int8mark')
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
										<option value="100">05</option>
										<option value="120">06</option>
									</select>
									@error('outOfInt')
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
					<div class="tab-pane fade mt-4" id="sem6Ext">
						<h5 class="mb-4">Sem 6 External {{$student->branch}}</h5>
						<form method="post" class="form" action="{{action('Sem6\StudentAdminSem6Ext@store')}}">
							@csrf<input type="text" name="admissionNo" class="form-control" value="{{$student->admissionNo}}" hidden>
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="ext1">Subj 1 :</label>
											<select name="ext1" class="custom-select form-control">
												<option value="">-- Select External Subj. --</option>
												<optgroup label="Automobile">
													<option value="Chassis & Body Engg.">Chassis & Body Engg. (CBE)</option>
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD-1)</option>
													<option value="Mechanical Vibration">Mechanical Vibration (MV)</option>
													<option value="DLOC - II Automotive Materials">DLOC - II Automotive Materials (AM)</option>
													<option value="DLOC - II Mechatronics"> DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Cryptography & System Security">Cryptography & System Security (CSS)</option>
													<option value="Data Warehouse & Mining">Data Warehouse & Mining (DWM)</option>
													<option value="Software Engg.">Software Engg. (SE)</option>
													<option value="System Prog. & Compiler Constr.">System Prog. & Compiler Constr. (SPCC)</option>
													<option value="DLOC - I Advance Computer Network">DLOC - I Advance Computer Network (ACN)</option>
													<option value="DLOC - I Advance Database"> DLOC - I Advance Database (ADS)</option>
													<option value="DLOC - I Machine Learning"> DLOC - I Machine Learning (ML)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Computer Comm. Network">Computer Comm. Network</option>
													<option value="Embedded System & RTOS">Embedded System & RTOS</option>
													<option value="Signals & System">Signals & System</option>
													<option value="VLSI Design">VLSI Design</option>
													<option value="DLOC - II Comp. Org. & Arch.">DLOC - II Comp. Org. & Arch. (COA)</option>
													<option value="DLOC - II Electronics Product Design">DLOC - II Electronics Product Design</option>
													<option value="DLOC - II Microwave Engg.">DLOC - II Microwave Engg.</option>
													<option value="DLOC - II Wireless Communication">DLOC - II Wireless Communication</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Antenna & Radio wave Propg.">Antenna & Radio wave Propg. (ARWP)</option>
													<option value="Comp. Comm. Network">Comp. Comm. Network (CCN)</option>
													<option value="Img. Proc. & Machine Vision Lab">Img. Proc. & Machine Vision Lab</option>
													<option value="Microcontr. & Appl.">Microcontr. & Appl. (MA)</option>
													<option value="DLOC - II Audio Processing">DLOC - II Audio Processing (AP)</option>
													<option value="DLOC - II Database Manag. Sys.">DLOC - II Database Manag. Sys. (DBMS)</option>
													<option value="DLOC - II Digital VLSI Design">DLOC - II Digital VLSI Design</option>
													<option value="DLOC - II Radio Engg.">DLOC - II Radio Engg.</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Cloud Computing & Services">Cloud Computing & Services</option>
													<option value="Data Mining & Business Intelligence">Data Mining & Business Intelligence (DMBI)</option>
													<option value="Software Engg. with Proj. Manag.">Software Engg. with Proj. Manag.</option>
													<option value="Wireless Network">Wireless Network (WN)</option>
													<option value="DLOC - II Advance Internet Prog.">DLOC - II Advance Internet Prog. (AIP)</option>
													<option value="DLOC - II Digital Forensic">DLOC - II Digital Forensic (DF)</option>
													<option value="DLOC - II Green IT">DLOC - II Green IT (GIT)</option>
													<option value="DLOC - II Multimedia System">DLOC - II Multimedia System (MS)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD1)</option>
													<option value="Metrology & Quality Engg.">Metrology & Quality Engg.</option>
													<option value="Refrigeration & Air Conditioning">Refrigeration & Air Conditioning (RAC)</option>
													<option value="DLOC - II Industrial Automation">DLOC - II Industrial Automation (IA)</option>
													<option value="DLOC - II Mechatronics">DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
											</select>
											@error('ext1')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="ext1mark">Subj 1 Mark :</label>
											<input type="text" name="ext1mark" id="ext1mark" class="form-control key" placeholder="Enter subject 1 mark">
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
													<option value="Chassis & Body Engg.">Chassis & Body Engg. (CBE)</option>
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD-1)</option>
													<option value="Mechanical Vibration">Mechanical Vibration (MV)</option>
													<option value="DLOC - II Automotive Materials">DLOC - II Automotive Materials (AM)</option>
													<option value="DLOC - II Mechatronics"> DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Cryptography & System Security">Cryptography & System Security (CSS)</option>
													<option value="Data Warehouse & Mining">Data Warehouse & Mining (DWM)</option>
													<option value="Software Engg.">Software Engg. (SE)</option>
													<option value="System Prog. & Compiler Constr.">System Prog. & Compiler Constr. (SPCC)</option>
													<option value="DLOC - I Advance Computer Network">DLOC - I Advance Computer Network (ACN)</option>
													<option value="DLOC - I Advance Database"> DLOC - I Advance Database (ADS)</option>
													<option value="DLOC - I Machine Learning"> DLOC - I Machine Learning (ML)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Computer Comm. Network">Computer Comm. Network</option>
													<option value="Embedded System & RTOS">Embedded System & RTOS</option>
													<option value="Signals & System">Signals & System</option>
													<option value="VLSI Design">VLSI Design</option>
													<option value="DLOC - II Comp. Org. & Arch.">DLOC - II Comp. Org. & Arch. (COA)</option>
													<option value="DLOC - II Electronics Product Design">DLOC - II Electronics Product Design</option>
													<option value="DLOC - II Microwave Engg.">DLOC - II Microwave Engg.</option>
													<option value="DLOC - II Wireless Communication">DLOC - II Wireless Communication</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Antenna & Radio wave Propg.">Antenna & Radio wave Propg. (ARWP)</option>
													<option value="Comp. Comm. Network">Comp. Comm. Network (CCN)</option>
													<option value="Img. Proc. & Machine Vision Lab">Img. Proc. & Machine Vision Lab</option>
													<option value="Microcontr. & Appl.">Microcontr. & Appl. (MA)</option>
													<option value="DLOC - II Audio Processing">DLOC - II Audio Processing (AP)</option>
													<option value="DLOC - II Database Manag. Sys.">DLOC - II Database Manag. Sys. (DBMS)</option>
													<option value="DLOC - II Digital VLSI Design">DLOC - II Digital VLSI Design</option>
													<option value="DLOC - II Radio Engg.">DLOC - II Radio Engg.</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Cloud Computing & Services">Cloud Computing & Services</option>
													<option value="Data Mining & Business Intelligence">Data Mining & Business Intelligence (DMBI)</option>
													<option value="Software Engg. with Proj. Manag.">Software Engg. with Proj. Manag.</option>
													<option value="Wireless Network">Wireless Network (WN)</option>
													<option value="DLOC - II Advance Internet Prog.">DLOC - II Advance Internet Prog. (AIP)</option>
													<option value="DLOC - II Digital Forensic">DLOC - II Digital Forensic (DF)</option>
													<option value="DLOC - II Green IT">DLOC - II Green IT (GIT)</option>
													<option value="DLOC - II Multimedia System">DLOC - II Multimedia System (MS)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD1)</option>
													<option value="Metrology & Quality Engg.">Metrology & Quality Engg.</option>
													<option value="Refrigeration & Air Conditioning">Refrigeration & Air Conditioning (RAC)</option>
													<option value="DLOC - II Industrial Automation">DLOC - II Industrial Automation (IA)</option>
													<option value="DLOC - II Mechatronics">DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
											</select>
											@error('ext2')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="ext2mark">Subj 2 Mark :</label>
											<input type="text" name="ext2mark" id="ext2mark" class="form-control key" placeholder="Enter subject 2 mark">
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
													<option value="Chassis & Body Engg.">Chassis & Body Engg. (CBE)</option>
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD-1)</option>
													<option value="Mechanical Vibration">Mechanical Vibration (MV)</option>
													<option value="DLOC - II Automotive Materials">DLOC - II Automotive Materials (AM)</option>
													<option value="DLOC - II Mechatronics"> DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Cryptography & System Security">Cryptography & System Security (CSS)</option>
													<option value="Data Warehouse & Mining">Data Warehouse & Mining (DWM)</option>
													<option value="Software Engg.">Software Engg. (SE)</option>
													<option value="System Prog. & Compiler Constr.">System Prog. & Compiler Constr. (SPCC)</option>
													<option value="DLOC - I Advance Computer Network">DLOC - I Advance Computer Network (ACN)</option>
													<option value="DLOC - I Advance Database"> DLOC - I Advance Database (ADS)</option>
													<option value="DLOC - I Machine Learning"> DLOC - I Machine Learning (ML)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Computer Comm. Network">Computer Comm. Network</option>
													<option value="Embedded System & RTOS">Embedded System & RTOS</option>
													<option value="Signals & System">Signals & System</option>
													<option value="VLSI Design">VLSI Design</option>
													<option value="DLOC - II Comp. Org. & Arch.">DLOC - II Comp. Org. & Arch. (COA)</option>
													<option value="DLOC - II Electronics Product Design">DLOC - II Electronics Product Design</option>
													<option value="DLOC - II Microwave Engg.">DLOC - II Microwave Engg.</option>
													<option value="DLOC - II Wireless Communication">DLOC - II Wireless Communication</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Antenna & Radio wave Propg.">Antenna & Radio wave Propg. (ARWP)</option>
													<option value="Comp. Comm. Network">Comp. Comm. Network (CCN)</option>
													<option value="Img. Proc. & Machine Vision Lab">Img. Proc. & Machine Vision Lab</option>
													<option value="Microcontr. & Appl.">Microcontr. & Appl. (MA)</option>
													<option value="DLOC - II Audio Processing">DLOC - II Audio Processing (AP)</option>
													<option value="DLOC - II Database Manag. Sys.">DLOC - II Database Manag. Sys. (DBMS)</option>
													<option value="DLOC - II Digital VLSI Design">DLOC - II Digital VLSI Design</option>
													<option value="DLOC - II Radio Engg.">DLOC - II Radio Engg.</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Cloud Computing & Services">Cloud Computing & Services</option>
													<option value="Data Mining & Business Intelligence">Data Mining & Business Intelligence (DMBI)</option>
													<option value="Software Engg. with Proj. Manag.">Software Engg. with Proj. Manag.</option>
													<option value="Wireless Network">Wireless Network (WN)</option>
													<option value="DLOC - II Advance Internet Prog.">DLOC - II Advance Internet Prog. (AIP)</option>
													<option value="DLOC - II Digital Forensic">DLOC - II Digital Forensic (DF)</option>
													<option value="DLOC - II Green IT">DLOC - II Green IT (GIT)</option>
													<option value="DLOC - II Multimedia System">DLOC - II Multimedia System (MS)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD1)</option>
													<option value="Metrology & Quality Engg.">Metrology & Quality Engg.</option>
													<option value="Refrigeration & Air Conditioning">Refrigeration & Air Conditioning (RAC)</option>
													<option value="DLOC - II Industrial Automation">DLOC - II Industrial Automation (IA)</option>
													<option value="DLOC - II Mechatronics">DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
											</select>
											@error('ext3')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="ext3mark">Subj 3 Mark :</label>
											<input type="text" name="ext3mark" id="ext3mark" class="form-control key" placeholder="Enter subject 3 mark">
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
													<option value="Chassis & Body Engg.">Chassis & Body Engg. (CBE)</option>
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD-1)</option>
													<option value="Mechanical Vibration">Mechanical Vibration (MV)</option>
													<option value="DLOC - II Automotive Materials">DLOC - II Automotive Materials (AM)</option>
													<option value="DLOC - II Mechatronics"> DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Cryptography & System Security">Cryptography & System Security (CSS)</option>
													<option value="Data Warehouse & Mining">Data Warehouse & Mining (DWM)</option>
													<option value="Software Engg.">Software Engg. (SE)</option>
													<option value="System Prog. & Compiler Constr.">System Prog. & Compiler Constr. (SPCC)</option>
													<option value="DLOC - I Advance Computer Network">DLOC - I Advance Computer Network (ACN)</option>
													<option value="DLOC - I Advance Database"> DLOC - I Advance Database (ADS)</option>
													<option value="DLOC - I Machine Learning"> DLOC - I Machine Learning (ML)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Computer Comm. Network">Computer Comm. Network</option>
													<option value="Embedded System & RTOS">Embedded System & RTOS</option>
													<option value="Signals & System">Signals & System</option>
													<option value="VLSI Design">VLSI Design</option>
													<option value="DLOC - II Comp. Org. & Arch.">DLOC - II Comp. Org. & Arch. (COA)</option>
													<option value="DLOC - II Electronics Product Design">DLOC - II Electronics Product Design</option>
													<option value="DLOC - II Microwave Engg.">DLOC - II Microwave Engg.</option>
													<option value="DLOC - II Wireless Communication">DLOC - II Wireless Communication</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Antenna & Radio wave Propg.">Antenna & Radio wave Propg. (ARWP)</option>
													<option value="Comp. Comm. Network">Comp. Comm. Network (CCN)</option>
													<option value="Img. Proc. & Machine Vision Lab">Img. Proc. & Machine Vision Lab</option>
													<option value="Microcontr. & Appl.">Microcontr. & Appl. (MA)</option>
													<option value="DLOC - II Audio Processing">DLOC - II Audio Processing (AP)</option>
													<option value="DLOC - II Database Manag. Sys.">DLOC - II Database Manag. Sys. (DBMS)</option>
													<option value="DLOC - II Digital VLSI Design">DLOC - II Digital VLSI Design</option>
													<option value="DLOC - II Radio Engg.">DLOC - II Radio Engg.</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Cloud Computing & Services">Cloud Computing & Services</option>
													<option value="Data Mining & Business Intelligence">Data Mining & Business Intelligence (DMBI)</option>
													<option value="Software Engg. with Proj. Manag.">Software Engg. with Proj. Manag.</option>
													<option value="Wireless Network">Wireless Network (WN)</option>
													<option value="DLOC - II Advance Internet Prog.">DLOC - II Advance Internet Prog. (AIP)</option>
													<option value="DLOC - II Digital Forensic">DLOC - II Digital Forensic (DF)</option>
													<option value="DLOC - II Green IT">DLOC - II Green IT (GIT)</option>
													<option value="DLOC - II Multimedia System">DLOC - II Multimedia System (MS)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD1)</option>
													<option value="Metrology & Quality Engg.">Metrology & Quality Engg.</option>
													<option value="Refrigeration & Air Conditioning">Refrigeration & Air Conditioning (RAC)</option>
													<option value="DLOC - II Industrial Automation">DLOC - II Industrial Automation (IA)</option>
													<option value="DLOC - II Mechatronics">DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
											</select>
											@error('ext4')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="ext4mark">Subj 4 Mark :</label>
											<input type="text" name="ext4mark" id="ext4mark" class="form-control key" placeholder="Enter subject 4 mark">
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
													<option value="Chassis & Body Engg.">Chassis & Body Engg. (CBE)</option>
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD-1)</option>
													<option value="Mechanical Vibration">Mechanical Vibration (MV)</option>
													<option value="DLOC - II Automotive Materials">DLOC - II Automotive Materials (AM)</option>
													<option value="DLOC - II Mechatronics"> DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Cryptography & System Security">Cryptography & System Security (CSS)</option>
													<option value="Data Warehouse & Mining">Data Warehouse & Mining (DWM)</option>
													<option value="Software Engg.">Software Engg. (SE)</option>
													<option value="System Prog. & Compiler Constr.">System Prog. & Compiler Constr. (SPCC)</option>
													<option value="DLOC - I Advance Computer Network">DLOC - I Advance Computer Network (ACN)</option>
													<option value="DLOC - I Advance Database"> DLOC - I Advance Database (ADS)</option>
													<option value="DLOC - I Machine Learning"> DLOC - I Machine Learning (ML)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Computer Comm. Network">Computer Comm. Network</option>
													<option value="Embedded System & RTOS">Embedded System & RTOS</option>
													<option value="Signals & System">Signals & System</option>
													<option value="VLSI Design">VLSI Design</option>
													<option value="DLOC - II Comp. Org. & Arch.">DLOC - II Comp. Org. & Arch. (COA)</option>
													<option value="DLOC - II Electronics Product Design">DLOC - II Electronics Product Design</option>
													<option value="DLOC - II Microwave Engg.">DLOC - II Microwave Engg.</option>
													<option value="DLOC - II Wireless Communication">DLOC - II Wireless Communication</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Antenna & Radio wave Propg.">Antenna & Radio wave Propg. (ARWP)</option>
													<option value="Comp. Comm. Network">Comp. Comm. Network (CCN)</option>
													<option value="Img. Proc. & Machine Vision Lab">Img. Proc. & Machine Vision Lab</option>
													<option value="Microcontr. & Appl.">Microcontr. & Appl. (MA)</option>
													<option value="DLOC - II Audio Processing">DLOC - II Audio Processing (AP)</option>
													<option value="DLOC - II Database Manag. Sys.">DLOC - II Database Manag. Sys. (DBMS)</option>
													<option value="DLOC - II Digital VLSI Design">DLOC - II Digital VLSI Design</option>
													<option value="DLOC - II Radio Engg.">DLOC - II Radio Engg.</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Cloud Computing & Services">Cloud Computing & Services</option>
													<option value="Data Mining & Business Intelligence">Data Mining & Business Intelligence (DMBI)</option>
													<option value="Software Engg. with Proj. Manag.">Software Engg. with Proj. Manag.</option>
													<option value="Wireless Network">Wireless Network (WN)</option>
													<option value="DLOC - II Advance Internet Prog.">DLOC - II Advance Internet Prog. (AIP)</option>
													<option value="DLOC - II Digital Forensic">DLOC - II Digital Forensic (DF)</option>
													<option value="DLOC - II Green IT">DLOC - II Green IT (GIT)</option>
													<option value="DLOC - II Multimedia System">DLOC - II Multimedia System (MS)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD1)</option>
													<option value="Metrology & Quality Engg.">Metrology & Quality Engg.</option>
													<option value="Refrigeration & Air Conditioning">Refrigeration & Air Conditioning (RAC)</option>
													<option value="DLOC - II Industrial Automation">DLOC - II Industrial Automation (IA)</option>
													<option value="DLOC - II Mechatronics">DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
											</select>
											@error('ext5')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="ext5mark">Subj 5 Mark :</label>
											<input type="text" name="ext5mark" id="ext5mark" class="form-control key" placeholder="Enter subject 5 mark">
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
													<option value="Chassis & Body Engg.">Chassis & Body Engg. (CBE)</option>
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD-1)</option>
													<option value="Mechanical Vibration">Mechanical Vibration (MV)</option>
													<option value="DLOC - II Automotive Materials">DLOC - II Automotive Materials (AM)</option>
													<option value="DLOC - II Mechatronics"> DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Cryptography & System Security">Cryptography & System Security (CSS)</option>
													<option value="Data Warehouse & Mining">Data Warehouse & Mining (DWM)</option>
													<option value="Software Engg.">Software Engg. (SE)</option>
													<option value="System Prog. & Compiler Constr.">System Prog. & Compiler Constr. (SPCC)</option>
													<option value="DLOC - I Advance Computer Network">DLOC - I Advance Computer Network (ACN)</option>
													<option value="DLOC - I Advance Database"> DLOC - I Advance Database (ADS)</option>
													<option value="DLOC - I Machine Learning"> DLOC - I Machine Learning (ML)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Computer Comm. Network">Computer Comm. Network</option>
													<option value="Embedded System & RTOS">Embedded System & RTOS</option>
													<option value="Signals & System">Signals & System</option>
													<option value="VLSI Design">VLSI Design</option>
													<option value="DLOC - II Comp. Org. & Arch.">DLOC - II Comp. Org. & Arch. (COA)</option>
													<option value="DLOC - II Electronics Product Design">DLOC - II Electronics Product Design</option>
													<option value="DLOC - II Microwave Engg.">DLOC - II Microwave Engg.</option>
													<option value="DLOC - II Wireless Communication">DLOC - II Wireless Communication</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Antenna & Radio wave Propg.">Antenna & Radio wave Propg. (ARWP)</option>
													<option value="Comp. Comm. Network">Comp. Comm. Network (CCN)</option>
													<option value="Img. Proc. & Machine Vision Lab">Img. Proc. & Machine Vision Lab</option>
													<option value="Microcontr. & Appl.">Microcontr. & Appl. (MA)</option>
													<option value="DLOC - II Audio Processing">DLOC - II Audio Processing (AP)</option>
													<option value="DLOC - II Database Manag. Sys.">DLOC - II Database Manag. Sys. (DBMS)</option>
													<option value="DLOC - II Digital VLSI Design">DLOC - II Digital VLSI Design</option>
													<option value="DLOC - II Radio Engg.">DLOC - II Radio Engg.</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Cloud Computing & Services">Cloud Computing & Services</option>
													<option value="Data Mining & Business Intelligence">Data Mining & Business Intelligence (DMBI)</option>
													<option value="Software Engg. with Proj. Manag.">Software Engg. with Proj. Manag.</option>
													<option value="Wireless Network">Wireless Network (WN)</option>
													<option value="DLOC - II Advance Internet Prog.">DLOC - II Advance Internet Prog. (AIP)</option>
													<option value="DLOC - II Digital Forensic">DLOC - II Digital Forensic (DF)</option>
													<option value="DLOC - II Green IT">DLOC - II Green IT (GIT)</option>
													<option value="DLOC - II Multimedia System">DLOC - II Multimedia System (MS)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD1)</option>
													<option value="Metrology & Quality Engg.">Metrology & Quality Engg.</option>
													<option value="Refrigeration & Air Conditioning">Refrigeration & Air Conditioning (RAC)</option>
													<option value="DLOC - II Industrial Automation">DLOC - II Industrial Automation (IA)</option>
													<option value="DLOC - II Mechatronics">DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
											</select>
											@error('ext6')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="ext6mark">Subj 6 Mark :</label>
											<input type="text" name="ext6mark" id="ext6mark" class="form-control key" placeholder="Enter subject 6 mark">
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
													<option value="Chassis & Body Engg.">Chassis & Body Engg. (CBE)</option>
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD-1)</option>
													<option value="Mechanical Vibration">Mechanical Vibration (MV)</option>
													<option value="DLOC - II Automotive Materials">DLOC - II Automotive Materials (AM)</option>
													<option value="DLOC - II Mechatronics"> DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Cryptography & System Security">Cryptography & System Security (CSS)</option>
													<option value="Data Warehouse & Mining">Data Warehouse & Mining (DWM)</option>
													<option value="Software Engg.">Software Engg. (SE)</option>
													<option value="System Prog. & Compiler Constr.">System Prog. & Compiler Constr. (SPCC)</option>
													<option value="DLOC - I Advance Computer Network">DLOC - I Advance Computer Network (ACN)</option>
													<option value="DLOC - I Advance Database"> DLOC - I Advance Database (ADS)</option>
													<option value="DLOC - I Machine Learning"> DLOC - I Machine Learning (ML)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Computer Comm. Network">Computer Comm. Network</option>
													<option value="Embedded System & RTOS">Embedded System & RTOS</option>
													<option value="Signals & System">Signals & System</option>
													<option value="VLSI Design">VLSI Design</option>
													<option value="DLOC - II Comp. Org. & Arch.">DLOC - II Comp. Org. & Arch. (COA)</option>
													<option value="DLOC - II Electronics Product Design">DLOC - II Electronics Product Design</option>
													<option value="DLOC - II Microwave Engg.">DLOC - II Microwave Engg.</option>
													<option value="DLOC - II Wireless Communication">DLOC - II Wireless Communication</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Antenna & Radio wave Propg.">Antenna & Radio wave Propg. (ARWP)</option>
													<option value="Comp. Comm. Network">Comp. Comm. Network (CCN)</option>
													<option value="Img. Proc. & Machine Vision Lab">Img. Proc. & Machine Vision Lab</option>
													<option value="Microcontr. & Appl.">Microcontr. & Appl. (MA)</option>
													<option value="DLOC - II Audio Processing">DLOC - II Audio Processing (AP)</option>
													<option value="DLOC - II Database Manag. Sys.">DLOC - II Database Manag. Sys. (DBMS)</option>
													<option value="DLOC - II Digital VLSI Design">DLOC - II Digital VLSI Design</option>
													<option value="DLOC - II Radio Engg.">DLOC - II Radio Engg.</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Cloud Computing & Services">Cloud Computing & Services</option>
													<option value="Data Mining & Business Intelligence">Data Mining & Business Intelligence (DMBI)</option>
													<option value="Software Engg. with Proj. Manag.">Software Engg. with Proj. Manag.</option>
													<option value="Wireless Network">Wireless Network (WN)</option>
													<option value="DLOC - II Advance Internet Prog.">DLOC - II Advance Internet Prog. (AIP)</option>
													<option value="DLOC - II Digital Forensic">DLOC - II Digital Forensic (DF)</option>
													<option value="DLOC - II Green IT">DLOC - II Green IT (GIT)</option>
													<option value="DLOC - II Multimedia System">DLOC - II Multimedia System (MS)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD1)</option>
													<option value="Metrology & Quality Engg.">Metrology & Quality Engg.</option>
													<option value="Refrigeration & Air Conditioning">Refrigeration & Air Conditioning (RAC)</option>
													<option value="DLOC - II Industrial Automation">DLOC - II Industrial Automation (IA)</option>
													<option value="DLOC - II Mechatronics">DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
											</select>
											@error('ext7')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="ext7mark">Subj 7 Mark :</label>
											<input type="text" name="ext7mark" id="ext7mark" class="form-control key" placeholder="Enter subject 7 mark">
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
													<option value="Chassis & Body Engg.">Chassis & Body Engg. (CBE)</option>
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD-1)</option>
													<option value="Mechanical Vibration">Mechanical Vibration (MV)</option>
													<option value="DLOC - II Automotive Materials">DLOC - II Automotive Materials (AM)</option>
													<option value="DLOC - II Mechatronics"> DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Cryptography & System Security">Cryptography & System Security (CSS)</option>
													<option value="Data Warehouse & Mining">Data Warehouse & Mining (DWM)</option>
													<option value="Software Engg.">Software Engg. (SE)</option>
													<option value="System Prog. & Compiler Constr.">System Prog. & Compiler Constr. (SPCC)</option>
													<option value="DLOC - I Advance Computer Network">DLOC - I Advance Computer Network (ACN)</option>
													<option value="DLOC - I Advance Database"> DLOC - I Advance Database (ADS)</option>
													<option value="DLOC - I Machine Learning"> DLOC - I Machine Learning (ML)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Computer Comm. Network">Computer Comm. Network</option>
													<option value="Embedded System & RTOS">Embedded System & RTOS</option>
													<option value="Signals & System">Signals & System</option>
													<option value="VLSI Design">VLSI Design</option>
													<option value="DLOC - II Comp. Org. & Arch.">DLOC - II Comp. Org. & Arch. (COA)</option>
													<option value="DLOC - II Electronics Product Design">DLOC - II Electronics Product Design</option>
													<option value="DLOC - II Microwave Engg.">DLOC - II Microwave Engg.</option>
													<option value="DLOC - II Wireless Communication">DLOC - II Wireless Communication</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Antenna & Radio wave Propg.">Antenna & Radio wave Propg. (ARWP)</option>
													<option value="Comp. Comm. Network">Comp. Comm. Network (CCN)</option>
													<option value="Img. Proc. & Machine Vision Lab">Img. Proc. & Machine Vision Lab</option>
													<option value="Microcontr. & Appl.">Microcontr. & Appl. (MA)</option>
													<option value="DLOC - II Audio Processing">DLOC - II Audio Processing (AP)</option>
													<option value="DLOC - II Database Manag. Sys.">DLOC - II Database Manag. Sys. (DBMS)</option>
													<option value="DLOC - II Digital VLSI Design">DLOC - II Digital VLSI Design</option>
													<option value="DLOC - II Radio Engg.">DLOC - II Radio Engg.</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Cloud Computing & Services">Cloud Computing & Services</option>
													<option value="Data Mining & Business Intelligence">Data Mining & Business Intelligence (DMBI)</option>
													<option value="Software Engg. with Proj. Manag.">Software Engg. with Proj. Manag.</option>
													<option value="Wireless Network">Wireless Network (WN)</option>
													<option value="DLOC - II Advance Internet Prog.">DLOC - II Advance Internet Prog. (AIP)</option>
													<option value="DLOC - II Digital Forensic">DLOC - II Digital Forensic (DF)</option>
													<option value="DLOC - II Green IT">DLOC - II Green IT (GIT)</option>
													<option value="DLOC - II Multimedia System">DLOC - II Multimedia System (MS)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="Finite Element Analysis">Finite Element Analysis (FEA)</option>
													<option value="Machine Design - 1">Machine Design - 1 (MD1)</option>
													<option value="Metrology & Quality Engg.">Metrology & Quality Engg.</option>
													<option value="Refrigeration & Air Conditioning">Refrigeration & Air Conditioning (RAC)</option>
													<option value="DLOC - II Industrial Automation">DLOC - II Industrial Automation (IA)</option>
													<option value="DLOC - II Mechatronics">DLOC - II Mechatronics</option>
													<option value="DLOC - II Robotics">DLOC - II Robotics</option>
												</optgroup>
											</select>
											@error('ext8')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="ext8mark">Subj 8 Mark :</label>
											<input type="text" name="ext8mark" id="ext8mark" class="form-control key" placeholder="Enter subject 8 mark">
											@error('ext8mark')
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
										<option value="400">05</option>
										<option value="480">06</option>
										<option value="560">07</option>
										<option value="640">08</option>
									</select>
									@error('outOfExt')
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
		$total = $int1mark + $int2mark + $int3mark + $int4mark + $int5mark + $int6mark + $int7mark + $int8mark;
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
		$total = $ext1mark + $ext2mark + $ext3mark + $ext4mark + $ext5mark + $ext6mark + $ext7mark + $ext8mark;
		$("#totalExtMark").val($total);
	}
	$(".key").keyup(function(){
		extCalc();
	});
	
});
</script>
@endsection