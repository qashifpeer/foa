@extends('user.layouts.master_user')
@section('main_content')
    <h3 class="bg-info text-center">Accademic Details</h3>
    <p></p>

    @if (Auth::user()->edu_submitted == 0)
        <div class="card py-1 px-5 bg-info bg-opacity-25">

            <form method="POST" action="" class="form-card">
                @csrf
                <div class="row justify-content-between text-left">
                    <div class="col-sm-12">

                        <span class="badge rounded-pill bg-danger">10th Class Details</span>
                    </div>
                </div>

                {{-- Details of 10th Class  --}}
                <div class="row justify-content-between text-left">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">


                    {{-- ROLL NUMBER --}}
                    <div class="form-group col-sm-4 flex-column d-flex  py-2">
                        <label class="form-control-label ">Roll Number<span class="text-danger"> *</span></label>
                        <input class="form-control border border-success border-1" type="number"
                            value="{{ old('rollNumber_10th') }}" id="rollNumber_10th" name="rollNumber_10th" required>
                        @error('10th_rollNumber')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    {{-- BOARD --}}
                    <div class="form-group col-sm-4 py-2 flex-column d-flex">
                        <label class="form-control-label ">Board<span class="text-danger"> *</span></label>
                        <select class="form-select border border-success border-1" name="board_10th">
                            <option selected>Board</option>
                            <option value="JKBOSE">JKBOSE</option>
                            <option value="CBSE">CBSE</option>
                            <option value="OTHER">OTHER</option>
                        </select>
                    </div>

                    {{-- SESSION --}}
                    <div class="form-group col-sm-4 flex-column d-flex  py-2">
                        <label class="form-control-label ">Session<span class="text-danger"> *</span></label>
                        <input class="form-control border border border-success border-1" type="number" id="session_10th"
                            name="session_10th" placeholder="Year Of Passing" required>
                        @error('session_10th')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>



                </div>


                <div class="row justify-content-between text-left">

                    {{-- MARKS OBTAINED --}}
                    <div class="form-group col-sm-4 flex-column d-flex  py-2"> <label class="form-control-label ">Marks
                            Obtained<span class="text-danger"> *</span></label>
                        <input class="form-control border border border-success border-1" type="number"
                            id="marksObtained_10th" name="marksObtained_10th" placeholder="Marks Obtained" required>
                        @error('marksObtained_10th')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- MAX MARKS --}}
                    <div class="form-group col-sm-4 flex-column d-flex  py-2"> <label class="form-control-label ">Maximum
                            Marks<span class="text-danger"> *</span></label>
                        <input class="form-control border border-success border-1" type="number" id="maxMarks_10th"
                            name="maxMarks_10th" placeholder="Maximum Marks" required>
                        @error('maxMarks_10th')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- PERCENTAGE --}}
                    <div class="form-group col-sm-4 flex-column d-flex  py-2"> <label
                            class="form-control-label ">Percentage<span class="text-danger"> *</span></label>
                        <input class="form-control border border-success border-1" type="number" id="percentage_10th"
                            name="percentage_10th" placeholder="% marks" required>
                        @error('percentage_10th')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div> {{-- //10th class row ends --}}
                <hr>

                <span class="badge rounded-pill bg-danger">12th Class Details</span>

                {{-- Details of 12th Class  --}}
                <div class="row justify-content-between text-left">

                    {{-- ROLL NUMBER --}}
                    <div class="form-group col-sm-4 flex-column d-flex  py-2">
                        <label class="form-control-label ">Roll Number<span class="text-danger"> *</span></label>
                        <input class="form-control border border-success border-1" type="number"
                            value="{{ old('rollNumber_12th') }}" id="rollNumber_12th" name="rollNumber_12th" required>
                        @error('rollNumber_12th')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    {{-- BOARD --}}
                    <div class="form-group col-sm-4 py-2 flex-column d-flex">
                        <label class="form-control-label ">Board<span class="text-danger"> *</span></label>
                        <select class="form-select border border-success border-1" name="board_12th">
                            <option selected>Board</option>
                            <option value="JKBOSE">JKBOSE</option>
                            <option value="CBSE">CBSE</option>
                            <option value="OTHER">OTHER</option>
                        </select>
                    </div>

                    {{-- SESSION --}}
                    <div class="form-group col-sm-4 flex-column d-flex  py-2">
                        <label class="form-control-label ">Session<span class="text-danger"> *</span></label>
                        <input class="form-control border border border-success border-1" type="number" id="session_12th"
                            name="session_12th" placeholder="Year Of Passing" required>
                        @error('session_12th')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>



                </div>{{-- //row ends --}}

                <div class="row justify-content-between text-left">

                    {{-- MARKS OBTAINED --}}
                    <div class="form-group col-sm-4 flex-column d-flex  py-2"> <label class="form-control-label ">Marks
                            Obtained<span class="text-danger"> *</span></label>
                        <input class="form-control border border border-success border-1" type="number"
                            id="marksObtained_12th" name="marksObtained_12th" placeholder="Marks Obtained" required>
                        @error('marksObtained_12th')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- MAX MARKS --}}
                    <div class="form-group col-sm-4 flex-column d-flex  py-2"> <label class="form-control-label ">Maximum
                            Marks<span class="text-danger"> *</span></label>
                        <input class="form-control border border-success border-1" type="number" id="maxMarks_12th"
                            name="maxMarks_12th" placeholder="Maximum Marks" required>
                        @error('maxMarks_12th')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- PERCENTAGE --}}
                    <div class="form-group col-sm-4 flex-column d-flex  py-2"> <label
                            class="form-control-label ">Percentage<span class="text-danger"> *</span></label>
                        <input class="form-control border border-success border-1" type="number" id="percentage_12th"
                            name="percentage_12th" placeholder="% marks" required>
                        @error('percentage_12th')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div> {{-- //row ends --}}



                <div class="row text-center py-4 ">
                    <div class="form-group col-sm-12"> <button type="submit" class="btn btn-info">Submit</button> </div>
                </div>
            </form>
        </div>
    @endif

    {{-- Details Show --}}
    @if (Auth::user()->edu_submitted == 1)
        @include('user.academic.form_show')
    @endif
@endsection
