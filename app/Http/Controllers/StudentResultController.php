<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Student;
use App\Sem1Internal;
use App\Sem1External;

class StudentResultController extends Controller
{
    public function __construct(){
		$this->middleware('auth:student');
	}
	public function index($id){
		$student = Student::find($id);
		return view('student.studentResult', compact('student', 'id'));
	}
	public function sem1(){
		$sem1Internal = Sem1Internal::where('studentId', Auth::user()->id)->get();
		$sem1External = Sem1External::where('studentId', Auth::user()->id)->get();
		// $userProducts = Order::where('user_id', Auth::user()->id)->get();
		return view('student.studentSem1', compact('sem1Internal', 'sem1External'));
	}
}
