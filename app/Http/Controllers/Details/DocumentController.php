<?php

namespace App\Http\Controllers\Details;

use App\Http\Controllers\Controller;
use App\Models\DocumentDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Intervention\Image\Facades\Image;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
        $image_data= DocumentDetail::all()->where('user_id',Auth::guard('web')->user()->id);
        // return view('user.docs_upload.form_add', ['images'=>DocumentDetail::get()]);
        return view('user.docs_upload.form_add', compact('image_data'));

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

            'image'=>'required|image',
             'signature'=>'required|image',
      ]);


      $image= $request->image;
       $signature= $request->signature;

        $photo_name= $image->getClientOriginalName();
        $signature_name= $signature->getClientOriginalName();

        $image->storeAs('public/images',$photo_name);
        $signature->storeAs('public/images',$signature_name);

        $image_save= new DocumentDetail;
        $image_save->photo=$photo_name;
        $image_save->signature=$signature_name;

        $image_save->user_id=Auth::guard('web')->user()->id;
        $image_save->save();

        $user_data = User::where('id',Auth::guard('web')->user()->id)->first();
        //dd($admin_data);
        $user_data->docs_submitted=1;
        $user_data->update();

        return redirect('/documents/');




    //   $image_path=request('image')->store('uploads','public');

    //   $image= Image::make(public_path("storage/{$image_path}"))->fit(450, 350);
    //    dd($image);
    //   $image->save();

    //   Auth::user()->document_details()->create([
    //       'photo'=>$image_path,

    //   ]);
    //   $user_data = User::where('id',Auth::guard('web')->user()->id)->first();
    //     //dd($admin_data);
    //     $user_data->docs_submitted=1;
    //     $user_data->update();
    //   return redirect('/documents/');




    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $upload_detail= DocumentDetail::all()->where('user_id', Auth::guard('web')->user()->id);
       // dd($upload_detail);

        return view('user.docs_upload.form_add',compact('upload_detail'));
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
