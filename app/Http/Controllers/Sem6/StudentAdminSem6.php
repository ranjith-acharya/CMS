<?php

namespace App\Http\Controllers\Sem6;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class StudentAdminSem6 extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
	public function sem6Index($id){
		$student = Student::find($id);
		return view('result.sem6.studentAdminSem6Index', compact('student', 'id'));
	}
}
