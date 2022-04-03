@extends('layouts.layout')

@section('content')
  <div class="navbar">
    <div class="logo">
      <div>
        <a href="{{ url('/') }}"><img src="{{ asset('/desktiny-logo.png') }}" width="150px"></a>
      </div>
    </div>
    <div class="menu">
      <div class="menu-option"><a class="active" href="/home">Home</a></div>
      <div class="menu-option"><a href="/features">Features</a></div>
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
              <p><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
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

  <div class="home">
    <h1>THIS IS USER HOME PAGE</h1>
    @if (session('status'))
      <div>
        {{ session('status') }}
      </div>
    @endif
    <!-- COUNT -->
    <div class="count-fluid">
      <div class="count-subtitle">
        <h1>Let's get Countin'</h1>
      </div>
      <div class="box-count">
        <!-- <div class="count-1">
          <h1>3</h1>
          <p>Offices Available</p>
        </div> -->
        <!-- <div class="count-2">
          <h1>75</h1>
          <p>Seats Available</p>
        </div> -->
        <div class="count-3">
          <h1>{{ $number_of_books }}</h1>
          <p>Occupied Desks</p>
        </div>
      </div>
    </div>
  </div>
@endsection
