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
        <a href="/log-in">Reserve a seat</a>
      </div>
    </div>
    <div class="picture-fluid">
      <div class="blob-1"></div>
      <img src="{{ asset('/perspective_matte.png') }}" class="img-desk">
    </div>
  </div>

  <!-- COUNT -->
  <div class="count-fluid">
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
  </div>

  <!-- OUR APP -->
  <div class="our-fluid">
    <div class="our-desc-fluid">
      <div class="our-subtitle">
        <h1>Our App</h1>
      </div>
      <div class="our-desc">
        <p>
          Desktiny is a workspace booking software that allows employees to book their workspace from any device, anywhere, and at any time. Our App is designed to assist companies in managing workstations and making their office more accessible to everyone, resulting in a simple return to work, whether their employees choose to collaborate in the office or work remotely.
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
      <img src="{{ asset('/team.png') }}" class="our-logo">
    </div>
    <div class="our-desc-fluid">
      <div class="our-subtitle">
        <h1>Our Team</h1>
      </div>
      <div class="our-desc">
        <p>
          We are a team of aspiring managers, designers, and developers that want to take part in this digital era by focusing on building a user-friendly desk booking system. We wanted to create something that is helpful and significant as to post-pandemic in every workspace. Our product plays as a fate-maker for every employee's desired desk in an actual office.
        </p>
      </div>
    </div>
  </div>

  <!-- OUR OFFICES -->
  <div class="our-fluid">
    <div class="our-desc-fluid">
      <div class="our-subtitle">
        <h1>Our Offices</h1>
      </div>
      <div class="our-desc">
        <p>
          Make a reservation at the nearest office to your location. Our Main office is located at 4th Ave, Bonifacio Global City 1634 Taguig City. The other 2 offices where at Gueco Street, Pulung Maragul, Angeles City, Pampanga and 143 St. MacArthur Hi-way, Malolos, Bulacan.
        </p>
      </div>
    </div>
    <div class="our-picture">
      <div class="blob-2"></div>
      <img src="{{ asset('/Building.png') }}" class="our-logo">
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
      <div class="dm-faq">
        FAQ
      </div>
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