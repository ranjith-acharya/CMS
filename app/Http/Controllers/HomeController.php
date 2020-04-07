<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;

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
		$studentCount = Student::count();
        return view('home', compact('studentCount'));
    }
	public function show($id){
		$user = User::find($id);
		return view('show', compact('user', 'id'));
	}
	public function edit($id){
		$user = User::find($id);
		return view('edit', compact('user', 'id'));
	}
	public function update(Request $request, $id){
		$this->validate($request, [
			'name' => 'required',
		],[
			'name.required' => 'Please provide a Name',
		]);
		$user = User::find($id);
		$user -> name = $request->get('name');
		if($request->hasfile('avatar')){
			$file = $request->file('avatar');
			$name = time().'.'.$file->getClientOriginalExtension();
			$file -> move(public_path().'/img/', $name);
			$user -> avatar = $name;
		}
		$user -> save();
		return redirect()->route('home.show', $id);
	}
}
