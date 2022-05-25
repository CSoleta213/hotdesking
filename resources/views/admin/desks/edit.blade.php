@extends('layouts.sidebar_admin')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">EDIT DESK</h1>
    </div>
    <div class="body-content">
      <a href="{{ route('desks.index') }}"><div class="go-to">Back</div></a><br>
       
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
          <strong>Desk:</strong>
          <input type="text" name="desk_number" value="{{ $desk->desk_number }}" class="form-control" style="text-transform:uppercase" placeholder="Desk"><br><br>
          <strong>Image:</strong>
          <input type="file" name="desk_map" class="form-control" placeholder="image">
          <img src="/desks/{{ $desk->desk_map }}" width="100%"><br><br>
          <input type="submit" value="Submit">
      </form>
    </div>
  </section>
@endsection