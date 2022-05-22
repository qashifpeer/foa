@extends('frontend.layouts.app')
@section('content_main')
    <div class="container-fluid ">
        <div class="row justify-content-center py-2">
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="card-header text-center bg-info"><strong>Login Form</strong></div>
                    <div class="card-body">
                        @if (session()->get('error'))
                            <div class="alert alert-danger"><strong> {{ session()->get('error') }}</strong></div>
                        @endif
                        <div class="text-center mt-3">
                            <form method="POST" action="{{ route('login_submit') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control border border-success border-2" value="{{ old('email') }}" name="email"
                                        placeholder="name@example.com">
                                    @error('email')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control border border-success border-2" name="password">
                                    @error('password')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-info">Submit</button>


                        </div>
                        </form>
                        <div class="mt-3">
                            <a class="small text-muted" href="{{ route('forgot_password') }}">Forgot password?</a>
                            <p class="mb-3 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="{{ route('register') }}" style="color: #393f81;">Register here</a></p>

                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
