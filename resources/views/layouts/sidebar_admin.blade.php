<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Sora&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ url('/desktiny-d.png') }}">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- FontAwesome Link -->
    <script src="https://kit.fontawesome.com/80a2a00cbd.js" crossorigin="anonymous"></script>
    <title>Desktiny</title>
  </head>
  <body>
  <script id="6284ca190d8c86492be82cbf" src="https://dashboard.chatfuel.com/integration/fb-entry-point.js" async defer></script>
    <div class="sidebar close">
      <div class="logo-details">
        <div class="logo-d">
          <a href="{{ url('/') }}"><img src="{{ asset('/desktiny-d.png') }}" width="30px"></a>
        </div>
        <span class="logo_name">
          <a href="{{ url('/') }}"><img src="{{ asset('/desktiny-logo.png') }}" width="150px"></a>
        </span>
        <i class='bx bx-chevron-right toggle'></i>
      </div>
      <ul class="menu-links">
        <li class="nav-link">
          <a href="/admin/home">
            <i class='bx bx-home' ></i>
            <span class="link_name">Home</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="/admin/home">Home</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <a href="/admin/users">
            <i class='bx bx-user' ></i>
            <span class="link_name">Users</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="/admin/users">Users</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <a href="/admin/bookings">
            <i class='bx bx-table' ></i>
            <span class="link_name">Bookings</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="/admin/bookings">Bookings</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <a href="/admin/available-desks">
            <i class='bx bx-chair' ></i>
            <span class="link_name">Available Desks</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="/admin/available-desks">Available Desks</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <a href="/admin/desks">
            <i class='bx bx-book' ></i>
            <span class="link_name">Manage Desks</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="/admin/desks">Manage Desks</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <div class="profile-details">
            <div class="profile-content">
              @if(Auth::user()->gender === "Male")
                <a href="/admin/my-profile"><img src="{{ asset('/avatar-for-male.png') }}" alt="profileImg"></a>
              @else
                <a href="/admin/my-profile"><img src="{{ asset('/avatar-for-female.png') }}" alt="profileImg"></a>
              @endif
            </div>
            <div class="name-job">
              <a href="/admin/my-profile"><div class="profile_name">Hi, {{ Auth::user()->firstname }}!</div></a>
              <a href="/admin/my-profile"><div class="job">{{ Auth::user()->position }}</div></a>
            </div>
            <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"
            >
              <i class='bx bx-log-out' ></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
            </form>
          </div>
        </li>
      </ul>
    </div>
    <section class="body-section">
      @yield('content')
      <footer>
        <div class="center">
          <p>
            &#169; 2022 eMachines' Desktiny. All rights reserved.
          </p>
          <div class="privacy-terms">
            <div>
              <a href="/privacy">Privacy Statement</a>
            </div>
            <div>
              &nbsp;and&nbsp;
            </div>
            <div>
              <a href="/terms">Terms & Conditions</a>
            </div>
          </div>
        </div>
      </footer>
    </section>
    <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e)=>{
     let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
     arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".toggle");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
      sidebar.classList.toggle("close");
    });
    </script>
  </body>
</html>
