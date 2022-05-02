@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <span class="text">Desk View</span>
    </div>
    <div class="body-content">
      <div class="row">
        <div class="col-lg-12 margin-tb">
          <div class="modal-header">
            <h3>Show Booking</h3>
          </div>
          <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('books.index') }}">Back</a>
          </div>
        </div>
      </div>
  
      <div class="modal-body">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Name:</strong>
            {{ $book->name }}
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Office Name:</strong>
            {{ $book->office_name }}
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Desk Number:</strong>
            {{ $book->desk_number }}
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Date</strong>
            {{ $book->date }}
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection