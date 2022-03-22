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
  <div class="app-fluid">
    <div class="app-desc-fluid">
      <div class="app-subtitle">
        <h1>Our App</h1>
      </div>
      <div class="app-desc">
        <p>
          Desktiny is a workspace booking software that allows employees to book their workspace from any device, anywhere, and at any time. Our App is designed to assist companies in managing workstations and making their office more accessible to everyone, resulting in a simple return to work, whether their employees choose to collaborate in the office or work remotely.
        </p>
      </div>
    </div>
    <div class="app-picture">
      <div class="blob-2"></div>
      <img src="{{ asset('/desktiny-logo.png') }}" class="app-logo">
    </div>
  </div>

</div>

@endsection