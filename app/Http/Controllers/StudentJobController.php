<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Student;
use App\Job;
use App\Sem1Internal;
use App\Sem1External;
use App\Sem2Internal;
use App\Sem2External;
use App\Sem3Internal;
use App\Sem3External;
use App\Sem4Internal;
use App\Sem4External;
use App\Sem5Internal;
use App\Sem5External;
use App\Sem6Internal;
use App\Sem6External;
use App\Sem7Internal;
use App\Sem7External;
use App\Sem8Internal;
use App\Sem8External;
class StudentJobController extends Controller
{
    public function __construct(){
		$this->middleware('auth:student');
	}
	public function index(){
		$jobs = Job::all();
		return view('student.studentJob', compact('jobs'));
	}
	public function show($id){
		$sem1Internal = Sem1Internal::where('studentId', Auth::user()->id)->get();
		$sem1External = Sem1External::where('studentId', Auth::user()->id)->get();
		
		$sem2Internal = Sem2Internal::where('studentId', Auth::user()->id)->get();
		$sem2External = Sem2External::where('studentId', Auth::user()->id)->get();
		
		$sem3Internal = Sem3Internal::where('studentId', Auth::user()->id)->get();
		$sem3External = Sem3External::where('studentId', Auth::user()->id)->get();
		
		$sem4Internal = Sem4Internal::where('studentId', Auth::user()->id)->get();
		$sem4External = Sem4External::where('studentId', Auth::user()->id)->get();
		
		$sem5Internal = Sem5Internal::where('studentId', Auth::user()->id)->get();
		$sem5External = Sem5External::where('studentId', Auth::user()->id)->get();
		
		$sem6Internal = Sem6Internal::where('studentId', Auth::user()->id)->get();
		$sem6External = Sem6External::where('studentId', Auth::user()->id)->get();
		
		$sem7Internal = Sem7Internal::where('studentId', Auth::user()->id)->get();
		$sem7External = Sem7External::where('studentId', Auth::user()->id)->get();
		
		$sem8Internal = Sem8Internal::where('studentId', Auth::user()->id)->get();
		$sem8External = Sem8External::where('studentId', Auth::user()->id)->get();
		
		$job = Job::find($id);
		return view('student.studentJobShow', compact('job', 'id', 'sem1Internal', 'sem1External', 'sem2Internal', 'sem2External', 'sem3Internal', 'sem3External', 'sem4Internal', 'sem4External', 'sem5Internal', 'sem5External', 'sem6Internal', 'sem6External', 'sem7Internal', 'sem7External', 'sem8Internal', 'sem8External'));
	}
}
