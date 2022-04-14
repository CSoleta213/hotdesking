@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <i class='bx bx-menu' ></i>
      <span class="text">Demo</span>
    </div>
    <div class="body-content">
      <div class="demo">
        <header>
          <div class="demo-h1">
            <h1>Demo</h1>
          </div>
        </header>
        <div class="demo-h2">
            <h2>Lorem ipsum dolor sit amet. Ea molestiae
              explicabo a dignissimos quia qui ratione voluptatem</h2>
        </div>
        <div class="demo-desc">
          <div class="demo-desc-container">
            <!-- embed --> 
            <div class="Add-Reservation"></div>
              <h3>Add a reservation</h3>
              <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
                  aspernatur et eligendi esse quo esse odit et sequi internos
                  eos molestiae nesciunt quo quibusdam velit.</p>
          </div>
          <div class="demo-desc-container">
            <!-- embed --> 
            <div class="Cancel-Reservation"></div>
              <h3>Cancel reservation</h3>
              <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
                aspernatur et eligendi esse quo esse odit et sequi internos
                eos molestiae nesciunt quo quibusdam velit.</p>
          </div>
          <div class="demo-desc-container">
            <!-- embed -->
            <div class="View-Dashboard"></div>
              <h3>View dashboard</h3>
              <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
                aspernatur et eligendi esse quo esse odit et sequi internos
                eos molestiae nesciunt quo quibusdam velit.</p>
          </div>
          <div class="demo-desc-container">
            <!-- embed -->
            <div class="Manage-Schedule"></div>
              <h3>Manage schedule</h3>
              <p>Lorem ipsum dolor sit amet. Aut eveniet explicabo aut culpa
                aspernatur et eligendi esse quo esse odit et sequi internos
                eos molestiae nesciunt quo quibusdam velit. sdsdsd</p>
          </div>
        </div>
      </div>
    </div>
    @endguest
  </div>
</div>

<div class="demo">
  <header>
    <div class="demo-h1">
      <h1>Demo</h1>
    </div>
  </header>
  <div class="demo-h2">
    <h2>Taking a look at these tutorials might give you knowledge on how to navigate necessary features.</h2>
  </div>
  <div class="demo-desc">
    <div class="Add-Reservation">
      <!-- embed -->
      <iframe width="560" height="315" src="https://www.youtube.com/embed/2og2DbjaX0A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      <h3>Add a reservation</h3>
      <p>You want to book a desk in advance? Well, you have the opportunity to book a desk of your choice 
        in advance. It has an easy-to-use interface and interactive maps that will assist you in finding 
        and reserving a suitable space. You can always add a reservation whenever, as long as the desk is 
        not yet occupied. In choosing a specific workstation you can always refer to the floor plan. Just 
        follow the instructions being said in the video when you want to add your reservation.</p>
    </div>
    <div class="Cancel-Reservation">
      <!-- embed -->
      <iframe width="560" height="315" src="https://www.youtube.com/embed/QYHN3Y6M5ow" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      <h3>Cancel reservation</h3>
      <p>How about canceling reservations? Since you can add a reservation you can cancel it anytime as well. 
        In canceling your reservation, you just need to go to the reservation details where you can also change 
        your preferred schedule and space location. Just follow some guidelines and instructions mentioned in the video.</p>
    </div>
    <div class="View-Dashboard">
      <!-- embed -->
      <iframe width="560" height="315" src="https://www.youtube.com/embed/onLS-hUIMP0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      <h3>View dashboard</h3>
      <p>We have a clear, interactive and user-friendly dashboard. It gives an efficient glance through 
        to data visualizations. It is where you can sneak a peek at the overall website. You can always 
        view the dashboard as per what is being shown in the video above.</p>
    </div>
    <div class="Manage-Schedule">
      <!-- embed -->
      <iframe width="560" height="315" src="https://www.youtube.com/embed/LwN3jm3fxMU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      
      <h3>Manage schedule</h3>
      <p>Scheduling is the art of preparing your activities so that you may accomplish your goals and 
        prioritize your priorities in the time you have available. In having so, you will likely be effective 
        and efficient. In managing your schedule, you can refer to the video on how to manage your schedule 
        using the calendar that you can find in the features page. In using the calendar you are able to add 
        events on the specific date, where you can be notified.</p>
    </div>
  </div>
</div>

  </section>
@endsection