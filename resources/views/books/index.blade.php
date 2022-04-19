@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <span class="text">My Calendar</span>
    </div>
    <div class="body-content">
      <center>
            <button>
                <a href="/my-calendar/monthly">Per Month</a>
            </button>
            <button>
                <a href="/my-calendar/weekly">Per Week</a>
            </button>
            <button>
                <a href="/books">List of Books</a>
            </button>
      </center>

      <div class="row" style="margin-top: 5rem;">
          <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                  <h2>My Bookings</h2>
              </div>
              <div class="pull-right">
                    <button> 
                        <a class="btn btn-success" href="{{ route('books.create') }}" > <i class="fas fa-solid fas fa-plus"></i> Add Book</a>
                    </button>
              </div>
          </div>
      </div>
     
      @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
      @endif
     
      <table class="table table-bordered">
          <tr>
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
              <td>
                  <form action="{{ route('books.destroy',$value->id) }}" method="POST">   
                      <a class="btn btn-info" href="{{ route('books.show',$value->id) }}" >Show</a>    
                      <a class="btn btn-primary" href="{{ route('books.edit',$value->id) }}">Edit</a>   
                      @csrf
                      @method('DELETE')      
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </table>  
      {!! $data->links() !!}
    </div>
  </section>  
@endsection