@extends('layouts.sidebar')

@section('content')
  <section class="body-section">
    <div class="body-header">
      <h1 class="content-title">My Calendar</h1>
      <p class="title-desc">"My Calendar" provides you with an overview of all your bookings in the days, weeks, or even months ahead. </p>
    </div>
    <div class="body-content">
      <center>
        <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%234285F4&ctz=Asia%2FManila&title=Hot%20Desking&src=Y18yNmFsNXV2NnViOGptbGxkbTAybHJraXZlOEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4ucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23009688&color=%230B8043" style="border:solid 1px #777" width="1000" height="600" frameborder="0" scrolling="no"></iframe>
      </center>

    </div>
  </section>
@endsection