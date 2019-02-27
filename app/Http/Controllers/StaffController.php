<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use Hash;
class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('staff/index',compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'username' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'landmark' => 'required',
            'city' => 'required',
            'pincode' => 'required',
            'birth' => 'required',
            'contact' => 'required',
            'branch' => 'required',
            'gender' => 'required',
            'avatar' => 'required'
        ]);
        if($request->hasfile('avatar')){
            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $file -> move(public_path().'/image/staff',$name);
        }
        $staffs = new Staff;
        $staffs -> username = $request->get('username');
        $staffs -> firstname = $request->get('firstname');
        $staffs -> lastname = $request->get('lastname');
        $staffs -> email = $request->get('email');
        $staffs -> password = Hash::make($request->get('password'));
        $staffs -> address = $request->get('address');
        $staffs -> landmark = $request->get('landmark');
        $staffs -> city = $request->get('city');
        $staffs -> pincode = $request->get('pincode');
        $staffs -> birth = $request->get('birth');
        $staffs -> contact = $request->get('contact');
        $staffs -> branch = $request->get('branch');
        $staffs -> gender = $request->get('gender');
        $staffs -> avatar = $name;
        $staffs -> save();
        return redirect('staff');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staffs = Staff::find($id);
        return view('staff/view',compact('staffs', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staffs = Staff::find($id);
        return view('staff/edit',compact('staffs', 'id'));
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
