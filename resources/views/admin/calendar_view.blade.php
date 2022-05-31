@extends('layouts.sidebar_admin')

@section('content')
  <div class="body-header">
    <h1 class="content-title">Calendar</h1>
    <p class="title-desc">Look at all the bookings in the days, weeks, or even months ahead. </p>
  </div>
  <div class="body-content">
      <!-- <label for="">Select an Office:</label>
      <select name="office" id="office" required style="margin-top: 50px">
        <option value="">--- All Offices ---</option>
        <option value="Sydney">Sydney</option>
        <option value="Victoria">Victoria</option>
        <option value="Brisbane">Brisbane</option>
      </select><br><br> -->
      <div style="display: flex; justify-content: center;">
          <a href="/admin/bookings"><div class="go-to">List View</div></a>
          <a href="/admin/calendar-view"><div class="go-to active">Calendar View</div></a>
        </div><br><br>
    <center>
      <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%234285F4&ctz=Asia%2FManila&title=Hot%20Desking&src=Y18yNmFsNXV2NnViOGptbGxkbTAybHJraXZlOEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4ucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23009688&color=%230B8043" style="border:solid 1px #777" width="1000" height="600" frameborder="0" scrolling="no"></iframe>
    </center>
  </div>
@endsection