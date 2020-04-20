<?php

namespace App\Http\Controllers\Sem2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class StudentAdminSem2Controller extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
	public function index($id){
		$student = Student::find($id);
		return view('result.sem2.studentAdminSem2Index', compact('student', 'id'));
	}
}
