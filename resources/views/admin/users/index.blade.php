@extends('layouts.sidebar_admin')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">LIST OF USERS</h1>
    </div>
    <div class="body-content">
      <div class="pull-right">
          <a class="add" href="{{ route('users.create') }}">Add New Account</a>
      </div>
   
      @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
      @endif
   
      <table class="list-table">
        <tr>
          <th>No.</th>
          <th>Name of Employee</th>
          <th>Phone Number</th>
          <th>ID No.</th>
          <th>Email</th>
          <th>Position</th>
          <th>Office</th>
          <th>Is Admin?</th>
          <th>Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
          <td>{{ ++$i }}</td>
          <td>{{ $user->firstname }} {{ $user->lastname }}</td>
          <td>{{ $user->phone_number }}</td>
          <td>{{ $user->employee_id_number }}</td>
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
   
              <!-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a> -->
    
              <a class="update" href="{{ route('users.edit',$user->id) }}">Remove as Admin</a>
   
              @csrf
              @method('DELETE')
      
              <button type="submit" class="destroy"><i class="bx bx-trash"></i></button>
            </form>
          </td>
          @else
          <td>
            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
   
              <!-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a> -->
    
              <a class="update" href="{{ route('users.edit',$user->id) }}">Add as Admin</a>
   
              @csrf
              @method('DELETE')
      
              <button type="submit" class="destroy"><i class="bx bx-trash"></i></button>
            </form>
          </td>
          @endif
        </tr>
        @endforeach
    </table>
  
    {!! $users->links() !!}
      
@endsection