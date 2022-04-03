@extends('layouts.layout')

@section('content')
<div class="navbar">
  <div class="logo">
    <div><a href="/dashboard"><img src="{{ asset('/desktiny-logo.png') }}"></a></div>
  </div>
  <div class="menu">
    <div><a href="/dashboard">Dashboard</a></div>
    <div><a class="active" href="/features">Features</a></div>
    <div><a href="/faqs">FAQs</a></div>
    <div><a href="/demo">Demo</a></div>
    @if(Session::get('booker'))
    <div><a href="http://">Welcome, {{Session::get('booker')}}</a></div>
    @else
    <div class="login-button"><a href="/log-in">Log in</a></div>
    <div><a href="/sign-up">Sign up</a></div>
    @endif
  </div>
</div>


    <div class="features">
      <h1 class="content-title">Features</h1>
      <p class="title-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, pulvinar facilisis justo mollis, auctor consequat urna.</p>
   
    
      <div class="section-container">
          <div class="columns content">
              <div class="content-container calendar" style="margin-right: -50px;">
                <h5>Calendar</h5>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                  in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>        
              </div>
          </div>
          <div class="columns image" id="calendar"> </div>
       </div>

        <div class="section-container">
          <div class="columns image" id="office-view"></div>
          
          <div class="columns content" >
              <div class="content-container office-view" style="margin-right:-70px;">
              <h5>Office View</h5>
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
              <div class="content-container desk-view" style="margin-right: -50px;">
                <h5>Desk View</h5>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                  in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>        
              </div>
          </div>
          <div class="columns image" id="desk-view"> </div>
        </div>

        <div class="section-container">
          <div class="columns image" id="reservation"></div>
          
          <div class="columns content">
              <div class="content-container reservation" style="margin-right:-70px;">
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