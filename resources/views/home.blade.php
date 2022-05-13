@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">My Homepage</h1>
    </div>
    
    <!-- <div class="container">
      <div class="inp-group">
        <select name="lang" id="lang">
          <option value="office">All Offices</option>
          <option value="office 1">Office 1</option>
          <option value="office 2">Office 2</option>
          <option value="office 3">Office 3</option>
        </select>
      </div><br>
      <div class="inp-group" style="margin-top: 20px;">
        <form action="" method="POST">
          @csrf
          <label for="date">Date</label>
          <input type="date" name="date" id="date">
        </form>
      </div>
    </div> -->

    <div class="content" style="margin-top: -10px; ">
    <div class="cards" >
                <div class="card" style=" background: rgba(6, 187, 135, 0.44); margin-left: 150px;">
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
                <div class="card" style="background: rgba(242, 104, 73, 0.44); padding: 15px 15px; margin-right: 150px;">
                  <div class="icon-case dot3">
                        <h1>{{ $number_of_books }}</h1>
                    </div>
                    <div class="box3">
                        <h3> Number of Bookings</h3>
                        
                    </div>
                </div>
          </div>


         <center style="margin-left: 50px;">   
          <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%234285F4&ctz=Asia%2FManila&title=Hot%20Desking&src=Y18yNmFsNXV2NnViOGptbGxkbTAybHJraXZlOEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4ucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23009688&color=%230B8043" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
          </center>
         
      </div>  
    </div>
  </section>
@endsection
