<?php

namespace App\Http\Controllers\Details;

use App\Http\Controllers\Controller;
use App\Models\MarksDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marks_data = MarksDetail::all()->where('user_id',Auth::guard('web')->user()->id);
        //dd($marks_data);
        return view('user.academic.form_add',compact('marks_data'));
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
        $request->validate([
            'exam'=>'required',
            'rollNumber'=>'required',
            'board'=>'required',
            'session'=>'required',
            'marksObtained'=>'required',
            'maxMarks'=>'required',
            'percentage'=>'required',

        ]);

        $form=new MarksDetail();
        $form->user_id = $request->post('user_id');
        $form->exam = $request->post('exam');
        $form->rollNumber = $request->post('rollNumber');
        $form->board = $request->post('board');
        $form->session = $request->post('session');
        $form->marksObtained = $request->post('marksObtained');
        $form->maxMarks = $request->post('maxMarks');
        $form->percentage = $request->post('percentage');
        $form->save();

        $user_data = User::where('id',Auth::guard('web')->user()->id)->first();
        //dd($admin_data);
        $user_data->edu_submitted=1;
        $user_data->update();

        return redirect()->back();
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
