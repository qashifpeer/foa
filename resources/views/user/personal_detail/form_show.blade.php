
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

  @if (Auth::user()->edu_submitted == 0)

  <div class="row text-center">
    <div class="col-md-12">
        <a href="{{ route('academic.index') }}">
        <button type="button" class="btn btn-info btn-rounded">Proceed To Next Level
            {{-- <span>
                <i class="fas fa-people-line"></i>
            </span> --}}
        </button>
    </a>
    </div>
  </div>
  @endif

