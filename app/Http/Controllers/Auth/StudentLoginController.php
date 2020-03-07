<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class StudentLoginController extends Controller
{
    public function __construct(){
		$this->middleware('guest:student');
	}
	
	public function showLoginForm(){
		return view('auth.studentLogin');
	}
	
	public function login(Request $request){
		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required|min:8',
		]);
		if(Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
			return redirect()->intended(route('student.index'));
		}
			return redirect()->back()->withInput($request->only('email', 'remember'));
	}
}
