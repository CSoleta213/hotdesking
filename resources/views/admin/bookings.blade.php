@extends('layouts.sidebar_admin')

@section('content')
  <section class="body-section">
    <div class="body-header">
    <h1 class="content-title">Bookings</h1>
    <p class="title-desc">"Bookings" is where you can view the list of booked desks for the next few days, weeks, and months. </p>
    </div>
    <div class="body-content">
      <div class="features">
          <!-- <label for="">Select an Office:</label>
          <select name="office" id="office" required style="margin-top: 50px">
            <option value="">--- All Offices ---</option>
            <option value="Sydney">Sydney</option>
            <option value="Victoria">Victoria</option>
            <option value="Brisbane">Brisbane</option>
          </select><br><br> -->
          <div style="display: flex; justify-content: center;">
            <a href="/admin/bookings"><div class="go-to active">List View</div></a>
            <a href="/admin/calendar-view"><div class="go-to">Calendar View</div></a>
          </div><br>
        <table class="list-table">
          <tr>
            <th>No</th>
            <th>Name of Employee</th>
            <th>Office Name</th>
            <th>Desk Number</th>
            <th>Date</th>
          </tr>
          @foreach ($bookings as $booking)
          @if($stringDateToday <= $booking->date)
          <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $booking->name }}</td>
            <td>{{ $booking->office_name }}</td>
            <td style="text-transform:uppercase">{{ $booking->desk_number }}</td>
            <td>{{ $booking->date }}</td>
          </tr>
          @endif
          @endforeach
        </table>
      </div>
    </div>
  </section>
@endsection
