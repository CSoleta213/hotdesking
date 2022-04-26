@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <span class="text">My Calendar</span>
    </div>
    <div class="body-content">
      <center>
          <a href="/my-calendar/monthly" class="month">Monthly</a>
          <a href="/my-calendar/weekly" class="week">Weekly</a>
      </center>
    </div>
  </section>
@endsection