<?php

namespace App\Http\Controllers\Sem4;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\ResultPush;
use App\Student;
use App\Sem4Internal;

class StudentAdminSem4Int extends Controller
{
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
			'int1mark' => 'required',
			'int2mark' => 'required',
			'int3mark' => 'required',
			'int4mark' => 'required',
			'int5mark' => 'required',
			'outOfInt' => 'required',
			'remarkInt' => 'required',
		],[
			'int1.required' => 'Please select Subject',
			'int2.required' => 'Please select Subject',
			'int3.required' => 'Please select Subject',
			'int4.required' => 'Please select Subject',
			'int5.required' => 'Please select Subject',
			'int1mark.required' => 'Please provide Marks',
			'int2mark.required' => 'Please provide Marks',
			'int3mark.required' => 'Please provide Marks',
			'int4mark.required' => 'Please provide Marks',
			'int5mark.required' => 'Please provide Marks',
			'outOfInt.required' => 'Please select No. of Subjects',
			'remarkInt.required' => 'Please select Remark',
		]);
			$sem4Internal = new Sem4Internal;
			$students = Student::find($id);
			
			$sem4Internal -> int1 = $request->get('int1');
			$sem4Internal -> int1mark = $request->get('int1mark');
			$sem4Internal -> int2 = $request->get('int2');
			$sem4Internal -> int2mark = $request->get('int2mark');
			$sem4Internal -> int3 = $request->get('int3');
			$sem4Internal -> int3mark = $request->get('int3mark');
			$sem4Internal -> int4 = $request->get('int4');
			$sem4Internal -> int4mark = $request->get('int4mark');
			$sem4Internal -> int5 = $request->get('int5');
			$sem4Internal -> int5mark = $request->get('int5mark');
			$sem4Internal -> int6 = $request->get('int6');
			$sem4Internal -> int6mark = $request->get('int6mark');
			$sem4Internal -> total = $request->get('totalIntMark');
			$sem4Internal -> outOf = $request->get('outOfInt');
			$sem4Internal -> remark = $request->get('remarkInt');
			$sem4Internal -> studentId = $students->id;
			$sem4Internal -> admissionNo = $students->admissionNo;
			$sem4Internal -> firstName = $students->firstName;
			$sem4Internal -> lastName = $students->lastName;
			$sem4Internal -> branch = $students->branch;
				 
			$sem4Internal -> save();
			
			return redirect()->back()->with('success', 'Sem4 Internal marks Stored.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sem4Internal = Sem4Internal::find($id);
		return view('result.sem4.studentAdminSem4IntShow', compact('sem4Internal', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sem4Internal = Sem4Internal::find($id);
		return view('result.sem4.studentAdminSem4IntEdit', compact('sem4Internal', 'id'));
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
			'int1' => 'required',
			'int2' => 'required',
			'int3' => 'required',
			'int4' => 'required',
			'int5' => 'required',
			'int1mark' => 'required',
			'int2mark' => 'required',
			'int3mark' => 'required',
			'int4mark' => 'required',
			'int5mark' => 'required',
			'outOfInt' => 'required',
			'remarkInt' => 'required',
		],[
			'int1.required' => 'Please select Subject',
			'int2.required' => 'Please select Subject',
			'int3.required' => 'Please select Subject',
			'int4.required' => 'Please select Subject',
			'int5.required' => 'Please select Subject',
			'int1mark.required' => 'Please provide Marks',
			'int2mark.required' => 'Please provide Marks',
			'int3mark.required' => 'Please provide Marks',
			'int4mark.required' => 'Please provide Marks',
			'int5mark.required' => 'Please provide Marks',
			'outOfInt.required' => 'Please select No. of Subjects',
			'remarkInt.required' => 'Please select Remark',
		]);
			$sem4Internal = Sem4Internal::find($id);
				
			$sem4Internal -> int1 = $request->get('int1');
			$sem4Internal -> int1mark = $request->get('int1mark');
			$sem4Internal -> int2 = $request->get('int2');
			$sem4Internal -> int2mark = $request->get('int2mark');
			$sem4Internal -> int3 = $request->get('int3');
			$sem4Internal -> int3mark = $request->get('int3mark');
			$sem4Internal -> int4 = $request->get('int4');
			$sem4Internal -> int4mark = $request->get('int4mark');
			$sem4Internal -> int5 = $request->get('int5');
			$sem4Internal -> int5mark = $request->get('int5mark');
			$sem4Internal -> int6 = $request->get('int6');
			$sem4Internal -> int6mark = $request->get('int6mark');
			$sem4Internal -> total = $request->get('totalIntMark');
			$sem4Internal -> outOf = $request->get('outOfInt');
			$sem4Internal -> remark = $request->get('remarkInt');
				
			$sem4Internal -> save();
			
			return redirect()->back()->with('success', 'Sem4 Internal marks Updated.!!');
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
