@extends('layouts.sidebar_admin')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <span class="text">LIST OF USERS</span>
    </div>
    <div class="body-content">
      <div class="home">
        <h1>THIS IS USERS' LIST PAGE</h1>
        @if (session('status'))
          <div>
            {{ session('status') }}
          </div>
        @endif
      </div>
    </div>
  </section>
@endsection
