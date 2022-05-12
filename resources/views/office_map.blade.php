@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
    <h1 class="content-title">Office Map</h1>
    </div>
    <div class="body-content">
      <div class="desk-map">
        <a class="btn btn-primary go-to" href="{{ route('books.index') }}">Go to My Bookings</a>
        <img src="{{ asset('/office-view-with-code.png') }}" alt="Desk View" width="100%">
      </div>
    </div>
  </section>
@endsection
