
@extends('user.layouts.master_user')

@section('main_content')

<h2>User Dashboard</h2>
<span class="badge rounded-pill @if (Auth::user()->personal_submitted==1)
    bg-success
@else
bg-danger
@endif ">Personal Info</span>

<span class="badge rounded-pill @if (Auth::user()->edu_submitted==1)
    bg-success
@else
bg-danger
@endif ">Academic Info</span>

<span class="badge rounded-pill @if (Auth::user()->docs_submitted==1)
    bg-success
@else
bg-danger
@endif ">Academic Info</span>



@endsection
