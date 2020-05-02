<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use App\Notifications\jobCreated;
use App\Student;
use App\Company;
use App\Job;

class JobController extends Controller
{
	public function __construct(){
		$this->middleware('auth:company');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$jobs = Job::all();
		return view('company.companyJob', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.companyJobCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [
			'title' => 'required',
			'stipend' => 'required',
			'minPointer' => 'required',
			'description' => 'required',
		],[
			'title.required' => 'Please provide Title',
			'stipend.required' => 'Please provide Package',
			'minPointer.required' => 'Please provide Required Pointer',
			'description.required' => 'Please provide Description',
		]);
		
		$job = new Job;
		$company = Company::find($id);
		$students = Student::all();
		Notification::send($students, new jobCreated());
		$job -> title = $request->get('title');
		$job -> stipend = $request->get('stipend');
		$job -> minPointer = $request->get('minPointer');
		$job -> description = $request->get('description');
		$job -> companyID = $company->id;
		$job -> companyName = $company->name;
		$job -> save();
		
		return redirect()->back()->with('success', 'New Job Created..!!');
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
