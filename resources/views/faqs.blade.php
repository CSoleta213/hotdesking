@extends('layouts.layout')

@section('content')
    <div class="navbar">
      <div class="logo">
        <a href="/">Logo</a>
      </div>
      <div class="menu">
        <div><a href="/">Home</a></div>
        <div><a href="/features">Features</a></div>
        <div><a class="active" href="/faqs">FAQs</a></div>
        <div><a href="/demo">Demo</a></div>
        <div><a href="/log-in">Log in</a></div>
        <div><a href="/sign-up" >Sign up</a></div>
      </div>
    </div>

    <div class="main">
      <h1>FAQs</h1>
    </div>
@endsection