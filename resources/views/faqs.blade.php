@extends('layouts.layout')

@section('content')
<div class="navbar">
  <div class="logo">
    <div><a href="/"><img src="{{ asset('/desktiny-logo.png') }}"></a></div>
  </div>
  <div class="menu">
    <div><a href="/">Home</a></div>
    <div><a href="/features">Features</a></div>
    <div><a class="active" href="/faqs">FAQs</a></div>
    <div><a href="/demo">Demo</a></div>
    @if(Session::get('booker'))
    <div><a href="http://">Welcome, {{Session::get('booker')}}</a></div>
    @else
    <div class="login-button"><a href="/log-in">Log in</a></div>
    <div><a href="/sign-up">Sign up</a></div>
    @endif
  </div>
</div>
  <div class="faqs">
    <h1>FAQs</h1>
  </div>
@endsection