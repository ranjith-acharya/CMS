<?php

namespace App\Http\Controllers\Sem1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\ResultPush;
use App\Student;
use App\Sem1Internal;

class StudentAdminSem1Int extends Controller
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
			'int6' => 'required',
			'int1mark' => 'required',
			'int2mark' => 'required',
			'int3mark' => 'required',
			'int4mark' => 'required',
			'int5mark' => 'required',
			'int6mark' => 'required',
			'outOfInt' => 'required',
			'remarkInt' => 'required',
		],[
			'int1.required' => 'Please select Subject',
			'int2.required' => 'Please select Subject',
			'int3.required' => 'Please select Subject',
			'int4.required' => 'Please select Subject',
			'int5.required' => 'Please select Subject',
			'int6.required' => 'Please select Subject',
			'int1mark.required' => 'Please provide Marks',
			'int2mark.required' => 'Please provide Marks',
			'int3mark.required' => 'Please provide Marks',
			'int4mark.required' => 'Please provide Marks',
			'int5mark.required' => 'Please provide Marks',
			'int6mark.required' => 'Please provide Marks',
			'outOfInt.required' => 'Please select No. of Subjects',
			'remarkInt.required' => 'Please select Remark',
		]);
			$sem1Internal = new Sem1Internal;
			$students = Student::find($id);
			Student::find($id)->notify(new ResultPush);
			$sem1Internal -> int1 = $request->get('int1');
			$sem1Internal -> int1mark = $request->get('int1mark');
			$sem1Internal -> int2 = $request->get('int2');
			$sem1Internal -> int2mark = $request->get('int2mark');
			$sem1Internal -> int3 = $request->get('int3');
			$sem1Internal -> int3mark = $request->get('int3mark');
			$sem1Internal -> int4 = $request->get('int4');
			$sem1Internal -> int4mark = $request->get('int4mark');
			$sem1Internal -> int5 = $request->get('int5');
			$sem1Internal -> int5mark = $request->get('int5mark');
			$sem1Internal -> int6 = $request->get('int6');
			$sem1Internal -> int6mark = $request->get('int6mark');
			$sem1Internal -> total = $request->get('totalIntMark');
			$sem1Internal -> outOf = $request->get('outOfInt');
			$sem1Internal -> remark = $request->get('remarkInt');
			$sem1Internal -> admissionNo = $students->admissionNo;
			
			$sem1Internal -> save();
			
			return redirect()->back()->with('success', 'Sem1 Internal marks Stored.');
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
