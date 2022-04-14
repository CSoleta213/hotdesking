@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <span class="text">Book a desk</span>
    </div>
    <div class="body-content">
      <div class="desk-map">
        <a href="{{ url('/features/desk-map/book-a-desk') }}">1</a>
      </div>
    </div>
  </section>
@endsection