@extends('layouts.sidebar_admin')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <span class="text">LIST OF USERS</span>
    </div>
    <div class="body-content">
      <div class="home">
        <table>
          <tr>
            <th>No.</th>
            <th>Name of Employee</th>
            <th>Phone Number</th>
            <th>ID No.</th>
            <th>Email</th>
          </tr>
          @foreach ($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->firstname }} {{ $user->lastname }}</td>
            <td>{{ $user->phone_number }}</td>
            <td>{{ $user->employee_id_number }}</td>
            <td>{{ $user->email }}</td>
          </tr>
          @endforeach
        </table>
        @if (session('status'))
          <div>
            {{ session('status') }}
          </div>
        @endif
      </div>
    </div>
  </section>
@endsection
