@extends('user.layouts.master_user')
@section('main_content')
    <h3 class="bg-info text-center">Upload Documents</h3>

    @if (Auth::user()->docs_submitted == 0)


                <form method="post" action="{{ route('documents.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="image" name="image">
                                    @error('image')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">

                                {{-- <h1>{{ $user->document_details->id }}</h1> --}}
                                <img src="/storage/{{ $user->document_details->signature }}"class="w-50" style="max-width:100px;">

                            </div>

                    </div>

                    <div class="mb-3">
                        <label for="signature" class="form-label">Signature</label>
                        <input class="form-control" type="file" id="signature" name="signature">
                        @error('signature')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Add Photograph</button>
                </form>


    @endif

    {{-- Details Show --}}
    {{-- @if (Auth::user()->edu_submitted == 1)
        @include('user.academic.form_show')
    @endif --}}
@endsection
