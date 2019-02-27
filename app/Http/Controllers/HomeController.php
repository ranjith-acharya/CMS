<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function index()
    {
        $studentsCount = Student::count();
        $staffsCount = Staff::count();
        return view('home',compact('studentsCount', 'staffsCount'));
    }
}
