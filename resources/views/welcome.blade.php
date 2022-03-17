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
      <a href="/sign-up" >Sign up</a>
      @endif
    </div>

    <div class="main">
      <h1>Homepage</h1>
    </div>
@endsection