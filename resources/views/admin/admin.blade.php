@extends('layouts.sidebar_admin')

@section('content')
<section class="body-section">
  <div class="body-header">
    <h1 class="content-title">ADMIN HOME PAGE</h1>
    <p class="title-desc">eMachines' Desktiny is the solution in helping businesses manage their workspace and remote working effectively and safely.</p>
  </div>

  <!-- <div class="container1">
      <div class="inp-group">
        <select name="lang" id="lang">
          <option value="office">All Offices</option>
          <option value="office 1">Office 1</option>
          <option value="office 2">Office 2</option>
          <option value="office 3">Office 3</option>
        </select>
      </div>
    </div> -->

  <div class="content">
    <div style="display: flex; flex-direction: column;">
      <div class="content">
        <div class="cards">
          <div class="card" style=" background: rgba(6, 187, 135, 0.44);">
            <div class="icon-case dot">
              <h1>15</h1>
            </div>
            <div class="box1">
              <h3>Available Desks</h3>
            </div>
          </div>
        </div>
        <div class="cards">
          <div class="card" style=" background: rgba(242, 166, 69, 0.44);">
            <div class="icon-case dot" style="  background: rgba(242, 166, 69, 0.72);">
              <h1>15</h1>
            </div>
            <div class="box1">
              <h3>Occupied &nbsp; Desks</h3>
            </div>
          </div>
        </div>
        <div class="cards">
          <div class="card" style="background: rgba(242, 104, 73, 0.44);">
            <div class="icon-case dot" style="background: rgba(242, 104, 73, 0.72);">
              <h1>{{ $number_of_books }}</h1>
            </div>
            <div class="box1">
              <h3>Number of Bookings</h3>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <div >
        <center class="adm-cal-con">
          <div style="display: block;">
            <span style="display: inline-block; font-weight: bold; font-size: larger;"> Calendar </span>
            <a href="/admin/calendar-view"> <span style="margin-left: 620px;">View More </span></a>
          </div>
          <iframe class="adm-cal" src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%234285F4&ctz=Asia%2FManila&title=Hot%20Desking&src=Y18yNmFsNXV2NnViOGptbGxkbTAybHJraXZlOEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4ucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23009688&color=%230B8043" style="border:solid 1px #777" width="800" height="500" frameborder="0" scrolling="no"></iframe>
        </center>
      </div>
      <div class="list-wrapper team-mob">
      <ul class="list">
        <h2> Team Members </h2>
        @foreach($users as $user)
        <li class="list-item">
          <div>
            @if($user->gender === "Male")
            <img src="{{ asset('/avatar-for-male.png') }}" alt="profileImg" class="list-item-image">
            @else
            <img src="{{ asset('/avatar-for-female.png') }}" alt="profileImg" class="list-item-image">
            @endif
          </div>
          <div class="list-item-content">
            <h4 style="text-align: left">{{ $user->firstname }} {{ $user->lastname }}</h4>
            <p style="text-align: left">{{ $user->position }}</p>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
    </div>
    <div class="list-wrapper team-web">
      <ul class="list">
        <h2> Team Members </h2>
        @foreach($users as $user)
        <li class="list-item">
          <div>
            @if($user->gender === "Male")
            <img src="{{ asset('/avatar-for-male.png') }}" alt="profileImg" class="list-item-image">
            @else
            <img src="{{ asset('/avatar-for-female.png') }}" alt="profileImg" class="list-item-image">
            @endif
          </div>
          <div class="list-item-content">
            <h4 style="text-align: left">{{ $user->firstname }} {{ $user->lastname }}</h4>
            <p style="text-align: left">{{ $user->position }}</p>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  <!-- <div>
      <center> 
        <div style="display: block;">
          <span style="display: inline-block; font-weight: bold; font-size: larger;"> Calendar </span>
          <a href="/admin/calendar-view"> <span style="margin-left: 720px;">View More </span></a>
        </div>
        <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%234285F4&ctz=Asia%2FManila&title=Hot%20Desking&src=Y18yNmFsNXV2NnViOGptbGxkbTAybHJraXZlOEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4ucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23009688&color=%230B8043" style="border:solid 1px #777" width="900" height="600" frameborder="0" scrolling="no"></iframe>
      </center>
    </div> -->
</section>
@endsection