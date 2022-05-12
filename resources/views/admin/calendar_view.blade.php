@extends('layouts.sidebar_admin')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">Bookings</h1>
    </div>
    <div class="body-content">
      <center>
        <!-- <label for="">Select an Office:</label>
        <select name="office" id="office" required style="margin-top: 50px">
          <option value="">--- All Offices ---</option>
          <option value="Sydney">Sydney</option>
          <option value="Victoria">Victoria</option>
          <option value="Brisbane">Brisbane</option>
        </select><br><br> -->
        <a href="/admin/calendar-view" class="go-to">Calendar View</a>
        <a href="/admin/bookings" class="go-to">List View</a>
      </center><br>
      <center>
        <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%234285F4&ctz=Asia%2FManila&title=Hot%20Desking&src=Y18yNmFsNXV2NnViOGptbGxkbTAybHJraXZlOEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4ucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23009688&color=%230B8043" style="border:solid 1px #777" width="1000" height="600" frameborder="0" scrolling="no"></iframe>
      </center>

    </div>
  </section>
@endsection