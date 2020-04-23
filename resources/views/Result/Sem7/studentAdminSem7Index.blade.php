@extends('layouts.custom-app')

@section('custom-title') Sem7 Result - {{$student->admissionNo}} @endsection

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
				<h5 class="mt-2">Sem7 - {{$student->admissionNo}}</h5>
				<div class="dropdown mt-1">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle float-right" data-toggle="dropdown">Actions</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{route('students.show', $student->id)}}">View</a>
						<a class="dropdown-item" href="{{route('results.index', $student->id)}}">Results Index</a>
					</div>
				</div>
				
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
						<a class="nav-link active" data-toggle="tab" href="#sem7Int">Internal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#sem7Ext">External</a>
					</li>
				</ul>
				<div class="tab tab-content justify-content-center">
					<div class="tab-pane active mt-4" id="sem7Int">
						<h5 class="mb-4">Sem 7 Internal {{$student->branch}}</h5>
						<form method="post" class="form" action="{{action('Sem7\StudentAdminSem7Int@store', $student->id)}}">
							@csrf<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="int1">Subj 1 :</label>
											<select name="int1" class="custom-select form-control">
												<option value="">-- Select Internal Subj. --</option>
												<optgroup label="Automobile">
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
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
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
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
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
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
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
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
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
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
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
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
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
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
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
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
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="int9">Subj 9 :</label>
											<select name="int9" class="custom-select form-control">
												<option value="">-- Select Internal Subj. --</option>
												<optgroup label="Automobile">
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
												</optgroup>
											</select>
											@error('int9')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int9mark">Subj 9 Mark :</label>
											<input type="text" name="int9mark" id="int9mark" class="form-control key" placeholder="Enter subject 9 mark">
											@error('int9mark')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="int10">Subj 10 :</label>
											<select name="int10" class="custom-select form-control">
												<option value="">-- Select Internal Subj. --</option>
												<optgroup label="Automobile">
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
												</optgroup>
											</select>
											@error('int10')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int10mark">Subj 10 Mark :</label>
											<input type="text" name="int10mark" id="int10mark" class="form-control key" placeholder="Enter subject 10 mark">
											@error('int10mark')
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
											<label for="int11">Subj 11 :</label>
											<select name="int11" class="custom-select form-control">
												<option value="">-- Select Internal Subj. --</option>
												<optgroup label="Automobile">
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
												</optgroup>
											</select>
											@error('int11')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="int11mark">Subj 11 Mark :</label>
											<input type="text" name="int11mark" id="int11mark" class="form-control key" placeholder="Enter subject 11 mark">
											@error('int11mark')
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
										<option value="140">07</option>
										<option value="160">08</option>
										<option value="180">09</option>
										<option value="200">10</option>
										<option value="220">11</option>
									</select>
									@error('outOfInt')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-3">
									<select class="custom-select" name="remarkInt">
										<option value="">-- Remark --</option>
										<option value="Fail">Fail</option>
										<option value="Pass">Pass</option>
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
					<div class="tab-pane fade mt-4" id="sem7Ext">
						<h5 class="mb-4">Sem 7 External {{$student->branch}}</h5>
						<form method="post" class="form" action="{{action('Sem7\StudentAdminSem7Ext@store', $student->id)}}">
							@csrf<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="ext1">Subj 1 :</label>
											<select name="ext1" class="custom-select form-control">
												<option value="">-- Select External Subj. --</option>
												<optgroup label="Automobile">
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
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
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
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
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
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
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
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
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
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
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
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
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
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
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
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
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="ext9">Subj 9 :</label>
											<select name="ext9" class="custom-select form-control">
												<option value="">-- Select External Subj. --</option>
												<optgroup label="Automobile">
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
												</optgroup>
											</select>
											@error('ext9')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="ext9mark">Subj 9 Mark :</label>
											<input type="text" name="ext9mark" id="ext9mark" class="form-control key" placeholder="Enter subject 9 mark">
											@error('ext9mark')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="ext10">Subj 10 :</label>
											<select name="ext10" class="custom-select form-control">
												<option value="">-- Select External Subj. --</option>
												<optgroup label="Automobile">
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
												</optgroup>
											</select>
											@error('ext10')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="ext10mark">Subj 10 Mark :</label>
											<input type="text" name="ext10mark" id="ext10mark" class="form-control key" placeholder="Enter subject 10 mark">
											@error('ext10mark')
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
											<label for="ext11">Subj 11 :</label>
											<select name="ext11" class="custom-select form-control">
												<option value="">-- Select External Subj. --</option>
												<optgroup label="Automobile">
													<option value="Automotive Design">Automotive Design (AD)</option>
													<option value="Autotronics">Autotronics</option>
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Manag. Information System">Manag. Information System (MIS)</option>
													<option value="Operational Research">Operational Research (OR)</option>
													<option value="DLOC - III Automotive Embedded System">DLOC - III Automotive Embedded System (AES)</option>
												</optgroup>
												<optgroup label="Computer">
													<option value="Artificial Intelligence & Soft Computing">Artificial Intelligence & Soft Computing</option>
													<option value="Digital Signal & Image Processing">Digital Signal & Image Processing</option>
													<option value="Mobile Comm. & Computing">Mobile Comm. & Computing</option>
													<option value="DLOC - I Big Data & Analysis">DLOC - I Big Data & Analysis (BDA)</option>
													<option value="ILOC - I Management Information System">ILOC - I Management Information System (MIS)</option>
												</optgroup>
												<optgroup label="Electronics">
													<option value="Digital Signal Processing">Digital Signal Processing (DSP)</option>
													<option value="Instrumentation System Design">Instrumentation System Design (ISD)</option>
													<option value="Power Electronics">Power Electronics (PE)</option>
													<option value="DLOC - III Adv. Networking Technologies">DLOC - III Adv. Networking Technologies (ANT)</option>
													<option value="DLOC - III Integrated Circuit Technology">DLOC - III Integrated Circuit Technology (ICT)</option>
													<option value="ILOC - III Design of Experiments">ILOC - III Design of Experiments (DE)</option>
												</optgroup>
												<optgroup label="Electronics & Telecomm.">
													<option value="Microwave Engineering">Microwave Engineering (ME)</option>
													<option value="Mobile Comm. System">Mobile Comm. System (MCS)</option>
													<option value="Optical Communication">Optical Communication (OC)</option>
													<option value="DLOC - III Embedded System">DLOC - III Embedded System (ES)</option>
													<option value="DLOC - III Internet Comm. Engg.">DLOC - III Internet Comm. Engg. (ICE)</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - III Cyber Security & Laws</option>
												</optgroup>
												<optgroup label="Information Technology">
													<option value="Artificial Intelligence">Artificial Intelligence (AI)</option>
													<option value="Cyber Security Laws">Cyber Security Laws (CSL)</option>
													<option value="Enterprise Network Design">Enterprise Network Design (END)</option>
													<option value="Infrastructure Security">Infrastructure Security (IS)</option>
													<option value="Management Information System">Management Information System (MIS)</option>
													<option value="DLOC - III Mobile Application Development">DLOC - III Mobile Application Development (MAD)</option>
													<option value="DLOC - III Software Testing & Quality Assurance">DLOC - III Software Testing & Quality Assurance (STQA)</option>
												</optgroup>
												<optgroup label="Mechanical">
													<option value="CAD/CAM/CAE">CAD/CAM/CAE</option>
													<option value="Machine Design - 2">Machine Design - 2 (MD2)</option>
													<option value="Production Planning & Control">Production Planning & Control</option>
													<option value="DLOC - III Automobile Engg.">DLOC - III Automobile Engg.</option>
													<option value="DLOC - III Mechanical Vibration">DLOC - III Mechanical Vibration (MV)</option>
													<option value="DLOC - III Pumps, Compressor & Fans">DLOC - III Pumps, Compressor & Fans</option>
													<option value="ILOC - I Cyber Security & Laws">ILOC - I Cyber Security & Laws</option>
													<option value="ILOC - I Disaster Manag. & Mitigat. Meas.">ILOC - I Disaster Manag. & Mitigat. Meas.</option>
													<option value="ILOC - I Energy Audit & Management">ILOC - I Energy Audit & Management</option>
													<option value="ILOC - I Operational Research">ILOC - I Operational Research</option>
													<option value="ILOC - I Product Lifecycle Management">ILOC - I Product Lifecycle Management</option>
												</optgroup>
											</select>
											@error('ext11')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-md-6 form-group">
											<label for="ext11mark">Subj 11 Mark :</label>
											<input type="text" name="ext11mark" id="ext11mark" class="form-control key" placeholder="Enter subject 11 mark">
											@error('ext11mark')
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
										<option value="720">09</option>
										<option value="800">10</option>
										<option value="880">11</option>
									</select>
									@error('outOfExt')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-md-3">
									<select class="custom-select" name="remarkExt">
										<option value="">-- Remark --</option>
										<option value="Fail">Fail</option>
										<option value="Pass">Pass</option>
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
		var $int10mark = ($.trim($("#int10mark").val()) != "" && !isNaN($("#int10mark").val())) ? parseInt($("#int10mark").val()) : 0;
		var $int11mark = ($.trim($("#int11mark").val()) != "" && !isNaN($("#int11mark").val())) ? parseInt($("#int11mark").val()) : 0;
		$total = $int1mark + $int2mark + $int3mark + $int4mark + $int5mark + $int6mark + $int7mark + $int8mark + $int9mark + $int10mark + $int11mark;
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
		var $ext10mark = ($.trim($("#ext10mark").val()) != "" && !isNaN($("#ext10mark").val())) ? parseInt($("#ext10mark").val()) : 0;
		var $ext11mark = ($.trim($("#ext11mark").val()) != "" && !isNaN($("#ext11mark").val())) ? parseInt($("#ext11mark").val()) : 0;
		$total = $ext1mark + $ext2mark + $ext3mark + $ext4mark + $ext5mark + $ext6mark + $ext7mark + $ext8mark + $ext9mark + $ext10mark + $ext11mark;
		$("#totalExtMark").val($total);
	}
	$(".key").keyup(function(){
		extCalc();
	});
	
});
</script>
@endsection