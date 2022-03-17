<!DOCTYPE html>
<html>
  <head>
    <title>Log in</title>
  </head>
  <body>
    <a href="/">Logo</a>
    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
    <form action="/logged-in" method="POST">
      @csrf
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email"><br><br>

      <label for="pword">Password:</label><br>
      <input type="password" id="pword" name="pword"><br><br>

      <a href="http://">Forgot Password?</a><br><br>
      
      <input type="submit" value="Log in"><br><br>
      <a href="/sign-up">Create account</a>
    </form> 
  </body>
</html>