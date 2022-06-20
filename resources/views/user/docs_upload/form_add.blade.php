@extends('user.layouts.master_user')
@section('main_content')
    <h3 class="bg-primary text-center">Upload Documents</h3>

    @if (Auth::user()->docs_submitted == 0)


                {{-- upload photograph --}}
    <div class="row justify-content-center bg-light">
        <div class="col-md-6 p-3">
            <div class="card m-3">
                <div class="card-header">
                    <h3>Upload Documents</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('documents.store') }}" enctype="multipart/form-data">
                        @csrf
                    <div class="mb-3">
                        <label for="image" class="form-label">Photograph</label>
                        <input class="form-control" type="file" id="image" name="image">
                        @error('image')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="signature" class="form-label">Signature</label>
                        <input class="form-control" type="file" id="signature" name="signature">
                        @error('signature')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>

        </div>{{-- end col-7 --}}

    </div>  {{-- Row ends --}}

    @endif




    {{-- Details Show --}}
    @if (Auth::user()->docs_submitted == 1)
        {{-- @include('user.docs_upload.form_show') --}}


{{-- View Docs --}}
<div class="container">
    <div class="row">
        <div class="col md-12">
            <div class="row">
                @foreach ($image_data as $image)
            <div class="col-md-6">

                <img class="img-thumbnail" style="height:100px" src="{{ asset('storage/images/' . $image->photo) }}">

            <h3>Photograph</h3>
            </div>
            <div class="col-md-6">

                <img class="img-thumbnail" style="height:100px" src="{{ asset('storage/images/' . $image->signature) }}">

            <h3>Signature</h3>
            </div>
            @endforeach
        </div>


        </div>
    </div>
</div>


    @endif
@endsection
