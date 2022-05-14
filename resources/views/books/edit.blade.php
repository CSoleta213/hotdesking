@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">Desk View</h1>
    </div>
    <div class="body-content">
      <!-- The Modal -->
      <div id="#myModal1" class="#modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <a class="btn btn-primary" href="{{ route('books.index') }}"><span class="close">&times;</span></a>
            <h3>Change</h3>
          </div>
     
          @if ($errors->any())
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ route('books.update',$book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
              <label for="name">Name:</label>
              <input type="text" name="name" value="{{ $book->name }}" class="form-control" placeholder="Name"><br><br>
            
              <label for="office_name">Office Name:</label>
              <input type="text" name="office_name" value="{{ $book->office_name }}" class="form-control" placeholder="Office Name"><br><br>

              <label for="desk_number">Desk Number:</label>
              <input type="text" name="desk_number" value="{{ $book->desk_number }}" class="form-control" placeholder="Desk Number" style="text-transform:uppercase"><br><br>

              <label for="date">Date:</label>
              <input type="text" name="date" value="{{ $book->date }}" class="form-control" placeholder="Date"><br><br>

              <input type="text" name="codeNameDate" value="{{ $book->name }}{{ $book->date }}" hidden>
              <input type="text" name="codeNumDate" value="{{ $book->desk_number }}{{ $book->date }}" hidden>

              <input type="submit" value="Submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
