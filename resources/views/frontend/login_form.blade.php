@extends('frontend.layouts.app')

@section('content_main')

<section id="contact" class="get-started">
    <div class="container">

        <!-- start cta info -->
        <div class=" row text-white">
            <div class="col-12 col-lg-6 gradient shadow">
                <div class="cta-info w-100">
                    <h4 class="display-4 text-center pt-3"> Steps to Apply Online </h4>
                    <hr class="text-white">

                    <ul class="cta-info__list">
                        <li>Apply For Online Registration</li>
                        <li>Fill Online Application</li>
                        <li>Pay Entrance Exam Fee</li>
                        <li>Download Application</li>
                    </ul>
                    <div class="text-center mb-3 p-lg-5">
                        <a href="{{ route('register') }}">
                    <button type="button" class="rounded-pill btn-rounded">Registration
                        <span>
                            <i class="fas fa-people-line"></i>
                        </span>
                    </button>
                </a>
                </div>



                </div>
            </div>
            <div class="col-12 col-lg-6 bg-white shadow p-3">
                <div class="form w-100">
                    <h4 class="display-3--title" >Login to Fill your Application</h4>
                    <form class="row" method="POST" action="{{ route('login_submit') }}">
                        @csrf
                        <div class="mb-3 col-md-12 ">
                            <label for="email" class="form-label text-black">Email Address</label>
                            <input type="text" placeholder="Email Address" name="email" class="form-control shadow form-control-lg" value="{{ old('email') }}">
                            @error('email')
                                        <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="password" class="form-label text-black">Password</label>
                            <input type="password" placeholder="Password" name="password" class="form-control shadow form-control-lg  ">
                            @error('password')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="text-center col-lg-12  mt-1 d-grid">
                            <button type="submit" class="btn btn-primary rounded-pill text-white pt-3 pb-3">
                                Login
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                    <div class="mt-3 text-center">
                        <a class="small text-muted" href="{{ route('forgot_password') }}">Forgot password?</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
