@extends('layouts.layout')

@section('content')
<div class="navbar">
  <div class="logo">
    <div><a href="/"><img src="{{ asset('/desktiny-logo.png') }}" width="150px"></a></div>
  </div>
  <div class="menu">
    @if (Route::has('login'))
      @auth
        <div><a href="{{ url('/home') }}">Home</a></div>
      @else
        <div class="login-button"><a href="{{ route('login') }}">Log in</a></div>

        @if (Route::has('register'))
          <div><a href="{{ route('register') }}">Register</a></div>
        @endif
      @endauth
    @endif
  </div>
</div>

<div class="home">
  <h1>{{ __('Reset Password') }}</h1>

  @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
  @endif

  <form method="POST" action="{{ route('password.email') }}">
  @csrf

    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

    <br>

    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

    @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror

    <br><br>
    
    <div class="button">
      <center>
        <button type="submit" class="btn btn-primary">
          {{ __('Send Password Reset Link') }}
        </button>
      </center>
    </div>

  </form>
</div>
@endsection
