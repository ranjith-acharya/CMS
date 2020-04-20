<?php

namespace App\Http\Controllers\Sem5;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class StudentAdminSem5Controller extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
	public function index($id){
		$student = Student::find($id);
		return view('result.sem5.studentAdminSem5Index', compact('student', 'id'));
	}
}
