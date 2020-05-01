<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Company;
use Hash;
use Auth;

class CompanyLoginController extends Controller
{
    public function __construct(){
		$this->middleware('guest:company', ['except' => ['logout']]);
	}
	public function showLoginForm(){
		return view('auth.companyLogin');
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
		
		if(Auth::guard('company')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
			return redirect()->intended(route('company.index'));
		}
			return redirect()->back()->withInput($request->only('email', 'remember'));
	}
	public function showRegisterForm(){
		return view('auth.companyRegister');
	}
	public function store(Request $request){
		$this->validate($request, [
			'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'max:10', 'confirmed'],
		],[
			'name.required' => 'Please provide Name',
			'email.required' => 'Please provide E-Mail address',
			'email.unique' => 'These E-Mail address is already in use',
			'password.required' => 'Please provide Password',
			'password.max' => 'Password must be 10 Characters',
		]);
		
		$company = new Company;
		$company -> name = $request->get('name');
		$company -> email = $request->get('email');
		$company -> password = Hash::make($request->get('password'));
		$company -> save();
		return redirect('/company/login');
		
	}
	public function logout(){
		Auth::guard('company')->logout();
		return redirect('/company/login');
	}
}
