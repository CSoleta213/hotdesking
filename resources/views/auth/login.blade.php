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
    <script id="6284ca190d8c86492be82cbf" src="https://dashboard.chatfuel.com/integration/fb-entry-point.js" async defer></script>
  <!-- <div class="navbar" id="myTopnav"> -->
  <!-- <div class="logo">
    <div class="hide"><a href="/"><img src="{{ asset('/desktiny-d.png') }}" width="30px"></a></div>
    <div><a href="/"><img src="{{ asset('/desktiny-logo.png') }}" width="250px"></a></div>
  </div> -->
  <!-- <div class="menu">
    @if (Route::has('login'))
      @auth
        @if(Auth::user()->is_admin === 1)
        <div class="menu-option menu-hide"><a href="{{ url('/admin/home') }}">Admin's View</a></div>
        <div class="menu-option menu-hide"><a href="{{ url('/home') }}">Employee's View</a></div>
        <div class="menu-option">
            <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars"></i></button>
            <div id="myDropdown" class="dropdown-content">
              <br>
              <div><a href="{{ url('/admin/home') }}">Admin's View</a></div><br>
              <div><a href="{{ url('/home') }}">Employee's View</a></div>
              <br>
            </div>
          </div>
        @else
        <div class="menu-option"><a href="{{ url('/home') }}">Home</a></div>
        @endif
      @else
        <div class="menu-option login-button menu-hide"><a href="{{ route('login') }}">Log in</a></div>

        @if (Route::has('register'))
          <div class="menu-option menu-hide"><a href="{{ route('register') }}">Register</a></div>
          <div class="menu-option">
            <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars"></i></button>
            <div id="myDropdown" class="dropdown-content">
              <br>
              <div><a href="{{ route('login') }}">Login</a></div><br>
              <div><a href="{{ route('register') }}">Sign up</a></div>
              <br>
            </div>
          </div>
        @endif
      @endauth
    @endif
  </div>
</div>

<script> -->
<!-- /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */ -->
<!-- function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show-down");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show-down')) {
        openDropdown.classList.remove('show-down');
      }
    }
  }
}
</script> -->
    <div class="container">
      <div class="left">
        <div class="logo">
          <a href="/" style="display: flex; flex-direction: column; justify-content: center; align-items: center">
            <img src="{{ asset('/desktiny-d.png') }}" alt="Logo" class="logo-d"><br>
            <img src="{{ asset('/desktiny-logo.png') }}" style="width: 550px;">
          </a>
        </div>
      </div>
      <div class="right">
        <h2 style="text-align:center;">Welcome Desky!</h2>
        <p>Join in reserving the best destined seat for you</p>

        <br><br>

        @if (Route::has('login'))
      @auth
        @if(Auth::user()->is_admin === 1)
        <div style="display: flex;">
          <a href="{{ url('/admin/home') }}"><div class="go-to">Admin's View</div></a>
          <a href="{{ url('/home') }}"><div class="go-to">Employee's View</div></a>
          <a href="/books"><div class="go-to">Reserve a seat</div></a>
        </div>
        @else
        <div style="display: flex;">
          <a href="{{ url('/home') }}"><div class="go-to">Home</div></a>
          <a href="/books"><div class="go-to">Reserve a seat</div></a>
        </div>
        @endif
      @else
      <form method="POST" action="{{ route('login') }}">
          @csrf

          @if ($message = Session::get('error'))
            <div class="alert-fail">
              <p>{{ $message }}</p>
            </div>
            <br>
          @endif

          <label for="email">{{ __('Email Address') }}</label>

          <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Enter Email" required autocomplete="email" autofocus>

          @error('email')
            <span role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror

          <br><br>

          <label for="password">{{ __('Password') }}</label>

          <input id="password" type="password" name="password" placeholder="Enter Password" required autocomplete="current-password">

          @error('password')
            <span role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror

          <!-- <div class="checkbox-with-label">
          <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="width: 5%">

          <label for="remember" style="width: 45%">
            {{ __('Remember Me') }}
          </label>
          
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
              <div style="text-align: right;">{{ __('Forgot Your Password?') }}</div>
            </a>
          @endif
          </div> -->

          <br><br>

          <div class="button">
            <center>
              <button type="submit">
                {{ __('Log in') }}
              </button><br>
            </center>
          </div>
        </form>

        @if (Route::has('register'))
          <div class="menu-option menu-hide"><a href="{{ route('register') }}">Register</a></div>
          <div class="menu-option">
            <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars"></i></button>
            <div id="myDropdown" class="dropdown-content">
              <br>
              <div><a href="{{ route('login') }}">Login</a></div><br>
              <div><a href="{{ route('register') }}">Sign up</a></div>
              <br>
            </div>
          </div>
        @endif
      @endauth
    @endif

        <!-- <form method="POST" action="{{ route('login') }}">
          @csrf

          @if ($message = Session::get('error'))
            <div class="alert-fail">
              <p>{{ $message }}</p>
            </div>
            <br>
          @endif

          <label for="email">{{ __('Email Address') }}</label>

          <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Enter Email" required autocomplete="email" autofocus>

          @error('email')
            <span role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror

          <br><br>

          <label for="password">{{ __('Password') }}</label>

          <input id="password" type="password" name="password" placeholder="Enter Password" required autocomplete="current-password">

          @error('password')
            <span role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror -->

          <!-- <div class="checkbox-with-label">
          <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="width: 5%">

          <label for="remember" style="width: 45%">
            {{ __('Remember Me') }}
          </label>
          
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
              <div style="text-align: right;">{{ __('Forgot Your Password?') }}</div>
            </a>
          @endif
          </div> -->

          <!-- <br><br>

          <div class="button">
            <center>
              <button type="submit">
                {{ __('Log in') }}
              </button><br>
            </center>
          </div>
        </form> -->
      </div>
    </div>
  </body>
</html>
