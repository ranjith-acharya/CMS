<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Staff;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
		$studentsCount = Student::count();
		$staffsCount = Staff::count();
        return view('home', compact('studentsCount', 'staffsCount'));
    }
	public function studentIndex(){
		$studentsCount = Student::count();
		$students = Student::all();
		return view('studentIndex', compact('studentsCount', 'students'));
	}
	public function staffIndex(){
		$staffsCount = Staff::count();
		$staffs = Staff::all();
		return view('staffIndex', compact('staffsCount', 'staffs'));
	}
}
