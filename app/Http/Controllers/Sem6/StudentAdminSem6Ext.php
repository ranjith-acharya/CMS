<?php

namespace App\Http\Controllers\Sem6;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\Sem6External;

class StudentAdminSem6Ext extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
	
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
			'ext1mark' => 'required|digits_between: 0,80',
			'ext2mark' => 'required|digits_between: 0,80',
			'ext3mark' => 'required|digits_between: 0,80',
			'ext4mark' => 'required|digits_between: 0,80',
			'ext5mark' => 'required|digits_between: 0,80',
		],[
			'ext1.required'=> 'Please Select the Subject',
			'ext2.required'=> 'Please Select the Subject',
			'ext3.required'=> 'Please Select the Subject',
			'ext4.required'=> 'Please Select the Subject',
			'ext5.required'=> 'Please Select the Subject',
			'ext1mark.required'=> 'Please provide the Marks',
			'ext2mark.required'=> 'Please provide the Marks',
			'ext3mark.required'=> 'Please provide the Marks',
			'ext4mark.required'=> 'Please provide the Marks',
			'ext5mark.required'=> 'Please provide the Marks',
			'ext1mark.digits_between'=> 'Please provide the Marks within 0 to 80',
			'ext2mark.digits_between'=> 'Please provide the Marks within 0 to 80',
			'ext3mark.digits_between'=> 'Please provide the Marks within 0 to 80',
			'ext4mark.digits_between'=> 'Please provide the Marks within 0 to 80',
			'ext5mark.digits_between'=> 'Please provide the Marks within 0 to 80',
		]);
		
		$sem6External = new Sem6External;
		$student = Student::find($id);
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
		$sem6External -> admissionNo = $student->admissionNo;
		
		$sem6External -> save();
		return redirect()->back()->with('success', 'External Marks for Sem6 Stored.!!');
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
