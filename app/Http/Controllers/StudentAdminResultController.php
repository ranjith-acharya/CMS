<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Sem1Internal;
use App\Sem1External;
use App\Sem2Internal;
use App\Sem2External;
use App\Sem3Internal;
use App\Sem3External;
use App\Sem4Internal;
use App\Sem4External;
use App\Sem5Internal;
use App\Sem5External;
use App\Sem6Internal;
use App\Sem6External;
use App\Sem7Internal;
use App\Sem7External;
use App\Sem8Internal;
use App\Sem8External;

class StudentAdminResultController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
	public function index($id){
		$student = Student::find($id);
		return view('result.studentAdminResultIndex',  compact('student', 'id'));
	}
	public function sem1Int(){
		$sem1Ints = Sem1Internal::all();
		return view('result.sem1.studentAdminSem1IntIndex', compact('sem1Ints'));
	}
	public function sem1Ext(){
		$sem1Exts = Sem1External::all();
		return view('result.sem1.studentAdminSem1ExtIndex', compact('sem1Exts'));
	}
	public function sem2Int(){
		$sem2Ints = Sem2Internal::all();
		return view('result.sem2.studentAdminSem2IntIndex', compact('sem2Ints'));
	}
	public function sem2Ext(){
		$sem2Exts = Sem2External::all();
		return view('result.sem2.studentAdminSem2ExtIndex', compact('sem2Exts'));
	}
	public function sem3Int(){
		$sem3Ints = Sem3Internal::all();
		return view('result.sem3.studentAdminSem3IntIndex', compact('sem3Ints'));
	}
	public function sem3Ext(){
		$sem3Exts = Sem3External::all();
		return view('result.sem3.studentAdminSem3ExtIndex', compact('sem3Exts'));
	}
	public function sem4Int(){
		$sem4Ints = Sem4Internal::all();
		return view('result.sem4.studentAdminSem4IntIndex', compact('sem4Ints'));
	}
	public function sem4Ext(){
		$sem4Exts = Sem4External::all();
		return view('result.sem4.studentAdminSem4ExtIndex', compact('sem4Exts'));
	}
	public function sem5Int(){
		$sem5Ints = Sem5Internal::all();
		return view('result.sem5.studentAdminSem5IntIndex', compact('sem5Ints'));
	}
	public function sem5Ext(){
		$sem5Exts = Sem5External::all();
		return view('result.sem5.studentAdminSem5ExtIndex', compact('sem5Exts'));
	}
	public function sem6Int(){
		$sem6Ints = Sem6Internal::all();
		return view('result.sem6.studentAdminSem6IntIndex', compact('sem6Ints'));
	}
	public function sem6Ext(){
		$sem6Exts = Sem6External::all();
		return view('result.sem6.studentAdminSem6ExtIndex', compact('sem6Exts'));
	}
	public function sem7Int(){
		$sem7Ints = Sem7Internal::all();
		return view('result.sem7.studentAdminSem7IntIndex', compact('sem7Ints'));
	}
	public function sem7Ext(){
		$sem7Exts = Sem7External::all();
		return view('result.sem7.studentAdminSem7ExtIndex', compact('sem7Exts'));
	}
	public function sem8Int(){
		$sem8Ints = Sem8Internal::all();
		return view('result.sem8.studentAdminSem8IntIndex', compact('sem8Ints'));
	}
	public function sem8Ext(){
		$sem8Exts = Sem8External::all();
		return view('result.sem8.studentAdminSem8ExtIndex', compact('sem8Exts'));
	}
}
