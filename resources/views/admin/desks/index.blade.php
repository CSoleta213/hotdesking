@extends('layouts.sidebar_admin')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">DESKS MANAGEMENT</h1>
      <p class="title-desc">Add and Manage office desks and meeting rooms according to the social distancing policy.  </p>
    </div>
    <div class="body-content desk">
      <!-- Trigger/Open The Modal -->
      <div class="desk-modal add" href="#myModal1">Add New Desk</div>
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
          <th width="50px">Action</th>
        </tr>
        @foreach ($desks as $desk)
        <tr>
          <td>{{ ++$i }}</td>
          <td style="text-transform:uppercase">{{ $desk->desk_number }}</td>
          <td><img src="/desks/{{ $desk->desk_map }}" width="100px"></td>
          <td>
            <div style="display: flex;">
            <a href="{{ route('desks.show',$desk->id) }}"><div class="read"><i class="bx bx-show"></i></div></a>
            <a href="{{ route('desks.edit',$desk->id) }}"><div class="updateIcon"><i class="bx bx-edit"></i></div></a>

            <!-- Trigger/Open The Modal -->
            <div class="desk-modal destroy" href="#deleteBookingModal"><i class="bx bx-trash"></i></div>
            <!-- The Add New Book Form Modal -->
            <div id="deleteBookingModal" class="modal">
              <!-- Modal content -->
              <div class="modal-content">
                <div class="modal-header">
                  <span class="close">&times;</span>
                  <h3>Are you sure?</h3>
                </div>
                <form action="{{ route('desks.destroy',$desk->id) }}" method="POST">
                @csrf
                @method('DELETE')
                  <div class="modal-body">
                    <div style="display: flex; justify-content: center">
                      <a href="/admin/desks"><div class="cancel">No</div></a>
                      <button type="submit" class="destroy">Yes</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            </div>
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
          <input type="text" id="desk_number" name="desk_number" placeholder="Enter new desk number" style="text-transform:uppercase" required><br><br>
          <label for="desk_map">Desk Map:</label>
          <input type="file" id="desk_map" name="desk_map" accept="image/*" required><br><br>
          <input type="submit" value="Add it!">
        </div>
      </form>
    </div>
  </div>
  <script>
    // Get the div that opens the modal
    var div = document.querySelectorAll("div.desk-modal");
    
    // All page modals
    var modals = document.querySelectorAll('.modal');
    
    // Get the <span> element that closes the modal
    var spans = document.getElementsByClassName("close");
    
    // When the user clicks the div, open the modal
    for (var i = 0; i < div.length; i++) {
    div[i].onclick = function(e) {
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