<!DOCTYPE html>
<html>
  <head>
    <title>Sign up</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Sora&display=swap" rel="stylesheet">

    <style>
      html, body {
        height: 100%;
        margin: 0;
        font-family: 'Sora', sans-serif;
      }
      .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
        margin: 0;
      }

      .form {
        width: 100%;
      }

      .form-fields {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-top: 5%;
      }
      .form-left, .form-right {
        width: 100%;
      }
      .form-left {
        margin-left: 20%;
        margin-right: 20px;
      }
      .form-right {
        margin-right: 20%;
        margin-left: 1%;
      }
      .form-fields input {
        width: 100%;
        padding: 12px 20px;
        margin: 0 0px;
        display: inline-block;
        border: 1px solid #C4C4C4;
        box-sizing: border-box;
      }
      .agreement {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-bottom: 3%;
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
      <div class="logo">
        <a href="/">Logo</a>
      </div>
      <div class="form">
        <form action="/signed-up" method="POST">
          @csrf
          <div class="form-fields">
            <div class="form-left">
              <label for="firstname">First name:</label><br>
              <input type="text" id="firstname" name="firstname"><br><br>

              <label for="lastname">Last name:</label><br>
              <input type="text" id="lastname" name="lastname"><br><br>

              <label for="phone_number">Phone Number:</label><br>
              <input type="tel" id="phone_number" name="phone_number"><br><br>
            </div>

            <div class="form-right">
              <label for="email">Email:</label><br>
              <input type="email" id="email" name="email"><br><br>

              <label for="password">Password:</label><br>
              <input type="password" id="password" name="password"><br><br>

              <label for="department">Department:</label><br>
              <input type="text" id="department" name="department"><br><br>
            </div>
          </div>
          <div class="agreement">
            <input type="checkbox" name="agree" id="agree">
            <label for="agree">I agree with the <a href="http://">terms and conditions</a>.</label><br><br>
          </div>
          <div class="button">
            <center><input type="submit" value="Sign up"></center>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>