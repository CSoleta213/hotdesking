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
    <div class="menu-option"><a class="active" href="/features">Features</a></div>
    <div class="menu-option"><a href="/demo">Demo</a></div>
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


<div class="features">
  <h1 class="content-title">Features</h1>
  <p class="title-desc">The simplest and most configurable application for booking and managing your desks and meeting rooms.</p>


  <div class="section-container">
    <div class="columns content">
      <div class="content-container calendar" style="margin-right: -50px;">
        <h5>Calendar</h5>
        <p>
          Desktiny calendar provides you with an overview of all bookings in the days, weeks or even months ahead.
          It is where you can see other employees booking, as well as the date and duration of the booking.
          You can also click over other bookings for more information.
        </p>
      </div>
    </div>
    <a href="#">
      <div class="columns image" style="background: #FF4269"> </div>
    </a>
  </div>

  <!-- <div class="section-container">
          <a href="#"><div class="columns image" style="background: #F2A645"></div></a>
          <div class="columns image" id="calendar"> </div>
       </div> -->

  <div class="section-container">
    <a href="#">
      <div class="columns image" id="office-view"></div>
    </a>

    <div class="columns content">
      <div class="content-container office-view" style="margin-right:-70px;">
        <h5>Office View</h5>
        <p>
          Want to explore the office? Our intuitive floor plan maps will give you an instant overview of the entire
          office and space availability – all in one single screen, anytime and anywhere. View office amenities such
          as pantry area, restroom, meeting rooms, as well as the entrance and exit. Making your trip to the office
          a familiar one.
        </p>
      </div>
    </div>
  </div>

  <div class="section-container">
    <div class="columns content">
      <div class="content-container desk-view" style="margin-right: -50px;">
        <h5>Desk View</h5>
        <p>
          Don’t know what desk to reserve? Our desk view provides an unbeatable overview of available and occupied desks
          in the office. Making it easier to find the right desk for you or a free desk next to your team member.
          Once you’ve spotted a space you like, simply click on the desk and book it.
        </p>
      </div>
    </div>
    <a href="{{ url('/features/desk-map') }}">
      <div class="columns image" style="background: #06BB87;"> </div>
    </a>
  </div>

  <div class="section-container">
    <a href="#">
      <div class="columns image" id="reservation"></div>
    </a>

    <div class="columns content">
      <div class="content-container reservation" style="margin-right:-70px;">
        <h5>Reservation Listings</h5>
        <p>
          Our reservation Listing is where you can view and manage your booked/reserved desk for the next few days,
          weeks and months. Here you can search and filter your booking data. You can also edit your existing bookings
          if you like.
        </p>
      </div>
    </div>
  </div>


</div>

@endsection