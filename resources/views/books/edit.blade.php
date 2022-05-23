@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">Edit Booking</h1>
    </div>
    <div class="body-content">
      <!-- The Modal -->
      <div id="#myModal1" class="#modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <a class="btn btn-primary" href="{{ route('books.index') }}"><span class="close">&times;</span></a>
            <h3>Your Current Booking</h3>
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
              <input type="text" name="name" value="{{ $book->name }}" class="form-control" placeholder="Name" hidden>
              <input type="text" name="office_name" value="{{ $book->office_name }}" class="form-control" placeholder="Office Name" hidden>

              <label for="desk_number">Desk Number:</label>
              <select name="desk_number" id="desk_number" style="text-transform:uppercase" required>
                <option value="{{ $book->desk_number }}">{{ $book->desk_number }}</option>
                @foreach($desks as $desk)
                  @if($book->desk_number !== $desk->desk_number )
                    <option value="{{ $desk->desk_number }}">{{ $desk->desk_number }}</option>
                  @endif
                @endforeach
              </select><br><br>

              <label for="date">Date:</label>
              <input type="date" name="date" value="{{ $book->date }}" class="form-control" placeholder="Date"><br><br>

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
