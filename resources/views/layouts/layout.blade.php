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
  <link rel="icon" href="{{ url('/desktiny-d.png') }}">
  <script src="https://kit.fontawesome.com/80a2a00cbd.js" crossorigin="anonymous"></script>
  <title>Desktiny</title>
</head>

<body>
  @yield('content')

  <footer>
    <div class="logo"><img src="/desktiny-logo.png" alt="Desktiny Logo"></div>
    <div class="center">
      <div class="contact">
        Phone Numbers<br>
        Email Address<br><br>
        Follow us on:
      </div>
      <div class="soc-med">
        <div><i class="fa-brands fa-facebook"></i></div>
        <div><i class="fa-brands fa-twitter"></i></div>
        <div><i class="fa-brands fa-linkedin"></i></div>
        <div><i class="fa-brands fa-google"></i></div>
      </div>
    </div>
    <div class="right">
      <div class="location">
        <div>Locations:</div>
        <div class="office">Office #1</div>
        <div class="office">Office #2</div>
        <div class="office">Office #3</div>
      </div>
    </div>
  </footer>
</body>
</html>