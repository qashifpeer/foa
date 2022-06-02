@extends('frontend.layouts.app')
@section('content_main')
<div class="container">
    <div class="row justify-content-center py-2">
        <div class="col-md-4">
            <div class="card mt-3" >
                <div class="card-header text-center text-white bg-primary p-3 display-4">Registration</div>
                <div class="card-body">
                    @if (session()->get('success'))
                       <div class="alert alert-danger"><strong> {{session()->get('success') }}</strong></div>
                    @endif
                    <div class="text-center mt-1">
                        <form method="POST" action="{{ route('register_submit') }}">
                            @csrf
                            <div class="mb-2">
                                <label for="name" class="form-label"> Name </label>
                                <input type="text" class="form-control border border-primary border-2" name="name" value="{{ old('name') }}">
                                @error('name')
                                <div class="text text-danger">{{ $message }}</div>
                                @enderror
                              </div>
                            <div class="mb-2">
                              <label for="email" class="form-label">Email address</label>
                              <input type="email" class="form-control border border-primary border-2" name="email" value="{{ old('email') }}">
                              @error('email')
                              <div class="text text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="mb-2">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control border border-primary border-2" name="password">
                              @error('password')
                              <div class="text text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="mb-2">
                                <label for="password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control border border-primary border-2" name="confirm_password">
                                @error('confirm_password')
                              <div class="text text-danger">{{ $message }}</div>
                              @enderror
                              </div>

                              <div class="mb-3 pt-3">
                                <button type="submit" class="rounded-pill btn-rounded border-primary">Register
                                    <span>
                                        <i class="fas fa-people-line"></i>
                                    </span>
                                </button>

                        </div>
                          </form>

                    </div>

                </div>
            </div>

        </div>
    </div>


</div>
@endsection
