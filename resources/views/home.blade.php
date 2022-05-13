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

    <div class="content" style="margin-top: -10px; margin-left: 80px;">
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
                        <h1>{{ $number_of_books }}</h1>
                    </div>
                    <div class="box3">
                        <h3> Number of Bookings</h3>
                        
                    </div>
                </div>
          </div>

          <div class="content">
        <div class="dash-cal">
          <div class="calendar-wrapper" style="margin-top: 100px;">
            
            <div class="titles"> Calendar </div>
            <a class="side-title" href="/my-calendar/monthly"> View Details </a>
            <ul class="calendar" style="background: #fff;">
              
                <li class="day-name">Sun</li>
                <li class="day-name">Mon</li>
                <li class="day-name">Tue</li>
                <li class="day-name">Wed</li>
                <li class="day-name">Thu</li>
                <li class="day-name">Fri</li>
                <li class="day-name">Sat</li>
              
              <li>1</li>
              
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li>10</li>
                <li>11</li>
                <li>12</li>
                <li>13</li>
                <li>14</li>
                <li>15</li>
                <li>16</li>
                <li>17</li>
                <li>18</li>
                <li>19</li>
                <li>20</li>
                <li>21</li>
                <li>22</li>
                <li>23</li>
                <li>24</li>
                <li>25</li>
                <li>26</li>
                <li>27</li>
                <li>28</li>
                <li>29</li>
                <li>30</li>
                <li>31</li>
            </ul>
          </div>
        </div>
          <div class="dash-cal" >
            <div class="calendar-wrapper" style="margin-top: 100px;">
              <div class="titles"> Bookings</div>
              <a class="side-title" href="/my-calendar/weekly"> View More </a>
              
              <ul class="calendar" style="background: #fff;">
              
                <li class="day-name">Sun</li>
                <li class="day-name">Mon</li>
                <li class="day-name">Tue</li>
                <li class="day-name">Wed</li>
                <li class="day-name">Thu</li>
                <li class="day-name">Fri</li>
                <li class="day-name">Sat</li>
              
              <li>1</li>
              
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li>10</li>
                <li>11</li>
                <li>12</li>
                <li>13</li>
                <li>14</li>
                <li>15</li>
                <li>16</li>
                <li>17</li>
                <li>18</li>
                <li>19</li>
                <li>20</li>
                <li>21</li>
                <li>22</li>
                <li>23</li>
                <li>24</li>
                <li>25</li>
                <li>26</li>
                <li>27</li>
                <li>28</li>
                <li>29</li>
                <li>30</li>
                <li>31</li>
            </ul>
          </div>
        </div>  
      </div>  
    </div>
  </section>
@endsection
