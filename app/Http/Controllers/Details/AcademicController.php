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
            '10th_rollNumber'=>'required',
            '10th_board'=>'required',
            '10th_session'=>'required',
            '10th_marksObtained'=>'required',
            '10th_maxMarks'=>'required',
            '10th_percentage'=>'required',
            '12th_rollNumber'=>'required',
            '12th_board'=>'required',
            '12th_session'=>'required',
            '12th_marksObtained'=>'required',
            '12th_maxMarks'=>'required',
            '12th_percentage'=>'required',

        ]);

        $form=new MarksDetail();
        $form->user_id = $request->post('user_id');
        // $form->exam = $request->post('exam');
        $form->rollNumber_10th = $request->post('10th_rollNumber');
        $form->board_10th = $request->post('10th_board');
        $form->session_10th = $request->post('10th_session');
        $form->marksObtained_10th = $request->post('10th_marksObtained');
        $form->maxMarks_10th = $request->post('10th_maxMarks');
        $form->percentage_10th = $request->post('10th_percentage');
        // 12th details
        $form->rollNumber_12th = $request->post('12th_rollNumber');
        $form->board_12th = $request->post('12th_board');
        $form->session_12th = $request->post('12th_session');
        $form->marksObtained_12th = $request->post('12th_marksObtained');
        $form->maxMarks_12th = $request->post('12th_maxMarks');
        $form->percentage_12th = $request->post('12th_percentage');
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
