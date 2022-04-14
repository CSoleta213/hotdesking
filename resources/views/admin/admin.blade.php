@extends('layouts.layout')

@section('content')
  <div class="navbar">
    <div class="logo">
      <div>
        <a href="{{ url('/') }}"><img src="{{ asset('/desktiny-logo.png') }}" width="150px"></a>
      </div>
    </div>
    <div class="menu">
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
        <div>
          <a href="#">
            Welcome, {{ Auth::user()->firstname }}
          </a>
        </div>
        <div>
          <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
          </form>
        </div>
      @endguest
    </div>
  </div>
  <div class="home">
    <h1>THIS IS ADMIN HOME PAGE</h1>
    @if (session('status'))
      <div>
        {{ session('status') }}
      </div>
    @endif
  </div>
@endsection
