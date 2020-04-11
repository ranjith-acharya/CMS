<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class StudentLoginController extends Controller
{
    public function __construct(){
		$this->middleware('guest:student', ['except' => ['logout']]);
	}
	public function showLoginForm(){
		return view('auth.studentLogin');
	}
	public function login(Request $request){
		$this->validate($request, [
			'email' => 'required',
			'password' => 'required|max:10',
		],[
			'email.required' => 'Please provide Email address',
			'password.required' => 'Please mention Password',
			'password.max' => 'Password must be 10 Characters',
		]);
		
		if(Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
			return redirect()->intended(route('student.index'));
		}
			return redirect()->back()->withInput($request->only('email', 'remember'));
	}
	public function logout(){
		Auth::guard('student')->logout();
		return redirect('/student/login');
	}
}