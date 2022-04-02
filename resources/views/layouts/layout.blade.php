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
    <div class="center">
      <p>
        &#169; 2022 eMachines' Desktiny. All rights reserved.
      </p>
      <p>
      <a href="/privacy">Privacy Statement</a>&nbsp;and&nbsp;<a href="/terms">Terms & Conditions</a>
      </p>
    </div>
  </footer>
</body>
</html>