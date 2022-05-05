@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">My Bookings</h1>
      <p class="title-desc">"My Bookings" is where you can view and manage your booked/reserved desk for the next few days, weeks and months. Here you can search and filter your booking data. You can also edit your existing bookings if you like.</p>
    </div>
    <div class="body-content">
      <div>
        <div style="text-align: right; ">
          <a class="add" href="/office-map"><i class="fas fa-light fa-plus"></i> Add Book</a>    
        </div>
      </div>
     
      @if ($message = Session::get('success'))
        <div class="alert-success">
          <p>{{ $message }}</p>
        </div>
      @endif
     
      <table class="list-table">
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Office Name</th>
          <th>Desk Number</th>
          <th>Date</th>
          <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
          @if ($value->name === Auth::user()->firstname." ".Auth::user()->lastname)
          <tr>
              <td>{{ ++$i }}</td>
              <td>{{ $value->name }}</td>
              <td>{{ $value->office_name }}</td>
              <td>{{ $value->desk_number }}</td>
              <td>{{ $value->date }}</td>
              <!-- <td>{{ \Str::limit($value->description, 100) }}</td> -->
              <td >
                <form action="{{ route('books.destroy',$value->id) }}" method="POST" class="action">   
                  <a class="read" href="{{ route('books.show',$value->id) }}" > Show</a>
                  <a class="update" href="{{ route('books.edit',$value->id) }}">Edit</a>   
                  @csrf
                  @method('DELETE')      
                  <button type="submit" class="destroy">Delete</button>
                </form>
              </td>
          </tr>
          @endif
        @endforeach
      </table>
      <div style="display: flex; flex-direction: row; width: 100px">
        {!! $data->links() !!}
      </div>
    </div>
  </section>
@endsection