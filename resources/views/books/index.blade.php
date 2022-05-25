@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">My Bookings</h1>
      <p class="title-desc">"My Bookings" is where you can view and manage your booked/reserved desk for the next few days, weeks and months. </p>
    </div>
    <div class="body-content book-table">
      <div>
        <div style="display: flex; flex-direction: row; align-items: center">
          <div><a class="btn btn-primary go-to" href="/office-map">Go to Office Map</a></div>
          <!-- Trigger/Open The Modal -->
          <div><button class="add-new-book-modal add" href="#addNewBookFormModal"><i class="fas fa-light fa-plus"></i> Add Book</button></div>
        </div>
      </div>
     
      @if ($message = Session::get('success'))
        <div class="alert-success">
          <p>{{ $message }}</p>
        </div>
      @endif
      @if(session('error'))
      <br>
      <div class="alert-fail">
        {{ session('error') }}
      </div>
      @endif
     
      <table class="list-table">
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Desk Number</th>
          <th>Date</th>
          <th width="280px">Action</th>
        </tr>
        @forelse ($books as $key => $value)
              @if ($value->name === Auth::user()->firstname." ".Auth::user()->lastname && $dateToday < $value->date)
              <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $value->name }}</td>
                  <td style="text-transform:uppercase">{{ $value->desk_number }}</td>
                  <td>{{ $value->date }}</td>
                  <td >
                    <form action="{{ route('books.destroy',$value->id) }}" method="POST" class="action">
                      <a class="read" href="{{ route('books.show',$value->id) }}"> Show</a>
                      <a class="update" href="{{ route('books.edit',$value->id) }}">Edit</a>   
                      @csrf
                      @method('DELETE')      
                      <button type="submit" class="destroy">Delete</button>
                    </form>
                  </td>
              </tr>
              @endif
              @empty
              <center><h1 style="color: #551A8B">You haven't book yet!</h1></center>
            @endforelse
      </table>
      <div style="display: flex; flex-direction: row; width: 100px">
        {!! $books->links() !!}
      </div>
    </div>
  </section>
  <!-- The Add New Book Form Modal -->
  <div id="addNewBookFormModal" class="modal">
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

          <label for="desk_number">Your Desk:</label>
          <select name="desk_number" id="desk_number" style="text-transform:uppercase" required>
            <option value="">--- Select a Desk ---</option>
            @foreach($desks as $desk)
            <option value="{{ $desk->desk_number }}">{{ $desk->desk_number }}</option>
            @endforeach
          </select><br><br>

          <label for="date">Date of booking:</label>
          <input type="date" id="date" name="date" required><br><br>
          <input type="time" name="time" value="08:00 AM" hidden>

          <input type="submit" value="Book a Desk">
        </div>
      </form>
    </div>
  </div>

  <script>
    // Get the button that opens the modal
    var btn = document.querySelectorAll("button.add-new-book-modal");
    
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
@endsection