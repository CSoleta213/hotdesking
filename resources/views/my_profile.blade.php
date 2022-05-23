@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h2 class="profile-header">{{ Auth::user()->firstname }}'s Profile:</h2>
    </div>
    <div class="body-content profile">
      <center>
      <table class="profile-tab">
        <tr>
          <td>First Name:</td>
          <td>{{ Auth::user()->firstname }}</td>
        </tr>
        <tr>
          <td>Last Name:</td>
          <td>{{ Auth::user()->lastname }}</td>
        </tr>
        <tr>
          <td>Email:</td>
          <td>{{ Auth::user()->email }}</td>
        </tr>
        <tr>
          <td>Phone Number:</td>
          <td>{{ Auth::user()->phone_number }}</td>
        </tr>
        <tr>
          <td>Employee's Number:</td>
          <td>{{ Auth::user()->employee_id_number }}</td>
        </tr>
        <tr>
          <td>Office:</td>
          <td>{{ Auth::user()->office }}</td>
        </tr>
      </table>
      </center>
    </div>
  </section>
@endsection
