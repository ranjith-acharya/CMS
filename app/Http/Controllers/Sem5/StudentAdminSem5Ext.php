<?php

namespace App\Http\Controllers\Sem5;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\ResultPush;
use App\Student;
use App\Sem5External;

class StudentAdminSem5Ext extends Controller
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
			$sem5External = new Sem5External;
			$students = Student::find($id);
			Student::find($id)->notify(new ResultPush);
			$sem5External -> ext1 = $request->get('ext1');
			$sem5External -> ext1mark = $request->get('ext1mark');
			$sem5External -> ext2 = $request->get('ext2');
			$sem5External -> ext2mark = $request->get('ext2mark');
			$sem5External -> ext3 = $request->get('ext3');
			$sem5External -> ext3mark = $request->get('ext3mark');
			$sem5External -> ext4 = $request->get('ext4');
			$sem5External -> ext4mark = $request->get('ext4mark');
			$sem5External -> ext5 = $request->get('ext5');
			$sem5External -> ext5mark = $request->get('ext5mark');
			$sem5External -> ext6 = $request->get('ext6');
			$sem5External -> ext6mark = $request->get('ext6mark');
			$sem5External -> ext7 = $request->get('ext7');
			$sem5External -> ext7mark = $request->get('ext7mark');
			$sem5External -> ext8 = $request->get('ext8');
			$sem5External -> ext8mark = $request->get('ext8mark');
			$sem5External -> ext9 = $request->get('ext9');
			$sem5External -> ext9mark = $request->get('ext9mark');
			$sem5External -> total = $request->get('totalExtMark');
			$sem5External -> outOf = $request->get('outOfExt');
			$sem5External -> remark = $request->get('remarkExt');
			$sem5External -> studentId = $students->id;
			$sem5External -> admissionNo = $students->admissionNo;
			$sem5External -> firstName = $students->firstName;
			$sem5External -> lastName = $students->lastName;
			$sem5External -> branch = $students->branch;
				
			$sem5External -> save();
			
			return redirect()->back()->with('success', 'Sem5 External marks Stored.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sem5External = Sem5External::find($id);
		return view('result.sem5.studentAdminSem5ExtShow', compact('sem5External', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sem5External = Sem5External::find($id);
		return view('result.sem5.studentAdminSem5ExtEdit', compact('sem5External', 'id'));
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
			$sem5External = Sem5External::find($id);
			
			$sem5External -> ext1 = $request->get('ext1');
			$sem5External -> ext1mark = $request->get('ext1mark');
			$sem5External -> ext2 = $request->get('ext2');
			$sem5External -> ext2mark = $request->get('ext2mark');
			$sem5External -> ext3 = $request->get('ext3');
			$sem5External -> ext3mark = $request->get('ext3mark');
			$sem5External -> ext4 = $request->get('ext4');
			$sem5External -> ext4mark = $request->get('ext4mark');
			$sem5External -> ext5 = $request->get('ext5');
			$sem5External -> ext5mark = $request->get('ext5mark');
			$sem5External -> ext6 = $request->get('ext6');
			$sem5External -> ext6mark = $request->get('ext6mark');
			$sem5External -> ext7 = $request->get('ext7');
			$sem5External -> ext7mark = $request->get('ext7mark');
			$sem5External -> ext8 = $request->get('ext8');
			$sem5External -> ext8mark = $request->get('ext8mark');
			$sem5External -> ext9 = $request->get('ext9');
			$sem5External -> ext9mark = $request->get('ext9mark');
			$sem5External -> total = $request->get('totalExtMark');
			$sem5External -> outOf = $request->get('outOfExt');
			$sem5External -> remark = $request->get('remarkExt');
			
			$sem5External -> save();
			
			return redirect()->back()->with('success', 'Sem5 External marks Updated.!!');
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
