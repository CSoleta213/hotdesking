@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <span class="text">My Calendar</span>
    </div>
    <div class="body-content">
      <center>
        <a href="/my-calendar/monthly">Per Month</a>
        <a href="/my-calendar/daily">Per Day</a>
        <a href="/books">List of Books</a>
      </center>
    </div>
  </section>
@endsection