@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <span class="text">My Calendar</span>
    </div>
    <div class="body-content">
      <center>
          <a href="/my-calendar/monthly" class="month">Per Month</a>
           <a href="/my-calendar/weekly" class="week">Per Week</a>
           <a href="/books" class="list">List of Books</a>
      </center>
    </div>
  </section>
@endsection