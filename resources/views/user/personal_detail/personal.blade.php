@extends('master')
@section('dashboard')
<div class="container-fluid px-1 py-2 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Personal Details</h3>
            <p></p>

            <div class="card">

                <form method="POST" action="{{ route('details.store') }}" class="form-card">
                    @csrf
                    <div class="row justify-content-between text-left">
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">First Name<span class="text-danger"> *</span></label> <input type="text" id="fName" name="fName" placeholder="Enter your first name" required > </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Middle Name<span class="text-danger"> *</span></label> <input type="text" id="mName" name="mName" placeholder="Enter your middle name" required> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Last Name<span class="text-danger"> *</span></label> <input type="text" id="lName" name="lName" placeholder="Enter your last name" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Father's Name<span class="text-danger"> *</span></label> <input type="text" id="fatherName" name="fatherName" placeholder="Enter your father's name" required> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Mother's Name<span class="text-danger"> *</span></label> <input type="text" id="motherName" name="motherName" placeholder="Enter your mother's name" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Guardian Name<span class="text-danger"> </span></label> <input type="text" id="guardianName" name="guardianName" placeholder="Enter your guardian name" required> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email - Primary<span class="text-danger"> *</span></label> <input type="email" id="emailPrimary" name="emailPrimary" placeholder="exampla@abc.com" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email- Alternate<span class="text-danger"> </span></label> <input type="email" id="emailAlternate" name="emailAlternate" placeholder="exampla@abc.com" required> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Conatct - Primary<span class="text-danger"> *</span></label> <input type="email" id="contactPrimary" name="contactPrimary" placeholder="9906600000" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Contact- Alternate<span class="text-danger"> </span></label> <input type="email" id="contactAlternate" name="contactAlternate" placeholder="9906600000" required> </div>
                    </div>


                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex">
                            <select class="form-select" name="cat_ID" >
                            <option selected>Select Category</option>
                            @foreach ($category as $category )
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                          </select> </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Submit</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
