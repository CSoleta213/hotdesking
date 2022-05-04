@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">Features</h1>
      <p class="title-desc">The simplest and most configurable application for booking and managing your desks and meeting rooms.</p>
    </div>
    <div class="body-content">
      <div class="section-container">
        <div class="columns content">
          <div class="content-container calendar">
            <h5>Calendar</h5>
            <p>
              Emachine&apos;s Desktiny calendar provides you with an overview of all bookings in the days, weeks or even months ahead. 
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
        <a href="{{ url('/features/desk-map') }}">
          <div class="columns image"><img src="{{ asset('/office-desk-view.jpg') }}" alt="Reservation Listing" width="100%"></div>
        </a>
    
        <div class="columns content">
          <div class="content-container office-view">
            <h5>Office View & Desk View</h5>
            <p>
              Our intuitive floor plan provides an unbeatable overview of the entire office and space availability – 
              all in one single screen, anytime and anywhere. Making it easier to find the right desk for you or a 
              free desk next to your team member. It will also gives you overview of the office amenities such as pantry 
              area, restroom, meeting rooms, as well as the entrance and fire exit. Making your trip to the office a familiar one.
            </p>
          </div>
        </div>
      </div>
    
      <div class="section-container">
        <div class="columns content">
          <div class="content-container desk-view">
            <h5>My Bookings</h5>
            <p>
              "My Bookings" is where you can view and manage your booked/reserved desk for the next few days,
              weeks and months. Here you can search and filter your booking data. You can also edit your existing bookings
              if you like.
            </p>
          </div>
        </div>
        <a href="{{ url('/features/desk-map') }}">
          <div class="columns image" id="desk-view"></div>
        </a>
      </div>
    
    </div>
  </section>
@endsection