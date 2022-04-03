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
            <a class="active">
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
    <h3>{{ Auth::user()->firstname }}'s Profile:</h3>
    <div style="display: flex;"><p><strong>First Name: </strong>{{ Auth::user()->firstname }}</p><br><br></div>
    <div style="display: flex;"><p><strong>Last Name: </strong>{{ Auth::user()->lastname }}</p><br><br></div>
    <div style="display: flex;"><p><strong>Email: </strong>{{ Auth::user()->email }}</p><br><br></div>
    <div style="display: flex;"><p><strong>Phone Number: </strong>{{ Auth::user()->phone_number }}</p><br><br></div>
    <div style="display: flex;"><p><strong>Employee's Number: </strong>{{ Auth::user()->employee_id_number }}</p><br><br></div>
    <div style="display: flex;"><p><strong>Office: </strong>{{ Auth::user()->office }}</p><br><br></div>
    @if (session('status'))
      <div>
        {{ session('status') }}
      </div>
    @endif
  </div>
@endsection
