@extends('layouts.sidebar_admin')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <span class="text">Bookings</span>
    </div>
    <div class="body-content">
      <div class="features">
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