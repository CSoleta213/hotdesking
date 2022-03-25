@extends('layouts.layout')

@section('content')
<div class="navbar">
  <div class="logo">
    <div><a href="/"><img src="{{ asset('/desktiny-logo.png') }}"></a></div>
  </div>
  <div class="menu">
    <div><a href="/">Home</a></div>
    <div><a href="/features">Features</a></div>
    <div><a href="/faqs">FAQs</a></div>
    <div><a class="active" href="/demo">Demo</a></div>
    @if(Session::get('booker'))
    <div><a href="http://">Welcome, {{Session::get('booker')}}</a></div>
    @else
    <div class="login-button"><a href="/log-in">Log in</a></div>
    <div><a href="/sign-up">Sign up</a></div>
    @endif
  </div>
</div>

<div class="main-demo">
  <header>
    <div>
      <h1>Demo</h1>
    </div>
  </header>
  <div>
    <h2>Lorem ipsum dolor sit amet. Ea molestiae
      explicabo a dignissimos quia qui ratione voluptatem</h2>
  </div>
  <!-- embed -->
  <div>
    <button type="button">Add Reservation</button>
    <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
      aspernatur et eligendi esse quo esse odit et sequi internos
      eos molestiae nesciunt quo quibusdam velit.</p>
  </div>
  <!-- embed -->
  <div>
    <button type="button">Cancel Reservation</button>
    <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
      aspernatur et eligendi esse quo esse odit et sequi internos
      eos molestiae nesciunt quo quibusdam velit.</p>
  </div>
  <!-- embed -->
  <div>
    <button type="button">View Dashboard</button>
    <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
      aspernatur et eligendi esse quo esse odit et sequi internos
      eos molestiae nesciunt quo quibusdam velit.</p>
  </div>
  <!-- embed -->
  <div>
    <button type="button">Manage Schedule</button>
    <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
      aspernatur et eligendi esse quo esse odit et sequi internos
      eos molestiae nesciunt quo quibusdam velit. sdsdsd</p>
  </div>
</div>

@endsection