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
          <a href="/home">
            <i class='bx bx-home' ></i>
            <span class="link_name">Home</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="/home">Home</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <a href="/my-profile">
            <i class='bx bx-user' ></i>
            <span class="link_name">My Profile</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="/my-profile">My Profile</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <a href="#">
            <i class='bx bx-calendar' ></i>
            <span class="link_name">My Calendar</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">My Calendar</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <a href="/my-bookings">
            <i class='bx bx-book' ></i>
            <span class="link_name">My Bookings</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="/my-bookings">My Bookings</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <a href="/demo">
            <i class='bx bx-video' ></i>
            <span class="link_name">Video Demo</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="/demo">Video Demo</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <div class="iocn-link">
            <a href="/features">
              <i class='bx bx-category' ></i>
              <span class="link_name">Features</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="/features">Features</a></li>
            <li><a href="#">Office View</a></li>
            <li><a href="/features/desk-map">Desk View</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <div class="profile-details">
            <div class="profile-content">
              <img src="{{ asset('/avatar.png') }}" alt="profileImg">
            </div>
            <div class="name-job">
              <div class="profile_name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</div>
              <div class="job">Project Manager</div>
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
    @yield('content')
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
