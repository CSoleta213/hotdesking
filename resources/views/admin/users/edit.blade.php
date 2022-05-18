@extends('admin.users.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <!-- <div class="pull-left"> -->
              <center>
                <h2>Are you sure?</h2>
                <p>Do you want to
                @if ($user->is_admin === 1)
                  remove
                @else
                  add
                @endif
                {{ $user->firstname }} {{ $user->lastname }} as admin?
                </p>
              </center>
            <!-- </div> -->
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
  
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>First Name:</strong>
                    <input type="text" name="firstname" value="{{ $user->firstname }}" class="form-control" placeholder="First Name">
                </div>
            </div> -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    @if ($user->is_admin === 1)
                    <input class="form-control" name="is_admin" placeholder="Is Admin?" value=0 hidden>
                    @else
                    <input class="form-control" name="is_admin" placeholder="Is Admin?" value=1 hidden>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Yes</button>
              <a class="btn btn-primary" href="{{ route('users.index') }}"> Cancel</a>
            </div>
        </div>
   
    </form>
@endsection