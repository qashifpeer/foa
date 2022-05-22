
@extends('user.layouts.master_user')
@section('main_content')
            <h3 class="bg-info text-center">Personal Details</h3>
            @if (Auth::user()->personal_submitted==0)



            <div class="card py-1 px-5 bg-info bg-opacity-25">

                <form method="POST" action="" class="form-card">
                    @csrf
                    <div class="row justify-content-between text-left">
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            {{-- FIRST NAME --}}
                        <div class="form-group col-sm-6 flex-column d-flex py-2">
                             <label class="form-control-label ">First Name<span class="text-danger"> *</span></label>
                              <input class="form-control border border-danger border-2" type="text" value="{{ old('firstName') }}" id="firstName" name="firstName" placeholder="Enter your first name">
                            @error('firstName')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror
                         </div>
                         {{-- MIDDLE NAME --}}
                        <div class="form-group col-sm-6 flex-column d-flex py-2">
                             <label class="form-control-label ">Middle Name<span class="text-danger"> *</span></label>
                             <input class="form-control border border-danger border-2" type="text" value="{{ old('middleName') }}" id="middleName" name="middleName" placeholder="Enter your middle name" >
                            @error('middleName')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror
                         </div>
                     </div>{{-- END OFROW --}}

                    <div class="row justify-content-between text-left">
                        {{-- LAST NAME --}}
                        <div class="form-group col-sm-6 flex-column d-flex  py-2">
                            <label class="form-control-label ">Last Name<span class="text-danger"> *</span></label>
                             <input class="form-control border border-danger border-2" type="text" value="{{ old('lastName') }}" id="lastName" name="lastName" placeholder="Enter your last name" required>
                             @error('lastName')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror
                         </div>
                         {{-- FATHER NAME --}}
                        <div class="form-group col-sm-6 flex-column d-flex  py-2">
                            <label class="form-control-label ">Father's Name<span class="text-danger"> *</span></label>
                            <input class="form-control border border-danger border-2" type="text" value="{{ old('fatherName') }}" id="fatherName" name="fatherName" placeholder="Enter your father's name" required>
                            @error('fatherName')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror
                         </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        {{-- MOTHER NAME --}}
                        <div class="form-group col-sm-6 flex-column d-flex  py-2 ">
                            <label class="form-control-label ">Mother's Name<span class="text-danger"> *</span></label>
                            <input class="form-control border border-danger border-2" type="text" value="{{ old('motherName') }}" id="motherName" name="motherName" placeholder="Enter your mother's name" required>
                            @error('motherName')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror
                         </div>
                         {{-- GUARDIAN NAME --}}
                        <div class="form-group col-sm-6 flex-column d-flex  py-2">
                            <label class="form-control-label ">Guardian Name<span class="text-danger"> </span></label>
                            <input class="form-control border border-danger border-2" type="text" value="{{ old('guardianName') }}" id="guardianName" name="guardianName" placeholder="Enter your guardian name">
                            @error('guardianName')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror
                         </div>
                    </div>
                     <div class="row justify-content-between text-left ">
                         {{-- EMAIL PRIMARY --}}
                        <div class="form-group col-sm-6 flex-column d-flex  py-2">
                             <label class="form-control-label ">Email - Primary<span class="text-danger"> *</span></label>
                             <input class="form-control border border-danger border-2" type="email" value="{{ old('emailPrimary') }}" id="emailPrimary" name="emailPrimary" placeholder="exampla@abc.com" required>
                            @error('emailPrimary')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- ALTERNATE EMAIL --}}
                        <div class="form-group col-sm-6 flex-column d-flex  py-2">
                            <label class="form-control-label ">Email- Alternate<span class="text-danger"> </span></label>
                            <input class="form-control border border-danger border-2" type="email" value="{{ old('emailAlternate') }}" id="emailAlternate" name="emailAlternate" placeholder="exampla@abc.com" >

                         </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        {{-- CONTACT PRIMARY --}}
                        <div class="form-group col-sm-6 flex-column d-flex  py-2">
                            <label class="form-control-label ">Conatct - Primary<span class="text-danger"> *</span></label>
                            <input class="form-control border border-danger border-2" type="number" value="{{ old('contactPrimary') }}" id="contactPrimary" name="contactPrimary" placeholder="9906600000" required>
                            @error('contactPrimary')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        {{-- CONTACT ALTERNATE--}}
                        <div class="form-group col-sm-6 flex-column d-flex  py-2">
                            <label class="form-control-label ">Contact- Alternate<span class="text-danger"> </span></label>
                             <input class="form-control border border-danger border-2" type="number" value="{{ old('contactAlternate') }}" id="contactAlternate" name="contactAlternate" placeholder="9906600000" > </div>
                    </div>

                    {{-- CATEGORY --}}
                    <div class="row justify-content-between text-left py-2">
                        <div class="form-group col-12 flex-column d-flex">
                            <select class="form-select border border-danger border-2" name="category_ID" >
                            <option selected>Select Category</option>

                            @foreach ($category as $category )
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                          </select>
                          @error('cat_ID')
                          <div class="text text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="row text-center py-4">
                        <div class="form-group col-sm-12"> <button type="submit" class="btn btn-info">Submit</button> </div>
                    </div>
                </form>
            </div>
            @endif

            {{-- SHOW DETAILS ONLY IF FORM SUBMITTED --}}
            @if (Auth::user()->personal_submitted==1)
            @include('user.personal_detail.form_show')
            @endif

      @endsection
