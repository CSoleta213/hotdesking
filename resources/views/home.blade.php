@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">User's Homepage</h1>
    </div>
    
    <div class="container">
      <div class="inp-group">
        <select name="lang" id="lang">
          <option value="office">All Offices</option>
          <option value="office 1">Office 1</option>
          <option value="office 2">Office 2</option>
          <option value="office 3">Office 3</option>
        </select>
      </div>
    </div>

    <div class="content" style="margin-top: 100px; margin-left: 80px;">
    <div class="cards" >
                <div class="card" style=" background: rgba(6, 187, 135, 0.44);">
                    <div class="icon-case dot1" >
                            <h1>15</h1>
                        </div>
                    <div class="box1">
                        <h3>Available Desks</h3>
                    </div>
                </div>
                <div class="cards" >
                  <div class="card" style=" background: rgba(242, 166, 69, 0.44);">
                      <div class="icon-case dot1" style="  background: rgba(242, 166, 69, 0.72);">
                              <h1>15</h1>
                          </div>
                      <div class="box1">
                          <h3>Occupied &nbsp; Desks</h3>
                      </div>
                  </div>
                </div>
                <div class="card" style="background: rgba(242, 104, 73, 0.44); padding: 15px 15px; margin-right: 80px;">
                  <div class="icon-case dot3">
                        <h1>20</h1>
                    </div>
                    <div class="box3">
                        <h3> Number of Bookings</h3>
                        
                    </div>
                </div>
          </div>

          <div class="content-2 calendar">
              <h3> My Calendar</h3>
              <p class="details"> View Details </p>
          <div>
          <div class="content-3 bookings">
              <h3> My Bookings</h3>
              <p class="More"> View More </p>
          <div>

      </div>
  </section>
@endsection
