<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Student;
use Auth;

class StudentController extends Controller
{
	public function __construct(){
		$this->middleware('auth:student');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.studentHome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
		$student = Student::find($id);
        return view('student.studentEdit', compact('student', 'id'));
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
        $this->validate($request, [
			'firstName' => 'required',
			'lastName' => 'required',
			'contact1' => 'required|max:10',
			'contact2' => 'required|max:10',
			'year' => 'required',
			'branch' => 'required',
			'address' => 'required',
		], [
			'firstName.required' => 'Please provide First name',
			'lastName.required' => 'Please provide Last name',
			'contact1.required' => 'Please provide Primary contact',
			'contact2.required' => 'Please provide Another contact',
			'contact1.max' => 'Primary contact should be 10 Characters',
			'contact2.max' => 'Another contact should be 10 Characters',
			'year.required' => 'Please select Year',
			'branch.required' => 'Please select Branch',
			'address.required' => 'Please provide Address',
		]);
		
		$student = Student::find($id);
		$student -> firstName = $request->get('firstName');
		$student -> lastName = $request->get('lastName');
		$student -> contact1 = $request->get('contact1');
		$student -> contact2 = $request->get('contact2');
		$student -> year = $request->get('year');
		$student -> branch = $request->get('branch');
		$student -> address = $request->get('address');
		if($request->hasfile('avatar')){
            $file = $request->file('avatar');
            $name = time().'.'.$file->getClientOriginalExtension();
            $file -> move(public_path().'/img/student/', $name);
            $student -> avatar = $name;
        }
		$student -> save();
		return redirect()->route('student.index')->with('success', 'Student record updated.!!');
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
	public function markRead(){
		Auth::user()->unreadNotifications->markAsRead();
		return redirect()->back();
	}
}
