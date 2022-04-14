@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <span class="text">My Bookings</span>
    </div>
    <div class="body-content">
      <div class="features">
        <table>
          <tr>
            <th>Name of Employee</th>
            <th>Desk Number</th>
            <th>Date</th>
          </tr>
          @foreach ($my_bookings as $my_booking)
          <tr>
            <td>{{ $my_booking->name }}</td>
            <td>{{ $my_booking->desk_number }}</td>
            <td>{{ $my_booking->date }}</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </section>
@endsection