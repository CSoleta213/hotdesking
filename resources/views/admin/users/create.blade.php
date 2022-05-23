@extends('admin.users.layout')
  
@section('content')

<center><p style="color: red">Under Construction</p></center>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Account</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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
   
<form action="{{ route('users.store') }}" method="POST">
    @csrf
  
    <div class="form-fields">
            <div class="form-left">

              <label for="firstname">{{ __('First Name') }}</label>

              <input id="firstname" type="text" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

              <br><br>

              <label for="lastname">{{ __('Last Name') }}</label>

              <input id="lastname" type="text" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

              <br><br>

              <label for="gender">{{ __('Gender') }}</label>

              <select name="gender" id="gender" required>
                <option value="">--- Select your gender ---</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>

              <br><br>

              <label for="phone_number">{{ __('Phone Number') }}</label>

              <input id="phone_number" type="tel" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

              <br><br>

              <label for="employee_id_number">{{ __('Employee ID Number') }}</label>

              <input id="employee_id_number" type="text" name="employee_id_number" value="{{ old('employee_id_number') }}" required autocomplete="employee_id_number" autofocus>

            </div>            

            <div class="form-right">

              <label for="email">{{ __('Email Address') }}</label>

              <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">

              <br><br>
                        
              <label for="password">{{ __('Password') }}</label>

              <input id="password" type="password" name="password" required autocomplete="new-password">
                        
              <br><br>
                       
              <label for="password-confirm">{{ __('Confirm Password') }}</label>

              <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">

              <br><br>

              <label for="office">{{ __('Office') }}</label>

              <!-- <input id="office" type="text" name="office" value="{{ old('office') }}" required autocomplete="office" autofocus> -->
              <select name="office" id="office" required>
                <option value="">--- Select your office ---</option>
                <option value="Sydney">Sydney</option>
                <option value="Victoria">Victoria</option>
                <option value="Brisbane">Brisbane</option>
              </select>

              <br><br>
                        
              <label for="position">{{ __('Position') }}</label>

              <input id="position" type="position" name="position" value="{{ old('position') }}" required autocomplete="position">
                        
            </div>
          </div>

          <br><br>

          <div class="button">
            <center>
              <button type="submit">
                {{ __('Register') }}
              </button>
            </center>
          </div>
   
</form>
@endsection