<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Sem1Internal;

class StudentAdminResultController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
	public function index($id){
		$student = Student::find($id);
		return view('result.studentAdminResultIndex',  compact('student', 'id'));
	}
	public function sem1Int(){
		$sem1Ints = Sem1Internal::all();
		return view('result.sem1.studentAdminSem1IntIndex', compact('sem1Ints'));
	}
}
