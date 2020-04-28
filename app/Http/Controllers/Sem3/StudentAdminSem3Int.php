<?php

namespace App\Http\Controllers\Sem3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\ResultPush;
use App\Student;
use App\Sem3Internal;

class StudentAdminSem3Int extends Controller
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
			$sem3Internal = new Sem3Internal;
			$students = Student::find($id);
			
			$sem3Internal -> int1 = $request->get('int1');
			$sem3Internal -> int1mark = $request->get('int1mark');
			$sem3Internal -> int2 = $request->get('int2');
			$sem3Internal -> int2mark = $request->get('int2mark');
			$sem3Internal -> int3 = $request->get('int3');
			$sem3Internal -> int3mark = $request->get('int3mark');
			$sem3Internal -> int4 = $request->get('int4');
			$sem3Internal -> int4mark = $request->get('int4mark');
			$sem3Internal -> int5 = $request->get('int5');
			$sem3Internal -> int5mark = $request->get('int5mark');
			$sem3Internal -> total = $request->get('totalIntMark');
			$sem3Internal -> outOf = $request->get('outOfInt');
			$sem3Internal -> remark = $request->get('remarkInt');
			$sem3Internal -> studentId = $students->id;
			$sem3Internal -> admissionNo = $students->admissionNo;
			$sem3Internal -> firstName = $students->firstName;
			$sem3Internal -> lastName = $students->lastName;
			$sem3Internal -> branch = $students->branch;
				
			$sem3Internal -> save();
			
			return redirect()->back()->with('success', 'Sem3 Internal marks Stored.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sem3Internal = Sem3Internal::find($id);
		return view('result.sem3.studentAdminSem3IntShow', compact('sem3Internal', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sem3Internal = Sem3Internal::find($id);
		return view('result.sem3.studentAdminSem3IntEdit', compact('sem3Internal', 'id'));
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
			$sem3Internal = Sem3Internal::find($id);
			
			$sem3Internal -> int1 = $request->get('int1');
			$sem3Internal -> int1mark = $request->get('int1mark');
			$sem3Internal -> int2 = $request->get('int2');
			$sem3Internal -> int2mark = $request->get('int2mark');
			$sem3Internal -> int3 = $request->get('int3');
			$sem3Internal -> int3mark = $request->get('int3mark');
			$sem3Internal -> int4 = $request->get('int4');
			$sem3Internal -> int4mark = $request->get('int4mark');
			$sem3Internal -> int5 = $request->get('int5');
			$sem3Internal -> int5mark = $request->get('int5mark');
			$sem3Internal -> total = $request->get('totalIntMark');
			$sem3Internal -> outOf = $request->get('outOfInt');
			$sem3Internal -> remark = $request->get('remarkInt');
				
			$sem3Internal -> save();
			
			return redirect()->back()->with('success', 'Sem3 Internal marks Updated.!!');
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
