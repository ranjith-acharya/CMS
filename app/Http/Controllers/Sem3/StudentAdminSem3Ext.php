<?php

namespace App\Http\Controllers\Sem3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\ResultSem3;
use App\Student;
use App\Sem3External;

class StudentAdminSem3Ext extends Controller
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
			'ext1' => 'required',
			'ext2' => 'required',
			'ext3' => 'required',
			'ext4' => 'required',
			'ext5' => 'required',
			'ext1mark' => 'required',
			'ext2mark' => 'required',
			'ext3mark' => 'required',
			'ext4mark' => 'required',
			'ext5mark' => 'required',
			'outOfExt' => 'required',
			'remarkExt' => 'required',
		],[
			'ext1.required' => 'Please select Subject',
			'ext2.required' => 'Please select Subject',
			'ext3.required' => 'Please select Subject',
			'ext4.required' => 'Please select Subject',
			'ext5.required' => 'Please select Subject',
			'ext1mark.required' => 'Please provide Marks',
			'ext2mark.required' => 'Please provide Marks',
			'ext3mark.required' => 'Please provide Marks',
			'ext4mark.required' => 'Please provide Marks',
			'ext5mark.required' => 'Please provide Marks',
			'outOfExt.required' => 'Please select No. of Subjects',
			'remarkExt.required' => 'Please select Remark',
		]);
			$sem3External = new Sem3External;
			$students = Student::find($id);
			Student::find($id)->notify(new ResultSem3);
			$sem3External -> ext1 = $request->get('ext1');
			$sem3External -> ext1mark = $request->get('ext1mark');
			$sem3External -> ext2 = $request->get('ext2');
			$sem3External -> ext2mark = $request->get('ext2mark');
			$sem3External -> ext3 = $request->get('ext3');
			$sem3External -> ext3mark = $request->get('ext3mark');
			$sem3External -> ext4 = $request->get('ext4');
			$sem3External -> ext4mark = $request->get('ext4mark');
			$sem3External -> ext5 = $request->get('ext5');
			$sem3External -> ext5mark = $request->get('ext5mark');
			$sem3External -> total = $request->get('totalExtMark');
			$sem3External -> outOf = $request->get('outOfExt');
			$sem3External -> remark = $request->get('remarkExt');
			$sem3External -> studentId = $students->id;
			$sem3External -> admissionNo = $students->admissionNo;
			$sem3External -> firstName = $students->firstName;
			$sem3External -> lastName = $students->lastName;
			$sem3External -> branch = $students->branch;
				
			$sem3External -> save();
			
			return redirect()->back()->with('success', 'Sem3 External marks Stored.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sem3External = Sem3External::find($id);
		return view('result.sem3.studentAdminSem3ExtShow', compact('sem3External', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sem3External = Sem3External::find($id);
		return view('result.sem3.studentAdminSem3ExtEdit', compact('sem3External', 'id'));
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
			'ext1' => 'required',
			'ext2' => 'required',
			'ext3' => 'required',
			'ext4' => 'required',
			'ext5' => 'required',
			'ext1mark' => 'required',
			'ext2mark' => 'required',
			'ext3mark' => 'required',
			'ext4mark' => 'required',
			'ext5mark' => 'required',
			'outOfExt' => 'required',
			'remarkExt' => 'required',
		],[
			'ext1.required' => 'Please select Subject',
			'ext2.required' => 'Please select Subject',
			'ext3.required' => 'Please select Subject',
			'ext4.required' => 'Please select Subject',
			'ext5.required' => 'Please select Subject',
			'ext1mark.required' => 'Please provide Marks',
			'ext2mark.required' => 'Please provide Marks',
			'ext3mark.required' => 'Please provide Marks',
			'ext4mark.required' => 'Please provide Marks',
			'ext5mark.required' => 'Please provide Marks',
			'outOfExt.required' => 'Please select No. of Subjects',
			'remarkExt.required' => 'Please select Remark',
		]);
			$sem3External = Sem3External::find($id);
			
			$sem3External -> ext1 = $request->get('ext1');
			$sem3External -> ext1mark = $request->get('ext1mark');
			$sem3External -> ext2 = $request->get('ext2');
			$sem3External -> ext2mark = $request->get('ext2mark');
			$sem3External -> ext3 = $request->get('ext3');
			$sem3External -> ext3mark = $request->get('ext3mark');
			$sem3External -> ext4 = $request->get('ext4');
			$sem3External -> ext4mark = $request->get('ext4mark');
			$sem3External -> ext5 = $request->get('ext5');
			$sem3External -> ext5mark = $request->get('ext5mark');
			$sem3External -> total = $request->get('totalExtMark');
			$sem3External -> outOf = $request->get('outOfExt');
			$sem3External -> remark = $request->get('remarkExt');
				
			$sem3External -> save();
			
			return redirect()->back()->with('success', 'Sem3 External marks Updated.!!');
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
