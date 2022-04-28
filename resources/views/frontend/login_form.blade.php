@extends('frontend.layouts.app')
@section('content_main')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">Login Form</div>
                    <div class="card-body">
                        @if (session()->get('success'))
                            <div class="alert alert-danger">{{ session()->get('success') }}</div>
                        @endif
                        <div class="text-center mt-5">
                            <form method="POST" action="{{ route('login_submit') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" value="{{ old('email') }}" name="email"
                                        placeholder="name@example.com">
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

                                <button type="submit" class="btn btn-primary">Submit</button>


                        </div>
                        </form>
                        <div>
                            <div><a href="{{ route('forgot_password') }}">Forgot Your Password</a></div>
                            <div> <a href="{{ route('forgot_password') }}">Register For New Account</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
