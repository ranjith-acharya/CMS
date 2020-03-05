<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class ResultsController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
	public function show($id){
		$student = Student::find($id);
		return view('result.index', compact('student', 'id'));
	}
}
