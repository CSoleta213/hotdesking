@extends('layouts.sidebar_admin')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">DESKS MANAGEMENT</h1>
    </div>
    <div class="body-content">
      <!-- Trigger/Open The Modal -->
      <button class="add-new-desk-modal add" href="#myModal1">Add New Desk</button>
      @if ($message = Session::get('success'))
        <div class="alert alert-success">
          <p>{{ $message }}</p>
        </div>
      @endif
     
      <table class="list-table">
        <tr>
          <th>No</th>
          <th>Desk</th>
          <th>Desk Map</th>
          <th width="280px">Action</th>
        </tr>
        @foreach ($desks as $desk)
        <tr>
          <td>{{ ++$i }}</td>
          <td>{{ $desk->desk_number }}</td>
          <td><img src="/desks/{{ $desk->desk_map }}" width="100px"></td>
          <td>
            <form action="{{ route('desks.destroy',$desk->id) }}" method="POST">
     
              <a class="read" href="{{ route('desks.show',$desk->id) }}">Show</a>
      
              <a class="update" href="{{ route('desks.edit',$desk->id) }}">Edit</a>
     
              @csrf
              @method('DELETE')
        
              <button type="submit" class="destroy">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
    
      {!! $desks->links() !!}
    </div>
  </section>
  <!-- The Modal -->
  <div id="myModal1" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h3>Add New Desk</h3>
      </div>
      <form action="{{ route('desks.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="modal-body">
          <label for="desk_number">Desk #:</label>
          <input type="text" id="desk_number" name="desk_number" placeholder="Enter new desk number" required><br><br>
          <label for="desk_map">Desk #:</label>
          <input type="file" id="desk_map" name="desk_map" accept="image/*" required><br><br>
          <input type="submit" value="Add it!">
        </div>
      </form>
    </div>
  </div>
  <script>
    // Get the button that opens the modal
    var btn = document.querySelectorAll("button.add-new-desk-modal");
    
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