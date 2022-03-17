<!DOCTYPE html>
<html>
  <head>
    <title>Sign up</title>
  </head>
  <body>
    <a href="/">Logo</a>
    <form action="/signed-up" method="POST">
      @csrf
      <label for="firstname">First name:</label><br>
      <input type="text" id="firstname" name="firstname"><br><br>

      <label for="lastname">Last name:</label><br>
      <input type="text" id="lastname" name="lastname"><br><br>

      <label for="phone_number">Phone Number:</label><br>
      <input type="tel" id="phone_number" name="phone_number"><br><br>

      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email"><br><br>

      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password"><br><br>

      <label for="department">Department:</label><br>
      <input type="text" id="department" name="department"><br><br>

      <input type="checkbox" name="agree" id="agree">
      <label for="agree">I agree with the <a href="http://">terms and conditions</a>.</label><br><br>
      
      <input type="submit" value="Sign up">
    </form> 
  </body>
</html>