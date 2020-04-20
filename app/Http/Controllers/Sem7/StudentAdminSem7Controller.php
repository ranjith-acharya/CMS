<?php

namespace App\Http\Controllers\Sem7;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class StudentAdminSem7Controller extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
	public function index($id){
		$student = Student::find($id);
		return view('result.sem7.studentAdminSem7Index', compact('student', 'id'));
	}
}
