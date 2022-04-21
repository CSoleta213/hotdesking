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
                  <h2>Add New Product</h2>
              </div>
              <div class="pull-right">
                  <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
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
      
      <form action="{{ route('books.store') }}" method="POST">
          @csrf
      
           <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Name:</strong>
                      <input type="text" name="name" class="form-control" placeholder="Enter Name">
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Office Name:</strong>
                      <input type="text" name="office_name" class="form-control" placeholder="Enter Office Name">
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Desk Number:</strong>
                      <input type="text" name="desk_number" class="form-control" placeholder="Enter Desk Number">
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Date:</strong>
                      <input type="date" name="date" class="form-control">
                  </div>
              </div>
              <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Description:</strong>
                      <textarea class="form-control" style="height:150px" name="description" placeholder="Enter Description"></textarea>
                  </div>
              </div> -->
              <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                      <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </div>
      
      </form>
    </div>
  </section>
@endsection