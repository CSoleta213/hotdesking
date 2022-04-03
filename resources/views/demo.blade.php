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