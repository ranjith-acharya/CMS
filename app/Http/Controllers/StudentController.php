<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Hash;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student/index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student/create');
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
            'admission' => 'required',
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
            'year' => 'required',
            'branch' => 'required',
            'gender' => 'required',
            'avatar' => 'required'
        ]);
        if($request->hasfile('avatar')){
            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $file -> move(public_path().'/image', $name);
        }
        $students = new Student;
        $students -> admission = $request->get('admission');
        $students -> firstname = $request->get('firstname');
        $students -> lastname = $request->get('lastname');
        $students -> email = $request->get('email');
        $students -> password = Hash::make($request->get('password'));
        $students -> address = $request->get('address');
        $students -> landmark = $request->get('landmark');
        $students -> city = $request->get('city');
        $students -> pincode = $request->get('pincode');
        $students -> birth = $request->get('birth');
        $students -> contact = $request->get('contact');
        $students -> year = $request->get('year');
        $students -> branch = $request->get('branch');
        $students -> gender = $request->get('gender');
        $students -> avatar = $name;
        $students -> save();
        return redirect('student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::find($id);
        return view('student/view',compact('students','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::find($id);
        return view('student/edit',compact('students','id'));
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
        $students = Student::find($id);
        $students -> firstname = $request->get('firstname');
        $students -> lastname = $request->get('lastname');
        $students -> address = $request->get('address');
        $students -> landmark = $request->get('landmark');
        $students -> city = $request->get('city');
        $students -> pincode = $request->get('pincode');
        $students -> contact = $request->get('contact');
        $students -> year = $request->get('year');
        $students -> save();
        return redirect('student');
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
