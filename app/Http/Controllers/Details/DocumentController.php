<?php

namespace App\Http\Controllers\Details;

use App\Http\Controllers\Controller;
use App\Models\DocumentDetail;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
         $upload_detail= DocumentDetail::all()->where('user_id',Auth::guard('web')->user()->id);

         // dd($user);
          return view('user.docs_upload.form_add',compact('upload_detail'));

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
        $data=$request->validate([

            'image'=>'required|image',
            'signature'=>'required|image',
      ]);

      $image_path=request('image')->store('uploads','public');

      $image= Image::make(public_path("storage/{$image_path}"))->fit(450, 350);
    //   dd($image);
      $image->save();

      Auth::user()->document_details()->create([
          'photo'=>$image_path,
          'signature'=>$image_path
      ]);
      return redirect('/documents/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
