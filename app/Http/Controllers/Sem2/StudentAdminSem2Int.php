<?php

namespace App\Http\Controllers\Sem2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\Sem2Internal;

class StudentAdminSem2Int extends Controller
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
    public function store(Request $request)
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
			$sem2Internal = new Sem2Internal;
			$sem2Internal -> int1 = $request->get('int1');
			$sem2Internal -> int1mark = $request->get('int1mark');
			$sem2Internal -> int2 = $request->get('int2');
			$sem2Internal -> int2mark = $request->get('int2mark');
			$sem2Internal -> int3 = $request->get('int3');
			$sem2Internal -> int3mark = $request->get('int3mark');
			$sem2Internal -> int4 = $request->get('int4');
			$sem2Internal -> int4mark = $request->get('int4mark');
			$sem2Internal -> int5 = $request->get('int5');
			$sem2Internal -> int5mark = $request->get('int5mark');
			$sem2Internal -> int6 = $request->get('int6');
			$sem2Internal -> int6mark = $request->get('int6mark');
			$sem2Internal -> total = $request->get('totalIntMark');
			$sem2Internal -> outOf = $request->get('outOfInt');
			$sem2Internal -> remark = $request->get('remarkInt');
			$sem2Internal -> admissionNo = $request->get('admissionNo');
				
			$sem2Internal -> save();
			
			return redirect()->back()->with('success', 'Sem2 Internal marks Stored.');
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
