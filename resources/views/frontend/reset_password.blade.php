@extends('frontend.layouts.app')
@section('content_main')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-5" >
                <div class="card-header">RESET Password</div>
                <div class="card-body">
                    <div class="text-center mt-5">
                        @if (session()->get('error'))
                <div class="alert alert-danger"><strong>{{session()->get('error') }}</strong> </div>
                 @endif

                        <form method="POST" action="{{ route('reset_password_submit') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                 <input type="hidden" name="email" value="{{ $email }}">
                            <div class="mb-3">
                                    <label for="password" class="form-label">New Password</label>
                                    <input type="password" class="form-control border border-success border-2"
                                        name="new_password">
                                    @error('new_password')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control border border-success border-2" name="confirm_password">
                                @error('confirm_password')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                              </div>



                            <button type="submit" class="btn btn-primary">Update Password</button>
                          </form>

                    </div>
                    <div><a href="{{ route('login') }}">Back To Login</a></div>
                </div>
            </div>

        </div>
    </div>


</div>
@endsection
