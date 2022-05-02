<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Sora&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ url('/desktiny-d.png') }}">
    <script src="https://kit.fontawesome.com/80a2a00cbd.js" crossorigin="anonymous"></script>
    <title>Desktiny</title>

    <style>
      html, body {
        height: 100%;
        margin: 0;
        font-family: 'Poppins', sans-serif;
      }
      .register {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
        margin: 0;
      }

      .register .logo a img {
        width: 150px;
      }

      .form {
        width: 100%;
      }

      .form-fields {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-top: 25px;
      }
      .form-left, .form-right {
        width: 100%;
      }
      .form-left {
        margin-left: 20%;
        margin-right: 20px;
      }
      .form-right {
        margin-right: 20%;
        margin-left: 1%;
      }
      .form-fields input, select {
        width: 100%;
        padding: 12px 20px;
        margin: 0 0px;
        display: inline-block;
        border: 1px solid #C4C4C4;
        box-sizing: border-box;
        border-radius: 5px;
        font-family: 'Poppins';
      }
      .button button {
        background: #4484FF;
        border-radius: 5px;
        border: 0;
        width: 100px;
        height: 40px;
        font-weight: 500;
        color: #FFFFFF;
        font-family: 'Poppins', sans-serif;
      }
      .button button:hover{
      background-color: #80acff;
      color: #ffff;
    }
    </style>
  </head>
  <body>
    <div class="register">
      <div class="logo">
        <a href="/"><img src="{{ asset('/desktiny-logo.png') }}"></a>
      </div>

      <div class="form">
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="form-fields">
            <div class="form-left">

              <label for="firstname">{{ __('First Name') }}</label>

              <input id="firstname" type="text" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

              @error('firstname')
                <span role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror

              <br><br>

              <label for="lastname">{{ __('Last Name') }}</label>

              <input id="lastname" type="text" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

              @error('lastname')
                <span role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror

              <br><br>

              <label for="gender">{{ __('Gender') }}</label>

              <select name="gender" id="gender" required>
                <option value="">--- Select your gender ---</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>

              @error('gender')
                <span role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror

              <br><br>

              <label for="phone_number">{{ __('Phone Number') }}</label>

              <input id="phone_number" type="tel" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

              @error('phone_number')
                <span role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror

              <br><br>

              <label for="employee_id_number">{{ __('Employee ID Number') }}</label>

              <input id="employee_id_number" type="text" name="employee_id_number" value="{{ old('employee_id_number') }}" required autocomplete="employee_id_number" autofocus>

              @error('employee_id_number')
                <span role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror

            </div>            

            <div class="form-right">

              <label for="email">{{ __('Email Address') }}</label>

              <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">

              @error('email')
                <span role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror

              <br><br>
                        
              <label for="password">{{ __('Password') }}</label>

              <input id="password" type="password" name="password" required autocomplete="new-password">

              @error('password')
                <span role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
                        
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

              @error('office')
                <span role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror

              <br><br>
                        
              <label for="position">{{ __('Position') }}</label>

              <input id="position" type="position" name="position" value="{{ old('position') }}" required autocomplete="position">

              @error('position')
                <span role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
                        
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
      </div>
    </div>
  </body>
</html>
