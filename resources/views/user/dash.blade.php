@extends('user.layouts.master_user')

@section('main_content')
    <h1 class="border border-shadow  text-center bg-light fw-bold p-3"><i class="far fa-user"></i> Student Dashboard</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header bg-primary">
                    <h3><i class="fas fa-align-left"></i> Activities </h3>
                </div>

                {{-- personal info --}}
                <div class="card-body">
                    <div class="rounded shadow p-2">
                        <h4 class="shadow p-2">
                            @if (Auth::user()->personal_submitted == 1)

                                <span class="badge rounded-pill bg-success">  <i class="fa-solid pe-2 fa-circle-check"></i>Completed</span>
                            @else

                                <span class="badge rounded-pill bg-danger"><i class="fa-solid fa-circle-xmark"></i>Incomplete</span>
                            @endif
                           <a class="text-decoration-none fw-bold text-reset" href="{{ route('details.index') }}">Personal-Info</a>
                        </h4>
                    </div>
                </div>

                {{-- academic info --}}
                <div class="card-body">
                    <div class="rounded shadow p-2">
                        <h4 class="shadow p-2">
                            @if (Auth::user()->edu_submitted == 1)

                                <span class="badge rounded-pill bg-success">  <i class="fa-solid pe-2 fa-circle-check"></i>Completed</span>
                            @else

                                <span class="badge rounded-pill bg-danger"><i class="fa-solid fa-circle-xmark"></i>Incomplete</span>
                            @endif
                            <a class="text-decoration-none fw-bold text-reset" href="{{ route('academic.index') }}">Academic-Info</a>
                        </h4>
                    </div>
                </div>

                {{-- Document info --}}
                <div class="card-body">
                    <div class="rounded shadow p-2">
                        <h4 class="shadow p-2">
                            @if (Auth::user()->docs_submitted == 1)

                                <span class="badge rounded-pill bg-success">  <i class="fa-solid pe-2 fa-circle-check"></i>Completed</span>
                            @else

                                <span class="badge rounded-pill bg-danger"><i class="fa-solid fa-circle-xmark"></i>Incomplete</span>
                            @endif
                            <a class="text-decoration-none fw-bold text-reset" href="{{ route('documents.index') }}">Document-Info</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>


@endsection
