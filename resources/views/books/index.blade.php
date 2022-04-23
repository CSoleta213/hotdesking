@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <span class="text">My Calendar</span>
    </div>
    <div class="body-content">
      <center>
                <a href="/my-calendar/monthly" class="month">Monthly</a>
                <a href="/my-calendar/weekly" class="week">Weekly</a>
                <a href="/books" class="list">List of Books</a>
      </center>

      <div class="row" style="margin-top: 5rem;">
          <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                  <h2 style="margin-bottom:-30px;"> My Bookings </h2>
              </div>
              <div class="pull-right" style="text-align: right; ">
                        <a class="btn btn-success add" href="{{ route('books.create') }}">
                        <i class="fas fa-light fa-plus"></i> Add Book</a>
                    
              </div>
          </div>
      </div>
     
      @if ($message = Session::get('success'))
          <div class="alert-success" >
              <p>{{ $message }}</p>
          </div>
      @endif
     
      <table class="list-table " style="margin-top: 20px;">
          <tr style="background-color: #C4C4C4BD;">
              <th>No</th>
              <th>Name</th>
              <th>Office Name</th>
              <th>Desk Number</th>
              <th>Date</th>
              <th width="280px">Action</th>
          </tr>
          @foreach ($data as $key => $value)
          <tr>
              <td>{{ ++$i }}</td>
              <td>{{ $value->name }}</td>
              <td>{{ $value->office_name }}</td>
              <td>{{ $value->desk_number }}</td>
              <td>{{ $value->date }}</td>
              <!-- <td>{{ \Str::limit($value->description, 100) }}</td> -->
              <td >
                  <form action="{{ route('books.destroy',$value->id) }}" method="POST" class="action">   
                         <a class="btn btn-info show" href="{{ route('books.show',$value->id) }}" > Show</a>    
                        <a class="btn btn-primary edit" href="{{ route('books.edit',$value->id) }}">Edit</a>   
                      @csrf
                      @method('DELETE')      
                      <button type="submit" class="btn btn-danger del">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </table>  
      {!! $data->links() !!}
    </div>
  </section>  
@endsection