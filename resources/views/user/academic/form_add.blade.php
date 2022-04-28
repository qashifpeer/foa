@extends('user.layouts.master_user')
@section('main_content')
    <h3>Accademic Details</h3>
    <p></p>

    @if (Auth::user()->edu_submitted==0)

    <div class="card py-1 px-5">

        <form method="POST" action="" class="form-card">
            @csrf
            <div class="row justify-content-between text-left">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                {{-- EXAM --}}
                <div class="form-group col-sm-3 py-2 flex-column d-flex">
                    <label class="form-control-label ">Exam Passed<span class="text-danger"> *</span></label>
                    <select class="form-select" name="exam">
                        <option selected>Select Exam Passed</option>
                       <option value="10th">10th</option>
                       <option value="12th">12th</option>
                    </select>
                </div>
                {{-- ROLL NUMBER --}}
                <div class="form-group col-sm-3 flex-column d-flex py-2"> <label class="form-control-label ">Roll Number<span
                            class="text-danger"> *</span></label> <input type="text" id="rollNumber" name="rollNumber"
                        placeholder="Enter Roll Number">
                    @error('rollNumber')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- BOARD --}}
                <div class="form-group col-sm-3 py-2 flex-column d-flex">
                    <label class="form-control-label ">Board<span class="text-danger"> *</span></label>
                    <select class="form-select" name="board">
                        <option selected>Board</option>
                       <option value="JKBOSE">JKBOSE</option>
                       <option value="CBSE">CBSE</option>
                       <option value="OTHER">OTHER</option>
                    </select>
                </div>

                {{-- SESSION --}}
                <div class="form-group col-sm-3 flex-column d-flex  py-2"> <label class="form-control-label ">Session<span class="text-danger"> *</span></label> <input type="number" id="session"
                        name="session" placeholder="Session" required>
                    @error('session')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row justify-content-between text-left">

                {{-- MARKS OBTAINED --}}
                <div class="form-group col-sm-4 flex-column d-flex  py-2"> <label class="form-control-label ">Marks Obtained<span
                            class="text-danger"> *</span></label> <input type="number" id="marksObtained" name="marksObtained"
                        placeholder="Marks Obtained" required>
                    @error('marksObtained')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- MAX MARKS --}}
                <div class="form-group col-sm-4 flex-column d-flex  py-2"> <label class="form-control-label ">Maximum Marks<span class="text-danger"> *</span></label> <input type="number" id="maxMarks"
                        name="maxMarks" placeholder="Maximum Marks" required>
                    @error('maxMarks')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- PERCENTAGE --}}
                <div class="form-group col-sm-4 flex-column d-flex  py-2"> <label class="form-control-label ">Percentage<span
                            class="text-danger"> *</span></label> <input type="percentage" id="number" name="percentage"
                        placeholder="% marks" required>
                    @error('percentage')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row justify-content-end py-4">
                <div class="form-group col-sm-6"> <button type="submit" class="btn btn-primary">Submit</button> </div>
            </div>
        </form>
    </div>
    @endif

    {{-- Details Show  --}}
    @if (Auth::user()->edu_submitted==1)
    @include('user.academic.form_show')
    @endif
@endsection
