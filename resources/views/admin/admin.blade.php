@extends('layouts.sidebar_admin')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">ADMIN HOME PAGE</h1>
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

    <div class="content">
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
                <div class="card" style="background: rgba(242, 104, 73, 0.44); padding: 15px 15px;">
                  <div class="icon-case dot3">
                        <h1>20</h1>
                    </div>
                    <div class="box3">
                        <h3> Number of Bookings</h3>
                        
                    </div>
                </div>

                <div class="list-wrapper" >      
                  <ul class="list">
                    <h2> Team Members </h2>
                      <li class="list-item">
                        <div>
                          <img src="http://pluspng.com/img-png/png-user-icon-circled-user-icon-2240.png" class="list-item-image">
                        </div>
                          <div class="list-item-content">
                            <h4>Carlo Soleta</h4>
                            <p>Project Manager</p>
                          </div>
                      </li>
                      <li class="list-item">
                        <div>
                          <img src="http://pluspng.com/img-png/png-user-icon-circled-user-icon-2240.png" class="list-item-image">
                        </div>
                          <div class="list-item-content">
                            <h4>Andrea De Guzman</h4>
                            <p>UI/UX Designer</p>
                          </div>
                      </li>
                      <li class="list-item">
                        <div> 
                            <img src="http://pluspng.com/img-png/png-user-icon-circled-user-icon-2240.png" class="list-item-image">
                          </div>
                          <div class="list-item-content">
                            <h4>Bless Catalan</h4>
                            <p>QA Specialist</p>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
    </div>
  </section>
@endsection
