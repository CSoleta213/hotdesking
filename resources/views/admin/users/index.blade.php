@extends('layouts.sidebar_admin')

@section('content')
  <section class="body-section">
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
          @if ($user->is_admin === 1)
          <td>
            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
            <div style="display: flex;">
            <div>
   
              <!-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a> -->
    
              <a href="{{ route('users.edit',$user->id) }}"><div class="update">Remove as Admin</div></a>

</div>
   
              @csrf
              @method('DELETE')
              <div>
              <button type="submit" class="destroy"><i class="bx bx-trash"></i></button>
              </div>
              </div>
            </form>
          </td>
          @else
          <td>
          <form action="{{ route('users.destroy',$user->id) }}" method="POST">
            <div style="display: flex;">
            <div>
   
              <!-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a> -->
    
              <a href="{{ route('users.edit',$user->id) }}"><div class="update">Add as Admin</div></a>

</div>
   
              @csrf
              @method('DELETE')
              <div>
              <button type="submit" class="destroy"><i class="bx bx-trash"></i></button>
              </div>
              </div>
            </form>
          </td>
          @endif
        </tr>
        @endforeach
    </table>
  
    {!! $users->links() !!}
      
@endsection