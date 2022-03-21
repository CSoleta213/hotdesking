<!DOCTYPE html>
<html>
  <head>
    <title>Log in</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Sora&display=swap" rel="stylesheet">

    <style>
      html, body {
        height: 100%;
        margin: 0;
        font-family: 'Sora', sans-serif;
      }
      h2 {
        font-family: 'Poppins';
        margin: 5%;
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
      }
      .button input {
        background: #4484FF;
        border-radius: 10px;
        border: 0;
        width: 93px;
        height: 40px;
        font-weight: 700;
        color: #FFFFFF;
        font-family: 'Poppins', sans-serif;
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
        <h2 style="text-align:center;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <form action="/logged-in" method="POST">
          @csrf
          <label for="email">Email:</label><br>
          <input type="email" id="email" name="email"><br><br>

          <label for="pword">Password:</label><br>
          <input type="password" id="pword" name="pword"><br>

          <a href="http://" style="self-align:right;"><div style="text-align: right;">Forgot Password?</div></a><br><br>
          
          <div class="button">
            <center><input type="submit" value="Log in"></center><br>
            <a href="/sign-up"><div style="text-align:center;">Create account</div></a>
          </div>
        </form> 
      </div>
    </div>
  </body>
</html>