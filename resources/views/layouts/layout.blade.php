<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Desktiny</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
      body {margin:0;}

      .navbar {
        overflow: hidden;
        background-color: #FFFFFF;
        position: fixed;
        top: 0;
        width: 100%;
        display: flex;
        flex-direction: row;
        padding: 20px;
      }

      .logo {
        width: 35%;
      }
      .menu {
        display: flex;
        flex-direction: row;
        width: 60%;
        justify-content: space-around;
        text-align: center;
      }

      .navbar a {
        color: #2E2E33;
        text-align: center;
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        text-decoration: none;
      }

      .navbar a:hover, a.active {
        color: #343799;
      }

      .menu .login {
        background: #4484FF;
        color: #FFFFFF;
        border-radius: 10px;
        width: 93px;
        font-weight: 700;
        align-content: center;
        font-family: 'Poppins', sans-serif;
        padding: 10px;
      }

      .menu div {
        background: #FFFFFF;
        border-radius: 10px;
        width: 93px;
        font-weight: 700;
        align-content: center;
        font-family: 'Poppins', sans-serif;
        padding: 10px;
      }

      .main {
        padding: 16px;
        margin-top: 50px;
        height: 1500px; /* Used in this example to enable scrolling */
      }

      footer{
        background: #343799;
        color: #FFFFFF;
        padding: 20px;
        text-align: center;
      }
    </style>

  </head>
  <body>

    @yield('content')

    <footer>
      Copyright 2022 Group 3 Hot Desking
    </footer>
  </body>
</html>