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


    <div class="features">
      <h1 class="content-title">Features</h1>
      <p class="title-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, pulvinar facilisis justo mollis, auctor consequat urna.</p>
   
    
      <div class="section-container">
          <div class="columns content">
              <div class="content-container" style="margin-right: -50px;">
                <h5 style="color: #FF4269">Calendar</h5>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                  in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>        
              </div>
          </div>
          <a href="#"><div class="columns image" style="background: #FF4269"> </div></a>
       </div>

        <div class="section-container">
          <a href="#"><div class="columns image" style="background: #F2A645"></div></a>
          
          <div class="columns content" >
              <div class="content-container" style="margin-right:-70px;">
              <h5 style="color: #F2A645">Office View</h5>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                  in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>      
              </div>
          </div>
      </div>

      <div class="section-container">
          <div class="columns content">
              <div class="content-container" style="margin-right: -50px;">
                <h5 style="color: #06BB87;">Desk View</h5>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                  in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>        
              </div>
          </div>
          <a href="{{ url('/features/desk-map') }}"><div class="columns image" style="background: #06BB87;"> </div></a>
        </div>

        <div class="section-container">
          <a href="#"><div class="columns image" style="background: #F26849"></div></a>
          
          <div class="columns content">
              <div class="content-container" style="margin-right:-70px;">
              <h5 style="color: #F26849">Reservation Listings</h5>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                  in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>      
              </div>
          </div>
      </div>
       

    </div>

@endsection