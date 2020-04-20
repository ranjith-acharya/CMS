<?php

namespace App\Http\Controllers\Sem1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class StudentAdminSem1Controller extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
	public function index($id){
		$student = Student::find($id);
		return view('result.sem1.studentAdminSem1Index', compact('student', 'id'));
	}
}
