@extends('frontend.layouts.app')
@section('content_main')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-5" >
                <div class="card-header">RESET Password</div>
                <div class="card-body">
                    <div class="text-center mt-5">

                        <form method="POST" action="{{ route('reset_password_submit') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                 <input type="hidden" name="email" value="{{ $email }}">
                            <div class="mb-3">
                              <label for="password" class="form-label">New Password</label>
                              <input type="password" class="form-control" name="new_password">
                            </div>
                            {{-- <div class="mb-3">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password">
                              </div> --}}


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
