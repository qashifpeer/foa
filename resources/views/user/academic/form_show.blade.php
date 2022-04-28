<table class="table table-striped">

    <tbody>
      <tr>
        <th>Exam Passed</th>
        <th>Roll Number</th>
        <th>Board</th>
        <th>Session</th>
        <th>Marks Obtained</th>
        <th>Maximum Marks</th>
        <th>Percentage</th>

      </tr>
      @foreach ( $marks_data as $data)


      <tr>
          <td>{{ $data->exam }}</td>
          <td>{{ $data->rollNumber }}</td>
          <td>{{ $data->board }}</td>
          <td>{{ $data->session }}</td>
          <td>{{ $data->marksObtained }}</td>
          <td>{{ $data->maxMarks }}</td>
          <td>{{ $data->percentage }}</td>
      </tr>
      @endforeach

    </tbody>
  </table>
