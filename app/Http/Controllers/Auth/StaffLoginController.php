<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class StaffLoginController extends Controller
{
    public function __construct(){
		$this->middleware('guest:staff', ['except' => ['logout']]);
	}
	public function showLoginForm(){
		return view('auth.staffLogin');
	}
	public function login(Request $request){
		$this->validate($request, [
			'email' => 'required',
			'password' => 'required|min:10',
		],[
			'email.required' => 'Please provide Email address',
			'password.required' => 'Please mention Password',
			'password.max' => 'Password must be atleast 10 Characters',
		]);
		
		if(Auth::guard('staff')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
			return redirect()->intended(route('staff.index'));
		}
			return redirect()->back()->withInput($request->only('email', 'remember'));
	}
	public function logout(){
		Auth::guard('staff')->logout();
		return redirect('/staff/login');
	}
}