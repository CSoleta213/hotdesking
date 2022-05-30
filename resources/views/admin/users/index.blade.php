@extends('layouts.sidebar_admin')

@section('content')
  <div class="body-header">
    <h1 class="content-title">LIST OF USERS</h1>
  </div>
  <div class="body-content">
    <div class="pull-right">
        <a href="{{ route('users.create') }}"><div class="add">Add New User</div></a>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="list-table">
      <tr>
        <th>No.</th>
        <th>ID No.</th>
        <th>Name of Employee</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Position</th>
        <th>Office</th>
        <th>Is Admin?</th>
        <th>Action</th>
      </tr>
      @foreach ($users as $user)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $user->employee_id_number }}</td>
        <td>{{ $user->firstname }} {{ $user->lastname }}</td>
        <td>{{ $user->phone_number }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->position }}</td>
        <td>{{ $user->office }}</td>
        @if ($user->is_admin === 1)
        <td>Yes</td>
        @else
        <td>No</td>
        @endif
        <td>
          <div style="display: flex;">
          <!-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a> -->
          @if ($user->is_admin === 1)
          <a href="{{ route('users.edit',$user->id) }}"><div class="update">Remove as Admin</div></a>
          @else
          <a href="{{ route('users.edit',$user->id) }}"><div class="update">Add as Admin</div></a>
          @endif
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
              <form action="{{ route('users.destroy',$user->id) }}" method="POST">
              @csrf
              @method('DELETE')
                <div class="modal-body">
                  <div style="display: flex; justify-content: center">
                    <a href="/admin/users"><div class="cancel">No</div></a>
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
    {!! $users->links() !!}
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