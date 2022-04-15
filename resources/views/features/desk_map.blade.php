@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <span class="text">Book a desk</span>
    </div>
    <div class="body-content">
      <div class="desk-map">
        <!-- <a href="{{ url('/features/desk-map/book-a-desk') }}">1</a> -->
        <img src="{{ asset('/desk-view.jpg') }}" alt="Desk View" width="100%">
        <div class="dots"></div>
          <!-- Trigger/Open The Modal -->
          <button id="dot1" class="modal-button" href="#myModal1"></button>
          <button id="dot2" class="modal-button" href="#myModal1"></button>
          <button id="dot3" class="modal-button" href="#myModal1"></button>
          <button id="dot4" class="modal-button" href="#myModal1"></button>
          <button id="dot5" class="modal-button" href="#myModal1"></button>
        </div>
      </div>
    </div>
    <!-- The Modal -->
  <div id="myModal1" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h3>Book a Desk</h3>
      </div>
      <form action="{{ url('/book-a-desk') }}" method="POST">
      @csrf
        <div class="modal-body">
          <label for="name">Your Name</label>
          <input type="text" id="name" name="name" value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}" readonly><br><br>

          <label for="office_name">Select an Office:</label>
          <input type="text" id="office_name" name="office_name" value="{{ Auth::user()->office }}" readonly><br><br>

          <label for="desk_number">Select Desk:</label>
          <select name="desk_number" id="desk_number">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select><br><br>

          <label for="date">When?</label>
          <input type="date" id="date" name="date"><br><br>

          <input type="submit" value="Book a Desk">
        </div>
      </form>
    </div>
  </div>

  <script>
    // Get the button that opens the modal
    var btn = document.querySelectorAll("button.modal-button");
    
    // All page modals
    var modals = document.querySelectorAll('.modal');
    
    // Get the <span> element that closes the modal
    var spans = document.getElementsByClassName("close");
    
    // When the user clicks the button, open the modal
    for (var i = 0; i < btn.length; i++) {
    btn[i].onclick = function(e) {
        e.preventDefault();
        modal = document.querySelector(e.target.getAttribute("href"));
        modal.style.display = "block";
      }
    }
    
    // When the user clicks on <span> (x), close the modal
    for (var i = 0; i < spans.length; i++) {
    spans[i].onclick = function() {
        for (var index in modals) {
          if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
        }
      }
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
        for (var index in modals) {
          if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
        }
      }
    }
  </script>
  </section>
@endsection