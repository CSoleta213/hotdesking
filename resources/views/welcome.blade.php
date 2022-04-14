@extends('layouts.layout')

@section('content')

<div class="navbar">
  <div class="logo">
    <div><a href="/"><img src="{{ asset('/desktiny-logo.png') }}" width="150px"></a></div>
  </div>
  <div class="menu">
    @if (Route::has('login'))
      @auth
        <div class="menu-option"><a href="{{ url('/home') }}">Home</a></div>
      @else
        <div class="menu-option login-button"><a href="{{ route('login') }}">Log in</a></div>

        @if (Route::has('register'))
          <div class="menu-option"><a href="{{ route('register') }}">Register</a></div>
        @endif
      @endauth
    @endif
  </div>
</div>

<div class="home">
  <!-- BRAND -->
  <div class="brand">
    <div class="tag-fluid">
      <div class="title">
        <h1>The desk that is <span class="span-destined"> destined </span>to work with you</h1>
      </div>
      <div class="subtitle">
        <h3>Desktiny will help you successfully transform the workspace from a place of work into a space that works.</h3>
      </div>
      <div class="button-reserve">
        <a href="/features/desk-map">Reserve a seat</a>
      </div>
    </div>
    <div class="picture-fluid">
      <div class="blob-1"></div>
      <img src="{{ asset('/worker.png') }}" class="img-worker">
    </div>
  </div>

  <!-- COUNT -->
  <!-- <div class="count-fluid">
    <div class="count-subtitle">
      <h1>Let's get Countin'</h1>
    </div>
    <div class="box-count">
      <div class="count-1">
        <h1>3</h1>
        <p>Offices Available</p>
      </div>
      <div class="count-2">
        <h1>75</h1>
        <p>Seats Available</p>
      </div>
      <div class="count-3">
        <h1>25</h1>
        <p>Occupied Desks</p>
      </div>
    </div>
  </div> -->

  <!-- OUR APP -->
  <div class="our-fluid">
    <div class="our-desc-fluid">
      <div class="our-subtitle">
        <h1>eMachines' Desktiny</h1>
      </div>
      <div class="our-desc">
        <p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desktiny is a workspace booking software that allows employees from eMachines to book their workspace from any device, anywhere, and at any time. It is designed to assist companies in managing workstations and making their office more accessible to everyone, resulting in a simple return to work, whether their employees choose to collaborate in the office or work remotely.
        </p>
      </div>
    </div>
    <div class="our-picture">
      <div class="blob-2"></div>
      <img src="{{ asset('/desktiny-logo.png') }}" class="our-logo">
    </div>
  </div>

  <!-- OUR TEAM -->
  <div class="our-fluid">
    <div class="our-picture">
      <div class="blob-2"></div>
      <img src="{{ asset('/valve.png') }}" class="our-logo">
    </div>
    <div class="our-desc-fluid">
      <div class="our-subtitle">
        <h1>eMachines Company</h1>
      </div>
      <div class="our-desc">
        <p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As  global innovators, we have a deep legacy of solving the most complex challenges of modern life. We combine advanced technology, industry-leading expertise, and  insatiable curiosity about the world around us to create sustainable solutions for the major customers we serve. To do. Our method is complicated, but the reason is simple and for a unified global purpose. We drive innovations that make the world healthier, safer, smarter and more sustainable.     
      </p>
      </div>
    </div>
  </div>

  <!-- OUR OFFICES -->
  <div class="our-fluid">
    <div class="our-desc-fluid">
      <div class="our-subtitle">
        <h1>eMachine Office Locations</h1>
      </div>
      <div class="our-desc">
        <p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Make a reservation at eMachines' nearest office to your location. Our Main office is located at 201 Elizabeth Street Sydney NSW 2000, Australia. The other 2 offices where at 27 Alick Road, Tottenham Victoria, Australia and 60 Edward Street, Brisbane City QLD 4000, Australia.
        </p>
      </div>
    </div>
    <div class="our-picture">
      <div class="blob-2"></div>
      <img src="{{ asset('/desk.png') }}" class="our-logo">
    </div>
  </div>

  <!-- DM Us -->
  <div class="dm-fluid">
    <div class="dm-subtitle">
      <h1>Need help? DM us!</h1>
      <div class="dm-desc">
        <p>
          Have an inquiry or some feedback for us? Fill out the form below to contact us. Our brillant team will get back to you as soon as possible. For Customer Support inquiries, please contact support@desktiny.com.
        </p>
      </div>
    </div>

    <div class="dm">
      <div class="dm-us">
        <form action="mailto:andreamauricedeguzman@student.laverdad.edu.ph" method="POST" enctype="multipart/form-data" name="EmailForm">
          <input type="text" name="dm-email" class="dm-email" placeholder="Enter Email"/>
          <textarea class="dm-mess" name="dm-mess" rows="06" cols="20" placeholder="Enter your message"></textarea>
          <input class="dm-button" type="submit" value="Send"/>
        </form>
      </div>
    </div>
  </div>

</div>
@endsection
