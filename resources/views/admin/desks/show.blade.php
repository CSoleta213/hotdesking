@extends('layouts.sidebar_admin')

@section('content')
  <div class="body-header">
    <h1 class="content-title">SHOW DESK : <span style="text-transform:uppercase">{{ $desk->desk_number }}</span></h1>
  </div>
  <div class="body-content">
    <a href="{{ route('desks.index') }}"> <div class="go-to">Back</div></a>
    <center>
      <div>
        <strong>Desk Map:</strong>
      </div>
      <div>
        <img src="/desks/{{ $desk->desk_map }}" width="100%">
      </div>
    </center>
  </div>
@endsection