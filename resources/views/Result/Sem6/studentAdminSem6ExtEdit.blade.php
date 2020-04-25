@extends('layouts.custom-app')

@section('custom-title') Sem 6 External Marks @endsection

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
				<h5 class="mt-2">Sem 6 External Marks</h5>
				<div class="dropdown mt-1">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{action('StudentAdminResultController@sem6Ext')}}">Home</a>
						<a class="dropdown-item" href="{{route('staffs.index')}}">Staff Index</a>
						<a class="dropdown-item" href="{{route('students.index')}}">Student Index</a>
						<a class="dropdown-item" href="{{route('sem6Ext.show', $sem6External->id)}}">View</a>
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
					{{$sem6External  ->firstName}}&nbsp;{{$sem6External  ->lastName}},&nbsp;<span class="text-primary">{{$sem6External  ->admissionNo}}</span><br>
					<span class="text-capitalize">{{$sem6External  ->branch}}&nbsp;Engg.</span><br>
				</div>
				<form method="post" class="form mt-4" action="{{route('sem6Ext.update', $sem6External  ->id)}}">
					@csrf<input type="hidden" name="_method" value="PATCH">
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="ext1">Subj 1 :</label>
									<select name="ext1" class="custom-select form-control">
										<option value="">-- Select External Subj. --</option>
										<optgroup label="Automobile">
											<option value="Chassis & Body Engg." @if($sem6External->ext1 == 'Chassis & Body Engg.') selected @endif >Chassis & Body Engg. (CBE)</option>
											<option value="Finite Element Analysis" @if($sem6External->ext1 == 'Finite Element Analysis') selected @endif >Finite Element Analysis (FEA)</option>
											<option value="Machine Design - 1" @if($sem6External->ext1 == 'Machine Design - 1') selected @endif >Machine Design - 1 (MD-1)</option>
											<option value="Mechanical Vibration" @if($sem6External->ext1 == 'Mechanical Vibration') selected @endif >Mechanical Vibration (MV)</option>
											<option value="DLOC - II Automotive Materials" @if($sem6External->ext1 == 'DLOC - II Automotive Materials') selected @endif >DLOC - II Automotive Materials (AM)</option>
											<option value="DLOC - II Mechatronics" @if($sem6External->ext1 == 'DLOC - II Mechatronics') selected @endif > DLOC - II Mechatronics</option>
											<option value="DLOC - II Robotics" @if($sem6External->ext1 == 'DLOC - II Robotics') selected @endif >DLOC - II Robotics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Cryptography & System Security" @if($sem6External->ext1 == 'Cryptography & System Security') selected @endif >Cryptography & System Security (CSS)</option>
											<option value="Data Warehouse & Mining" @if($sem6External->ext1 == 'Data Warehouse & Mining') selected @endif >Data Warehouse & Mining (DWM)</option>
											<option value="Software Engg." @if($sem6External->ext1 == 'Software Engg.') selected @endif >Software Engg. (SE)</option>
											<option value="System Prog. & Compiler Constr." @if($sem6External->ext1 == 'System Prog. & Compiler Constr.') selected @endif >System Prog. & Compiler Constr. (SPCC)</option>
											<option value="DLOC - I Advance Computer Network" @if($sem6External->ext1 == 'DLOC - I Advance Computer Network') selected @endif >DLOC - I Advance Computer Network (ACN)</option>
											<option value="DLOC - I Advance Database" @if($sem6External->ext1 == 'DLOC - I Advance Database') selected @endif > DLOC - I Advance Database (ADS)</option>
											<option value="DLOC - I Machine Learning" @if($sem6External->ext1 == 'DLOC - I Machine Learning') selected @endif > DLOC - I Machine Learning (ML)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Computer Comm. Network" @if($sem6External->ext1 == 'Computer Comm. Network') selected @endif >Computer Comm. Network</option>
											<option value="Embedded System & RTOS" @if($sem6External->ext1 == 'Embedded System & RTOS') selected @endif >Embedded System & RTOS</option>
											<option value="Signals & System" @if($sem6External->ext1 == 'Signals & System') selected @endif >Signals & System</option>
											<option value="VLSI Design" @if($sem6External->ext1 == 'VLSI Design') selected @endif >VLSI Design</option>
											<option value="DLOC - II Comp. Org. & Arch." @if($sem6External->ext1 == 'DLOC - II Comp. Org. & Arch.') selected @endif >DLOC - II Comp. Org. & Arch. (COA)</option>
											<option value="DLOC - II Electronics Product Design" @if($sem6External->ext1 == 'DLOC - II Electronics Product Design') selected @endif >DLOC - II Electronics Product Design</option>
											<option value="DLOC - II Microwave Engg." @if($sem6External->ext1 == 'DLOC - II Microwave Engg.') selected @endif >DLOC - II Microwave Engg.</option>
											<option value="DLOC - II Wireless Communication" @if($sem6External->ext1 == 'DLOC - II Wireless Communication') selected @endif >DLOC - II Wireless Communication</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Antenna & Radio wave Propg." @if($sem6External->ext1 == 'Antenna & Radio wave Propg.') selected @endif >Antenna & Radio wave Propg. (ARWP)</option>
											<option value="Comp. Comm. Network" @if($sem6External->ext1 == 'Comp. Comm. Network') selected @endif >Comp. Comm. Network (CCN)</option>
											<option value="Img. Proc. & Machine Vision Lab" @if($sem6External->ext1 == 'Img. Proc. & Machine Vision Lab') selected @endif >Img. Proc. & Machine Vision Lab</option>
											<option value="Microcontr. & Appl." @if($sem6External->ext1 == 'Microcontr. & Appl.') selected @endif >Microcontr. & Appl. (MA)</option>
											<option value="DLOC - II Audio Processing" @if($sem6External->ext1 == 'DLOC - II Audio Processing') selected @endif >DLOC - II Audio Processing (AP)</option>
											<option value="DLOC - II Database Manag. Sys." @if($sem6External->ext1 == 'DLOC - II Database Manag. Sys.') selected @endif >DLOC - II Database Manag. Sys. (DBMS)</option>
											<option value="DLOC - II Digital VLSI Design" @if($sem6External->ext1 == 'DLOC - II Digital VLSI Design') selected @endif >DLOC - II Digital VLSI Design</option>
											<option value="DLOC - II Radio Engg." @if($sem6External->ext1 == 'DLOC - II Radio Engg.') selected @endif >DLOC - II Radio Engg.</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Cloud Computing & Services" @if($sem6External->ext1 == 'Cloud Computing & Services') selected @endif >Cloud Computing & Services</option>
											<option value="Data Mining & Business Intelligence" @if($sem6External->ext1 == 'Data Mining & Business Intelligence') selected @endif >Data Mining & Business Intelligence (DMBI)</option>
											<option value="Software Engg. with Proj. Manag." @if($sem6External->ext1 == 'Software Engg. with Proj. Manag.') selected @endif >Software Engg. with Proj. Manag.</option>
											<option value="Wireless Network" @if($sem6External->ext1 == 'Wireless Network') selected @endif >Wireless Network (WN)</option>
											<option value="DLOC - II Advance Internet Prog." @if($sem6External->ext1 == 'DLOC - II Advance Internet Prog.') selected @endif >DLOC - II Advance Internet Prog. (AIP)</option>
											<option value="DLOC - II Digital Forensic" @if($sem6External->ext1 == 'DLOC - II Digital Forensic') selected @endif >DLOC - II Digital Forensic (DF)</option>
											<option value="DLOC - II Green IT" @if($sem6External->ext1 == 'DLOC - II Green IT') selected @endif >DLOC - II Green IT (GIT)</option>
											<option value="DLOC - II Multimedia System" @if($sem6External->ext1 == 'DLOC - II Multimedia System') selected @endif >DLOC - II Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Finite Element Analysis" @if($sem6External->ext1 == 'Finite Element Analysis') selected @endif >Finite Element Analysis (FEA)</option>
											<option value="Machine Design - 1" @if($sem6External->ext1 == 'Machine Design - 1') selected @endif >Machine Design - 1 (MD1)</option>
											<option value="Metrology & Quality Engg." @if($sem6External->ext1 == 'Metrology & Quality Engg.') selected @endif >Metrology & Quality Engg.</option>
											<option value="Refrigeration & Air Conditioning" @if($sem6External->ext1 == 'Refrigeration & Air Conditioning') selected @endif >Refrigeration & Air Conditioning (RAC)</option>
											<option value="DLOC - II Industrial Automation" @if($sem6External->ext1 == 'DLOC - II Industrial Automation') selected @endif >DLOC - II Industrial Automation (IA)</option>
											<option value="DLOC - II Mechatronics" @if($sem6External->ext1 == 'DLOC - II Mechatronics') selected @endif >DLOC - II Mechatronics</option>
											<option value="DLOC - II Robotics" @if($sem6External->ext1 == 'DLOC - II Robotics') selected @endif >DLOC - II Robotics</option>
										</optgroup>
									</select>
									@error('ext1')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext1mark">Subj 1 Mark :</label>
									<input type="text" name="ext1mark" id="ext1mark" class="form-control key" placeholder="Enter subject 1 mark" value="{{$sem6External->ext1mark}}">
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
											<option value="Chassis & Body Engg." @if($sem6External->ext2 == 'Chassis & Body Engg.') selected @endif >Chassis & Body Engg. (CBE)</option>
											<option value="Finite Element Analysis" @if($sem6External->ext2 == 'Finite Element Analysis') selected @endif >Finite Element Analysis (FEA)</option>
											<option value="Machine Design - 1" @if($sem6External->ext2 == 'Machine Design - 1') selected @endif >Machine Design - 1 (MD-1)</option>
											<option value="Mechanical Vibration" @if($sem6External->ext2 == 'Mechanical Vibration') selected @endif >Mechanical Vibration (MV)</option>
											<option value="DLOC - II Automotive Materials" @if($sem6External->ext2 == 'DLOC - II Automotive Materials') selected @endif >DLOC - II Automotive Materials (AM)</option>
											<option value="DLOC - II Mechatronics" @if($sem6External->ext2 == 'DLOC - II Mechatronics') selected @endif > DLOC - II Mechatronics</option>
											<option value="DLOC - II Robotics" @if($sem6External->ext2 == 'DLOC - II Robotics') selected @endif >DLOC - II Robotics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Cryptography & System Security" @if($sem6External->ext2 == 'Cryptography & System Security') selected @endif >Cryptography & System Security (CSS)</option>
											<option value="Data Warehouse & Mining" @if($sem6External->ext2 == 'Data Warehouse & Mining') selected @endif >Data Warehouse & Mining (DWM)</option>
											<option value="Software Engg." @if($sem6External->ext2 == 'Software Engg.') selected @endif >Software Engg. (SE)</option>
											<option value="System Prog. & Compiler Constr." @if($sem6External->ext2 == 'System Prog. & Compiler Constr.') selected @endif >System Prog. & Compiler Constr. (SPCC)</option>
											<option value="DLOC - I Advance Computer Network" @if($sem6External->ext2 == 'DLOC - I Advance Computer Network') selected @endif >DLOC - I Advance Computer Network (ACN)</option>
											<option value="DLOC - I Advance Database" @if($sem6External->ext2 == 'DLOC - I Advance Database') selected @endif > DLOC - I Advance Database (ADS)</option>
											<option value="DLOC - I Machine Learning" @if($sem6External->ext2 == 'DLOC - I Machine Learning') selected @endif > DLOC - I Machine Learning (ML)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Computer Comm. Network" @if($sem6External->ext2 == 'Computer Comm. Network') selected @endif >Computer Comm. Network</option>
											<option value="Embedded System & RTOS" @if($sem6External->ext2 == 'Embedded System & RTOS') selected @endif >Embedded System & RTOS</option>
											<option value="Signals & System" @if($sem6External->ext2 == 'Signals & System') selected @endif >Signals & System</option>
											<option value="VLSI Design" @if($sem6External->ext2 == 'VLSI Design') selected @endif >VLSI Design</option>
											<option value="DLOC - II Comp. Org. & Arch." @if($sem6External->ext2 == 'DLOC - II Comp. Org. & Arch.') selected @endif >DLOC - II Comp. Org. & Arch. (COA)</option>
											<option value="DLOC - II Electronics Product Design" @if($sem6External->ext2 == 'DLOC - II Electronics Product Design') selected @endif >DLOC - II Electronics Product Design</option>
											<option value="DLOC - II Microwave Engg." @if($sem6External->ext2 == 'DLOC - II Microwave Engg.') selected @endif >DLOC - II Microwave Engg.</option>
											<option value="DLOC - II Wireless Communication" @if($sem6External->ext2 == 'DLOC - II Wireless Communication') selected @endif >DLOC - II Wireless Communication</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Antenna & Radio wave Propg." @if($sem6External->ext2 == 'Antenna & Radio wave Propg.') selected @endif >Antenna & Radio wave Propg. (ARWP)</option>
											<option value="Comp. Comm. Network" @if($sem6External->ext2 == 'Comp. Comm. Network') selected @endif >Comp. Comm. Network (CCN)</option>
											<option value="Img. Proc. & Machine Vision Lab" @if($sem6External->ext2 == 'Img. Proc. & Machine Vision Lab') selected @endif >Img. Proc. & Machine Vision Lab</option>
											<option value="Microcontr. & Appl." @if($sem6External->ext2 == 'Microcontr. & Appl.') selected @endif >Microcontr. & Appl. (MA)</option>
											<option value="DLOC - II Audio Processing" @if($sem6External->ext2 == 'DLOC - II Audio Processing') selected @endif >DLOC - II Audio Processing (AP)</option>
											<option value="DLOC - II Database Manag. Sys." @if($sem6External->ext2 == 'DLOC - II Database Manag. Sys.') selected @endif >DLOC - II Database Manag. Sys. (DBMS)</option>
											<option value="DLOC - II Digital VLSI Design" @if($sem6External->ext2 == 'DLOC - II Digital VLSI Design') selected @endif >DLOC - II Digital VLSI Design</option>
											<option value="DLOC - II Radio Engg." @if($sem6External->ext2 == 'DLOC - II Radio Engg.') selected @endif >DLOC - II Radio Engg.</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Cloud Computing & Services" @if($sem6External->ext2 == 'Cloud Computing & Services') selected @endif >Cloud Computing & Services</option>
											<option value="Data Mining & Business Intelligence" @if($sem6External->ext2 == 'Data Mining & Business Intelligence') selected @endif >Data Mining & Business Intelligence (DMBI)</option>
											<option value="Software Engg. with Proj. Manag." @if($sem6External->ext2 == 'Software Engg. with Proj. Manag.') selected @endif >Software Engg. with Proj. Manag.</option>
											<option value="Wireless Network" @if($sem6External->ext2 == 'Wireless Network') selected @endif >Wireless Network (WN)</option>
											<option value="DLOC - II Advance Internet Prog." @if($sem6External->ext2 == 'DLOC - II Advance Internet Prog.') selected @endif >DLOC - II Advance Internet Prog. (AIP)</option>
											<option value="DLOC - II Digital Forensic" @if($sem6External->ext2 == 'DLOC - II Digital Forensic') selected @endif >DLOC - II Digital Forensic (DF)</option>
											<option value="DLOC - II Green IT" @if($sem6External->ext2 == 'DLOC - II Green IT') selected @endif >DLOC - II Green IT (GIT)</option>
											<option value="DLOC - II Multimedia System" @if($sem6External->ext2 == 'DLOC - II Multimedia System') selected @endif >DLOC - II Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Finite Element Analysis" @if($sem6External->ext2 == 'Finite Element Analysis') selected @endif >Finite Element Analysis (FEA)</option>
											<option value="Machine Design - 1" @if($sem6External->ext2 == 'Machine Design - 1') selected @endif >Machine Design - 1 (MD1)</option>
											<option value="Metrology & Quality Engg." @if($sem6External->ext2 == 'Metrology & Quality Engg.') selected @endif >Metrology & Quality Engg.</option>
											<option value="Refrigeration & Air Conditioning" @if($sem6External->ext2 == 'Refrigeration & Air Conditioning') selected @endif >Refrigeration & Air Conditioning (RAC)</option>
											<option value="DLOC - II Industrial Automation" @if($sem6External->ext2 == 'DLOC - II Industrial Automation') selected @endif >DLOC - II Industrial Automation (IA)</option>
											<option value="DLOC - II Mechatronics" @if($sem6External->ext2 == 'DLOC - II Mechatronics') selected @endif >DLOC - II Mechatronics</option>
											<option value="DLOC - II Robotics" @if($sem6External->ext2 == 'DLOC - II Robotics') selected @endif >DLOC - II Robotics</option>
										</optgroup>
									</select>
									@error('ext2')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext2mark">Subj 2 Mark :</label>
									<input type="text" name="ext2mark" id="ext2mark" class="form-control key" placeholder="Enter subject 2 mark" value="{{$sem6External->ext2mark}}">
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
											<option value="Chassis & Body Engg." @if($sem6External->ext3 == 'Chassis & Body Engg.') selected @endif >Chassis & Body Engg. (CBE)</option>
											<option value="Finite Element Analysis" @if($sem6External->ext3 == 'Finite Element Analysis') selected @endif >Finite Element Analysis (FEA)</option>
											<option value="Machine Design - 1" @if($sem6External->ext3 == 'Machine Design - 1') selected @endif >Machine Design - 1 (MD-1)</option>
											<option value="Mechanical Vibration" @if($sem6External->ext3 == 'Mechanical Vibration') selected @endif >Mechanical Vibration (MV)</option>
											<option value="DLOC - II Automotive Materials" @if($sem6External->ext3 == 'DLOC - II Automotive Materials') selected @endif >DLOC - II Automotive Materials (AM)</option>
											<option value="DLOC - II Mechatronics" @if($sem6External->ext3 == 'DLOC - II Mechatronics') selected @endif > DLOC - II Mechatronics</option>
											<option value="DLOC - II Robotics" @if($sem6External->ext3 == 'DLOC - II Robotics') selected @endif >DLOC - II Robotics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Cryptography & System Security" @if($sem6External->ext3 == 'Cryptography & System Security') selected @endif >Cryptography & System Security (CSS)</option>
											<option value="Data Warehouse & Mining" @if($sem6External->ext3 == 'Data Warehouse & Mining') selected @endif >Data Warehouse & Mining (DWM)</option>
											<option value="Software Engg." @if($sem6External->ext3 == 'Software Engg.') selected @endif >Software Engg. (SE)</option>
											<option value="System Prog. & Compiler Constr." @if($sem6External->ext3 == 'System Prog. & Compiler Constr.') selected @endif >System Prog. & Compiler Constr. (SPCC)</option>
											<option value="DLOC - I Advance Computer Network" @if($sem6External->ext3 == 'DLOC - I Advance Computer Network') selected @endif >DLOC - I Advance Computer Network (ACN)</option>
											<option value="DLOC - I Advance Database" @if($sem6External->ext3 == 'DLOC - I Advance Database') selected @endif > DLOC - I Advance Database (ADS)</option>
											<option value="DLOC - I Machine Learning" @if($sem6External->ext3 == 'DLOC - I Machine Learning') selected @endif > DLOC - I Machine Learning (ML)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Computer Comm. Network" @if($sem6External->ext3 == 'Computer Comm. Network') selected @endif >Computer Comm. Network</option>
											<option value="Embedded System & RTOS" @if($sem6External->ext3 == 'Embedded System & RTOS') selected @endif >Embedded System & RTOS</option>
											<option value="Signals & System" @if($sem6External->ext3 == 'Signals & System') selected @endif >Signals & System</option>
											<option value="VLSI Design" @if($sem6External->ext3 == 'VLSI Design') selected @endif >VLSI Design</option>
											<option value="DLOC - II Comp. Org. & Arch." @if($sem6External->ext3 == 'DLOC - II Comp. Org. & Arch.') selected @endif >DLOC - II Comp. Org. & Arch. (COA)</option>
											<option value="DLOC - II Electronics Product Design" @if($sem6External->ext3 == 'DLOC - II Electronics Product Design') selected @endif >DLOC - II Electronics Product Design</option>
											<option value="DLOC - II Microwave Engg." @if($sem6External->ext3 == 'DLOC - II Microwave Engg.') selected @endif >DLOC - II Microwave Engg.</option>
											<option value="DLOC - II Wireless Communication" @if($sem6External->ext3 == 'DLOC - II Wireless Communication') selected @endif >DLOC - II Wireless Communication</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Antenna & Radio wave Propg." @if($sem6External->ext3 == 'Antenna & Radio wave Propg.') selected @endif >Antenna & Radio wave Propg. (ARWP)</option>
											<option value="Comp. Comm. Network" @if($sem6External->ext3 == 'Comp. Comm. Network') selected @endif >Comp. Comm. Network (CCN)</option>
											<option value="Img. Proc. & Machine Vision Lab" @if($sem6External->ext3 == 'Img. Proc. & Machine Vision Lab') selected @endif >Img. Proc. & Machine Vision Lab</option>
											<option value="Microcontr. & Appl." @if($sem6External->ext3 == 'Microcontr. & Appl.') selected @endif >Microcontr. & Appl. (MA)</option>
											<option value="DLOC - II Audio Processing" @if($sem6External->ext3 == 'DLOC - II Audio Processing') selected @endif >DLOC - II Audio Processing (AP)</option>
											<option value="DLOC - II Database Manag. Sys." @if($sem6External->ext3 == 'DLOC - II Database Manag. Sys.') selected @endif >DLOC - II Database Manag. Sys. (DBMS)</option>
											<option value="DLOC - II Digital VLSI Design" @if($sem6External->ext3 == 'DLOC - II Digital VLSI Design') selected @endif >DLOC - II Digital VLSI Design</option>
											<option value="DLOC - II Radio Engg." @if($sem6External->ext3 == 'DLOC - II Radio Engg.') selected @endif >DLOC - II Radio Engg.</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Cloud Computing & Services" @if($sem6External->ext3 == 'Cloud Computing & Services') selected @endif >Cloud Computing & Services</option>
											<option value="Data Mining & Business Intelligence" @if($sem6External->ext3 == 'Data Mining & Business Intelligence') selected @endif >Data Mining & Business Intelligence (DMBI)</option>
											<option value="Software Engg. with Proj. Manag." @if($sem6External->ext3 == 'Software Engg. with Proj. Manag.') selected @endif >Software Engg. with Proj. Manag.</option>
											<option value="Wireless Network" @if($sem6External->ext3 == 'Wireless Network') selected @endif >Wireless Network (WN)</option>
											<option value="DLOC - II Advance Internet Prog." @if($sem6External->ext3 == 'DLOC - II Advance Internet Prog.') selected @endif >DLOC - II Advance Internet Prog. (AIP)</option>
											<option value="DLOC - II Digital Forensic" @if($sem6External->ext3 == 'DLOC - II Digital Forensic') selected @endif >DLOC - II Digital Forensic (DF)</option>
											<option value="DLOC - II Green IT" @if($sem6External->ext3 == 'DLOC - II Green IT') selected @endif >DLOC - II Green IT (GIT)</option>
											<option value="DLOC - II Multimedia System" @if($sem6External->ext3 == 'DLOC - II Multimedia System') selected @endif >DLOC - II Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Finite Element Analysis" @if($sem6External->ext3 == 'Finite Element Analysis') selected @endif >Finite Element Analysis (FEA)</option>
											<option value="Machine Design - 1" @if($sem6External->ext3 == 'Machine Design - 1') selected @endif >Machine Design - 1 (MD1)</option>
											<option value="Metrology & Quality Engg." @if($sem6External->ext3 == 'Metrology & Quality Engg.') selected @endif >Metrology & Quality Engg.</option>
											<option value="Refrigeration & Air Conditioning" @if($sem6External->ext3 == 'Refrigeration & Air Conditioning') selected @endif >Refrigeration & Air Conditioning (RAC)</option>
											<option value="DLOC - II Industrial Automation" @if($sem6External->ext3 == 'DLOC - II Industrial Automation') selected @endif >DLOC - II Industrial Automation (IA)</option>
											<option value="DLOC - II Mechatronics" @if($sem6External->ext3 == 'DLOC - II Mechatronics') selected @endif >DLOC - II Mechatronics</option>
											<option value="DLOC - II Robotics" @if($sem6External->ext3 == 'DLOC - II Robotics') selected @endif >DLOC - II Robotics</option>
										</optgroup>
									</select>
									@error('ext3')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext3mark">Subj 3 Mark :</label>
									<input type="text" name="ext3mark" id="ext3mark" class="form-control key" placeholder="Enter subject 3 mark" value="{{$sem6External->ext3mark}}">
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
											<option value="Chassis & Body Engg." @if($sem6External->ext4 == 'Chassis & Body Engg.') selected @endif >Chassis & Body Engg. (CBE)</option>
											<option value="Finite Element Analysis" @if($sem6External->ext4 == 'Finite Element Analysis') selected @endif >Finite Element Analysis (FEA)</option>
											<option value="Machine Design - 1" @if($sem6External->ext4 == 'Machine Design - 1') selected @endif >Machine Design - 1 (MD-1)</option>
											<option value="Mechanical Vibration" @if($sem6External->ext4 == 'Mechanical Vibration') selected @endif >Mechanical Vibration (MV)</option>
											<option value="DLOC - II Automotive Materials" @if($sem6External->ext4 == 'DLOC - II Automotive Materials') selected @endif >DLOC - II Automotive Materials (AM)</option>
											<option value="DLOC - II Mechatronics" @if($sem6External->ext4 == 'DLOC - II Mechatronics') selected @endif > DLOC - II Mechatronics</option>
											<option value="DLOC - II Robotics" @if($sem6External->ext4 == 'DLOC - II Robotics') selected @endif >DLOC - II Robotics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Cryptography & System Security" @if($sem6External->ext4 == 'Cryptography & System Security') selected @endif >Cryptography & System Security (CSS)</option>
											<option value="Data Warehouse & Mining" @if($sem6External->ext4 == 'Data Warehouse & Mining') selected @endif >Data Warehouse & Mining (DWM)</option>
											<option value="Software Engg." @if($sem6External->ext4 == 'Software Engg.') selected @endif >Software Engg. (SE)</option>
											<option value="System Prog. & Compiler Constr." @if($sem6External->ext4 == 'System Prog. & Compiler Constr.') selected @endif >System Prog. & Compiler Constr. (SPCC)</option>
											<option value="DLOC - I Advance Computer Network" @if($sem6External->ext4 == 'DLOC - I Advance Computer Network') selected @endif >DLOC - I Advance Computer Network (ACN)</option>
											<option value="DLOC - I Advance Database" @if($sem6External->ext4 == 'DLOC - I Advance Database') selected @endif > DLOC - I Advance Database (ADS)</option>
											<option value="DLOC - I Machine Learning" @if($sem6External->ext4 == 'DLOC - I Machine Learning') selected @endif > DLOC - I Machine Learning (ML)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Computer Comm. Network" @if($sem6External->ext4 == 'Computer Comm. Network') selected @endif >Computer Comm. Network</option>
											<option value="Embedded System & RTOS" @if($sem6External->ext4 == 'Embedded System & RTOS') selected @endif >Embedded System & RTOS</option>
											<option value="Signals & System" @if($sem6External->ext4 == 'Signals & System') selected @endif >Signals & System</option>
											<option value="VLSI Design" @if($sem6External->ext4 == 'VLSI Design') selected @endif >VLSI Design</option>
											<option value="DLOC - II Comp. Org. & Arch." @if($sem6External->ext4 == 'DLOC - II Comp. Org. & Arch.') selected @endif >DLOC - II Comp. Org. & Arch. (COA)</option>
											<option value="DLOC - II Electronics Product Design" @if($sem6External->ext4 == 'DLOC - II Electronics Product Design') selected @endif >DLOC - II Electronics Product Design</option>
											<option value="DLOC - II Microwave Engg." @if($sem6External->ext4 == 'DLOC - II Microwave Engg.') selected @endif >DLOC - II Microwave Engg.</option>
											<option value="DLOC - II Wireless Communication" @if($sem6External->ext4 == 'DLOC - II Wireless Communication') selected @endif >DLOC - II Wireless Communication</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Antenna & Radio wave Propg." @if($sem6External->ext4 == 'Antenna & Radio wave Propg.') selected @endif >Antenna & Radio wave Propg. (ARWP)</option>
											<option value="Comp. Comm. Network" @if($sem6External->ext4 == 'Comp. Comm. Network') selected @endif >Comp. Comm. Network (CCN)</option>
											<option value="Img. Proc. & Machine Vision Lab" @if($sem6External->ext4 == 'Img. Proc. & Machine Vision Lab') selected @endif >Img. Proc. & Machine Vision Lab</option>
											<option value="Microcontr. & Appl." @if($sem6External->ext4 == 'Microcontr. & Appl.') selected @endif >Microcontr. & Appl. (MA)</option>
											<option value="DLOC - II Audio Processing" @if($sem6External->ext4 == 'DLOC - II Audio Processing') selected @endif >DLOC - II Audio Processing (AP)</option>
											<option value="DLOC - II Database Manag. Sys." @if($sem6External->ext4 == 'DLOC - II Database Manag. Sys.') selected @endif >DLOC - II Database Manag. Sys. (DBMS)</option>
											<option value="DLOC - II Digital VLSI Design" @if($sem6External->ext4 == 'DLOC - II Digital VLSI Design') selected @endif >DLOC - II Digital VLSI Design</option>
											<option value="DLOC - II Radio Engg." @if($sem6External->ext4 == 'DLOC - II Radio Engg.') selected @endif >DLOC - II Radio Engg.</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Cloud Computing & Services" @if($sem6External->ext4 == 'Cloud Computing & Services') selected @endif >Cloud Computing & Services</option>
											<option value="Data Mining & Business Intelligence" @if($sem6External->ext4 == 'Data Mining & Business Intelligence') selected @endif >Data Mining & Business Intelligence (DMBI)</option>
											<option value="Software Engg. with Proj. Manag." @if($sem6External->ext4 == 'Software Engg. with Proj. Manag.') selected @endif >Software Engg. with Proj. Manag.</option>
											<option value="Wireless Network" @if($sem6External->ext4 == 'Wireless Network') selected @endif >Wireless Network (WN)</option>
											<option value="DLOC - II Advance Internet Prog." @if($sem6External->ext4 == 'DLOC - II Advance Internet Prog.') selected @endif >DLOC - II Advance Internet Prog. (AIP)</option>
											<option value="DLOC - II Digital Forensic" @if($sem6External->ext4 == 'DLOC - II Digital Forensic') selected @endif >DLOC - II Digital Forensic (DF)</option>
											<option value="DLOC - II Green IT" @if($sem6External->ext4 == 'DLOC - II Green IT') selected @endif >DLOC - II Green IT (GIT)</option>
											<option value="DLOC - II Multimedia System" @if($sem6External->ext4 == 'DLOC - II Multimedia System') selected @endif >DLOC - II Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Finite Element Analysis" @if($sem6External->ext4 == 'Finite Element Analysis') selected @endif >Finite Element Analysis (FEA)</option>
											<option value="Machine Design - 1" @if($sem6External->ext4 == 'Machine Design - 1') selected @endif >Machine Design - 1 (MD1)</option>
											<option value="Metrology & Quality Engg." @if($sem6External->ext4 == 'Metrology & Quality Engg.') selected @endif >Metrology & Quality Engg.</option>
											<option value="Refrigeration & Air Conditioning" @if($sem6External->ext4 == 'Refrigeration & Air Conditioning') selected @endif >Refrigeration & Air Conditioning (RAC)</option>
											<option value="DLOC - II Industrial Automation" @if($sem6External->ext4 == 'DLOC - II Industrial Automation') selected @endif >DLOC - II Industrial Automation (IA)</option>
											<option value="DLOC - II Mechatronics" @if($sem6External->ext4 == 'DLOC - II Mechatronics') selected @endif >DLOC - II Mechatronics</option>
											<option value="DLOC - II Robotics" @if($sem6External->ext4 == 'DLOC - II Robotics') selected @endif >DLOC - II Robotics</option>
										</optgroup>
									</select>
									@error('ext4')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext4mark">Subj 4 Mark :</label>
									<input type="text" name="ext4mark" id="ext4mark" class="form-control key" placeholder="Enter subject 4 mark" value="{{$sem6External->ext4mark}}">
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
											<option value="Chassis & Body Engg." @if($sem6External->ext5 == 'Chassis & Body Engg.') selected @endif >Chassis & Body Engg. (CBE)</option>
											<option value="Finite Element Analysis" @if($sem6External->ext5 == 'Finite Element Analysis') selected @endif >Finite Element Analysis (FEA)</option>
											<option value="Machine Design - 1" @if($sem6External->ext5 == 'Machine Design - 1') selected @endif >Machine Design - 1 (MD-1)</option>
											<option value="Mechanical Vibration" @if($sem6External->ext5 == 'Mechanical Vibration') selected @endif >Mechanical Vibration (MV)</option>
											<option value="DLOC - II Automotive Materials" @if($sem6External->ext5 == 'DLOC - II Automotive Materials') selected @endif >DLOC - II Automotive Materials (AM)</option>
											<option value="DLOC - II Mechatronics" @if($sem6External->ext5 == 'DLOC - II Mechatronics') selected @endif > DLOC - II Mechatronics</option>
											<option value="DLOC - II Robotics" @if($sem6External->ext5 == 'DLOC - II Robotics') selected @endif >DLOC - II Robotics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Cryptography & System Security" @if($sem6External->ext5 == 'Cryptography & System Security') selected @endif >Cryptography & System Security (CSS)</option>
											<option value="Data Warehouse & Mining" @if($sem6External->ext5 == 'Data Warehouse & Mining') selected @endif >Data Warehouse & Mining (DWM)</option>
											<option value="Software Engg." @if($sem6External->ext5 == 'Software Engg.') selected @endif >Software Engg. (SE)</option>
											<option value="System Prog. & Compiler Constr." @if($sem6External->ext5 == 'System Prog. & Compiler Constr.') selected @endif >System Prog. & Compiler Constr. (SPCC)</option>
											<option value="DLOC - I Advance Computer Network" @if($sem6External->ext5 == 'DLOC - I Advance Computer Network') selected @endif >DLOC - I Advance Computer Network (ACN)</option>
											<option value="DLOC - I Advance Database" @if($sem6External->ext5 == 'DLOC - I Advance Database') selected @endif > DLOC - I Advance Database (ADS)</option>
											<option value="DLOC - I Machine Learning" @if($sem6External->ext5 == 'DLOC - I Machine Learning') selected @endif > DLOC - I Machine Learning (ML)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Computer Comm. Network" @if($sem6External->ext5 == 'Computer Comm. Network') selected @endif >Computer Comm. Network</option>
											<option value="Embedded System & RTOS" @if($sem6External->ext5 == 'Embedded System & RTOS') selected @endif >Embedded System & RTOS</option>
											<option value="Signals & System" @if($sem6External->ext5 == 'Signals & System') selected @endif >Signals & System</option>
											<option value="VLSI Design" @if($sem6External->ext5 == 'VLSI Design') selected @endif >VLSI Design</option>
											<option value="DLOC - II Comp. Org. & Arch." @if($sem6External->ext5 == 'DLOC - II Comp. Org. & Arch.') selected @endif >DLOC - II Comp. Org. & Arch. (COA)</option>
											<option value="DLOC - II Electronics Product Design" @if($sem6External->ext5 == 'DLOC - II Electronics Product Design') selected @endif >DLOC - II Electronics Product Design</option>
											<option value="DLOC - II Microwave Engg." @if($sem6External->ext5 == 'DLOC - II Microwave Engg.') selected @endif >DLOC - II Microwave Engg.</option>
											<option value="DLOC - II Wireless Communication" @if($sem6External->ext5 == 'DLOC - II Wireless Communication') selected @endif >DLOC - II Wireless Communication</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Antenna & Radio wave Propg." @if($sem6External->ext5 == 'Antenna & Radio wave Propg.') selected @endif >Antenna & Radio wave Propg. (ARWP)</option>
											<option value="Comp. Comm. Network" @if($sem6External->ext5 == 'Comp. Comm. Network') selected @endif >Comp. Comm. Network (CCN)</option>
											<option value="Img. Proc. & Machine Vision Lab" @if($sem6External->ext5 == 'Img. Proc. & Machine Vision Lab') selected @endif >Img. Proc. & Machine Vision Lab</option>
											<option value="Microcontr. & Appl." @if($sem6External->ext5 == 'Microcontr. & Appl.') selected @endif >Microcontr. & Appl. (MA)</option>
											<option value="DLOC - II Audio Processing" @if($sem6External->ext5 == 'DLOC - II Audio Processing') selected @endif >DLOC - II Audio Processing (AP)</option>
											<option value="DLOC - II Database Manag. Sys." @if($sem6External->ext5 == 'DLOC - II Database Manag. Sys.') selected @endif >DLOC - II Database Manag. Sys. (DBMS)</option>
											<option value="DLOC - II Digital VLSI Design" @if($sem6External->ext5 == 'DLOC - II Digital VLSI Design') selected @endif >DLOC - II Digital VLSI Design</option>
											<option value="DLOC - II Radio Engg." @if($sem6External->ext5 == 'DLOC - II Radio Engg.') selected @endif >DLOC - II Radio Engg.</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Cloud Computing & Services" @if($sem6External->ext5 == 'Cloud Computing & Services') selected @endif >Cloud Computing & Services</option>
											<option value="Data Mining & Business Intelligence" @if($sem6External->ext5 == 'Data Mining & Business Intelligence') selected @endif >Data Mining & Business Intelligence (DMBI)</option>
											<option value="Software Engg. with Proj. Manag." @if($sem6External->ext5 == 'Software Engg. with Proj. Manag.') selected @endif >Software Engg. with Proj. Manag.</option>
											<option value="Wireless Network" @if($sem6External->ext5 == 'Wireless Network') selected @endif >Wireless Network (WN)</option>
											<option value="DLOC - II Advance Internet Prog." @if($sem6External->ext5 == 'DLOC - II Advance Internet Prog.') selected @endif >DLOC - II Advance Internet Prog. (AIP)</option>
											<option value="DLOC - II Digital Forensic" @if($sem6External->ext5 == 'DLOC - II Digital Forensic') selected @endif >DLOC - II Digital Forensic (DF)</option>
											<option value="DLOC - II Green IT" @if($sem6External->ext5 == 'DLOC - II Green IT') selected @endif >DLOC - II Green IT (GIT)</option>
											<option value="DLOC - II Multimedia System" @if($sem6External->ext5 == 'DLOC - II Multimedia System') selected @endif >DLOC - II Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Finite Element Analysis" @if($sem6External->ext5 == 'Finite Element Analysis') selected @endif >Finite Element Analysis (FEA)</option>
											<option value="Machine Design - 1" @if($sem6External->ext5 == 'Machine Design - 1') selected @endif >Machine Design - 1 (MD1)</option>
											<option value="Metrology & Quality Engg." @if($sem6External->ext5 == 'Metrology & Quality Engg.') selected @endif >Metrology & Quality Engg.</option>
											<option value="Refrigeration & Air Conditioning" @if($sem6External->ext5 == 'Refrigeration & Air Conditioning') selected @endif >Refrigeration & Air Conditioning (RAC)</option>
											<option value="DLOC - II Industrial Automation" @if($sem6External->ext5 == 'DLOC - II Industrial Automation') selected @endif >DLOC - II Industrial Automation (IA)</option>
											<option value="DLOC - II Mechatronics" @if($sem6External->ext5 == 'DLOC - II Mechatronics') selected @endif >DLOC - II Mechatronics</option>
											<option value="DLOC - II Robotics" @if($sem6External->ext5 == 'DLOC - II Robotics') selected @endif >DLOC - II Robotics</option>
										</optgroup>
									</select>
									@error('ext5')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext5mark">Subj 5 Mark :</label>
									<input type="text" name="ext5mark" id="ext5mark" class="form-control key" placeholder="Enter subject 5 mark" value="{{$sem6External->ext5mark}}">
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
											<option value="Chassis & Body Engg." @if($sem6External->ext6 == 'Chassis & Body Engg.') selected @endif >Chassis & Body Engg. (CBE)</option>
											<option value="Finite Element Analysis" @if($sem6External->ext6 == 'Finite Element Analysis') selected @endif >Finite Element Analysis (FEA)</option>
											<option value="Machine Design - 1" @if($sem6External->ext6 == 'Machine Design - 1') selected @endif >Machine Design - 1 (MD-1)</option>
											<option value="Mechanical Vibration" @if($sem6External->ext6 == 'Mechanical Vibration') selected @endif >Mechanical Vibration (MV)</option>
											<option value="DLOC - II Automotive Materials" @if($sem6External->ext6 == 'DLOC - II Automotive Materials') selected @endif >DLOC - II Automotive Materials (AM)</option>
											<option value="DLOC - II Mechatronics" @if($sem6External->ext6 == 'DLOC - II Mechatronics') selected @endif > DLOC - II Mechatronics</option>
											<option value="DLOC - II Robotics" @if($sem6External->ext6 == 'DLOC - II Robotics') selected @endif >DLOC - II Robotics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Cryptography & System Security" @if($sem6External->ext6 == 'Cryptography & System Security') selected @endif >Cryptography & System Security (CSS)</option>
											<option value="Data Warehouse & Mining" @if($sem6External->ext6 == 'Data Warehouse & Mining') selected @endif >Data Warehouse & Mining (DWM)</option>
											<option value="Software Engg." @if($sem6External->ext6 == 'Software Engg.') selected @endif >Software Engg. (SE)</option>
											<option value="System Prog. & Compiler Constr." @if($sem6External->ext6 == 'System Prog. & Compiler Constr.') selected @endif >System Prog. & Compiler Constr. (SPCC)</option>
											<option value="DLOC - I Advance Computer Network" @if($sem6External->ext6 == 'DLOC - I Advance Computer Network') selected @endif >DLOC - I Advance Computer Network (ACN)</option>
											<option value="DLOC - I Advance Database" @if($sem6External->ext6 == 'DLOC - I Advance Database') selected @endif > DLOC - I Advance Database (ADS)</option>
											<option value="DLOC - I Machine Learning" @if($sem6External->ext6 == 'DLOC - I Machine Learning') selected @endif > DLOC - I Machine Learning (ML)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Computer Comm. Network" @if($sem6External->ext6 == 'Computer Comm. Network') selected @endif >Computer Comm. Network</option>
											<option value="Embedded System & RTOS" @if($sem6External->ext6 == 'Embedded System & RTOS') selected @endif >Embedded System & RTOS</option>
											<option value="Signals & System" @if($sem6External->ext6 == 'Signals & System') selected @endif >Signals & System</option>
											<option value="VLSI Design" @if($sem6External->ext6 == 'VLSI Design') selected @endif >VLSI Design</option>
											<option value="DLOC - II Comp. Org. & Arch." @if($sem6External->ext6 == 'DLOC - II Comp. Org. & Arch.') selected @endif >DLOC - II Comp. Org. & Arch. (COA)</option>
											<option value="DLOC - II Electronics Product Design" @if($sem6External->ext6 == 'DLOC - II Electronics Product Design') selected @endif >DLOC - II Electronics Product Design</option>
											<option value="DLOC - II Microwave Engg." @if($sem6External->ext6 == 'DLOC - II Microwave Engg.') selected @endif >DLOC - II Microwave Engg.</option>
											<option value="DLOC - II Wireless Communication" @if($sem6External->ext6 == 'DLOC - II Wireless Communication') selected @endif >DLOC - II Wireless Communication</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Antenna & Radio wave Propg." @if($sem6External->ext6 == 'Antenna & Radio wave Propg.') selected @endif >Antenna & Radio wave Propg. (ARWP)</option>
											<option value="Comp. Comm. Network" @if($sem6External->ext6 == 'Comp. Comm. Network') selected @endif >Comp. Comm. Network (CCN)</option>
											<option value="Img. Proc. & Machine Vision Lab" @if($sem6External->ext6 == 'Img. Proc. & Machine Vision Lab') selected @endif >Img. Proc. & Machine Vision Lab</option>
											<option value="Microcontr. & Appl." @if($sem6External->ext6 == 'Microcontr. & Appl.') selected @endif >Microcontr. & Appl. (MA)</option>
											<option value="DLOC - II Audio Processing" @if($sem6External->ext6 == 'DLOC - II Audio Processing') selected @endif >DLOC - II Audio Processing (AP)</option>
											<option value="DLOC - II Database Manag. Sys." @if($sem6External->ext6 == 'DLOC - II Database Manag. Sys.') selected @endif >DLOC - II Database Manag. Sys. (DBMS)</option>
											<option value="DLOC - II Digital VLSI Design" @if($sem6External->ext6 == 'DLOC - II Digital VLSI Design') selected @endif >DLOC - II Digital VLSI Design</option>
											<option value="DLOC - II Radio Engg." @if($sem6External->ext6 == 'DLOC - II Radio Engg.') selected @endif >DLOC - II Radio Engg.</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Cloud Computing & Services" @if($sem6External->ext6 == 'Cloud Computing & Services') selected @endif >Cloud Computing & Services</option>
											<option value="Data Mining & Business Intelligence" @if($sem6External->ext6 == 'Data Mining & Business Intelligence') selected @endif >Data Mining & Business Intelligence (DMBI)</option>
											<option value="Software Engg. with Proj. Manag." @if($sem6External->ext6 == 'Software Engg. with Proj. Manag.') selected @endif >Software Engg. with Proj. Manag.</option>
											<option value="Wireless Network" @if($sem6External->ext6 == 'Wireless Network') selected @endif >Wireless Network (WN)</option>
											<option value="DLOC - II Advance Internet Prog." @if($sem6External->ext6 == 'DLOC - II Advance Internet Prog.') selected @endif >DLOC - II Advance Internet Prog. (AIP)</option>
											<option value="DLOC - II Digital Forensic" @if($sem6External->ext6 == 'DLOC - II Digital Forensic') selected @endif >DLOC - II Digital Forensic (DF)</option>
											<option value="DLOC - II Green IT" @if($sem6External->ext6 == 'DLOC - II Green IT') selected @endif >DLOC - II Green IT (GIT)</option>
											<option value="DLOC - II Multimedia System" @if($sem6External->ext6 == 'DLOC - II Multimedia System') selected @endif >DLOC - II Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Finite Element Analysis" @if($sem6External->ext6 == 'Finite Element Analysis') selected @endif >Finite Element Analysis (FEA)</option>
											<option value="Machine Design - 1" @if($sem6External->ext6 == 'Machine Design - 1') selected @endif >Machine Design - 1 (MD1)</option>
											<option value="Metrology & Quality Engg." @if($sem6External->ext6 == 'Metrology & Quality Engg.') selected @endif >Metrology & Quality Engg.</option>
											<option value="Refrigeration & Air Conditioning" @if($sem6External->ext6 == 'Refrigeration & Air Conditioning') selected @endif >Refrigeration & Air Conditioning (RAC)</option>
											<option value="DLOC - II Industrial Automation" @if($sem6External->ext6 == 'DLOC - II Industrial Automation') selected @endif >DLOC - II Industrial Automation (IA)</option>
											<option value="DLOC - II Mechatronics" @if($sem6External->ext6 == 'DLOC - II Mechatronics') selected @endif >DLOC - II Mechatronics</option>
											<option value="DLOC - II Robotics" @if($sem6External->ext6 == 'DLOC - II Robotics') selected @endif >DLOC - II Robotics</option>
										</optgroup>
									</select>
									@error('ext6')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext6mark">Subj 6 Mark :</label>
									<input type="text" name="ext6mark" id="ext6mark" class="form-control key" placeholder="Enter subject 6 mark" value="{{$sem6External->ext6mark}}">
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
											<option value="Chassis & Body Engg." @if($sem6External->ext7 == 'Chassis & Body Engg.') selected @endif >Chassis & Body Engg. (CBE)</option>
											<option value="Finite Element Analysis" @if($sem6External->ext7 == 'Finite Element Analysis') selected @endif >Finite Element Analysis (FEA)</option>
											<option value="Machine Design - 1" @if($sem6External->ext7 == 'Machine Design - 1') selected @endif >Machine Design - 1 (MD-1)</option>
											<option value="Mechanical Vibration" @if($sem6External->ext7 == 'Mechanical Vibration') selected @endif >Mechanical Vibration (MV)</option>
											<option value="DLOC - II Automotive Materials" @if($sem6External->ext7 == 'DLOC - II Automotive Materials') selected @endif >DLOC - II Automotive Materials (AM)</option>
											<option value="DLOC - II Mechatronics" @if($sem6External->ext7 == 'DLOC - II Mechatronics') selected @endif > DLOC - II Mechatronics</option>
											<option value="DLOC - II Robotics" @if($sem6External->ext7 == 'DLOC - II Robotics') selected @endif >DLOC - II Robotics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Cryptography & System Security" @if($sem6External->ext7 == 'Cryptography & System Security') selected @endif >Cryptography & System Security (CSS)</option>
											<option value="Data Warehouse & Mining" @if($sem6External->ext7 == 'Data Warehouse & Mining') selected @endif >Data Warehouse & Mining (DWM)</option>
											<option value="Software Engg." @if($sem6External->ext7 == 'Software Engg.') selected @endif >Software Engg. (SE)</option>
											<option value="System Prog. & Compiler Constr." @if($sem6External->ext7 == 'System Prog. & Compiler Constr.') selected @endif >System Prog. & Compiler Constr. (SPCC)</option>
											<option value="DLOC - I Advance Computer Network" @if($sem6External->ext7 == 'DLOC - I Advance Computer Network') selected @endif >DLOC - I Advance Computer Network (ACN)</option>
											<option value="DLOC - I Advance Database" @if($sem6External->ext7 == 'DLOC - I Advance Database') selected @endif > DLOC - I Advance Database (ADS)</option>
											<option value="DLOC - I Machine Learning" @if($sem6External->ext7 == 'DLOC - I Machine Learning') selected @endif > DLOC - I Machine Learning (ML)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Computer Comm. Network" @if($sem6External->ext7 == 'Computer Comm. Network') selected @endif >Computer Comm. Network</option>
											<option value="Embedded System & RTOS" @if($sem6External->ext7 == 'Embedded System & RTOS') selected @endif >Embedded System & RTOS</option>
											<option value="Signals & System" @if($sem6External->ext7 == 'Signals & System') selected @endif >Signals & System</option>
											<option value="VLSI Design" @if($sem6External->ext7 == 'VLSI Design') selected @endif >VLSI Design</option>
											<option value="DLOC - II Comp. Org. & Arch." @if($sem6External->ext7 == 'DLOC - II Comp. Org. & Arch.') selected @endif >DLOC - II Comp. Org. & Arch. (COA)</option>
											<option value="DLOC - II Electronics Product Design" @if($sem6External->ext7 == 'DLOC - II Electronics Product Design') selected @endif >DLOC - II Electronics Product Design</option>
											<option value="DLOC - II Microwave Engg." @if($sem6External->ext7 == 'DLOC - II Microwave Engg.') selected @endif >DLOC - II Microwave Engg.</option>
											<option value="DLOC - II Wireless Communication" @if($sem6External->ext7 == 'DLOC - II Wireless Communication') selected @endif >DLOC - II Wireless Communication</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Antenna & Radio wave Propg." @if($sem6External->ext7 == 'Antenna & Radio wave Propg.') selected @endif >Antenna & Radio wave Propg. (ARWP)</option>
											<option value="Comp. Comm. Network" @if($sem6External->ext7 == 'Comp. Comm. Network') selected @endif >Comp. Comm. Network (CCN)</option>
											<option value="Img. Proc. & Machine Vision Lab" @if($sem6External->ext7 == 'Img. Proc. & Machine Vision Lab') selected @endif >Img. Proc. & Machine Vision Lab</option>
											<option value="Microcontr. & Appl." @if($sem6External->ext7 == 'Microcontr. & Appl.') selected @endif >Microcontr. & Appl. (MA)</option>
											<option value="DLOC - II Audio Processing" @if($sem6External->ext7 == 'DLOC - II Audio Processing') selected @endif >DLOC - II Audio Processing (AP)</option>
											<option value="DLOC - II Database Manag. Sys." @if($sem6External->ext7 == 'DLOC - II Database Manag. Sys.') selected @endif >DLOC - II Database Manag. Sys. (DBMS)</option>
											<option value="DLOC - II Digital VLSI Design" @if($sem6External->ext7 == 'DLOC - II Digital VLSI Design') selected @endif >DLOC - II Digital VLSI Design</option>
											<option value="DLOC - II Radio Engg." @if($sem6External->ext7 == 'DLOC - II Radio Engg.') selected @endif >DLOC - II Radio Engg.</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Cloud Computing & Services" @if($sem6External->ext7 == 'Cloud Computing & Services') selected @endif >Cloud Computing & Services</option>
											<option value="Data Mining & Business Intelligence" @if($sem6External->ext7 == 'Data Mining & Business Intelligence') selected @endif >Data Mining & Business Intelligence (DMBI)</option>
											<option value="Software Engg. with Proj. Manag." @if($sem6External->ext7 == 'Software Engg. with Proj. Manag.') selected @endif >Software Engg. with Proj. Manag.</option>
											<option value="Wireless Network" @if($sem6External->ext7 == 'Wireless Network') selected @endif >Wireless Network (WN)</option>
											<option value="DLOC - II Advance Internet Prog." @if($sem6External->ext7 == 'DLOC - II Advance Internet Prog.') selected @endif >DLOC - II Advance Internet Prog. (AIP)</option>
											<option value="DLOC - II Digital Forensic" @if($sem6External->ext7 == 'DLOC - II Digital Forensic') selected @endif >DLOC - II Digital Forensic (DF)</option>
											<option value="DLOC - II Green IT" @if($sem6External->ext7 == 'DLOC - II Green IT') selected @endif >DLOC - II Green IT (GIT)</option>
											<option value="DLOC - II Multimedia System" @if($sem6External->ext7 == 'DLOC - II Multimedia System') selected @endif >DLOC - II Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Finite Element Analysis" @if($sem6External->ext7 == 'Finite Element Analysis') selected @endif >Finite Element Analysis (FEA)</option>
											<option value="Machine Design - 1" @if($sem6External->ext7 == 'Machine Design - 1') selected @endif >Machine Design - 1 (MD1)</option>
											<option value="Metrology & Quality Engg." @if($sem6External->ext7 == 'Metrology & Quality Engg.') selected @endif >Metrology & Quality Engg.</option>
											<option value="Refrigeration & Air Conditioning" @if($sem6External->ext7 == 'Refrigeration & Air Conditioning') selected @endif >Refrigeration & Air Conditioning (RAC)</option>
											<option value="DLOC - II Industrial Automation" @if($sem6External->ext7 == 'DLOC - II Industrial Automation') selected @endif >DLOC - II Industrial Automation (IA)</option>
											<option value="DLOC - II Mechatronics" @if($sem6External->ext7 == 'DLOC - II Mechatronics') selected @endif >DLOC - II Mechatronics</option>
											<option value="DLOC - II Robotics" @if($sem6External->ext7 == 'DLOC - II Robotics') selected @endif >DLOC - II Robotics</option>
										</optgroup>
									</select>
									@error('ext7')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext7mark">Subj 7 Mark :</label>
									<input type="text" name="ext7mark" id="ext7mark" class="form-control key" placeholder="Enter subject 7 mark" value="{{$sem6External->ext7mark}}">
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
											<option value="Chassis & Body Engg." @if($sem6External->ext8 == 'Chassis & Body Engg.') selected @endif >Chassis & Body Engg. (CBE)</option>
											<option value="Finite Element Analysis" @if($sem6External->ext8 == 'Finite Element Analysis') selected @endif >Finite Element Analysis (FEA)</option>
											<option value="Machine Design - 1" @if($sem6External->ext8 == 'Machine Design - 1') selected @endif >Machine Design - 1 (MD-1)</option>
											<option value="Mechanical Vibration" @if($sem6External->ext8 == 'Mechanical Vibration') selected @endif >Mechanical Vibration (MV)</option>
											<option value="DLOC - II Automotive Materials" @if($sem6External->ext8 == 'DLOC - II Automotive Materials') selected @endif >DLOC - II Automotive Materials (AM)</option>
											<option value="DLOC - II Mechatronics" @if($sem6External->ext8 == 'DLOC - II Mechatronics') selected @endif > DLOC - II Mechatronics</option>
											<option value="DLOC - II Robotics" @if($sem6External->ext8 == 'DLOC - II Robotics') selected @endif >DLOC - II Robotics</option>
										</optgroup>
										<optgroup label="Computer">
											<option value="Cryptography & System Security" @if($sem6External->ext8 == 'Cryptography & System Security') selected @endif >Cryptography & System Security (CSS)</option>
											<option value="Data Warehouse & Mining" @if($sem6External->ext8 == 'Data Warehouse & Mining') selected @endif >Data Warehouse & Mining (DWM)</option>
											<option value="Software Engg." @if($sem6External->ext8 == 'Software Engg.') selected @endif >Software Engg. (SE)</option>
											<option value="System Prog. & Compiler Constr." @if($sem6External->ext8 == 'System Prog. & Compiler Constr.') selected @endif >System Prog. & Compiler Constr. (SPCC)</option>
											<option value="DLOC - I Advance Computer Network" @if($sem6External->ext8 == 'DLOC - I Advance Computer Network') selected @endif >DLOC - I Advance Computer Network (ACN)</option>
											<option value="DLOC - I Advance Database" @if($sem6External->ext8 == 'DLOC - I Advance Database') selected @endif > DLOC - I Advance Database (ADS)</option>
											<option value="DLOC - I Machine Learning" @if($sem6External->ext8 == 'DLOC - I Machine Learning') selected @endif > DLOC - I Machine Learning (ML)</option>
										</optgroup>
										<optgroup label="Electronics">
											<option value="Computer Comm. Network" @if($sem6External->ext8 == 'Computer Comm. Network') selected @endif >Computer Comm. Network</option>
											<option value="Embedded System & RTOS" @if($sem6External->ext8 == 'Embedded System & RTOS') selected @endif >Embedded System & RTOS</option>
											<option value="Signals & System" @if($sem6External->ext8 == 'Signals & System') selected @endif >Signals & System</option>
											<option value="VLSI Design" @if($sem6External->ext8 == 'VLSI Design') selected @endif >VLSI Design</option>
											<option value="DLOC - II Comp. Org. & Arch." @if($sem6External->ext8 == 'DLOC - II Comp. Org. & Arch.') selected @endif >DLOC - II Comp. Org. & Arch. (COA)</option>
											<option value="DLOC - II Electronics Product Design" @if($sem6External->ext8 == 'DLOC - II Electronics Product Design') selected @endif >DLOC - II Electronics Product Design</option>
											<option value="DLOC - II Microwave Engg." @if($sem6External->ext8 == 'DLOC - II Microwave Engg.') selected @endif >DLOC - II Microwave Engg.</option>
											<option value="DLOC - II Wireless Communication" @if($sem6External->ext8 == 'DLOC - II Wireless Communication') selected @endif >DLOC - II Wireless Communication</option>
										</optgroup>
										<optgroup label="Electronics & Telecomm.">
											<option value="Antenna & Radio wave Propg." @if($sem6External->ext8 == 'Antenna & Radio wave Propg.') selected @endif >Antenna & Radio wave Propg. (ARWP)</option>
											<option value="Comp. Comm. Network" @if($sem6External->ext8 == 'Comp. Comm. Network') selected @endif >Comp. Comm. Network (CCN)</option>
											<option value="Img. Proc. & Machine Vision Lab" @if($sem6External->ext8 == 'Img. Proc. & Machine Vision Lab') selected @endif >Img. Proc. & Machine Vision Lab</option>
											<option value="Microcontr. & Appl." @if($sem6External->ext8 == 'Microcontr. & Appl.') selected @endif >Microcontr. & Appl. (MA)</option>
											<option value="DLOC - II Audio Processing" @if($sem6External->ext8 == 'DLOC - II Audio Processing') selected @endif >DLOC - II Audio Processing (AP)</option>
											<option value="DLOC - II Database Manag. Sys." @if($sem6External->ext8 == 'DLOC - II Database Manag. Sys.') selected @endif >DLOC - II Database Manag. Sys. (DBMS)</option>
											<option value="DLOC - II Digital VLSI Design" @if($sem6External->ext8 == 'DLOC - II Digital VLSI Design') selected @endif >DLOC - II Digital VLSI Design</option>
											<option value="DLOC - II Radio Engg." @if($sem6External->ext8 == 'DLOC - II Radio Engg.') selected @endif >DLOC - II Radio Engg.</option>
										</optgroup>
										<optgroup label="Information Technology">
											<option value="Cloud Computing & Services" @if($sem6External->ext8 == 'Cloud Computing & Services') selected @endif >Cloud Computing & Services</option>
											<option value="Data Mining & Business Intelligence" @if($sem6External->ext8 == 'Data Mining & Business Intelligence') selected @endif >Data Mining & Business Intelligence (DMBI)</option>
											<option value="Software Engg. with Proj. Manag." @if($sem6External->ext8 == 'Software Engg. with Proj. Manag.') selected @endif >Software Engg. with Proj. Manag.</option>
											<option value="Wireless Network" @if($sem6External->ext8 == 'Wireless Network') selected @endif >Wireless Network (WN)</option>
											<option value="DLOC - II Advance Internet Prog." @if($sem6External->ext8 == 'DLOC - II Advance Internet Prog.') selected @endif >DLOC - II Advance Internet Prog. (AIP)</option>
											<option value="DLOC - II Digital Forensic" @if($sem6External->ext8 == 'DLOC - II Digital Forensic') selected @endif >DLOC - II Digital Forensic (DF)</option>
											<option value="DLOC - II Green IT" @if($sem6External->ext8 == 'DLOC - II Green IT') selected @endif >DLOC - II Green IT (GIT)</option>
											<option value="DLOC - II Multimedia System" @if($sem6External->ext8 == 'DLOC - II Multimedia System') selected @endif >DLOC - II Multimedia System (MS)</option>
										</optgroup>
										<optgroup label="Mechanical">
											<option value="Finite Element Analysis" @if($sem6External->ext8 == 'Finite Element Analysis') selected @endif >Finite Element Analysis (FEA)</option>
											<option value="Machine Design - 1" @if($sem6External->ext8 == 'Machine Design - 1') selected @endif >Machine Design - 1 (MD1)</option>
											<option value="Metrology & Quality Engg." @if($sem6External->ext8 == 'Metrology & Quality Engg.') selected @endif >Metrology & Quality Engg.</option>
											<option value="Refrigeration & Air Conditioning" @if($sem6External->ext8 == 'Refrigeration & Air Conditioning') selected @endif >Refrigeration & Air Conditioning (RAC)</option>
											<option value="DLOC - II Industrial Automation" @if($sem6External->ext8 == 'DLOC - II Industrial Automation') selected @endif >DLOC - II Industrial Automation (IA)</option>
											<option value="DLOC - II Mechatronics" @if($sem6External->ext8 == 'DLOC - II Mechatronics') selected @endif >DLOC - II Mechatronics</option>
											<option value="DLOC - II Robotics" @if($sem6External->ext8 == 'DLOC - II Robotics') selected @endif >DLOC - II Robotics</option>
										</optgroup>
									</select>
									@error('ext8')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-6 form-group">
									<label for="ext8mark">Subj 8 Mark :</label>
									<input type="text" name="ext8mark" id="ext8mark" class="form-control key" placeholder="Enter subject 8 mark" value="{{$sem6External->ext8mark}}">
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
								<option value="400"@if($sem6External->outOf == '400') selected @endif>05</option>
								<option value="480"@if($sem6External->outOf == '480') selected @endif>06</option>
								<option value="560"@if($sem6External->outOf == '560') selected @endif>07</option>
								<option value="640"@if($sem6External->outOf == '640') selected @endif>08</option>
							</select>
							@error('outOfExt')
								<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
						<div class="col-md-3">
							<select class="custom-select" name="remarkExt">
								<option value="">-- Remark --</option>
								<option value="Fail"@if($sem6External->remark == 'Fail') selected @endif>Fail</option>
								<option value="Pass"@if($sem6External->remark == 'Pass') selected @endif>Pass</option>
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