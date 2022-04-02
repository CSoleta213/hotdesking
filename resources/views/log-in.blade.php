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
  <title>Log in to Desktiny</title>

    <!-- <title>Log in</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Sora&display=swap" rel="stylesheet"> -->

    <style>
      html, body {
        height: 100%;
        margin: 0;
      }
      h2 {
        font-family: 'Poppins';
      }
      .container {
        display: flex;
        height: 100%;
        margin: 0;
      }
      .left {
        width: 50%;
        background: #343799;
      }
      .logo a {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #E2F4FF;
        margin-top: 20%;
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
      form input {
        width: 100%;
        padding: 12px 20px;
        border: 1px solid #C4C4C4;
        box-sizing: border-box;
        border-radius: 5px;
      }
      .button input {
        background: #4484FF;
        border-radius: 5px;
        border: 0;
        width: 150px;
        height: 45px;
        font-weight: 700;
        color: #FFFFFF;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        align-items: center;
      }
      .button {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }
      a {
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="left">
        <div class="logo">
          <a href="/">Logo</a>
        </div>
      </div>
      <div class="right">
        <h2 style="text-align:center;">Welcome back baby!</h2>
        <p>Join in reserving the best destined seat for you</p>
        <form action="/logged-in" method="POST">
          @csrf
          <label for="email">Email:</label><br>
          <input type="email" id="email" name="email"><br><br>

          <label for="pword">Password:</label><br>
          <input type="password" id="pword" name="pword"><br>

          <a href="http://"><div style="text-align: right;"><p>Forgot Password?</p></div></a><br>
          
          <div class="button">
            <input type="submit" value="Log in">
          </div>
        </form> 
      </div>
    </div>
  </body>
</html>