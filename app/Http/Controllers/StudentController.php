<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Student;

class StudentController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'firstName' => 'required',
			'fatherName' => 'required',
			'motherName' => 'required',
			'lastName' => 'required',
			'admissionNo' => 'required',
			'email' => 'required',
			'password' => 'required',
			'address' => 'required',
			'contact1' => 'required',
			'contact2' => 'required',
			'birth' => 'required',
			'gender' => 'required',
			'branch' => 'required',
			'year' => 'required',
			'avatar' => 'required',
		]);
		$student = new Student;
		$student -> firstName = $request->get('firstName');
		$student -> fatherName = $request->get('fatherName');
		$student -> motherName = $request->get('motherName');
		$student -> lastName = $request->get('lastName');
		$student -> admissionNo = $request->get('admissionNo');
		$student -> email = $request->get('email');
		$student -> password = Hash::make($request->get('password'));
		$student -> address = $request->get('address');
		$student -> contact1 = $request->get('contact1');
		$student -> contact2 = $request->get('contact2');
		$student -> birth = $request->get('birth');
		$student -> gender = $request->get('gender');
		$student -> branch = $request->get('branch');
		$student -> year = $request->get('year');
		if($request->hasfile('avatar')){
            $file = $request->file('avatar');
            $name = time().'.'.$file->getClientOriginalExtension();
            $file -> move(public_path().'/img/avatar/student/', $name);
            $student -> avatar = $name;
        }
		$student -> save();
		return redirect('home')->with('success', 'Student Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
