<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentAdminResultController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
	public function index($id){
		$student = Student::find($id);
		return view('result.studentAdminResultIndex', compact('student', 'id'));
	}
}
