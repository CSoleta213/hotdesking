@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">Features</h1>
      <p class="title-desc">The simplest and most configurable application for booking and managing your desks and meeting rooms.</p>
    </div>
    <div class="body-content">
      <div class="section-container reverse">
        <div class="columns content">
          <div class="content-container cal">
            <a href="/my-calendar"><h5>Calendar</h5></a>
            <p>
              Emachine&apos;s Desktiny calendar provides you with an overview of all bookings in the days, weeks or even months ahead. 
              It is where you can see other employees booking, as well as the date and duration of the booking. 
              You can also click over other bookings for more information.
            </p>        
          </div>
        </div>
        <div class="section-container">
          <a href="{{ url('/books') }}" style="cursor:zoom-in;">
          <!-- <div class="columns image" id="calendar"> -->
            <!-- <img src="{{ asset('/Calendar.PNG') }}" alt="Reservation Listing" width="100%" > -->
            <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%234285F4&ctz=Asia%2FManila&title=Hot%20Desking&src=Y18yNmFsNXV2NnViOGptbGxkbTAybHJraXZlOEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4ucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23009688&color=%230B8043" style="border:solid 1px #777" width="500" height="350" frameborder="0" scrolling="no"></iframe>
          <!-- </div> -->
          </a>
        </div> 
      </div>



      <div class="section-container">
        <a href="{{ url('/office-map') }}" style="cursor:zoom-in;">
          <img src="{{ asset('/office-view-with-code.png') }}" alt="Reservation Listing" width="100%">
        </a>
    
        <div class="columns content">
          <div class="content-container office-view">
            <a href="{{ url('/office-map') }}"><h5>Office View & Desk View</h5></a>
            <p>
              Our intuitive floor plan provides an unbeatable overview of the entire office and space availability – 
              all in one single screen, anytime and anywhere. Making it easier to find the right desk for you or a 
              free desk next to your team member. It will also gives you overview of the office amenities such as pantry 
              area, restroom, meeting rooms, as well as the entrance and fire exit. Making your trip to the office a familiar one.
            </p>
          </div>
        </div>
      </div>
    
      <div class="section-container reverse">
        <div class="columns content">
          <div class="content-container desk-view">
            <a href="{{ url('/books') }}"><h5>My Bookings</h5></a>
            <p>
              "My Bookings" is where you can view and manage your booked/reserved desk for the next few days,
              weeks and months. Here you can search and filter your booking data. You can also edit your existing bookings
              if you like.
            </p>
          </div>
        </div>
        <a href="{{ url('/books') }}" style="cursor:zoom-in;">
          <!-- <div class="columns image" id="desk-view"> -->
          <table class="list-table" style="font-size: 10px">
            <tr>
              <th>No</th>
              <th style="min-width: 100px">Name</th>
              <th>Office Name</th>
              <th>Desk Number</th>
              <th style="min-width: 80px">Date</th>
              <th style="min-width: 100px">Action</th>
            </tr>
            @forelse ($data as $key => $value)
              @if ($value->name === Auth::user()->firstname." ".Auth::user()->lastname)
              <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->office_name }}</td>
                  <td style="text-transform:uppercase">{{ $value->desk_number }}</td>
                  <td>{{ $value->date }}</td>
                  <td >
                    <form action="{{ route('books.destroy',$value->id) }}" method="POST" class="action" style="font-size: 10px">   
                      <a class="read" href="{{ route('books.show',$value->id) }}" style="font-size: 10px"> Show</a>
                      <!-- <a class="update" href="{{ route('books.edit',$value->id) }}" style="font-size: 10px">Edit</a>   
                      @csrf
                      @method('DELETE')      
                      <button type="submit" class="destroy" style="font-size: 10px">Delete</button> -->
                    </form>
                  </td>
              </tr>
              @endif
              @empty
              <center><h1 style="color: #551A8B">You haven't book yet!</h1></center>
            @endforelse
          </table>
          <!-- </div> -->
        </a>
      </div>
    
    </div>
  </section>
@endsection