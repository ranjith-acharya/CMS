<?php

namespace App\Http\Controllers\Sem4;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class StudentAdminSem4Controller extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
	public function index($id){
		$student = Student::find($id);
		return view('result.sem4.studentAdminSem4Index', compact('student', 'id'));
	}
}
