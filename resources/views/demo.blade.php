@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">Demo</h1>
      <p class="title-desc">Taking a look at these tutorials might give you knowledge on how to navigate necessary features.</p>
    </div>
    <h1 class="content-title"></h1>
    <div class="body-content">
      <div class="demo">
        <div class="demo-desc">
          <div class="Add-Reservation">
            <!-- embed -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/2og2DbjaX0A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
            <h3>Add a reservation</h3>
            <p>You want to book a desk in advance?</p>
              <p id="extra-content1" class="extra-content">You have the opportunity to book a desk of your choice
              in advance. It has an easy-to-use interface and interactive maps that will assist you in finding 
              and reserving a suitable space. You can always add a reservation whenever, as long as the desk is 
              not yet occupied. In choosing a specific workstation you can always refer to the floor plan. Just 
              follow the instructions being said in the video when you want to add your reservation.</p>
              <button id="read-more1" class="read-more">Show More</button>
          </div>
          <script>
            document.getElementById("read-more1").addEventListener( 'click' , changeClass);

              function changeClass() {
                var content = document.getElementById("extra-content1");
                var btn = document.getElementById("read-more1");
                content.classList.toggle('show');

                if (content.classList.contains("show")) {
                    btn.innerHTML = "Show Less";
                } else {
                    btn.innerHTML = "Show More";
                }
              }
          </script>
    
          <div class="Cancel-Reservation">
            <!-- embed -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/QYHN3Y6M5ow" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
            <h3>Cancel reservation</h3>
            <p>How about canceling reservations?</p>
            <p id="extra-content2" class="extra-content">Since you can add a reservation you can cancel it anytime as well. 
              In canceling your reservation, you just need to go to the reservation details where you can also change 
              your preferred schedule and space location. Just follow some guidelines and instructions mentioned in the video.</p>
            <button id="read-more2" class="read-more">Show More</button>
          </div>
          <script>
            document.getElementById("read-more2").addEventListener( 'click' , changeClass);

               function changeClass() {
                var content = document.getElementById("extra-content2");
                var btn = document.getElementById("read-more2");
                content.classList.toggle('show');

                if (content.classList.contains("show")) {
                    btn.innerHTML = "Show Less";
                } else {
                    btn.innerHTML = "Show More";
                }
              }
          </script>
     
          <div class="View-Dashboard">
            <!-- embed -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/onLS-hUIMP0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
            <h3>View dashboard</h3>
            <p>We have a clear, interactive and user-friendly dashboard.</p>
            <p id="extra-content3" class="extra-content">It gives an efficient glance through 
              to data visualizations. It is where you can sneak a peek at the overall website. You can always 
              view the dashboard as per what is being shown in the video above.</p>
            <button id="read-more3" class="read-more">Show More</button>
          </div>
          <script>
            document.getElementById("read-more3").addEventListener( 'click' , changeClass);

               function changeClass() {
                var content = document.getElementById("extra-content3");
                var btn = document.getElementById("read-more3");
                content.classList.toggle('show');

                if (content.classList.contains("show")) {
                    btn.innerHTML = "Show Less";
                } else {
                    btn.innerHTML = "Show More";
                }
              }
          </script>
          
          <div class="Manage-Schedule">
            <!-- embed -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/LwN3jm3fxMU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
            
            <h3>Manage schedule</h3>
            <p>Scheduling is the art of preparing your activities.</p>
            <p id="extra-content4" class="extra-content">So that you may accomplish your goals and 
              prioritize your priorities in the time you have available. In having so, you will likely be effective 
              and efficient. In managing your schedule, you can refer to the video on how to manage your schedule 
              using the calendar that you can find in the features page. In using the calendar you are able to add 
              events on the specific date, where you can be notified.</p>
            <button id="read-more4" class="read-more">Show More</button>
          </div>
          <script>
            document.getElementById("read-more4").addEventListener( 'click' , changeClass);

               function changeClass() {
                var content = document.getElementById("extra-content4");
                var btn = document.getElementById("read-more4");
                content.classList.toggle('show');

                if (content.classList.contains("show")) {
                    btn.innerHTML = "Show Less";
                } else {
                    btn.innerHTML = "Show More";
                }
              }
          </script>
        </div>
      </div>
    </div>
  </section>
  
@endsection