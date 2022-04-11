@extends('layouts.layout')

@section('content')
<div class="navbar">
  <div class="logo">
    <div>
      <a href="{{ url('/') }}"><img src="{{ asset('/desktiny-logo.png') }}" width="150px"></a>
    </div>
  </div>
  <div class="menu">
    <div class="menu-option"><a href="/home">Home</a></div>
    <div class="menu-option"><a href="/features">Features</a></div>
    <div class="menu-option"><a class="active" href="/demo">Demo</a></div>
    <!-- Authentication Links -->
    @guest
    @if (Route::has('login'))
    <div>
      <a href="{{ route('login') }}">{{ __('Login') }}</a>
    </div>
    @endif

    @if (Route::has('register'))
    <div>
      <a href="{{ route('register') }}">{{ __('Register') }}</a>
    </div>
    @endif
    @else
    <div class="dropdown-container">
      <div class="dropdown">
        <a>
          Welcome, {{ Auth::user()->firstname }}
        </a>
        <div class="dropdown-content">
          <p><a href="/profile">Profile</a></p>
          <p><a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a></p>

          <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
          </form>
        </div>
      </div>
    </div>
    @endguest
  </div>
</div>

<div class="demo">
  <header>
    <div class="demo-h1">
      <h1>Demo</h1>
    </div>
  </header>
  <div class="demo-h2">
    <h2>Taking a look at these tutorials might give you knowledge on how to navigate necessary features.</h2>
  </div>
  <div class="demo-desc">
    <div class="Add-Reservation">
      <!-- embed -->
      <iframe width="560" height="315" src="https://www.youtube.com/embed/2og2DbjaX0A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      <h3>Add a reservation</h3>
      <p>You can have the opportunity to book a desk of your choice in advance. You can always add a reservation whenever as long as the desk
        is not yet occupied in a specific site. In choosing a specific workstation you can always refer to the floor plan that is being shown
        and mentioned in the video. Just follow the instructions being said in the video when you want to add your reservation. </p>
    </div>
    <div class="Cancel-Reservation">
      <!-- embed -->
      <iframe width="560" height="315" src="https://www.youtube.com/embed/QYHN3Y6M5ow" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      <h3>Cancel reservation</h3>
      <p>If you can add a reservation you can cancel it anytime as well. In canceling your reservation, you just need to follow some guidelines
        and instructions mentioned in the video.</p>
    </div>
    <div class="View-Dashboard">
      <!-- embed -->
      <iframe width="560" height="315" src="https://www.youtube.com/embed/onLS-hUIMP0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      <h3>View dashboard</h3>
      <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
        aspernatur et eligendi esse quo esse odit et sequi internos
        eos molestiae nesciunt quo quibusdam velit.</p>
    </div>
    <div class="Manage-Schedule">
      <!-- embed -->
      <iframe width="560" height="315" src="https://www.youtube.com/embed/LwN3jm3fxMU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      
      <h3>Manage schedule</h3>
      <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
        aspernatur et eligendi esse quo esse odit et sequi internos
        eos molestiae nesciunt quo quibusdam velit. sdsdsd</p>
    </div>
  </div>
</div>

@endsection