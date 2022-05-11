@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header" style="margin-bottom: -50px;">
      <h1 class="content-title">My Calendar</h1>
    </div>
    <div class="body-content" style="padding:0; ">
      <center>
          <a href="/my-calendar/monthly" class="monthbtn">Monthly</a>
          <a href="/my-calendar/weekly" class="week">Weekly</a>
      </center>


    </div>
  </section>
@endsection