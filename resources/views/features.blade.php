@extends('layouts.layout')

@section('content')
    <div class="navbar">
      <a href="/">Logo</a>
      <a href="/">Home</a>
      <a href="/features">Features</a>
      <a href="/faqs">FAQs</a>
      <a href="/demo">Demo</a>
      @if(Session::get('booker'))
      <a href="http://">Welcome, {{Session::get('booker')}}</a>
      @else
      <a href="/log-in">Log in</a>
      <a href="/sign-up">Sign up</a>
      @endif
    </div>


    <div class="main">
      <h1 class="content-title">Features</h1>
      <p class="title-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, pulvinar facilisis justo mollis, auctor consequat urna.</p>
   
    
      <div class="section-container">
          <div class="columns content">
              <div class="content-container">
                <h5 style="color: #FF4269">Calendar</h5>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                  in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                </p>        
              </div>
          </div>
          <div class="columns image" style="background: #FF4269"> </div>
       </div>

        <div class="section-container">
          <div class="columns image" style="background: #F2A645"></div>
          
          <div class="columns content" >
              <div class="content-container" style="margin-left:50px;">
              <h5 style="color: #F2A645">Calendar</h5>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                  in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                </p>      
              </div>
          </div>
      </div>

      <div class="section-container">
          <div class="columns content">
              <div class="content-container">
                <h5 style="color: #06BB87;">Calendar</h5>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                  in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                </p>        
              </div>
          </div>
          <div class="columns image" style="background: #06BB87;"> </div>
        </div>

        <div class="section-container">
          <div class="columns image" style="background: #F26849"></div>
          
          <div class="columns content">
              <div class="content-container" style="margin-left:50px;">
              <h5 style="color: #F26849">Calendar</h5>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                  in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                </p>      
              </div>
          </div>
      </div>
       

    </div>

@endsection