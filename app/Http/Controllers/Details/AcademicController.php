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
            // 'exam'=>'required',
            'rollNumber_10th'=>'required',
            'board_10th'=>'required',
            'session_10th'=>'required',
            'marksObtained_10th'=>'required',
            'maxMarks_10th'=>'required',
            'percentage_10th'=>'required',
            'rollNumber_12th'=>'required',
            'board_12th'=>'required',
            'session_12th'=>'required',
            'marksObtained_12th'=>'required',
            'maxMarks_12th'=>'required',
            'percentage_12th'=>'required',

        ]);

        $form=new MarksDetail();
        $form->user_id = $request->post('user_id');
        // $form->exam = $request->post('exam');
        $form->rollNumber_10th = $request->post('rollNumber_10th');
        $form->board_10th = $request->post('board_10th');
        $form->session_10th = $request->post('session_10th');
        $form->marksObtained_10th = $request->post('marksObtained_10th');
        $form->maxMarks_10th = $request->post('maxMarks_10th');
        $form->percentage_10th = $request->post('percentage_10th');
        // 12th details
        $form->rollNumber_12th = $request->post('rollNumber_12th');
        $form->board_12th = $request->post('board_12th');
        $form->session_12th = $request->post('session_12th');
        $form->marksObtained_12th = $request->post('marksObtained_12th');
        $form->maxMarks_12th = $request->post('maxMarks_12th');
        $form->percentage_12th = $request->post('percentage_12th');
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
