@extends('frontend.layouts.app')
@section('content_main')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-5" >
                <div class="card-header">Register Form</div>
                <div class="card-body">
                    @if (session()->get('success'))
                       <div class="alert alert-danger">{{session()->get('success') }}</div>
                    @endif
                    <div class="text-center mt-5">
                        <form method="POST" action="{{ route('register_submit') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label"> Name </label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                @error('name')
                                <div class="text text-danger">{{ $message }}</div>
                                @enderror
                              </div>
                            <div class="mb-3">
                              <label for="email" class="form-label">Email address</label>
                              <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                              @error('email')
                              <div class="text text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control" name="password">
                              @error('password')
                              <div class="text text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            {{-- <div class="mb-3">
                                <label for="password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="conform_password">
                              </div> --}}


                            <button type="submit" class="btn btn-primary">Register</button>
                          </form>

                    </div>

                </div>
            </div>

        </div>
    </div>


</div>
@endsection
