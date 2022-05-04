@extends('layouts.sidebar_admin')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">ADMIN HOME PAGE</h1>
    </div>
    <div class="body-content">
      <div class="home">
        <h1>THIS IS ADMIN HOME PAGE</h1>
        @if (session('status'))
          <div>
            {{ session('status') }}
          </div>
        @endif
      </div>
    </div>
  </section>
@endsection
