@extends('layouts.sidebar_admin')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">ADMIN HOME PAGE</h1>
    </div>
    <div class="body-content">
      <div class="home">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Desk</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('desks.index') }}"> Back</a>
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
      
        <form action="{{ route('desks.update',$desk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
       
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Desk:</strong>
                        <input type="text" name="desk_number" value="{{ $desk->desk_number }}" class="form-control" placeholder="Desk">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="desk_map" class="form-control" placeholder="image">
                    <img src="/desks/{{ $desk->desk_map }}" width="300px">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
       
        </form>
      </div>
    </div>
  </section>
@endsection