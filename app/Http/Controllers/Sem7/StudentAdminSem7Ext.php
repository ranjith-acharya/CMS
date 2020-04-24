<?php

namespace App\Http\Controllers\Sem7;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\ResultPush;
use App\Student;
use App\Sem7External;

class StudentAdminSem7Ext extends Controller
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
			$sem7External = new Sem7External;
			$students = Student::find($id);
			Student::find($id)->notify(new ResultPush);
			$sem7External -> ext1 = $request->get('ext1');
			$sem7External -> ext1mark = $request->get('ext1mark');
			$sem7External -> ext2 = $request->get('ext2');
			$sem7External -> ext2mark = $request->get('ext2mark');
			$sem7External -> ext3 = $request->get('ext3');
			$sem7External -> ext3mark = $request->get('ext3mark');
			$sem7External -> ext4 = $request->get('ext4');
			$sem7External -> ext4mark = $request->get('ext4mark');
			$sem7External -> ext5 = $request->get('ext5');
			$sem7External -> ext5mark = $request->get('ext5mark');
			$sem7External -> ext6 = $request->get('ext6');
			$sem7External -> ext6mark = $request->get('ext6mark');
			$sem7External -> ext7 = $request->get('ext7');
			$sem7External -> ext7mark = $request->get('ext7mark');
			$sem7External -> ext8 = $request->get('ext8');
			$sem7External -> ext8mark = $request->get('ext8mark');
			$sem7External -> ext9 = $request->get('ext9');
			$sem7External -> ext9mark = $request->get('ext9mark');
			$sem7External -> ext10 = $request->get('ext10');
			$sem7External -> ext10mark = $request->get('ext10mark');
			$sem7External -> ext11 = $request->get('ext11');
			$sem7External -> ext11mark = $request->get('ext11mark');
			$sem7External -> total = $request->get('totalExtMark');
			$sem7External -> outOf = $request->get('outOfExt');
			$sem7External -> remark = $request->get('remarkExt');
			$sem7External -> admissionNo = $students->admissionNo;
				
			$sem7External -> save();
			
			return redirect()->back()->with('success', 'Sem7 External marks Stored.');
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
