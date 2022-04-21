@extends('layouts.sidebar_admin')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <span class="text">Bookings</span>
    </div>
    <div class="body-content">
      <div class="features">
        <center>
          <label for="">Select an Office:</label>
          <select style="margin-top: 50px">
            <option>NCR</option>
            <option>Bulacan</option>
            <option>Pampanga</option>
          </select><br><br>
          <a href="#">Per Month</a>
          <a href="#">Per Day</a>
          <a href="/books">List of Books</a>
        </center><br><br>
        <table>
          <tr>
            <th>Name of Employee</th>
            <th>Desk Number</th>
            <th>Date</th>
          </tr>
          @foreach ($bookings as $booking)
          <tr>
            <td>{{ $booking->name }}</td>
            <td>{{ $booking->desk_number }}</td>
            <td>{{ $booking->date }}</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </section>
@endsection
