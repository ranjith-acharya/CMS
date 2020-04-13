<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentResultController extends Controller
{
    public function __construct(){
        $this->middleware('auth:student');
    }
	public function studentResult($id){
		$student = Student::find($id);
		return view('result.studentResultIndex', compact('student', 'id'));
	}
}
