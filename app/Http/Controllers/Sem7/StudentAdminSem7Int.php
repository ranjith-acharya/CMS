<?php

namespace App\Http\Controllers\Sem7;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\ResultPush;
use App\Student;
use App\Sem7Internal;

class StudentAdminSem7Int extends Controller
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
			$sem7Internal = new Sem7Internal;
			$students = Student::find($id);
			Student::find($id)->notify(new ResultPush);
			$sem7Internal -> int1 = $request->get('int1');
			$sem7Internal -> int1mark = $request->get('int1mark');
			$sem7Internal -> int2 = $request->get('int2');
			$sem7Internal -> int2mark = $request->get('int2mark');
			$sem7Internal -> int3 = $request->get('int3');
			$sem7Internal -> int3mark = $request->get('int3mark');
			$sem7Internal -> int4 = $request->get('int4');
			$sem7Internal -> int4mark = $request->get('int4mark');
			$sem7Internal -> int5 = $request->get('int5');
			$sem7Internal -> int5mark = $request->get('int5mark');
			$sem7Internal -> int6 = $request->get('int6');
			$sem7Internal -> int6mark = $request->get('int6mark');
			$sem7Internal -> int7 = $request->get('int7');
			$sem7Internal -> int7mark = $request->get('int7mark');
			$sem7Internal -> int8 = $request->get('int8');
			$sem7Internal -> int8mark = $request->get('int8mark');
			$sem7Internal -> int9 = $request->get('int9');
			$sem7Internal -> int9mark = $request->get('int9mark');
			$sem7Internal -> int10 = $request->get('int10');
			$sem7Internal -> int10mark = $request->get('int10mark');
			$sem7Internal -> int11 = $request->get('int11');
			$sem7Internal -> int11mark = $request->get('int11mark');
			$sem7Internal -> total = $request->get('totalIntMark');
			$sem7Internal -> outOf = $request->get('outOfInt');
			$sem7Internal -> remark = $request->get('remarkInt');
			$sem7Internal -> admissionNo = $students->admissionNo;
				 
			$sem7Internal -> save();
			
			return redirect()->back()->with('success', 'Sem7 Internal marks Stored.');
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
