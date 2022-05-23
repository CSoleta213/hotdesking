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
        <label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle">
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
          <a href="/features">
            <i class='bx bx-category' ></i>
            <span class="link_name">Features</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="/features">Features</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <a href="/my-calendar">
            <i class='bx bx-calendar' ></i>
            <span class="link_name">My Calendar</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="/my-calendar">My Calendar</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <a href="/books">
            <i class='bx bx-book' ></i>
            <span class="link_name">My Bookings</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="/books">My Bookings</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <a href="/office-map">
            <i class='bx bx-map' ></i>
            <span class="link_name">Office Map</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="/office-map">Office Map</a></li>
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
        <!-- <li class="nav-link">
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
        </li> -->
        <li class="nav-link">
          <div class="profile-details">
            <div class="profile-content">
              @if(Auth::user()->gender === "Male")
              <a href="/my-profile"><img src="{{ asset('/avatar-for-male.png') }}" alt="profileImg"></a>
              @else
              <a href="/my-profile"><img src="{{ asset('/avatar-for-female.png') }}" alt="profileImg"></a>
              @endif
            </div>
            <div class="name-job">
              <a href="/my-profile"><div class="profile_name">Hi, {{ Auth::user()->firstname }}!</div></a>
              <a href="/my-profile"><div class="job">{{ Auth::user()->position }}</div></a>
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
