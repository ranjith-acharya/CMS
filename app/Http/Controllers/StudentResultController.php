<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Student;
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
	public function sem2(){
		$sem2Internal = Sem2Internal::where('studentId', Auth::user()->id)->get();
		$sem2External = Sem2External::where('studentId', Auth::user()->id)->get();
		// $userProducts = Order::where('user_id', Auth::user()->id)->get();
		return view('student.studentSem2', compact('sem2Internal', 'sem2External'));
	}
	public function sem3(){
		$sem3Internal = Sem3Internal::where('studentId', Auth::user()->id)->get();
		$sem3External = Sem3External::where('studentId', Auth::user()->id)->get();
		// $userProducts = Order::where('user_id', Auth::user()->id)->get();
		return view('student.studentSem3', compact('sem3Internal', 'sem3External'));
	}
	public function sem4(){
		$sem4Internal = Sem4Internal::where('studentId', Auth::user()->id)->get();
		$sem4External = Sem4External::where('studentId', Auth::user()->id)->get();
		// $userProducts = Order::where('user_id', Auth::user()->id)->get();
		return view('student.studentSem4', compact('sem4Internal', 'sem4External'));
	}
	public function sem5(){
		$sem5Internal = Sem5Internal::where('studentId', Auth::user()->id)->get();
		$sem5External = Sem5External::where('studentId', Auth::user()->id)->get();
		// $userProducts = Order::where('user_id', Auth::user()->id)->get();
		return view('student.studentSem5', compact('sem5Internal', 'sem5External'));
	}
	public function sem6(){
		$sem6Internal = Sem6Internal::where('studentId', Auth::user()->id)->get();
		$sem6External = Sem6External::where('studentId', Auth::user()->id)->get();
		// $userProducts = Order::where('user_id', Auth::user()->id)->get();
		return view('student.studentSem6', compact('sem6Internal', 'sem6External'));
	}
	public function sem7(){
		$sem7Internal = Sem7Internal::where('studentId', Auth::user()->id)->get();
		$sem7External = Sem7External::where('studentId', Auth::user()->id)->get();
		// $userProducts = Order::where('user_id', Auth::user()->id)->get();
		return view('student.studentSem7', compact('sem7Internal', 'sem7External'));
	}
	public function sem8(){
		$sem8Internal = Sem8Internal::where('studentId', Auth::user()->id)->get();
		$sem8External = Sem8External::where('studentId', Auth::user()->id)->get();
		// $userProducts = Order::where('user_id', Auth::user()->id)->get();
		return view('student.studentSem8', compact('sem8Internal', 'sem8External'));
	}
}
