@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <i class='bx bx-menu' ></i>
      <span class="text">Demo</span>
    </div>
    <div class="body-content">
      <div class="features">
        <h1 class="content-title">Features</h1><br>
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
          <a href="#"><div class="columns image" style="background: #FF4269"> </div></a>
        </div>

        <!-- <div class="section-container">
          <a href="#"><div class="columns image" style="background: #F2A645"></div></a>
          <div class="columns image" id="calendar"> </div>
        </div> -->

        <div class="section-container">
          <a href="#"><div class="columns image" id="office-view"></div></a>
          
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
          <a href="{{ url('/features/desk-map') }}"><div class="columns image" style="background: #06BB87;"> </div></a>
        </div>

        <div class="section-container">
          <a href="#"><div class="columns image" id="reservation"></div></a>
          
          <div class="columns content">
            <div class="content-container reservation" style="margin-right:-70px;">
              <h5>Reservation Listings</h5>
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
    </div>
  </section>
@endsection