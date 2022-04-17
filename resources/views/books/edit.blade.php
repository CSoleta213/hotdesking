@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <span class="text">Desk View</span>
    </div>
    <div class="body-content">
      <div class="row">
          <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                  <h2>Change</h2>
              </div>
              <div class="pull-right">
                  <a class="btn btn-primary" href="{{ route('books.index') }}">Back</a>
              </div>
          </div>
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
     
           <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Name:</strong>
                      <input type="text" name="name" value="{{ $book->name }}" class="form-control" placeholder="Name">
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Office Name:</strong>
                      <input type="text" name="office_name" value="{{ $book->office_name }}" class="form-control" placeholder="Office Name">
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Desk Number:</strong>
                      <input type="text" name="desk_number" value="{{ $book->desk_number }}" class="form-control" placeholder="Desk Number">
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Date:</strong>
                      <input type="text" name="date" value="{{ $book->date }}" class="form-control" placeholder="Date">
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </div>
     
      </form>
    </div>
  </section>
@endsection
