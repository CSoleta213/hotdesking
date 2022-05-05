@extends('layouts.sidebar_admin')

@section('content')
  <section class="body-section">
    <div class="body-header">
    <h1 class="content-title">Bookings</h1>
    </div>
    <div class="body-content">
      <div class="features">
        <center>
          <label for="">Select an Office:</label>
          <select name="office" id="office" required style="margin-top: 50px">
            <option value="">--- All Offices ---</option>
            <option value="Sydney">Sydney</option>
            <option value="Victoria">Victoria</option>
            <option value="Brisbane">Brisbane</option>
          </select><br><br>
          <a href="#">Monthly</a>
          <a href="#">Weekly</a>
          <a href="/books">List of Books</a>
        </center><br><br>
        <table class="list-table">
          <tr>
            <th>No</th>
            <th>Name of Employee</th>
            <th>Office Name</th>
            <th>Desk Number</th>
            <th>Date</th>
          </tr>
          @foreach ($bookings as $booking)
          <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $booking->name }}</td>
            <td>{{ $booking->office_name }}</td>
            <td>{{ $booking->desk_number }}</td>
            <td>{{ $booking->date }}</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </section>
@endsection
