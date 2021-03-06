<?php

namespace App\Http\Controllers\Sem5;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\ResultPush;
use App\Student;
use App\Sem5Internal;

class StudentAdminSem5Int extends Controller
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
			$sem5Internal = new Sem5Internal;
			$students = Student::find($id);
			
			$sem5Internal -> int1 = $request->get('int1');
			$sem5Internal -> int1mark = $request->get('int1mark');
			$sem5Internal -> int2 = $request->get('int2');
			$sem5Internal -> int2mark = $request->get('int2mark');
			$sem5Internal -> int3 = $request->get('int3');
			$sem5Internal -> int3mark = $request->get('int3mark');
			$sem5Internal -> int4 = $request->get('int4');
			$sem5Internal -> int4mark = $request->get('int4mark');
			$sem5Internal -> int5 = $request->get('int5');
			$sem5Internal -> int5mark = $request->get('int5mark');
			$sem5Internal -> int6 = $request->get('int6');
			$sem5Internal -> int6mark = $request->get('int6mark');
			$sem5Internal -> int7 = $request->get('int7');
			$sem5Internal -> int7mark = $request->get('int7mark');
			$sem5Internal -> int8 = $request->get('int8');
			$sem5Internal -> int8mark = $request->get('int8mark');
			$sem5Internal -> int9 = $request->get('int9');
			$sem5Internal -> int9mark = $request->get('int9mark');
			$sem5Internal -> total = $request->get('totalIntMark');
			$sem5Internal -> outOf = $request->get('outOfInt');
			$sem5Internal -> remark = $request->get('remarkInt');
			$sem5Internal -> studentId = $students->id;
			$sem5Internal -> admissionNo = $students->admissionNo;
			$sem5Internal -> firstName = $students->firstName;
			$sem5Internal -> lastName = $students->lastName;
			$sem5Internal -> branch = $students->branch;
				
			$sem5Internal -> save();
			
			return redirect()->back()->with('success', 'Sem5 Internal marks Stored.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sem5Internal = Sem5Internal::find($id);
		return view('result.sem5.studentAdminSem5IntShow', compact('sem5Internal', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sem5Internal = Sem5Internal::find($id);
		return view('result.sem5.studentAdminSem5IntEdit', compact('sem5Internal', 'id'));
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
			$sem5Internal = Sem5Internal::find($id);
			
			$sem5Internal -> int1 = $request->get('int1');
			$sem5Internal -> int1mark = $request->get('int1mark');
			$sem5Internal -> int2 = $request->get('int2');
			$sem5Internal -> int2mark = $request->get('int2mark');
			$sem5Internal -> int3 = $request->get('int3');
			$sem5Internal -> int3mark = $request->get('int3mark');
			$sem5Internal -> int4 = $request->get('int4');
			$sem5Internal -> int4mark = $request->get('int4mark');
			$sem5Internal -> int5 = $request->get('int5');
			$sem5Internal -> int5mark = $request->get('int5mark');
			$sem5Internal -> int6 = $request->get('int6');
			$sem5Internal -> int6mark = $request->get('int6mark');
			$sem5Internal -> int7 = $request->get('int7');
			$sem5Internal -> int7mark = $request->get('int7mark');
			$sem5Internal -> int8 = $request->get('int8');
			$sem5Internal -> int8mark = $request->get('int8mark');
			$sem5Internal -> int9 = $request->get('int9');
			$sem5Internal -> int9mark = $request->get('int9mark');
			$sem5Internal -> total = $request->get('totalIntMark');
			$sem5Internal -> outOf = $request->get('outOfInt');
			$sem5Internal -> remark = $request->get('remarkInt');
				
			$sem5Internal -> save();
			
			return redirect()->back()->with('success', 'Sem5 Internal marks Updated.!!');
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
