@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
    <h1 class="content-title">Office Map</h1>
    </div>
    <div class="body-content">
      @if(session('error'))
      <div class="alert-fail">
        {{ session('error') }}
      </div><br>
      @endif
      <div class="desk-map" style="margin-top: -30px;">
        <a class="btn btn-primary go-to" href="{{ route('books.index') }}" >Go to My Bookings</a>
        <img src="{{ asset('/office-view-with-code.png') }}" alt="Desk View" width="100%" style="margin-top: 50px;">
      </div>
    </div>
  </section>
@endsection
