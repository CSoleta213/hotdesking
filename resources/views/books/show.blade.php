@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">My Desk : <span style="text-transform:uppercase">{{ $book->desk_number }}</span></h1>
    </div>
    <div class="body-content">
      <a href="{{ route('books.index') }}"><div class="go-to">Back</div></a>
  
      <center>
        <div>
          <strong>Date:</strong>
          {{ $book->date }}
        </div><br>
  
        @foreach ($desks as $desk)
        @if ($book->desk_number === $desk->desk_number)
          <div><strong>Desk Map:</strong></div>
          <img src="/desks/{{ $desk->desk_map }}" width="100%">
        @endif
        @endforeach
      </center>
    </div>
  </section>
@endsection