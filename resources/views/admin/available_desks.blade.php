@extends('layouts.sidebar_admin')

@section('content')
  <div class="body-header">
    <h1 class="content-title">AVAILABLE DESKS</h1>
    <p class="title-desc">Give users the chance to select a comfortable desk for them.</p>
  </div>
  <div class="body-content">
    <table class="list-table">
      <tr>
        <th>No</th>
        <th>Desk Number</th>
        <th>Desk Map</th>
      </tr>
      <!-- <enterc><p style="color: red">Under Construction</p></center>
      {{ $todaysBookings }} -->
      @foreach ($desks as $desk)
      <tr>
        <td>{{ ++$i }}</td>
        <td style="text-transform:uppercase">{{ $desk->desk_number }}</td>
        <td><img src="/desks/{{ $desk->desk_map }}" width="100px"></td>
      </tr>
      @endforeach
    </table>
  </div>
@endsection