@extends('layouts.layout')

@section('content')
<div class="navbar">
  <a href="/">Logo</a>
  <a href="/">Home</a>
  <a href="/features">Features</a>
  <a href="/faqs">FAQs</a>
  <a href="/demo">Demo</a>
  <a href="/log-in">Log in</a>
  <a href="/sign-up">Sign up</a>
</div>

<div class="main">
  <header>
    <div>
      <h1>Demo</h1>
    </div>
  </header>
  <div>
    <h2>Lorem ipsum dolor sit amet. Ea molestiae
      explicabo a dignissimos quia qui ratione voluptatem</h2>
  </div>
  <!-- embed -->
  <div>
    <button type="button">Add Reservation</button>
    <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
      aspernatur et eligendi esse quo esse odit et sequi internos
      eos molestiae nesciunt quo quibusdam velit.</p>
  </div>
  <div>
    <button type="button">Cancel Reservation</button>
    <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
      aspernatur et eligendi esse quo esse odit et sequi internos
      eos molestiae nesciunt quo quibusdam velit.</p>
  </div>
  <div>
    <button type="button">View Dashboard</button>
    <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
      aspernatur et eligendi esse quo esse odit et sequi internos
      eos molestiae nesciunt quo quibusdam velit.</p>
  </div>
  <div>
    <button type="button">Manage Schedule</button>
    <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
      aspernatur et eligendi esse quo esse odit et sequi internos
      eos molestiae nesciunt quo quibusdam velit. sdsdsd</p>
  </div>
</div>
<style>
  h1 {
    color: #4484ff;
    text-align: center;
    font-family: Poppins;
  }
</style>
@endsection