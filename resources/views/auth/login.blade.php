@extends('layouts.app')

@section('content')
<body class="hold-transition login-page">
<div class="login-box">

    <div class="login-logo">
      <img src="{{ asset('images/alamed-logo.png') }}" alt="alamed">
  </div>

        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
               <form method="POST" action="{{ route('login') }}">
                   {{ csrf_field() }}

                <div class="form-group has-feedback">
                   <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                 </div>
              <div class="form-group has-feedback">
                  <input type="password" class="form-control" placeholder="Password" name="password">
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="row">
                  <div class="col-xs-8">
                      <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" id="remeber" name="remeber" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                      </div>
                  </div>
        <!-- /.col -->
              <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
              </div>
        <!-- /.col -->
            </div>
          </form>

          <div class="social-auth-links text-center">
                <p>Thanks for choosing <b>Consonants</b></p>
          </div>
        </div>
    </div>


            <script type="text/javascript">
  $(document).ready(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
    @if($errors->has('email'))
      toastr.warning('Please Check your entered Credentials');
     @endif
  });
</script>
<style type="text/css">
  .login-page{
     background-image: url("public/images/alemad.jpg");
     -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height :500px;
  }
</style>
        </body>
        
@endsection
