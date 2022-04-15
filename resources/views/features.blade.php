@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <span class="text">Features</span>
    </div>
    <div class="body-content">
      <h1 class="content-title">Features</h1><br>
      <p class="title-desc">The simplest and most configurable application for booking and managing your desks and meeting rooms.</p>
 
  
      <div class="section-container">
        <div class="columns content">
          <div class="content-container calendar">
            <h5>Calendar</h5>
            <p>
              Emachine’s Desktiny calendar provides you with an overview of all bookings in the days, weeks or even months ahead. 
              It is where you can see other employees booking, as well as the date and duration of the booking. 
              You can also click over other bookings for more information.
            </p>        
          </div>
        </div>
        <a href="#"><div class="columns image" style="background: #FF4269"> </div></a>
      </div>

       <!-- <div class="section-container">
        <a href="#"><div class="columns image" style="background: #F2A645"></div></a>
        <div class="columns image" id="calendar"> </div>
      </div> -->

      <div class="section-container">
        <a href="#">
          <div class="columns image" id="office-view"></div>
        </a>
    
        <div class="columns content">
          <div class="content-container office-view">
            <h5>Office View</h5>
            <p>
              Want to explore the office? Our intuitive floor plan maps will give you an instant overview of the entire
              office and space availability – all in one single screen, anytime and anywhere. View office amenities such
              as pantry area, restroom, meeting rooms, as well as the entrance and exit. Making your trip to the office
              a familiar one.
            </p>
          </div>
        </div>
      </div>
    
      <div class="section-container">
        <div class="columns content">
          <div class="content-container desk-view">
            <h5>Desk View</h5>
            <p>
              Don&apos;t know what desk to reserve? Our desk view provides an unbeatable overview of available and occupied desks
              in the office. Making it easier to find the right desk for you or a free desk next to your team member.
              Once you&apos;ve spotted a space you like, simply click on the desk and book it.
            </p>
          </div>
        </div>
        <a href="{{ url('/features/desk-map') }}">
          <div class="columns image"><img src="{{ asset('/desk-view.jpg') }}" alt="Desk View" width="100%"></div>
        </a>
      </div>
    
      <div class="section-container">
        <a href="#">
          <div class="columns image" id="reservation"></div>
        </a>
    
        <div class="columns content">
          <div class="content-container reservation">
            <h5>Reservation Listings</h5>
            <p>
              Our reservation Listing is where you can view and manage your booked/reserved desk for the next few days,
              weeks and months. Here you can search and filter your booking data. You can also edit your existing bookings
              if you like.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection