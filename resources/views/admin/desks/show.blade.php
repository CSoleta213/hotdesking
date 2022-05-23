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
                    <h2> Show Desk</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('desks.index') }}"> Back</a>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Desk:</strong>
                    <span style="text-transform:uppercase">{{ $desk->desk_number }}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Desk Map:</strong>
                <img src="/desks/{{ $desk->desk_map }}" width="500px">
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection