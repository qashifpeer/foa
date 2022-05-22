@extends('frontend.layouts.app')
@section('content_main')
<div class="container">
    <div class="row">
        <div class="col-md-6">


            <div class="card mt-5" >
                <div class="card-header">Forgot Password</div>
                @if (session()->get('error'))
                <div class="alert alert-danger"><strong>{{session()->get('error') }}</strong> </div>
                 @endif
                <div class="card-body">
                    <div class="text-center mt-5">
                        <form method="POST" action="{{ route('forget_password_submit') }}">
                                @csrf
                            <div class="mb-3">
                              <label for="email" class="form-label">Email address</label>
                              <input type="email" class="form-control" name="email">
                            </div>



                            <button type="submit" class="btn btn-primary">Reset Password</button>
                          </form>

                    </div>
                    <div><a href="{{ route('login') }}">Back To Login</a></div>
                </div>
            </div>

        </div>
    </div>


</div>
@endsection
