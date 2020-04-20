<?php

namespace App\Http\Controllers\Sem3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class StudentAdminSem3Controller extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
	public function index($id){
		$student = Student::find($id);
		return view('result.sem3.studentAdminSem3Index', compact('student', 'id'));
	}
}
