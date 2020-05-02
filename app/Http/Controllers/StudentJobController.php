<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Job;

class StudentJobController extends Controller
{
    public function __construct(){
		$this->middleware('auth:student');
	}
	public function index(){
		$jobs = Job::all();
		return view('student.studentJob', compact('jobs'));
	}
}
