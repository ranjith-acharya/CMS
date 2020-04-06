<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Student;

class StudentAdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$students = Student::all();
        return view('student.studentAdminIndex', compact('students'));
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
			'admissionNo' => 'required',
			'firstName' => 'required',
			'lastName' => 'required',
			'email' => 'required',
			'contact1' => 'required|max:10',
			'contact2' => 'required|max:10',
			'gender' => 'required',
			'birth' => 'required',
			'branch' => 'required',
			'year' => 'required',
			'address' => 'required',
			'avatar' => 'required',
		],
		[
			'admissionNo.required' => 'Please provide Admission no.',
			'firstName.required' => 'Please provide First name',
			'lastName.required' => 'Please provide Last name',
			'email.required' => 'Please provide Email address',
			'contact1.required' => 'Please provide Primary contact',
			'contact2.required' => 'Please provide Another contact',
			'contact1.max' => 'Primary contact should be 10 Characters',
			'contact2.max' => 'Another contact should be 10 Characters',
			'gender.required' => 'Please select a Gender',
			'birth.required' => 'Please select Birthdate',
			'branch.required' => 'Please select Branch',
			'year.required' => 'Please select Year',
			'address.required' => 'Please provide Address',
			'avatar.required' => 'Select an Image for Student',
		]);
		
		$student = new Student;
		$student -> admissionNo = $request->get('admissionNo');
		$student -> firstName = $request->get('firstName');
		$student -> lastName = $request->get('lastName');
		$student -> email = $request->get('email');
		$student -> password = Hash::make($request->get('admissionNo'));
		$student -> contact1 = $request->get('contact1');
		$student -> contact2 = $request->get('contact2');
		$student -> gender = $request->get('gender');
		$student -> birth = $request->get('birth');
		$student -> branch = $request->get('branch');
		$student -> year = $request->get('year');
		$student -> address = $request->get('address');
		if($request->hasfile('avatar')){
            $file = $request->file('avatar');
            $name = time().'.'.$file->getClientOriginalExtension();
            $file -> move(public_path().'/img/student/', $name);
            $student -> avatar = $name;
        }
		$student -> save();
		return redirect()->back()->with('success', 'New Student record added.!!');
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
