<?php

namespace App\Http\Controllers\Sem6;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\Sem6Internal;

class StudentAdminSem6Int extends Controller
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
        //
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
			'int1' => 'required',
			'int2' => 'required',
			'int3' => 'required',
			'int4' => 'required',
			'int5' => 'required',
			'int1mark' => 'required|digits_between: 0,20',
			'int2mark' => 'required|digits_between: 0,20',
			'int3mark' => 'required|digits_between: 0,20',
			'int4mark' => 'required|digits_between: 0,20',
			'int5mark' => 'required|digits_between: 0,20',
		],[
			'int1.required'=> 'Please Select the Subject',
			'int2.required'=> 'Please Select the Subject',
			'int3.required'=> 'Please Select the Subject',
			'int4.required'=> 'Please Select the Subject',
			'int5.required'=> 'Please Select the Subject',
			'int1mark.required'=> 'Please provide the Marks',
			'int2mark.required'=> 'Please provide the Marks',
			'int3mark.required'=> 'Please provide the Marks',
			'int4mark.required'=> 'Please provide the Marks',
			'int5mark.required'=> 'Please provide the Marks',
			'int1mark.digits_between'=> 'Please provide the Marks within 0 to 20',
			'int2mark.digits_between'=> 'Please provide the Marks within 0 to 20',
			'int3mark.digits_between'=> 'Please provide the Marks within 0 to 20',
			'int4mark.digits_between'=> 'Please provide the Marks within 0 to 20',
			'int5mark.digits_between'=> 'Please provide the Marks within 0 to 20',
		]);
		
		$sem6Internal = new Sem6Internal;
		$student = Student::find($id);
		$sem6Internal -> int1 = $request->get('int1');
		$sem6Internal -> int1mark = $request->get('int1mark');
		$sem6Internal -> int2 = $request->get('int2');
		$sem6Internal -> int2mark = $request->get('int2mark');
		$sem6Internal -> int3 = $request->get('int3');
		$sem6Internal -> int3mark = $request->get('int3mark');
		$sem6Internal -> int4 = $request->get('int4');
		$sem6Internal -> int4mark = $request->get('int4mark');
		$sem6Internal -> int5 = $request->get('int5');
		$sem6Internal -> int5mark = $request->get('int5mark');
		$sem6Internal -> int6 = $request->get('int6');
		$sem6Internal -> int6mark = $request->get('int6mark');
		$sem6Internal -> int7 = $request->get('int7');
		$sem6Internal -> int7mark = $request->get('int7mark');
		$sem6Internal -> int8 = $request->get('int8');
		$sem6Internal -> int8mark = $request->get('int8mark');
		$sem6Internal -> total = $request->get('totalIntMark');
		$sem6Internal -> admissionNo = $student->admissionNo;
		
		$sem6Internal -> save();
		return redirect()->back()->with('success', 'Internal Marks for Sem6 Stored.!!');
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
