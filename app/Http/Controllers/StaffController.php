<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Carbon\Carbon;
use App\Staff;

class StaffController extends Controller
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
        return view('staff.create');
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
			'email' => 'required',
			'password' => 'required',
			'address' => 'required',
			'contact1' => 'required',
			'contact2' => 'required',
			'birth' => 'required',
			'gender' => 'required',
			'subject' => 'required',
			'branch' => 'required',
			'avatar' => 'required',
		]);
		$staff = new Staff;
		$staff -> firstName = $request->get('firstName');
		$staff -> fatherName = $request->get('fatherName');
		$staff -> motherName = $request->get('motherName');
		$staff -> lastName = $request->get('lastName');
		$staff -> email = $request->get('email');
		$staff -> password = Hash::make($request->get('password'));
		$staff -> address = $request->get('address');
		$staff -> contact1 = $request->get('contact1');
		$staff -> contact2 = $request->get('contact2');
		$birth = Carbon::parse($request->get('birth'));
		$staff -> birth = $birth;
		$staff -> age = $birth->age;
		$staff -> gender = $request->get('gender');
		$staff -> subject = $request->get('subject');
		$staff -> branch = $request->get('branch');
		if($request->hasfile('avatar')){
            $file = $request->file('avatar');
            $name = time().'.'.$file->getClientOriginalExtension();
            $file -> move(public_path().'/img/avatar/staff/', $name);
            $staff -> avatar = $name;
        }
		$staff -> save();
		return redirect('home')->with('success', 'Successfully added Staff!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staff = Staff::find($id);
		return view('staff.view', compact('staff', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$staff = Staff::find($id);
        return view('staff.edit', compact('staff', 'id'));
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
			'fatherName' => 'required',
			'motherName' => 'required',
			'lastName' => 'required',
			'address' => 'required',
			'contact1' => 'required',
			'contact2' => 'required',
			'branch' => 'required',
			'subject' => 'required',
		]);
		$staff = Staff::find($id);
		$staff -> firstName = $request->get('firstName');
		$staff -> fatherName = $request->get('fatherName');
		$staff -> motherName = $request->get('motherName');
		$staff -> lastName = $request->get('lastName');
		$staff -> address = $request->get('address');
		$staff -> contact1 = $request->get('contact1');
		$staff -> contact2 = $request->get('contact2');
		if($request->hasfile('avatar')){
			$file = $request->file('avatar');
            $name = time().'.'.$file->getClientOriginalExtension();
            $file -> move(public_path().'/img/avatar/staff/', $name);
            $staff -> avatar = $name;
		}
		$staff -> branch = $request->get('branch');
		$staff -> subject = $request->get('subject');
		$staff -> save();
		return redirect()->back()->with('success', 'Successfully Updated!');
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
