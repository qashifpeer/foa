<?php

namespace App\Http\Controllers\Details;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\PersonalDetail;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PersonalController extends Controller
{
    public function index(){

        $data['category']= Category::all();
        $data['details']= PersonalDetail::all()->where('user_id',Auth::guard('web')->user()->id);

        return view('user.personal_detail.form_add',$data);
    }
    public function store(Request $request)
    {
        $request->validate([
            'firstName'=>'required',
            'middleName'=>'required',
            'lastName'=>'required',
            'fatherName'=>'required',
            'motherName'=>'required',
            'emailPrimary'=>'required|email',
            'contactPrimary'=>'required',
            'category_ID'=>'required',



        ]);


        $form= new PersonalDetail();
        $form->user_id = $request->post('user_id');
        $form->firstName = $request->post('firstName');
        $form->middleName = $request->post('middleName');
        $form->lastName = $request->post('lastName');
        $form->fatherName = $request->post('fatherName');
        $form->motherName = $request->post('motherName');
        $form->guardianName = $request->post('guardianName');
        $form->emailPrimary = $request->post('emailPrimary');
        $form->emailAlternate = $request->post('emailAlternate');
        $form->contactPrimary = $request->post('contactPrimary');
        $form->contactAlternate = $request->post('contactAlternate');
        $form->category_ID	= $request->post('category_ID');
         $form->save();

        $admin_data = User::where('id',Auth::guard('web')->user()->id)->first();
        //dd($admin_data);
        $admin_data->personal_submitted=1;
        $admin_data->update();


        return redirect()->back();
    }

    public function show($id)
    {
        $data['details']= PersonalDetail::where('user_id',Auth::guard('web')->user()->id)->first();
        return view('user.personal_detail.form_show',$data);

    }
}
