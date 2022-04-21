<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Sora&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ url('/desktiny-d.png') }}">
    <script src="https://kit.fontawesome.com/80a2a00cbd.js" crossorigin="anonymous"></script>
    <title>Desktiny</title>

    <style>
      html, body {
        height: 100%;
      }
      h2 {
        margin: 5%;
      }
      .container {
        display: flex;
        height: 100%;
        margin: 0;
      }
      .left {
        width: 50%;
        /* background: #343799; */
        align-items: center;
        justify-content: center;
        display: flex;
      }
      .logo-d{
        height: 300px;
        width: auto;
      }
      .right {
        width: 50%;
        background: #FFFFFF;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }
      form {
        margin-top: 5%;
        width: 60%;
        justify-content: center;
        align-items: center;
      }
      a {
        text-decoration: none;
      }
      .checkbox-with-label{
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="left">
        <div class="logo">
          <a href="/">
            <img src="{{ asset('/full-logo.png') }}" alt="" class="logo-d">
          </a>
        </div>
      </div>
      <div class="right">
        <h2 style="text-align:center;">Welcome Desky!</h2>
        <p>Join in reserving the best destined seat for you</p>
        <form method="POST" action="{{ route('login') }}">
          @csrf

          <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror

          <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror

          <div class="checkbox-with-label">
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="width: 5%">

          <label class="form-check-label" for="remember" style="width: 45%">
            {{ __('Remember Me') }}
          </label>
          
          @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
              <div style="text-align: right;">{{ __('Forgot Your Password?') }}</div>
            </a>
          @endif
          </div>

          <br>

          <div class="button">
            <center>
              <button type="submit">
                {{ __('Log in') }}
              </button><br>
            </center>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
