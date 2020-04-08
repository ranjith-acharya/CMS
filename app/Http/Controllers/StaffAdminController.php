<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Staff;

class StaffAdminController extends Controller
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
        $staffs = Staff::all();
		return view('staff.staffAdminIndex', compact('staffs'));
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
			'username' => 'required',
			'firstName' => 'required',
			'lastName' => 'required',
			'email' => 'required',
			'contact1' => 'required|max:10',
			'contact2' => 'required|max:10',
			'gender' => 'required',
			'birth' => 'required',
			'branch' => 'required',
			'teaching' => 'required',
			'address' => 'required',
			'avatar' => 'required',
		],
		[
			'username.required' => 'Please provide Username.',
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
			'teaching.required' => 'Please enter Teaching Subject',
			'address.required' => 'Please provide Address',
			'avatar.required' => 'Select an Image for Student',
		]);
		
		$staff = new Staff;
		$staff -> username = $request->get('username');
		$staff -> firstName = $request->get('firstName');
		$staff -> lastName = $request->get('lastName');
		$staff -> email = $request->get('email');
		$staff -> password = Hash::make($request->get('username'));
		$staff -> contact1 = $request->get('contact1');
		$staff -> contact2 = $request->get('contact2');
		$staff -> gender = $request->get('gender');
		$staff -> birth = $request->get('birth');
		$staff -> branch = $request->get('branch');
		$staff -> teaching = $request->get('teaching');
		$staff -> address = $request->get('address');
		if($request->hasfile('avatar')){
            $file = $request->file('avatar');
            $name = time().'.'.$file->getClientOriginalExtension();
            $file -> move(public_path().'/img/staff/', $name);
            $staff -> avatar = $name;
        }
		$staff -> save();
		return redirect()->back()->with('success', 'New Staff record added.!!');
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
        return view('staff.staffAdminShow', compact('staff', 'id'));
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
		return view('staff.staffAdminEdit', compact('staff', 'id'));
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
			'teaching' => 'required',
			'branch' => 'required',
			'address' => 'required',
		], [
			'firstName.required' => 'Please provide First name',
			'lastName.required' => 'Please provide Last name',
			'contact1.required' => 'Please provide Primary contact',
			'contact2.required' => 'Please provide Another contact',
			'contact1.max' => 'Primary contact should be 10 Characters',
			'contact2.max' => 'Another contact should be 10 Characters',
			'teaching.required' => 'Please provide Teaching subject',
			'branch.required' => 'Please select Branch',
			'address.required' => 'Please provide Address',
		]);
		
		$staff = Staff::find($id);
		$staff -> firstName = $request->get('firstName');
		$staff -> lastName = $request->get('lastName');
		$staff -> contact1 = $request->get('contact1');
		$staff -> contact2 = $request->get('contact2');
		$staff -> teaching = $request->get('teaching');
		$staff -> branch = $request->get('branch');
		$staff -> address = $request->get('address');
		if($request->hasfile('avatar')){
            $file = $request->file('avatar');
            $name = time().'.'.$file->getClientOriginalExtension();
            $file -> move(public_path().'/img/staff/', $name);
            $staff -> avatar = $name;
        }
		$staff -> save();
		return redirect()->route('staffs.show', $id)->with('success', 'Staff record updated.!!');
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
