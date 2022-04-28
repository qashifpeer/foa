@extends('master')
@section('dashboard')
<table class="table">

   
    <tbody>

        <tr>
        <th >First Name</th>
        <td>{{ $details->fName }}</td>
      </tr>
      <tr>
        <th >MIddle Name</th>
        <td>{{ $details->user->role }}</td>
      </tr>
      <tr>
        <th >Last Name</th>
        <td>{{ $details->lName }}</td>
      </tr>
      <tr>
        <th >Father's Name</th>
        <td>{{ $details->fatherName }}</td>
      </tr>
      <tr>
        <th >Mother's Name</th>
        <td>{{ $details->motherName }}</td>
      </tr>

    </tbody>
  </table>



@endsection
