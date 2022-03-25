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

<div class="demo">
  <header>
    <div class="demo-h1">
      <h1>Demo</h1>
    </div>
  </header>
  <div class="demo-h2">
      <h2>Lorem ipsum dolor sit amet. Ea molestiae
        explicabo a dignissimos quia qui ratione voluptatem</h2>
  </div>
  <div class="demo-desc">
    <div>
      <!-- embed --> 
      <div class="Add-Reservation"></div>
        <h3>Add a reservation</h3>
        <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
            aspernatur et eligendi esse quo esse odit et sequi internos
            eos molestiae nesciunt quo quibusdam velit.</p>
    </div>
    <div>
      <!-- embed --> 
      <div class="Cancel-Reservation"></div>
        <h3>Cancel reservation</h3>
        <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
          aspernatur et eligendi esse quo esse odit et sequi internos
          eos molestiae nesciunt quo quibusdam velit.</p>
    </div>
    <div>
      <!-- embed -->
      <div class="View-Dashboard"></div>
        <h3>View dashboard</h3>
        <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
          aspernatur et eligendi esse quo esse odit et sequi internos
          eos molestiae nesciunt quo quibusdam velit.</p>
    </div>
    <div>
      <!-- embed -->
      <div class="Manage-Schedule"></div>
        <h3>Manage schedule</h3>
        <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
          aspernatur et eligendi esse quo esse odit et sequi internos
          eos molestiae nesciunt quo quibusdam velit. sdsdsd</p>
    </div>
  </div>
</div>

@endsection