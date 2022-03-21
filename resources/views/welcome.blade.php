@extends('layouts.layout')

@section('content')
    <div class="navbar">
      <div class="logo">
        <a href="/">Logo</a>
      </div>
      <div class="menu">
        <div><a class="active" href="/">Home</a></div>
        <div><a href="/features">Features</a></div>
        <div><a href="/faqs">FAQs</a></div>
        <div><a href="/demo">Demo</a></div>
      @if(Session::get('booker'))
      <div><a href="http://">Welcome, {{Session::get('booker')}}</a></div>
      @else
      <a href="/log-in"><div class="login">Log in</div></a>
      <div><a href="/sign-up" >Sign up</a></div>
      @endif
      </div>
    </div>

    <div class="main">
      <h1>Homepage</h1>
    </div>
@endsection