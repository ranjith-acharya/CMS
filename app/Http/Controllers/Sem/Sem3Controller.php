<?php

namespace App\Http\Controllers\Sem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\Sem3;

class Sem3Controller extends Controller
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
			'extSub1' => 'required',
			'extSubMark1' => ['required', 'max:2', 'between:0, 80'],
			'intSubMark1' => ['required', 'max:2', 'between:0, 20'],
			'extSub2' => 'required',
			'extSubMark2' => ['required', 'max:2', 'between:0, 80'],
			'intSubMark2' => ['required', 'max:2', 'between:0, 20'],
			'extSub3' => 'required',
			'extSubMark3' => ['required', 'max:2', 'between:0, 80'],
			'intSubMark3' => ['required', 'max:2', 'between:0, 20'],
			'extSub4' => 'required',
			'extSubMark4' => ['required', 'max:2', 'between:0, 80'],
			'intSubMark4' => ['required', 'max:2', 'between:0, 20'],
			'extSub5' => 'required',
			'extSubMark5' => ['required', 'max:2', 'between:0, 80'],
			'intSubMark5' => ['required', 'max:2', 'between:0, 20'],
			'extSub6' => 'required',
			'extSubMark6' => ['required', 'max:2', 'between:0, 80'],
			'intSubMark6' => ['required', 'max:2', 'between:0, 20'],
		]);
		$sem3 = new Sem3;
		$sem3 -> extSub1 = $request->get('extSub1');
		$sem3 -> extSubMark1 = $request->get('extSubMark1');
		$sem3 -> intSubMark1 = $request->get('intSubMark1');
		$sem3 -> extSub2 = $request->get('extSub2');
		$sem3 -> extSubMark2 = $request->get('extSubMark2');
		$sem3 -> intSubMark2 = $request->get('intSubMark2');
		$sem3 -> extSub3 = $request->get('extSub3');
		$sem3 -> extSubMark3 = $request->get('extSubMark3');
		$sem3 -> intSubMark3 = $request->get('intSubMark3');
		$sem3 -> extSub4 = $request->get('extSub4');
		$sem3 -> extSubMark4 = $request->get('extSubMark4');
		$sem3 -> intSubMark4 = $request->get('intSubMark4');
		$sem3 -> extSub5 = $request->get('extSub5');
		$sem3 -> extSubMark5 = $request->get('extSubMark5');
		$sem3 -> intSubMark5 = $request->get('intSubMark5');
		$sem3 -> extSub6 = $request->get('extSub6');
		$sem3 -> extSubMark6 = $request->get('extSubMark6');
		$sem3 -> intSubMark6 = $request->get('intSubMark6');
		$sem3 -> admissionNo = $request->get('admissionNo');
		$sem3 -> save();
		return redirect()->back()->with('success', 'Result for Sem 3 has been Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('result.create', compact('student', 'id'));
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
