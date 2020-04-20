<?php

namespace App\Http\Controllers\Sem8;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class StudentAdminSem8Controller extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
	public function index($id){
		$student = Student::find($id);
		return view('result.sem8.studentAdminSem8Index', compact('student', 'id'));
	}
}
