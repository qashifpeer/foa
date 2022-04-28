
<table class="table table-striped">

    <tbody>
        @foreach ($details as $detail )


      <tr>
        <th>Name</th>
        <td>{{$detail->firstName }} {{$detail->middleName }} {{$detail->lasttName }}</td>
      </tr>
      <tr>
        <th>Father's Name</th>
        <td>{{$detail->fatherName }}</td>
      </tr>
      <tr>
        <th>Mother's Name</th>
        <td>{{$detail->motherName }}</td>
      </tr>
      <tr>
        <th>Guardian Name</th>
        <td>{{$detail->guardianName }}</td>
      </tr>
      <tr>
        <th>Email</th>
        <td>{{$detail->emailPrimary }}</td>
      </tr>
      <tr>
        <th>Contact No.</th>
        <td>{{$detail->contactPrimary }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

