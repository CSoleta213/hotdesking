@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <span class="text">Office Map</span>
    </div>
    <div class="body-content">
      <div class="desk-map">
        <a class="btn btn-primary" href="{{ route('books.index') }}">Go to My Bookings</a>
        <img src="{{ asset('/office-desk-view.jpg') }}" alt="Desk View" width="100%">
        <div class="dots"></div>
          <!-- Trigger/Open The Modal -->
          <button id="dot1" class="modal-button" href="#myModal1">A1</button>
          <button id="dot2" class="modal-button" href="#myModal1">A2</button>
          <button id="dot3" class="modal-button" href="#myModal1">A3</button>
          <button id="dot4" class="modal-button" href="#myModal1">A4</button>
          <button id="dot5" class="modal-button" href="#myModal1">A5</button>
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
      <form action="{{ route('books.store') }}" method="POST">
      @csrf
        <div class="modal-body">
          <label for="name">Your Name:</label>
          <input type="text" id="name" name="name" value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}" readonly><br><br>

          <label for="office_name">Your Office:</label>
          <input type="text" id="office_name" name="office_name" value="{{ Auth::user()->office }}" readonly><br><br>

          <label for="desk_number">Your Chosen Desk:</label>
          <select name="desk_number" id="desk_number">
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="A3">A3</option>
            <option value="A4">A4</option>
            <option value="A5">A5</option>
            <option value="B1">B1</option>
            <option value="B2">B2</option>
            <option value="B3">B3</option>
            <option value="B4">B4</option>
            <option value="B5">B5</option>
            <option value="C1">C1</option>
            <option value="C2">C2</option>
            <option value="C3">C3</option>
            <option value="C4">C4</option>
            <option value="C5">C5</option>
            <option value="D1">D1</option>
            <option value="D2">D2</option>
            <option value="D3">D3</option>
            <option value="D4">D4</option>
            <option value="D5">D5</option>
            <option value="E1">E1</option>
            <option value="E2">E2</option>
            <option value="E3">E3</option>
            <option value="E4">E4</option>
            <option value="E5">E5</option>
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