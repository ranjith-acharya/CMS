<?php

namespace App\Http\Controllers\Sem6;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\Sem6External;

class StudentAdminSem6Ext extends Controller
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
		]);
			$sem6External = new Sem6External;
			$sem6External -> ext1 = $request->get('ext1');
			$sem6External -> ext1mark = $request->get('ext1mark');
			$sem6External -> ext2 = $request->get('ext2');
			$sem6External -> ext2mark = $request->get('ext2mark');
			$sem6External -> ext3 = $request->get('ext3');
			$sem6External -> ext3mark = $request->get('ext3mark');
			$sem6External -> ext4 = $request->get('ext4');
			$sem6External -> ext4mark = $request->get('ext4mark');
			$sem6External -> ext5 = $request->get('ext5');
			$sem6External -> ext5mark = $request->get('ext5mark');
			$sem6External -> ext6 = $request->get('ext6');
			$sem6External -> ext6mark = $request->get('ext6mark');
			$sem6External -> ext7 = $request->get('ext7');
			$sem6External -> ext7mark = $request->get('ext7mark');
			$sem6External -> ext8 = $request->get('ext8');
			$sem6External -> ext8mark = $request->get('ext8mark');
			$sem6External -> total = $request->get('totalExtMark');
			$sem6External -> outOf = $request->get('outOfExt');
			$sem6External -> admissionNo = $request->get('admissionNo');
			
			$sem6External -> save();
			
			return redirect()->back()->with('success', 'Sem6 External marks Stored.');
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
