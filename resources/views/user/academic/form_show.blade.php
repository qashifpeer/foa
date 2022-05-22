<span class="badge rounded-pill bg-success">10th Class Details</span>
<table class="table table-striped">

    <tbody>
      <tr>
        <th>Roll Number</th>
        <th>Board</th>
        <th>Session</th>
        <th>Marks Obtained</th>
        <th>Maximum Marks</th>
        <th>Percentage</th>

      </tr>
      @foreach ( $marks_data as $data)


      <tr>

          <td>{{ $data->rollNumber_10th }}</td>
          <td>{{ $data->board_10th }}</td>
          <td>{{ $data->sesion_10th}}</td>
          <td>{{ $data->marksObtained_10th}}</td>
          <td>{{ $data->maxMarks_10th }}</td>
          <td>{{ $data->percentage_10th }}</td>
      </tr>
      @endforeach

    </tbody>
  </table>
  <hr>
  <span class="badge rounded-pill bg-success">12th Class Details</span>
  <table class="table table-striped">

    <tbody>
      <tr>
        <th>Roll Number</th>
        <th>Board</th>
        <th>Session</th>
        <th>Marks Obtained</th>
        <th>Maximum Marks</th>
        <th>Percentage</th>

      </tr>
      @foreach ( $marks_data as $data)


      <tr>

          <td>{{ $data->rollNumber_12th }}</td>
          <td>{{ $data->board_12th }}</td>
          <td>{{ $data->sesion_12th}}</td>
          <td>{{ $data->marksObtained_12th}}</td>
          <td>{{ $data->maxMarks_12th }}</td>
          <td>{{ $data->percentage_12th }}</td>
      </tr>
      @endforeach

    </tbody>
  </table>

