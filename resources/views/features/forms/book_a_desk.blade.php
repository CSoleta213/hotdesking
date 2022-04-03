@extends('layouts.layout')

@section('content')
<h1>Book a Desk</h1>
<form action="{{ url('/book-a-desk') }}" method="POST">
  @csrf
  <label for="name">Your Name</label>
  <input type="text" id="name" name="name" value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}" readonly><br>

  <label for="office_name">Select an Office:</label>
  <input type="text" id="office_name" name="office_name" value="{{ Auth::user()->office }}" readonly><br>
  
  <label for="desk_number">Select Desk:</label>
  <select name="desk_number" id="desk_number">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select><br>
  
  <label for="date">When?</label>
  <input type="date" id="date" name="date"><br>

  <input type="submit" value="Book a Desk">
</form>
@endsection