@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <i class='bx bx-menu' ></i>
      <span class="text">{{ Auth::user()->firstname }}'s Profile:</span>
    </div>
    <div class="body-content">
      <div style="display: flex;"><p><strong>First Name: </strong>{{ Auth::user()->firstname }}</p><br><br></div>
      <div style="display: flex;"><p><strong>Last Name: </strong>{{ Auth::user()->lastname }}</p><br><br></div>
      <div style="display: flex;"><p><strong>Email: </strong>{{ Auth::user()->email }}</p><br><br></div>
      <div style="display: flex;"><p><strong>Phone Number: </strong>{{ Auth::user()->phone_number }}</p><br><br></div>
      <div style="display: flex;"><p><strong>Employee's Number: </strong>{{ Auth::user()->employee_id_number }}</p><br><br></div>
      <div style="display: flex;"><p><strong>Office: </strong>{{ Auth::user()->office }}</p><br><br></div>
    </div>
  </section>
@endsection
