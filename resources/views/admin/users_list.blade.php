@extends('layouts.sidebar_admin')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <span class="text">LIST OF USERS</span>
    </div>
    <div class="body-content">
      <table class="list-table " style="margin-top: 20px;">
        <tr style="background-color: #C4C4C4BD;">
          <th>No.</th>
          <th>Name of Employee</th>
          <th>Phone Number</th>
          <th>ID No.</th>
          <th>Email</th>
          <th>Position</th>
          <th>Office</th>
          <th>Is Admin?</th>
        </tr>
        @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
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
        </tr>
        @endforeach
      </table>
      @if (session('status'))
        <div>
          {{ session('status') }}
        </div>
      @endif
    </div>
  </section>
@endsection
